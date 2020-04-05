let checkL = document.querySelector('.form__check-label');
checkL.addEventListener('mousedown', ch);
checkL.addEventListener('keydown', ch);

function cg(e) {
	if (e.keydown == 'Space') {
		ch();
	}

}

function ch() {
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