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

// Function to hide participants section
function hideParticipantsSection() {
	const participantsSection = document.querySelector('#main #aanmeldingen');
	const participantsElements = document.querySelectorAll('#main aside[data-for="participants"]');
	
	if (participantsSection) {
		participantsSection.classList.remove('show');
	}
	participantsElements.forEach(el => el.style.display = 'none');
}

// Function to show participants section
function showParticipantsSection() {
	const participantsSection = document.querySelector('#main #aanmeldingen');
	const participantsElements = document.querySelectorAll('#main aside[data-for="participants"]');
	
	if (participantsSection) {
		participantsSection.classList.add('show');
	}
	participantsElements.forEach(el => el.style.display = 'flex');
}

// Function to hide sign-up section
function hideSignUpSection() {
	const signUpSection = document.querySelector('#main #sign-up');
	const signUpElements = document.querySelectorAll('#main aside[data-for="sign-up"]');
	
	if (signUpSection) {
		signUpSection.classList.remove('show');
	}
	signUpElements.forEach(el => el.style.display = 'none');
}

// Function to show sign-up section
function showSignUpSection() {
	const signUpSection = document.querySelector('#main #sign-up');
	const signUpElements = document.querySelectorAll('#main aside[data-for="sign-up"]');
	
	if (signUpSection) {
		signUpSection.classList.add('show');
	}
	signUpElements.forEach(el => el.style.display = 'flex');
}

// Function to show success notification
function showSuccessNotification() {
	const notification = document.createElement('div');
	notification.className = 'success-notification';
	notification.innerHTML = 'Bedankt voor je aanmelding! Je bent succesvol aangemeld.';
	document.body.appendChild(notification);
	
	// Auto-hide after 5 seconds
	setTimeout(() => {
		notification.remove();
	}, 5000);
	
	// Allow manual close
	notification.addEventListener('click', () => {
		notification.remove();
	});
}

// Hide sign-up section after successful submission and show success message
if (window.signupSuccess) {
	hideSignUpSection();
	showSuccessNotification();
}

// Show participants section if admin and should show participants
if (window.isAdmin && window.showParticipants) {
	showParticipantsSection();
}

// Handle form submission to hide section after successful signup
document.addEventListener('DOMContentLoaded', function() {
	// If we're on a participants page and user is admin, show the section
	if (window.isAdmin && window.showParticipants) {
		showParticipantsSection();
		// Scroll to participants section after a brief delay
		setTimeout(() => {
			const participantsSection = document.querySelector('#main #aanmeldingen');
			if (participantsSection) {
				participantsSection.scrollIntoView({ behavior: 'smooth' });
			}
		}, 500);
	}

	const signUpForm = document.querySelector('#meeting-form');
	if (signUpForm) {
		signUpForm.addEventListener('submit', function() {
			// Add a small delay to allow form processing, then hide section
			setTimeout(() => {
				hideSignUpSection();
			}, 1000);
		});
	}
	
	// Handle menu link to participants
	const menuParticipantLink = document.querySelector('a[href="#aanmeldingen"]');
	if (menuParticipantLink) {
		menuParticipantLink.addEventListener('click', function(e) {
			const participantsSection = document.querySelector('#main #aanmeldingen');
			if (!window.isAdmin || (participantsSection && !participantsSection.classList.contains('show'))) {
				// If not admin or participants section is hidden, don't scroll to it
				e.preventDefault();
			}
		});
	}
	
	// Add escape key listener to hide sign-up and participants sections
	document.addEventListener('keydown', function(e) {
		if (e.key === 'Escape') {
			const signUpSection = document.querySelector('#main #sign-up');
			const participantsSection = document.querySelector('#main #aanmeldingen');
			
			if (signUpSection && signUpSection.classList.contains('show')) {
				hideSignUpSection();
			}
			
			if (participantsSection && participantsSection.classList.contains('show')) {
				hideParticipantsSection();
			}
		}
	});
});

// Handle AANMELDEN buttons
const aanmeldenButtons = document.querySelectorAll('.btn-aanmelden');
aanmeldenButtons.forEach(btn => {
	btn.addEventListener('click', function(e) {
		e.preventDefault();
		const eventId = this.getAttribute('data-event-id');
		
		// Store the event ID in the sign-up form
		if (eventId) {
			const eventIdInput = document.querySelector('#event-id-input');
			if (eventIdInput) {
				eventIdInput.value = eventId;
			}
			
			// Update the signup title dynamically
			const signupTitle = document.querySelector('#signup-title');
			if (signupTitle && window.eventsData) {
				const event = window.eventsData.find(e => e.id == eventId);
				if (event) {
					// Format the date nicely
					const eventDate = new Date(event.date).toLocaleDateString('nl-NL');
					signupTitle.textContent = `${event.title} - ${eventDate}`;
				}
			}
		}
		
		// Show the sign-up section and its dividers
		showSignUpSection();
		
		// Scroll to sign-up section
		setTimeout(() => {
			document.querySelector('#main #sign-up').scrollIntoView({ behavior: 'smooth' });
		}, 100);
	});
});
