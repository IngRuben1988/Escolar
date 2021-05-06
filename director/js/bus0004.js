
///////////1

function validarFormAlumno(formulario) {
$(document).ready(function(){
	var consulta;
	$("#busqueda").focus();
	$("#busqueda").keyup(function(e){
		consulta=$("#busqueda").val();
		$.ajax({
			   type:"POST",
			   url:"buscar.php", 
			   data:"b="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultado").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultado").empty();
				   $("#resultado").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

////////////////2
function validarFormDocente(formulario) {
$(document).ready(function(){
	var consulta;
	$("#busquedadocente").focus();
	$("#busquedadocente").keyup(function(e){
		consulta=$("#busquedadocente").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-docente.php", 
			   data:"bd="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultadodocente").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultadodocente").empty();
				   $("#resultadodocente").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

///////////////3
function validarFormAdministrativo(formulario) {
$(document).ready(function(){
	var consulta;
	$("#busquedaad").focus();
	$("#busquedaad").keyup(function(e){
		consulta=$("#busquedaad").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-administrativo.php", 
			   data:"ba="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultadoad").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultadoad").empty();
				   $("#resultadoad").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

//////////////////4
function validarFormAlumnoDOS(formulario) {
$(document).ready(function(){
	var consulta;
	$("#busquedaalum").focus();
	$("#busquedaalum").keyup(function(e){
		consulta=$("#busquedaalum").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-alumno.php", 
			   data:"ba="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultadoalum").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultadoalum").empty();
				   $("#resultadoalum").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

///////////////////5
function validarFormAlumnoTRES(formulario) {
$(document).ready(function(){
	var consulta;
	$("#busquedaalumno").focus();
	$("#busquedaalumno").keyup(function(e){
		consulta=$("#busquedaalumno").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-semestre-alumno.php", 
			   data:"b="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultadoalumno").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultadoalumno").empty();
				   $("#resultadoalumno").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}


/////////////////////6
function validarFormDocenteDOS(formulario) {
$(document).ready(function(){
	var consulta;
	$("#busquedadoc").focus();
	$("#busquedadoc").keyup(function(e){
		consulta=$("#busquedadoc").val();
		$.ajax({
			   type:"POST",
			   url:"c-horarios-docentes.php", 
			   data:"b="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultadodoc").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },

			   success:function(data){
				   $("#resultadodoc").empty();
				   $("#resultadodoc").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}


/////////////////////////7
function BuscarAlumnos(formulario) {
$(document).ready(function(){
	var consulta;
	var consulta2;
	var consulta3;
	var consulta4;

	$("#busqueda").click(function(e){
		consulta=$("#matricula").val();
		consulta2=$("#nombre").val();
		consulta3=$("#paterno").val();
		consulta4=$("#materno").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-alumno-editar.php", 
			   data:"b="+consulta+"&b2="+consulta2+"&b3="+consulta3+"&b4="+consulta4,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultado").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultado").empty();
				   $("#resultado").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

/////////////////////////////////////////////////////////////////////////

//////////////////////////8
function BuscarAdministrativo(formulario) {
$(document).ready(function(){
	var consulta;
	var consulta2;
	var consulta3;
	var consulta4;

	$("#busqueda").click(function(e){
		consulta=$("#matricula").val();
		consulta2=$("#nombre").val();
		consulta3=$("#paterno").val();
		consulta4=$("#materno").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-administrativo-editar.php", 
			   data:"b="+consulta+"&b2="+consulta2+"&b3="+consulta3+"&b4="+consulta4,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultado").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultado").empty();
				   $("#resultado").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}


//////////////////////////////9
function BuscarDocente(formulario) {
$(document).ready(function(){
	var consulta;
	var consulta2;
	var consulta3;
	var consulta4;

	$("#busqueda").click(function(e){
		consulta=$("#matricula").val();
		consulta2=$("#nombre").val();
		consulta3=$("#paterno").val();
		consulta4=$("#materno").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-docente-editar.php", 
			   data:"b="+consulta+"&b2="+consulta2+"&b3="+consulta3+"&b4="+consulta4,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultado").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultado").empty();
				   $("#resultado").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

/////////////////////////////10
function BuscarCiclos(formulario) {
$(document).ready(function(){
	var ciclo;
	var grado;


	$("#plan").change(function(e){
		ciclo=$("#plan").val();
		grado=$("#plan").val();

		$.ajax({
			   type:"POST",
			   url:"combos.php", 
			   data:"plan="+ciclo+"&grados="+grado,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ResultadoCiclos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ResultadoCiclos").empty();
				   $("#ResultadoCiclos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
///////////////////////////////11

function BuscarGrupos(formulario) {
$(document).ready(function(){
	var consulta;


	$("#gruposciclos").change(function(e){
		consulta=$("#gruposciclos").val();

		$.ajax({
			   type:"POST",
			   url:"combos.php", 
			   data:"grupos="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ResultadoGrupos2").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ResultadoGrupos2").empty();
				   $("#ResultadoGrupos2").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

////////////////////////////////12
function BuscarGruposVacios(formulario) {
$(document).ready(function(){
	var consulta;

	$("#cdperiodo").click(function(e){
		consulta=$("#cdperiodo").val();

		$.ajax({
			   type:"POST",
			   url:"combos.php", 
			   data:"periodo="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ResultadoGrupos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ResultadoGrupos").empty();
				   $("#ResultadoGrupos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

////////////////////////////////13
function GruposVacios(formulario) {
$(document).ready(function(){
	var consulta;

	$("#grupos").click(function(e){
		consulta=$("#grupos").val();

		$.ajax({
			   type:"POST",
			   url:"alumno-grupo-editar.php", 
			   data:"grupos="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#misgrupos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#misgrupos").empty();
				   $("#misgrupos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

//////////////////////////////////14

function BuscarMisAlumnos(formulario) {
$(document).ready(function(){
	var consulta;

	$("#matriculas").keyup(function(e){
		consulta=$("#matriculas").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-alumno.php", 
			   data:"ba="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#misalumnos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#misalumnos").empty();
				   $("#misalumnos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

//////////////////////////////////15

function BuscarSemestres(formulario) {
$(document).ready(function(){
	var consulta;

	$("#planes").click(function(e){
		consulta=$("#planes").val();

		$.ajax({
			   type:"POST",
			   url:"combos.php", 
			   data:"planes="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ResultadoSemestres").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ResultadoSemestres").empty();
				   $("#ResultadoSemestres").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

///////////////////////////////////16
function BuscarGruposlista(formulario) {
$(document).ready(function(){
	var consulta;

	$("#cdperiodo").click(function(e){
		consulta=$("#cdperiodo").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-grupo-lista.php", 
			   data:"periodo="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ResultGrupos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ResultGrupos").empty();
				   $("#ResultGrupos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

////////////////////////////////////17
function GruposLista(formulario) {
$(document).ready(function(){
	var consulta;

	$("#grupos").click(function(e){
		consulta=$("#grupos").val();

		$.ajax({
			   type:"POST",
			   url:"alumno-grupo-lista.php", 
			   data:"grupos="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ListaGrupos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ListaGrupos").empty();
				   $("#ListaGrupos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}


/////////////////////////////////////18
function BuscarGruposCalificaciones(formulario) {
$(document).ready(function(){
	var consulta;

	$("#cdperiodo").click(function(e){
		consulta=$("#cdperiodo").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-grupo-calificacion.php", 
			   data:"periodo="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ResultGrupos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ResultGrupos").empty();
				   $("#ResultGrupos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
/////////////////////////////////////19
function GruposListaCalificaciones(formulario) {
$(document).ready(function(){
	var consulta;

	$("#grupos").click(function(e){
		consulta=$("#grupos").val();

		$.ajax({
			   type:"POST",
			   url:"alumno-grupo-calificacion.php", 
			   data:"grupos="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ListaGrupos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ListaGrupos").empty();
				   $("#ListaGrupos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
/////////////////////////////////////20
function GruposListaCalificaciones(formulario) {
$(document).ready(function(){
	var consulta;

	$("#grupos").click(function(e){
		consulta=$("#grupos").val();

		$.ajax({
			   type:"POST",
			   url:"alumno-grupo-calificacion.php", 
			   data:"grupos="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ListaGrupos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ListaGrupos").empty();
				   $("#ListaGrupos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
//////////////////////////////////////20
function unidades(formulario) {
$(document).ready(function(){
	var consulta;
	var grupo;
	var curp;

	$("#materias").click(function(e){
		consulta=$("#materias").val();
		grupo=$("#califdato").val();
		curp=$("#califcurp").val();

		$.ajax({
			   type:"POST",
			   url:"calificacion-alumno2.php", 
			   data:"unidad="+consulta+"&grupo="+grupo+"&curp="+curp,
			   dataType:"html",
			   beforeSend: function(){
		          $("#misunidades").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#misunidades").empty();
				   $("#misunidades").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
//////////////////////////////////////22
function GruposListaHorarios(formulario) {
$(document).ready(function(){
	var consulta;

	$("#grupos").click(function(e){
		consulta=$("#grupos").val();

		$.ajax({
			   type:"POST",
			   url:"grupos-horarios.php", 
			   data:"grupos="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ListaGrupos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ListaGrupos").empty();
				   $("#ListaGrupos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}


//////////////////////////////////////23
function BuscarPlanHorarios(formulario) {
$(document).ready(function(){
	var consulta;

	$("#horplan").click(function(e){
		consulta=$("#horplan").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-materias-semestres.php", 
			   data:"plan="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ResultSemestre").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ResultSemestre").empty();
				   $("#ResultSemestre").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

////////////////////////////////////////24
function BuscarMateriasSemestre(formulario) {
$(document).ready(function(){
	var consulta;

	$("#horsemestre").click(function(e){
		consulta=$("#horsemestre").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-materias-semestres.php", 
			   data:"semestre="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#ResultMaterias").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#ResultMaterias").empty();
				   $("#ResultMaterias").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

//////////////////////////////////////////25
function BuscarAlumnosServicios(formulario) {
$(document).ready(function(){
	var consulta;
	var consulta2;
	var consulta3;
	var consulta4;

	$("#busqueda").click(function(e){
		consulta=$("#matricula").val();
		consulta2=$("#nombre").val();
		consulta3=$("#paterno").val();
		consulta4=$("#materno").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-alumno-editar.php", 
			   data:"ba="+consulta+"&ba2="+consulta2+"&ba3="+consulta3+"&ba4="+consulta4,
			   dataType:"html",
			   beforeSend: function(){
		          $("#resultado").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#resultado").empty();
				   $("#resultado").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
//////////////////////////////////////////26
function BuscarServicios(formulario) {
$(document).ready(function(){
	var consulta;
	var consulta2;

	$("#servicio").click(function(e){
		consulta=$("#servicio").val();
		consulta2=$("#sermatricula").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-servicio.php", 
			   data:"servicio="+consulta+"&matricula="+consulta2,
			   dataType:"html",
			   beforeSend: function(){
		          $("#Formatos").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#Formatos").empty();
				   $("#Formatos").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

//////////////////////////////////////27
function HorarioSalones(formulario) {
$(document).ready(function(){
	var consulta;

	$("#horciclos").click(function(e){
		consulta=$("#horciclos").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-grupo-horario.php", 
			   data:"periodo="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#hor").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#hor").empty();
				   $("#hor").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}

//////////////////////////////////////28
function SalonesCHorario(formulario) {
$(document).ready(function(){
	var consulta;

	$("#hor").click(function(e){
		consulta=$("#hor").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-grupo-horario.php", 
			   data:"ciclos="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#horariosalon").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#horariosalon").empty();
				   $("#horariosalon").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
//////////////////////////////////////29
function Horario(formulario) {
$(document).ready(function(){
	var consulta;

	$("#grupos").click(function(e){
		consulta=$("#grupos").val();

		$.ajax({
			   type:"POST",
			   url:"buscar-grupo-horario.php", 
			   data:"horarios="+consulta,
			   dataType:"html",
			   beforeSend: function(){
		          $("#horario").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#horario").empty();
				   $("#horario").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
//////////////////////////////30
function BuscarDocenteHorarios(formulario) {
$(document).ready(function(){
	var consulta;
	var consulta2;

	$("#busqueda").click(function(e){
		consulta=$("#plans").val();
		consulta2=$("#docs").val();
		$.ajax({
			   type:"POST",
			   url:"buscar-docente-editar.php", 
			   data:"plans="+consulta+"&docs="+consulta2,
			   dataType:"html",
			   beforeSend: function(){
		          $("#horarios").html("<p align='center'><img src='../img/carga.gif' /></p>");
	
	           },
			   success:function(data){
				   $("#horarios").empty();
				   $("#horarios").append(data);
				   
				   }
             });
                                                                                  
                                                                           
        });
                                                                   
});
}
