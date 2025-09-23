const imgs = document.querySelector('.var-grid').querySelectorAll('img');

function Random(min = 0, max = 9, decimals = false) {
	// van JMac
	try {
		if (typeof min === 'number' && typeof max === 'number') {
			let interMin = decimals ? min * 5 : min;
			let interMax = decimals ? max * 5 : max;

			return decimals
				? (Math.random() * (interMax - interMin)) / 5 + interMin
				: Math.round(Math.random() * (interMax - interMin) + interMin);
		} else if (typeof min !== 'number') {
			throw TypeError('JMath.Random() => min is NaN');
		} else if (typeof max !== 'number') {
			throw TypeError('JMath.Random() => max is NaN');
		} else {
			throw Error('JMath.Random() => Invalid return value');
		}
	} catch (err) {
		console.error(err);
	}
}

imgs.forEach((img) => {
	img.style.flex = Random(1, 4);
});
