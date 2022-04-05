const formulario = document.getElementById('Formulario');
const inputs = document.querySelectorAll('#Formulario input');

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    cedula: /^\d{10,13}$/, // 10 a 13 numeros.
    direccion: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
    nombre: false,
    apellido: false,
    correo: false,
    cedula: false,
    direccion:false,
	telefono:false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombreId":
			validarCampo(expresiones.nombre, e.target, 'nombreId');
		break;
		case "apellidoId":
			validarCampo(expresiones.apellido, e.target, 'apellidoId');
		break;
		case "inputEmail4":
			validarCampo(expresiones.correo, e.target, 'inputEmail4');
        break;
        case "rucId2":
			validarCampo(expresiones.cedula, e.target, 'rucId2');
        break;
        case "inputAddress":
			validarCampo(expresiones.direccion, e.target, 'inputAddress');
        break;
        case "telCId":
			validarCampo(expresiones.telefono, e.target, 'telCId');
		break;
		case "telfId":
			validarCampo(expresiones.telefono, e.target, 'telfId');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	if(campos.nombre && campos.apellido && campos.correo && campos.cedula && campos.direccion && campos.telefono){
		formulario.reset();
	}
});