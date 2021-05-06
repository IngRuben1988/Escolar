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
    alert('Seleccione un Dia de la Semana en la Cual Inpartira la Materia!');
    return false;
  }
  return true;
}