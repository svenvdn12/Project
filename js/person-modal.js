'use strict';

const buttons = document.querySelectorAll('.mogelijk-gemaakt-door button');

function Collapse(button, parentModal) {
	for (let j = 0; j < 3; j++) {
		parentModal.parentElement.children[j].style.display = 'flex';
	}
	parentModal.querySelector('img').style.width = '100%';
	parentModal.querySelector('.hidden').style.display = 'none';
	parentModal.style.fontSize = '1em';
	button.style.order = '2';
	button.innerText = 'LEES MEER';

	button.addEventListener('click', () => {
		Expand(button, parentModal);
	});
}

function Expand(button, parentModal) {
	for (let j = 0; j < 3; j++) {
		parentModal.parentElement.children[j].style.display = 'none';
	}

	parentModal.style.display = 'flex';
	parentModal.querySelector('img').style.width = '45%';
	parentModal.style.flexDirection = 'column';
	parentModal.querySelector('.hidden').style.display = 'block';
	parentModal.parentElement.style.margin = '0 auto';
	parentModal.parentElement.style.width = 'auto';
	parentModal.style.fontSize = '1.1em';

	button.style.order = '4';
	button.innerText = 'LEES MINDER';

	button.addEventListener('click', () => {
		Collapse(button, parentModal);
	});

	button.removeEventListener('click', () => {
		Expand(button, parentModal);
	});
}

for (let button of buttons) {
	button.addEventListener('click', () => {
		Expand(button, button.parentElement);
	});
}
