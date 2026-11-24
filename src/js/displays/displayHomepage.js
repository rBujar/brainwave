import {createImageUrlBuilder} from '@sanity/image-url'
import { sanityClient } from '../sanity'
import {getHomepage} from '../queries/homepageQuery'

const builder = createImageUrlBuilder(sanityClient)
const urlFor = (source) => builder.image(source)

// ---------- helpers ----------
const setText = (el, text) => {
  if (el && text) el.textContent = text
}
const setImage = (img, source) => {
  if (img && source) img.src = urlFor(source).url()
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

// ---------- sections ----------
function renderHero(data) {
  if (!data) return
  setText(document.querySelector('.hero__title h2'), data.title)
  setText(document.querySelector('.hero__title p'), data.description)
  setText(document.querySelector('.hero__button button'), data.buttonText)
  setText(document.querySelector('.hero__link a'), data.linkText)
  setHref(document.querySelector('.hero__link a'), data.linkUrl)
  setImage(document.querySelector('.hero__img img'), data.image)
}

function renderPreview(data) {
  if (!data) return
  setText(document.querySelector('.preview__title h4'), data.title)
  setText(document.querySelector('.preview__title p'), data.description)
  setText(document.querySelector('.preview__title button'), data.buttonText)
  setHref(document.querySelector('.preview__title a'), data.buttonLink)
  setImage(document.querySelector('.preview__img img'), data.image)

  const stats = document.querySelector('.preview__stats')
  fillList(stats, '.preview__item', data.stats, (el, stat) => {
    setText(el.querySelector('h4'), stat.value)
    setText(el.querySelector('p'), stat.description)
  })
  // the last stat in your original HTML has no bottom margin on its <p>
  const last = stats?.lastElementChild?.querySelector('p')
  if (last) last.classList.remove('mb-7')
}

function renderServices(data) {
  if (!data) return
  setText(document.querySelector('.services__title h3'), data.title)
  setText(document.querySelector('.services__title p'), data.description)

  fillList(
    document.querySelector('.services__cards'),
    '.services__item',
    data.items,
    (el, item) => {
      setText(el.querySelector('h5'), item.title)
      setImage(el.querySelector('img'), item.image)
      setText(el.querySelector('p'), item.description)
      setText(el.querySelector('.services__link a'), item.linkText)
      setHref(el.querySelector('.services__link a'), item.linkUrl)
    }
  )
}

function renderReasons(data) {
  if (!data) return
  setImage(document.querySelector('.reasons .grid > img'), data.image)
  setText(document.querySelector('.reasons__title h3'), data.title)
  setText(document.querySelector('.reasons__title p'), data.description)

  fillList(
    document.querySelector('.reasons__features'),
    '.reasons__item',
    data.features,
    (el, feature) => setText(el.querySelector('p'), feature)
  )
}

function renderPreviewVideo(data) {
  if (!data) return
  setText(document.querySelector('.previewVideo__title h3'), data.title)
  setText(document.querySelector('.previewVideo__title p'), data.description)

  const video = document.querySelector('.previewVideo__video-bg')
  const source = video?.querySelector('source')
  if (source && data.videoUrl) {
    source.src = data.videoUrl
    video.load() // needed after changing the source
  }
}

function renderReviews(data) {
  if (!data) return
  setText(document.querySelector('.reviews__title h3'), data.title)
  setText(document.querySelector('.reviews__title p'), data.description)

  fillList(
    document.querySelector('.reviews__cards'),
    '.reviews__item',
    data.items,
    (el, review) => {
      setImage(el.querySelector('img'), review.image)
      setText(el.querySelector(':scope > p'), review.text)
      setText(el.querySelector('.reviews__name p'), review.name)
      setText(el.querySelector('.reviews__name span'), review.role)
    }
  )
}

// ---------- init ----------
async function init() {
  try {
    const data = await getHomepage()
    if (!data) return
    renderHero(data.hero)
    renderPreview(data.preview)
    renderServices(data.services)
    renderReasons(data.reasons)
    renderPreviewVideo(data.previewVideo)
    renderReviews(data.reviews)
  } catch (error) {
    console.error('Failed to load homepage from Sanity:', error)
  }
}

init()