import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'


const slideIndx = document.querySelector('.slider__num-indx')

const swiper = new Swiper('.swiper', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
})

swiper.on('slideChange', (data) => {
    slideIndx.textContent = data.activeIndex + 1
})