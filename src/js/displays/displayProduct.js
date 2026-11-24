import { createImageUrlBuilder } from '@sanity/image-url'
import { sanityClient } from '../sanity'
import { getProductPage } from '../queries/productQuery'

const builder = createImageUrlBuilder(sanityClient)
const urlFor = (source) => builder.image(source)

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

// builds the star icons from a number like 4.5
function renderStars(container, rating) {
  if (!container || !rating) return
  container.innerHTML = ''
  const rounded = Math.round(rating * 2) / 2
  const full = Math.floor(rounded)

  for (let i = 0; i < full; i++) {
    const star = document.createElement('i')
    star.className = 'icon-full_star'
    container.appendChild(star)
  }
  if (rounded % 1 !== 0) {
    const half = document.createElement('i')
    half.className = 'icon-half_star'
    container.appendChild(half)
  }
}

function renderRelated(data) {
  if (!data) return
  setText(document.querySelector('.related__title h3'), data.title)

  // the template is the <a> that wraps each product
  fillList(document.querySelector('.related__cards'), 'a', data.items, (el, product) => {
    setHref(el, product.link)

    const img = el.querySelector('img')
    if (img && product.image) {
      img.src = urlFor(product.image).url()
      img.alt = product.name || ''
    }

    setText(el.querySelector('.related__price p:first-child'), product.price)

    const oldPrice = el.querySelector('.related__price p:nth-child(2)')
    if (product.oldPrice) setText(oldPrice, product.oldPrice)
    else oldPrice?.remove()

    setText(el.querySelector('.related__info > p'), product.name)
    renderStars(el.querySelector('.related__stars'), product.rating)
  })
}

async function init() {
  try {
    const data = await getProductPage()
    if (!data) return
    renderRelated(data.related)
  } catch (error) {
    console.error('Failed to load product page from Sanity:', error)
  }
}

init()