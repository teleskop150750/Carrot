let checkL = document.querySelector('.form__check-label');
checkL.addEventListener('mousedown', mouse);
checkL.addEventListener('keydown', key);

function key(e) {
	if (e.keyCode == 32) {
		ch();
	}
}

function mouse(e) {
	let chB = document.querySelector('.form__check');
	let text = document.querySelector('.form__textarea');
	if (!chB.checked) {
		console.log(3);
		text.disabled = true;
		text.value = '';
	} else {
		console.log(34);
		text.disabled = false;
	}
}