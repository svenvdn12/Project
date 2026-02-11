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

// Handle AANMELDEN buttons
const aanmeldenButtons = document.querySelectorAll('.btn-aanmelden');
aanmeldenButtons.forEach(btn => {
	btn.addEventListener('click', function(e) {
		e.preventDefault();
		const eventId = this.getAttribute('data-event-id');
		const signUpSection = document.querySelector('#main #sign-up');
		const signUpElements = document.querySelectorAll('#main aside[data-for="sign-up"]');
		
		// Store the event ID in the sign-up form
		if (eventId) {
			const eventIdInput = document.querySelector('#event-id-input');
			if (eventIdInput) {
				eventIdInput.value = eventId;
			}
		}
		
		// Show the sign-up section and its dividers
		signUpSection.classList.add('show');
		signUpElements.forEach(el => el.style.display = 'flex');
		
		// Scroll to sign-up section
		setTimeout(() => {
			signUpSection.scrollIntoView({ behavior: 'smooth' });
		}, 100);
	});
});
