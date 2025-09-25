'use strict';
document.querySelector('#start-point').scrollIntoView();

const button = document.querySelector('#hamburger-toggle');
let isOpen = false;

button.addEventListener('click', function () {
	if (isOpen) {
		document.querySelector('#start-point').scrollIntoView({ behavior: 'smooth' });
		isOpen = false;
	} else {
		document.querySelector('.menu').scrollIntoView({ behavior: 'smooth' });
		isOpen = true;
	}
});
