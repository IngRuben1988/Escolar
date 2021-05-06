
function ValidarGrupo(formulario) {
	
    if(formulario.plang.value.length==13) {
    formulario.plang.focus();
    alert('Selecciones un Plan de Estudios!');
    return false;
  }

    if(formulario.gruposciclosg.value.length==13) {
    formulario.gruposciclosg.focus();
    alert('Seleccione un Ciclo Escolar!'); 
    return false;
  }
  
    if(formulario.grupossemestreg.value.length==13) {
    formulario.grupossemestreg.focus();
    alert('Seleccione un Semestre!'); 
    return false; 
  }
   if(formulario.gruposg.value.length==13) { 
    formulario.gruposg.focus(); 
    alert('Seleccione el Grupo!');
    return false;
  }
   if(formulario.cantidadg.value.length=="") { 
    formulario.cantidadg.focus(); 
    alert('Coloque la cantidad de Alumnos para el Salon!');
    return false;
  }
  return true;
}


