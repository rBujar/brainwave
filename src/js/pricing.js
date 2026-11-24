const cards = document.querySelector('.questions__cards')

cards?.addEventListener('click', (e) => {
  const item = e.target.closest('.questions__item')
  if (!item) return

  item.classList.toggle('active')
  item.querySelector('.rightArrow')?.classList.toggle('active')
  item.querySelector('.questions__answer')?.classList.toggle('active')
})