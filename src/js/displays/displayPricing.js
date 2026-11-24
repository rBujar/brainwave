import { getPricingPage } from '../queries/pricingQuery'

const setText = (el, text) => {
  if (el && text) el.textContent = text
}
const setHref = (el, href) => {
  if (el && href) el.setAttribute('href', href)
}

// copies the first item in the HTML once for every Sanity item
function fillList(container, itemSelector, items, fill) {
  if (!container || !items?.length) return
  const template = container.querySelector(itemSelector)
  if (!template) return
  const clone = template.cloneNode(true)
  container.innerHTML = ''
  items.forEach((item) => {
    const el = clone.cloneNode(true)
    fill(el, item)
    container.appendChild(el)
  })
}

function renderPricing(data) {
  if (!data) return
  setText(document.querySelector('.pricing__title h1'), data.title)
  setText(document.querySelector('.pricing__title p'), data.description)

  const cards = document.querySelectorAll('.pricing__item')
  data.plans?.forEach((plan, i) => {
    const card = cards[i]
    if (!card) return

    setText(card.querySelector('.pricing__value > p'), plan.name)

    // cards with a price: "$19 <span>/ mo</span>"
    const price = card.querySelector('.pricing__value h1')
    if (price && plan.price) {
      price.prepend(`${plan.price} `)
      setText(price.querySelector('span'), plan.period)
    }

    // Enterprise card: description instead of a price
    setText(card.querySelector('.pricing__value > span'), plan.description)

    fillList(card.querySelector('.pricing__features'), 'li', plan.features, (li, feature) => {
      setText(li.querySelector('p'), feature)
    })

    setText(card.querySelector('.pricing__button'), plan.buttonText)
  })
}

function renderQuestions(data) {
  if (!data) return
  setText(document.querySelector('.questions__title h2'), data.title)
  setText(document.querySelector('.questions__title p'), data.description)

  fillList(
    document.querySelector('.questions__cards'),
    '.questions__item',
    data.items,
    (el, item) => {
      setText(el.querySelector('.questions__ask p'), item.question)
      setText(el.querySelector('.questions__answer'), item.answer)
    }
  )

  const linkP = document.querySelector('.questions__link p')
  if (linkP && data.linkQuestion) linkP.prepend(`${data.linkQuestion} `)
  setText(document.querySelector('.questions__link a'), data.linkText)
  setHref(document.querySelector('.questions__link a'), data.linkUrl)
}

async function init() {
  try {
    const data = await getPricingPage()
    if (!data) return
    renderPricing(data.pricing)
    renderQuestions(data.questions)
  } catch (error) {
    console.error('Failed to load pricing page from Sanity:', error)
  }
}

init()