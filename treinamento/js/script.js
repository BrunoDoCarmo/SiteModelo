let navbar = document.querySelector('.header .navbar');
document.querySelector('#nav-open').onclick = () => {
	navbar.classList.add('active');
}
document.querySelector('#nav-close').onclick = () => {
	navbar.classList.remove('active');
}