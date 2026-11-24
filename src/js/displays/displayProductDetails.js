import { createImageUrlBuilder } from '@sanity/image-url'
import { sanityClient } from '../sanity'
import { getProduct } from '../queries/productDetailsQuery'
import { initProductSwiper } from '../product'

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

function renderGallery(product) {
  const images = product.images
  if (!images?.length) return

  // big slider
  fillList(document.querySelector('.product__swiper2 .swiper-wrapper'), '.swiper-slide', images, (el, image) => {
    const img = el.querySelector('img')
    img.src = urlFor(image).url()
    img.alt = product.name || ''
  })

  // thumbnails, made from the same images
  fillList(document.querySelector('.product__swiper .swiper-wrapper'), '.swiper-slide', images, (el, image) => {
    const img = el.querySelector('img')
    img.src = urlFor(image).width(140).url()
    img.alt = product.name || ''
  })
}

function renderInfo(product) {
  renderStars(document.querySelector('.product__stars'), product.rating)

  setText(document.querySelector('.product__name h3'), product.name)
  setText(document.querySelector('.product__name a'), product.brandName)
  setHref(document.querySelector('.product__name a'), product.brandLink)
  if (product.byLabel) document.querySelector('.product__name p')?.prepend(`${product.byLabel} `)

  // list price: "List Price: $120"
  if (product.listPrice) {
    setText(document.querySelector('.product__price p'), `${product.listPriceLabel || ''} ${product.listPrice}`.trim())
  }
  // price: "Price: <span>$85</span>"
  setText(document.querySelector('.product__price h4 span'), product.price)
  if (product.priceLabel) document.querySelector('.product__price h4')?.prepend(`${product.priceLabel} `)

  fillList(document.querySelector('.product__list'), 'li', product.features, (li, feature) => {
    setText(li.querySelector('p'), feature)
  })
}

// labels, buttons and tab names
function renderLabels(product) {
  setText(document.querySelector('.product__quantity p'), product.quantityLabel)

  setText(document.querySelector('.product__buy button'), product.buyButtonText)
  setHref(document.querySelector('.product__buy a'), product.buyButtonLink)
  setText(document.querySelector('.product__buy > p'), product.addToCartText)

  const tabNames = [product.descriptionTab, product.specificationTab, product.reviewsTab]
  document.querySelectorAll('.product__detailBtn h5').forEach((h5, i) => setText(h5, tabNames[i]))
}

function renderTabs(product) {
  // 3 tab contents in the HTML: description, specification, reviews
  const keys = ['description', 'specification', 'reviews']
  document.querySelectorAll('.product__item').forEach((item, i) => {
    fillList(item, 'p', product[keys[i]], (p, text) => {
      p.textContent = text
    })
  })
}

function renderRelated(related) {
  fillList(document.querySelector('.related__cards'), 'a', related, (el, item) => {
    setHref(el, `./product.php?slug=${item.slug}`)

    const img = el.querySelector('img')
    if (img && item.image) {
      img.src = urlFor(item.image).width(500).url()
      img.alt = item.name || ''
    }

    setText(el.querySelector('.related__price p:first-child'), item.price)
    const oldPrice = el.querySelector('.related__price p:nth-child(2)')
    if (item.listPrice) setText(oldPrice, item.listPrice)
    else oldPrice?.remove()

    setText(el.querySelector('.related__info > p'), item.name)
    renderStars(el.querySelector('.related__stars'), item.rating)
  })
}

async function init() {
  try {
    const slug = new URLSearchParams(window.location.search).get('slug')
    const data = slug ? await getProduct(slug) : null

    if (!data?.product) {
      setText(document.querySelector('.product__name h3'), 'Product not found')
      return
    }

    renderGallery(data.product)
    initProductSwiper() // slides exist now, so start the sliders
    renderInfo(data.product)
    renderLabels(data.product)
    renderTabs(data.product)
  } catch (error) {
    console.error('Failed to load product from Sanity:', error)
  }
}

init()