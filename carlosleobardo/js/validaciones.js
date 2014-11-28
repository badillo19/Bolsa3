function enviar_datos() {
	document.getElementById('formulario_registro').submit();
}

function enviar_datos_login() {
	document.getElementById('form_login').submit();
}

function validar_registro_datos_usuario() {

	var c_hombre = document.getElementById('radio1');
	var c_mujer = document.getElementById('radio2');
	var c_nombre = document.getElementById('tx_nombre');
	var c_apellido_paterno = document.getElementById('tx_ape_pat');
	var c_apellido_materno = document.getElementById('tx_ape_mat');
	var c_cel = document.getElementById('tx_cel');
	var c_tel_casa = document.getElementById('tx_tel_casa');
	var c_estado = document.getElementById('tx_estado');
	var c_municipio = document.getElementById('tex_municipio');
	var c_especialidad = document.getElementById('especialidad');

	//mensajes
	var msj_genero = document.getElementById('msj_1');
	var msj_nombre = document.getElementById('msj_2');
	var msj_apellido = document.getElementById('msj_3');
	var msj_apellido2 = document.getElementById('msj_9');
	var msj_cel = document.getElementById('msj_4');
	var msj_casa = document.getElementById('msj_5');
	var msj_estado = document.getElementById('msj_6');
	var msj_municipio = document.getElementById('msj_7');
	var msj_especialidad = document.getElementById('msj_8');

	if(c_hombre.checked != true || c_mujer.checked != true) {
		msj_genero.className = 'bloque';
	}

	if(c_nombre.value == '') {

		c_nombre.style.background = '#9DCAFA';
		msj_nombre.className = 'bloque';
	}
	if(c_apellido_paterno.value == '') {

		c_apellido_paterno.style.background = '#9DCAFA';
		msj_apellido.className = 'bloque';
	}
	if(c_apellido_materno.value == '') {
		c_apellido_materno.style.background = '#9DCAFA';
		msj_apellido2.className = 'bloque';
	}
	if(c_cel.value == '') {

		c_cel.style.background = '#9DCAFA';
		msj_cel.className = 'bloque';
	}
	if(c_tel_casa.value == '') {

		c_tel_casa.style.background = '#9DCAFA';	
		msj_casa.className = 'bloque';
	}
	if(c_estado.value == '') {

		c_estado.style.background = '#9DCAFA';
		msj_estado.className = 'bloque';

	}
	if(c_municipio.value == '') {

		c_municipio.style.background = '#9DCAFA';
		msj_municipio.className = 'bloque';
	}
	if(c_especialidad.selectedIndex == 0 || c_especialidad.selectedIndex == null) {
		// c_especialidad.style.borderColor = "#9DCAFA";
		msj_especialidad.className == 'bloque';
	}

	if(c_hombre.checked == true || c_mujer.checked == true 
	 && c_nombre.value != ''
	 && c_apellido_paterno.value != '' 
	 && c_apellido_materno.value != ''
	 && c_cel.value != '' 
	 && c_tel_casa.value != ''
	 && c_estado.value != '' && c_municipio != '') {
		enviar_datos();
	}
}

function remover_validacion() {
	var correo = document.getElementById('tx_correo');
	var password = document.getElementById('tx_passwors');
	var repit_password = document.getElementById('tx_repit_password');

	var msj_enu_null = document.getElementById('msj_cn');
	var msj_c_null = document.getElementById('msj_pn');
	var msj_rc_null = document.getElementById('msj_cp');

	if(correo.value != '') {
		correo.style.background = '#FFFFFF';
		msj_enu_null.className = 'oculto';
	}
	if(password.value != '') {
		password.style.background = '#FFFFFF';
		msj_c_null.className = 'oculto';
	}
	if(repit_password.value != '') {
		repit_password.style.background = '#FFFFFF';
		msj_rc_null.className = 'oculto';
	}
}

function validar_form_registro() {

	var correo = document.getElementById('tx_correo');
	var pass = document.getElementById('tx_passwors');
	var repit_pass = document.getElementById('tx_repit_password');

	//mensajes
	var msj_enu_null = document.getElementById('msj_cn');
	var msj_c_null = document.getElementById('msj_pn');
	var msj_rc_null = document.getElementById('msj_cp');
	var msj_ecorreo_no_valido = document.getElementById('msj_cenv');

	if(correo.value == '') {
		correo.style.background = '#9DCAFA';
		msj_enu_null.className = 'bloque';
	}
	if(pass.value == '') {
		pass.style.background = '#9DCAFA';
		msj_c_null.className = 'bloque';
	}
	if(repit_pass.value == '') {
		repit_pass.style.background = '#9DCAFA';
		msj_rc_null.className = 'bloque';
	}

	if(correo.value != '' && pass.value != '' && repit_pass.value != '') {
		enviar_datos();
	}
}

function remover_validacion_login() {
	var correo = document.getElementById('correo_log');
	var clave = document.getElementById('clave_log');

	var msj_correo = document.getElementById('msj_cnl');
	var msj_clave = document.getElementById('msj_pnlog');

	if(correo.value != '') {
		correo.style.background = '#FFFFFF';
		msj_correo.className = 'oculto';
	}
	if(clave.value != '') {
		clave.style.background = '#FFFFFF';
		msj_clave.className = 'oculto';
	}
}

function validacion_login() {
	var correo = document.getElementById('correo_log');
	var clave = document.getElementById('clave_log');

	var msj_correo = document.getElementById('msj_cnl');
	var msj_clave = document.getElementById('msj_pnlog');

	if(correo.value == '') {
		correo.style.background = '#9DCAFA';
		msj_correo.className = 'bloque';
	}
	if(clave.value == '') {
		clave.style.background = '#9DCAFA';
		msj_clave.className = 'bloque';
	}

	if(correo.value != '' && clave.value != '') {
		enviar_datos_login();
	}
}

