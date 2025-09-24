'use strict';
document.querySelector('.welkom').scrollIntoView(false);

const button = document.querySelector('#hamburger-toggle');
let isOpen = false;
let currentScroll = 0;

button.addEventListener('click', function () {
	if (isOpen) {
		document.querySelector('.welkom').scrollIntoView({ behavior: 'smooth' });
		isOpen = false;
	} else {
		currentScroll = window.scrollY;
		document.querySelector('.menu').scrollIntoView({ behavior: 'smooth' });
		isOpen = true;
	}
});
