'use strict';
document.querySelector('#start-point').scrollIntoView();

document.querySelector('#main').style.scrollBehavior = 'smooth';

const button = document.querySelector('#hamburger-toggle');
let isOpen = false;

button.addEventListener('click', function () {
	if (isOpen) {
		document.querySelector('#start-point').scrollIntoView({ behavior: 'smooth' });
		document.querySelector('#hamburger-toggle').removeAttribute('checked');
		isOpen = false;
	} else {
		document.querySelector('.menu').scrollIntoView({ behavior: 'smooth' });
		isOpen = true;
	}
});
