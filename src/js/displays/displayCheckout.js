import { getCheckoutPage } from '../queries/checkoutQuery'

const setText = (el, text) => {
  if (el && text) el.textContent = text
}
const setHref = (el, href) => {
  if (el && href) el.setAttribute('href', href)
}

// sets the label text and the placeholder of one form field
function fillField(data, key, id) {
  const field = data?.[key]
  if (!field) return
  setText(document.querySelector(`label[for="${id}"]`), field.label)
  const input = document.getElementById(id)
  if (input && 'placeholder' in input && field.placeholder) {
    input.placeholder = field.placeholder
  }
}

function renderHeading(data) {
  if (!data) return
  setText(document.querySelector('.checkout__title h1'), data.title)
}

function renderBilling(data) {
  if (!data) return
  setText(document.querySelector('.checkout__billing h5'), data.title)

  fillField(data, 'name', 'fname')
  fillField(data, 'email', 'email')
  fillField(data, 'country', 'country')
  fillField(data, 'city', 'city')
  fillField(data, 'zip', 'zip')

  // country <select>: first option is the placeholder, the rest come from Sanity
  const select = document.getElementById('country')
  const country = data.country
  if (select && country) {
    if (country.placeholder && select.options[0]) {
      select.options[0].textContent = country.placeholder
    }
    if (country.options?.length) {
      while (select.options.length > 1) select.remove(1)
      country.options.forEach((c) => select.add(new Option(c.name, c.code)))
    }
  }
}

function renderPayment(data) {
  if (!data) return
  setText(document.querySelector('.checkout__payment h5'), data.title)
  setText(document.querySelector('label[for="card"]'), data.creditCardLabel)
  setText(document.querySelector('label[for="paypal"]'), data.paypalLabel)

  fillField(data, 'cardNumber', 'cardNum')
  fillField(data, 'expDate', 'expDate')
  fillField(data, 'securityCode', 'pin')
}

function renderProceed(data) {
  if (!data) return
  const p = document.querySelector('.checkout__link')
  if (p && data.termsText) p.prepend(`${data.termsText} `)
  setText(document.querySelector('.checkout__link a'), data.termsLinkText)
  setHref(document.querySelector('.checkout__link a'), data.termsLinkUrl)
  setText(document.querySelector('.checkout__button'), data.buttonText)
}

function renderOrderDetails(data) {
  if (!data) return
  setText(document.querySelector('.checkout__detailsTitle h5'), data.title)
  setText(
    document.querySelector('.checkout__detailsTitle .checkout__detailsInfo p:first-child'),
    data.totalItemsLabel
  )

  // direct children only: [0] = delivery fee row, [1] = total price row
  const rows = document.querySelectorAll('.checkout__details > .checkout__detailsInfo')
  setText(rows[0]?.querySelector('p:first-child'), data.deliveryLabel)
  setText(rows[1]?.querySelector('p:first-child'), data.totalPriceLabel)

  setText(document.querySelector('.checkout__details > button'), data.buttonText)
}

async function init() {
  try {
    const data = await getCheckoutPage()
    if (!data) return
    renderHeading(data.heading)
    renderBilling(data.billing)
    renderPayment(data.payment)
    renderProceed(data.proceed)
    renderOrderDetails(data.orderDetails)
  } catch (error) {
    console.error('Failed to load checkout page from Sanity:', error)
  }
}

init()