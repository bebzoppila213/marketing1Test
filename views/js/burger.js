const btnOpen = document.querySelector('.header-burger')
const headerNav = document.querySelector('.header__nav')
const btnClose = document.querySelector('.header__nav-close')

btnOpen.addEventListener('click', () => {
    btnClose.classList.add('header__nav-close--acrive')
    headerNav.classList.add('header__nav--active')
})

btnClose.addEventListener('click', () => {
    headerNav.classList.remove('header__nav--active')
    btnClose.classList.remove('header__nav-close--acrive')
})