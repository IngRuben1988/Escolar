function validarHorarios(formulario) {
	
    if(formulario.horhorario.value.length==13) {
    formulario.horhorario.focus();
    alert('Seleccione una Hora Valida!');
    return false;
  }

    if(formulario.horciclo.value.length==13) {
    formulario.horciclo.focus();
    alert('Seleccione un Ciclo Escolar!'); 
    return false;
  }
  
    if(formulario.hormaterias.value.length==13) {
    formulario.hormaterias.focus();
    alert('Seleccione una Materia Valida!'); 
    return false; 
  }
   if(formulario.hormaestros.value.length==13) { 
    formulario.hormaestros.focus(); 
    alert('Seleccione un Maestro para Impartir la Materia!');
    return false;
  }
   if(formulario.hordias.value.length==13) { 
    formulario.hordias.focus(); 
    alert('Seleccione un Dia de la Semana en la Cual Impartira la Materia!');
    return false;
  }
  return true;
}

function HorariosSalones(formulario){
	
	if(formulario.horciclo.value.length==13) {
		formulario.horciclo.focus();
		alert('Seleccione un Ciclo Escolar Valido!');
		return false;
		}
	
	if(formulario.hordocente.value.length==13) {
		formulario.hordocente.focus();
		alert('Seleccione un Docente para la Clase!');
		return false;
		}
		
	if(formulario.grupos.value.length==12) {
		formulario.grupos.focus();
		alert('Seleccione un Grupo para la Clase!');
		return false;
		}
		
	if(formulario.horhora1.value.length==13) {
		formulario.horhora.focus();
		alert('Seleccione una Hora Especifica para la Clase!');
		return false;
		}
	if(formulario.horhora2.value.length==13) {
		formulario.horhora.focus();
		alert('Seleccione una Hora Especifica para la Clase!');
		return false;
		}
   
  return true;
}