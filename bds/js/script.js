let navbar = document.querySelector('.header .navbar')

document.querySelector('#nav-open').onclick = () => {
  navbar.classList.add('active')
}
document.querySelector('#nav-close').onclick = () => {
  navbar.classList.remove('active')
}
window.onscroll = () => {
  navbar.classList.remove('active')
  if (window.scrollY > 0) {
    document.querySelector('.header').classList.add('active')
  } else {
    document.querySelector('.header').classList.remove('active')
  }
}
window.onload = () => {
  navbar.classList.remove('active')
  if (window.scrollY > 0) {
    document.querySelector('.header').classList.add('active')
  } else {
    document.querySelector('.header').classList.remove('active')
  }
}
var swiper = new Swiper('.clients-slider', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  autoplay: {
    delay: 2000
  },
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 1,
    slideShadows: true
  },
  loop: true
})

var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  autoplay: {
    delay: 2000
  },
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 1,
    slideShadows: true
  },
  loop: true
})
let test1 = document.querySelector('.contact .form .work')
document.querySelector('#test-open1').onclick = () => {
  test1.classList.add('active')
}
document.querySelector('#test-close1').onclick = () => {
	test1.classList.remove('active')
}
let test2 = document.querySelector('#test2')
test2.addEventListener("click", function () {
	let contact = document.querySelector('.contact .form .work')
	contact.classList.toggle('active')
})
let services1 = document.querySelector('#btn1')
services1.addEventListener("click", function () {
	let servicestext1 = document.querySelector('.services .text-services1')
	servicestext1.classList.toggle('active')
})
// let services2 = document.querySelector('#btn2')
// services2.addEventListener("click", function () {
// 	let servicestext2 = document.querySelector('.services .text-services1')
// 	servicestext2.classList.toggle('active')
// })
// let services3 = document.querySelector('#btn3')
// services3.addEventListener("click", function () {
// 	let servicestext3 = document.querySelector('.services .text-services1')
// 	servicestext3.classList.toggle('active')
// })
// let services4 = document.querySelector('#btn4')
// services4.addEventListener("click", function () {
// 	let servicestext4 = document.querySelector('.services .text-services1')
// 	servicestext4.classList.toggle('active')
// })
// let services5 = document.querySelector('#btn5')
// services5.addEventListener("click", function () {
// 	let servicestext5 = document.querySelector('.services .text-services1')
// 	servicestext5.classList.toggle('active')
// })