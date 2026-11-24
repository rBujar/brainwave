import { getContactPage } from '../queries/contactQuery'

const setText = (el, text) => {
  if (el && text) el.textContent = text
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

function renderHeading(data) {
  if (!data) return
  setText(document.querySelector('.contact__title h1'), data.title)
  setText(document.querySelector('.contact__title p'), data.description)
}

function renderInfo(data) {
  if (!data) return

  fillList(document.querySelector('.contact__content'), '.contact__card', data.items, (el, card) => {
    const icon = el.querySelector(':scope > i')
    if (icon && card.icon) icon.className = card.icon

    const info = el.querySelector('.contact__info')
    setText(info.querySelector('p'), card.title)

    // the card has one <a> in the HTML, copy it for every link
    const links = info.querySelectorAll('a')
    if (!links.length || !card.links?.length) return
    const linkTemplate = links[0].cloneNode(true)
    links.forEach((a) => a.remove())

    card.links.forEach((link) => {
      const a = linkTemplate.cloneNode(true)
      a.textContent = link.text || ''
      if (link.url) a.setAttribute('href', link.url)
      info.appendChild(a)
    })
  })
}

function renderForm(data) {
  if (!data) return

  // schema field name -> input id in the HTML
  const fields = {
    name: 'fname',
    email: 'email',
    phone: 'phone',
    subject: 'subject',
    message: 'message',
  }

  Object.entries(fields).forEach(([key, id]) => {
    const field = data[key]
    if (!field) return
    setText(document.querySelector(`label[for="${id}"]`), field.label)
    const input = document.getElementById(id)
    if (input && field.placeholder) input.placeholder = field.placeholder
  })

  setText(document.getElementById('submit'), data.buttonText)
}

async function init() {
  try {
    const data = await getContactPage()
    if (!data) return
    renderHeading(data.heading)
    renderInfo(data.info)
    renderForm(data.form)
  } catch (error) {
    console.error('Failed to load contact page from Sanity:', error)
  }
}

init()