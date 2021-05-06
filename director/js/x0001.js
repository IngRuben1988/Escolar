function validarFormAlumno(formulario) {
	
  if(formulario.nombre.value.length==0) {
    formulario.nombre.focus();   
    alert('No has Escrito un Nombre del Alumno!'); 
    return false;
  }
  if(formulario.paterno.value.length==0) { 
    formulario.paterno.focus();
    alert('No has Escrito el Apellido Paterno!'); 
    return false;
  }
  	if(formulario.materno.value.length==0) { 
    formulario.materno.focus(); 
    alert('No has Escrito el Apellido Materno!'); 
    return false;
  }
  
	
  if(formulario.curp.value.length<=17) { 
    formulario.curp.focus(); 
    alert('No has escrito la CURP es Importante!'); 
    return false;
  }
    if(formulario.matricula.value.length==0) {
    formulario.matricula.focus();    
    alert('No has escrito la Matricula es Importante!');
    return false; 
  }
  
  
    if(formulario.usuario.value.length==13) {
    formulario.usuario.focus();
    alert('Selecciona un Usuario!'); 
    return false; 
  }
    
	if(formulario.turno.value.length==13) { 
    formulario.turno.focus(); 
    alert('Selecciona un Turno!');
    return false;
  }
  
   if(formulario.sexo.value.length==13) { 
    formulario.sexo.focus(); 
    alert('Selccione el Sexo del Alumno!');
    return false;
  }
  
  	
  
    if(formulario.rfc.value.length<12) {
    formulario.rfc.focus(); 
    alert('No has Escrito el RFC!');
    return false; 
  }
  
    if(formulario.ife.value.length<12) {
    formulario.ife.focus();
    alert('No has Escrito el numero IFE!');
    return false; 
  }
    if(formulario.imss.value.length<10) {
    formulario.imss.focus();   
    alert('No has Escrito el numero IMSS!');
    return false; 
  }
  
    if(formulario.correo.value.length==0) { 
    formulario.correo.focus();   
    alert('No has Escrito el Correo Electronico!'); 
    return false; 
  }
  
    if(formulario.telefono.value.length<6) { 
    formulario.telefono.focus(); 
    alert('No has Escrito el Numero Telefonico Valido!'); 
    return false; 
  }

    if(formulario.colonia.value.length==0) { 
    formulario.colonia.focus();    
    alert('No has escrito La Colonia!'); 
    return false; 
  }
    if(formulario.calle.value.length==0) {
    formulario.calle.focus();  
    alert('No has escrito el Nombre Calle!'); 
    return false; 
  }
    if(formulario.numero.value.length<0) {
    formulario.numero.focus();  
    alert('No has escrito el Numero del Interior!'); 
    return false;
  }
    if(formulario.cp.value.length<4) { 
    formulario.cp.focus(); 
    alert('No has escrito el Codigo Postal!'); 
    return false; 
  }
    if(formulario.municipio.value.length==0) {
    formulario.municipio.focus(); 
    alert('No has escrito el Nombre del Municipio!');
    return false;
  }
    if(formulario.ciudad.value.length==0) { 
    formulario.ciudad.focus(); 
    alert('No has escrito el Nombre de la Ciudad!');
    return false; 
  }
    if(formulario.estado.value.length==13) { 
    formulario.estado.focus(); 
    alert('Seleccione un Estado!'); 
    return false;
  }
      if(formulario.generacion.value.length<8) {
    formulario.generacion.focus(); 
    alert('No has escrito la Generación!'); 
    return false;
  }
    if(formulario.estatus.value.length==13) {
    formulario.estatus.focus();
    alert('No has colocado el estatus!');
    return false;
  }
  
  
  return true;
}

  function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(correo) )
        alert("Error: La dirección de correo " + email + " es incorrecta.");
}
