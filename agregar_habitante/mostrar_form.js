const check_casa_desconocida = document.querySelector('#casa_desconocida');

console.log(check_casa_desconocida);

function toggle_form (e) {
	let mostar_form = document.querySelector('.casa_desconocida');
	mostar_form.classList.toggle("hidden");
}

check_casa_desconocida.addEventListener('click', toggle_form);


const quit_btn = document.querySelector('#quit_btn');

quit_btn.addEventListener('click', toggle_form );