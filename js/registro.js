$('#tipo_cuenta').on('change',function(){
	if (this.value == 'usuario_normal') {
		$('#campos_usuario').css('display','block');
			/*$('#nombres').prop('required','true');
			$('#apellidos').prop('required','true');
			$('#telefono').prop('required','true');
			$('#correo').´prop('required','true');*/

		$('#campos_empresa').css('display','none');
			/*$('#organizacion').prop('required','false');
			$('#ruc').prop('required','false');
			$('#telf_org').prop('required','false');*/


		$('#campos_proveedor').css('display','none');
			/*$('#proveedor').prop('required','false');
			$('#direccion').prop('required','false');
			$('#ruc_prov').prop('required','false');
			$('#telf_prov').prop('required','false');
			$('#correo_prov').prop('required','false');*/
	}
	if (this.value == 'empresa') {
		$('#campos_usuario').css('display','none');
			/*$('#nombres').prop('required','false');
			$('#apellidos').prop('required','false');
			$('#telefono').prop('required','false');
			$('#correo').prop('required','false');*/

		$('#campos_empresa').css('display','block');
			/*$('#organizacion').prop('required','true');
			$('#ruc').prop('required','true');
			$('#telf_org').prop('required','true');*/

		$('#campos_proveedor').css('display','none');
			/*$('#proveedor').prop('required','invalid');
			$('#direccion').prop('required','invalid');
			$('#ruc_prov').prop('required','invalid');
			$('#telf_prov').prop('required','invalid');
			$('#correo_prov').prop('required','invalid');*/
	}
	if (this.value == 'proveedor') {
		$('#campos_usuario').css('display','none');
			/*$('#nombres').prop('required','invalid');
			$('#apellidos').prop('required','invalid');
			$('#telefono').prop('required','invalid');
			$('#correo').prop('required','invalid');*/

		$('#campos_empresa').css('display','none');
			/*$('#organizacion').prop('required','invalid');
			$('#ruc').prop('required','invalid');
			$('#telf_org').prop('required','invalid');*/

		$('#campos_proveedor').css('display','block');
			/*$('#proveedor').prop('required','valid');
			$('#direccion').prop('required','valid');
			$('#ruc_prov').prop('required','valid');
			$('#telf_prov').prop('required','valid');
			$('#correo_prov').prop('required','valid');		*/
	};
})