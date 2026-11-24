import { getCareerPage } from '../queries/careerQuery'

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
  items.forEach((item, i) => {
    const el = clone.cloneNode(true)
    fill(el, item, i)
    container.appendChild(el)
  })
}

function renderHero(data) {
  if (!data) return
  setText(document.querySelector('.careerHero__title h1'), data.title)
  setText(document.querySelector('.careerHero__title p'), data.description)
}

function renderPreviewVideo(data) {
  const video = document.querySelector('.previewVideo__video-bg')
  const source = video?.querySelector('source')
  if (source && data?.videoUrl) {
    source.src = data.videoUrl
    video.load() // needed after changing the source
  }
}

function renderBenefits(data) {
  if (!data) return
  setText(document.querySelector('.benefits__title h2'), data.title)
  setText(document.querySelector('.benefits__title p'), data.description)

  // 2 rows in the HTML, 3 cards each
  document.querySelectorAll('.benefits__cards').forEach((container, i) => {
    const chunk = data.items?.slice(i * 3, i * 3 + 3)
    if (!chunk?.length) {
      container.remove()
      return
    }
    fillList(container, '.benefits__item', chunk, (el, item) => {
      const icon = el.querySelector('i')
      if (icon && item.icon) icon.className = item.icon
      if (icon && item.color) icon.style.color = item.color
      setText(el.querySelector('h5'), item.title)
      setText(el.querySelector('p'), item.description)
    })
  })
}

function renderOpenJobs(data) {
  if (!data) return
  setText(document.querySelector('.openJobs__title h2'), data.title)

  fillList(
    document.querySelector('.openJobs__cards'),
    '.openJobs__item',
    data.items,
    (el, job, i) => {
      setText(el.querySelector('.openJobs__info h5'), job.title)
      setText(el.querySelector('.openJobs__info p'), job.info)
      setHref(el.querySelector('a'), job.link)
      el.setAttribute('data-aos-delay', 150 + i * 50) // keeps the staggered animation
    }
  )
}

async function init() {
  try {
    const data = await getCareerPage()
    if (!data) return
    renderHero(data.hero)
    renderPreviewVideo(data.previewVideo)
    renderBenefits(data.benefits)
    renderOpenJobs(data.openJobs)
  } catch (error) {
    console.error('Failed to load career page from Sanity:', error)
  }
}

init()