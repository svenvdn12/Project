'use strict';
document.querySelector('.welkom').scrollIntoView(false);

const button = document.querySelector('#hamburger-toggle');
let isOpen = false;

button.addEventListener('click', function () {
	if (isOpen) {
		document.querySelector('.welkom').scrollIntoView({ behavior: 'smooth' });
		isOpen = false;
	} else {
		document.querySelector('.menu').scrollIntoView({ behavior: 'smooth' });
		isOpen = true;
	}
});
