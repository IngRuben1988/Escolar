<?php
require('fpdf/fpdf.php');

$aPaterno = 'AGUIRRE';
$aMaterno = 'SERRANO';
$nombreAlumno = 'ESTEFANIA ZASHENKA';
$matricula = '1412000000';

$planEstudios = '1999';
$generacion = '2010-2014';
$anioEgreso = '2014';
$promedioGeneral = '9.0';
$EER_SI = 'SI ( )';
$EER_NO = 'NO (X)';

$documentoRecepcional = '"LA EXPERIMENTACIÓN COMO UNA ESTRATEGICA PARA DESARROLLAR COMPETENCIAS PARA EL APRENDIZAJE PERMANENTE EN NIÑOS DE PRIMER GRADO DE EDUCACIÓN PREESCOLAR"';

$presidente =  'CARLOS RAMÍREZ SILVÁN';
$secretario = 'ANA MARIA DEHESA CADENA';
$vocal = 'JOSÉ MANUEL GUZMÁN RETOLAZA';
$suplente = 'JOSÉ ALBERTO DOMINGUEZ SILVAN';

$fechaSolicitud = '21/07/2014';
$fechaExamen = '30/07/2014';
$horaExamen = '12:00';

$subDirectora = 'NELLY DEL CARMEN RUIZ PÉREZ';
$director = 'MTRA. LAURA YANELY ESPINOZA SÁNCHEZ';
$responsableControlEscolar = 'JOSÉ RAMÓN PÉREZ ÁLVAREZ';


$docActaNacimiento = 'X';
$docDictamen = 'X';
$docCertificado = 'X';
$docTrabajoRecepcional = 'X';
$docCertificadoENormal = 'X';
$docRegistrosFirmas = 'X';
$docConstanciaSS = 'X';
$docReeciboPago = 'X';
$dictamen = 'SI SE AUTORIZA';
$noAutorizacion = 'J14270262';

class PDF extends FPDF
{	
    // Cabecera de página
    function Header()
    {

        $this->Image('Gobierno_del_Estado_de_Tabasco.jpg',10,5,13,20);
        $this->SetFont('Arial','',8);
        $this->Cell(195,10,utf8_decode('SECRETARÍA DE EDUCACIÓN'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('SUBSECRETARÍA DE PLANEACIÓN DE SERVICIOS EDUCATIVOS Y DESCENTRALIZACIÓN'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('DIRECCIÓN DE CONTROL ESCOLAR E INCORPORACIÓN'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('DEPARTAMENTO DE ACREDITACIÓN Y CERTIFICACIÓN DE EDUCACIÓN MEDIA Y DE FORMACION DOCENTE'),0,0,'C');    
        $this->Ln(0);
        $this->Image('Tabasco_Cambia_Contigo.jpg',177,5,20,20);
    }

    // Pie de página
    function Footer()
    {
    }
}

// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','A4');
$pdf->SetMargins(10, 10 , 10, 10);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
            
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(50, 32);
        $texto = 'SOLICITUD DE AUTORIZACIÓN DE EXÁMEN PROFESIONAL DE FORMACIÓN DOCENTE';
        $pdf->MultiCell(119,5,utf8_decode($texto),0,'C');                    

        $pdf->Rect(10,43,100,5);
        $pdf->Rect(110,43,51,5);
        $pdf->Rect(161,43,41,5);

        $pdf->Rect(10,48,100,5);
        $pdf->Rect(110,48,51,5);
        $pdf->Rect(161,48,41,5);

        $pdf->SetFont('Arial','',11);
        $pdf->SetXY(10, 43);
        $pdf->MultiCell(100,5,utf8_decode('NOMBRE DE LA ESCUELA'),0,'C');                    

        $pdf->SetXY(110, 43);
        $pdf->MultiCell(51,5,utf8_decode('CLAVE'),0,'C');                    
        $pdf->SetXY(161, 43);
        $pdf->MultiCell(41,5,utf8_decode('TURNO'),0,'C');                    

        $pdf->SetXY(10, 48);
        $pdf->MultiCell(100,5,utf8_decode('"ROSARIO MARIA GUTIERREZ ESKILDSEN"'),0,'C');                    
        $pdf->SetXY(110, 48);
        $pdf->MultiCell(51,5,utf8_decode('27ENE0002Z'),0,'C');                    
        $pdf->SetXY(161, 48);
        $pdf->MultiCell(41,5,utf8_decode('VESPERTINO'),0,'C');                    


        $pdf->Rect(10,57,151,5);        
        $pdf->Rect(161,57,41,5);
        $pdf->Rect(10,62,151,5);        
        $pdf->Rect(161,62,41,5);
        $pdf->SetXY(10, 57);
        $pdf->MultiCell(50,5,utf8_decode('APELLIDO PATERNO'),0,'C');                    
        $pdf->SetXY(60, 57);
        $pdf->MultiCell(50,5,utf8_decode('"MATERNO"'),0,'C');                    
        $pdf->SetXY(110, 57);
        $pdf->MultiCell(51,5,utf8_decode('"NOMBRE(S)"'),0,'C');                    
        $pdf->SetXY(161, 57);
        $pdf->MultiCell(41,5,utf8_decode('MATRICULA'),0,'C');                    

        $pdf->SetXY(10, 62);
        $pdf->MultiCell(50,5,utf8_decode($aPaterno),0,'C');                    
        $pdf->SetXY(60, 62);
        $pdf->MultiCell(50,5,utf8_decode($aMaterno),0,'C');                    
        $pdf->SetXY(110, 62);
        $pdf->MultiCell(51,5,utf8_decode($nombreAlumno),0,'C');                    
        $pdf->SetXY(161, 62);
        $pdf->MultiCell(41,5,utf8_decode($matricula),0,'C');                    


        $pdf->Rect(10,71,70,10);        
        $pdf->Rect(80,71,29,10);
        $pdf->Rect(109,71,29,10);
        $pdf->Rect(138,71,20,10);
        $pdf->Rect(158,71,24,10);
        $pdf->Rect(182,71,20,10);

        $pdf->Rect(10,81,70,10);        
        $pdf->Rect(80,81,29,10);
        $pdf->Rect(109,81,29,10);
        $pdf->Rect(138,81,20,10);
        $pdf->Rect(158,81,24,10);
        $pdf->Rect(182,81,20,10);

        $pdf->SetXY(10, 71);
        $pdf->MultiCell(70,5,utf8_decode('LICENCIATURA'),0,'C');                    
        $pdf->SetXY(80, 71);
        $pdf->MultiCell(29,5,utf8_decode('PLAN DE EST.'),0,'C');                    
        $pdf->SetXY(109, 71);
        $pdf->MultiCell(29,5,utf8_decode('GENERACIÓN'),0,'C');                    

        $pdf->SetXY(138, 71);
        $pdf->MultiCell(20,5,utf8_decode('AÑO DE'),0,'C');                    
        $pdf->SetXY(138, 76);
        $pdf->MultiCell(20,5,utf8_decode('EGRESO'),0,'C');                    

        $pdf->SetXY(158, 71);
        $pdf->MultiCell(24,5,utf8_decode('PROMEDIO'),0,'C');                    
        $pdf->SetXY(158, 76);
        $pdf->MultiCell(24,5,utf8_decode('GENERAL'),0,'C');                    
        $pdf->SetXY(182, 71);
        $pdf->MultiCell(20,5,utf8_decode('E.E.R.'),0,'C');                    


        $pdf->SetXY(10, 81);
        $pdf->MultiCell(70,10,utf8_decode('EN EDUCACIÓN PREESCOLAR'),0,'C');                    
        $pdf->SetXY(80, 81);
        $pdf->MultiCell(29,10,utf8_decode($planEstudios),0,'C');                    
        $pdf->SetXY(109, 81);
        $pdf->MultiCell(29,10,utf8_decode($generacion),0,'C');                    

        $pdf->SetXY(138, 81);
        $pdf->MultiCell(20,10,utf8_decode($anioEgreso),0,'C');                    

        $pdf->SetXY(158, 81);
        $pdf->MultiCell(24,10,utf8_decode($promedioGeneral),0,'C');                    
        $pdf->SetXY(182, 81);
        $pdf->MultiCell(20,5,utf8_decode($EER_SI),0,'C');                    
        $pdf->SetXY(182, 86);
        $pdf->MultiCell(20,5,utf8_decode($EER_NO),0,'C');                    


        $pdf->SetFont('Arial','B',11);
        $pdf->SetXY(10, 92);
        $pdf->MultiCell(192,4,utf8_decode('NOMBRE DEL DOCUMENTO RECEPCIONAL: '.$documentoRecepcional),0,'J');                    

        $pdf->SetFont('Arial','',10);
        $pdf->Rect(10,105,35,5);        
        $pdf->Rect(45,105,100,5);        
        $pdf->Rect(145,105,57,5);

        $pdf->Rect(10,110,35,5);        
        $pdf->Rect(45,110,100,5);        
        $pdf->Rect(145,110,57,5);

        $pdf->Rect(10,115,35,5);        
        $pdf->Rect(45,115,100,5);        
        $pdf->Rect(145,115,57,5);

        $pdf->Rect(10,120,35,5);        
        $pdf->Rect(45,120,100,5);        
        $pdf->Rect(145,120,57,5);

        $pdf->Rect(10,125,35,5);        
        $pdf->Rect(45,125,100,5);        
        $pdf->Rect(145,125,57,5);        


        $pdf->SetXY(45, 105);
        $pdf->MultiCell(100,5,utf8_decode('JURADO'),0,'C');                    
        $pdf->SetXY(145, 105);
        $pdf->MultiCell(57,5,utf8_decode('FECHA DE SOLICITUD'),0,'C');                    

        $pdf->SetXY(10, 110);
        $pdf->MultiCell(45,5,utf8_decode('PRESIDENTE:'),0,'L');                    
        $pdf->SetXY(45, 110);
        $pdf->MultiCell(100,5,utf8_decode($presidente),0,'L');                    
        $pdf->SetXY(145, 110);
        $pdf->MultiCell(57,5,utf8_decode($fechaSolicitud),0,'C');                    

        $pdf->SetXY(10, 115);
        $pdf->MultiCell(45,5,utf8_decode('SECRETARIO:'),0,'L');                    
        $pdf->SetXY(45, 115);
        $pdf->MultiCell(100,5,utf8_decode($secretario),0,'L');                    
        $pdf->SetXY(145, 115);
        $pdf->MultiCell(57,5,utf8_decode('DATOS DEL EXAMEN PROF.'),0,'C');                    

        $pdf->SetXY(10, 120);
        $pdf->MultiCell(45,5,utf8_decode('VOCAL:'),0,'L');                    
        $pdf->SetXY(45, 120);
        $pdf->MultiCell(100,5,utf8_decode($vocal),0,'L');                    
        $pdf->SetXY(145, 120);
        $pdf->MultiCell(57,5,utf8_decode('FECHA: '.$fechaExamen),0,'L');                    

        $pdf->SetXY(10, 125);
        $pdf->MultiCell(45,5,utf8_decode('SUPLENTE:'),0,'L');                    
        $pdf->SetXY(45, 125);
        $pdf->MultiCell(100,5,utf8_decode($suplente),0,'L');                    
        $pdf->SetXY(145, 125);
        $pdf->MultiCell(57,5,utf8_decode('HORA:  '.$horaExamen),0,'L');                    


        $pdf->Rect(10,134,96,10);        
        $pdf->Rect(106,134,96,10);        
        $pdf->Rect(10,144,96,20);        
        $pdf->Rect(106,144,96,20);        

        $pdf->SetXY(10, 134);
        $pdf->MultiCell(106,5,utf8_decode('NOMBRE Y FIRMA DEL (A)'),0,'C');                    
        $pdf->SetXY(10, 139);
        $pdf->MultiCell(96,5,utf8_decode('SOLICITANTE'),0,'C');                    

        $pdf->SetXY(106, 134);
        $pdf->MultiCell(106,5,utf8_decode('NOMBRE Y FIRMA DE LA'),0,'C');                    
        $pdf->SetXY(106, 139);
        $pdf->MultiCell(106,5,utf8_decode('SUB-DIRECTORA ACADEMICA'),0,'C');                    

        $pdf->Rect(10,169,192,10);
        $pdf->Rect(10,179,192,30);
        $pdf->Rect(10,209,60,5);
        $pdf->Rect(70,209,132,5);
        
        $pdf->SetFont('Arial','B',11);
        $pdf->SetXY(10, 169);
        $pdf->MultiCell(192,5,utf8_decode('REQUISITOS PARA LA AUTORIZACION DEL PROCESO DE TITULACIÓN'),0,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10, 174);
        $pdf->MultiCell(192,5,utf8_decode('(MARCAR CON UNA X)'),0,'C');

        $pdf->SetFont('Arial','B',11);
        $pdf->SetXY(10, 179);
        $pdf->MultiCell(192,7,utf8_decode('EL EXPEDIENTE DEL ALUMNO CONTIENE: '),0,'L');

        $pdf->SetFont('Arial','',8);
        $pdf->Rect(11,190,5,0); 
        $pdf->SetXY(11, 184);        
        $pdf->MultiCell(5,10,utf8_decode($docActaNacimiento),0,'C');
        $pdf->SetXY(16, 184);        
        $pdf->MultiCell(86,10,utf8_decode('ACTA DE NACIMIENTO'),0,'L');

        $pdf->Rect(107,190,5,0); 
        $pdf->SetXY(107, 184);        
        $pdf->MultiCell(5,10,utf8_decode($docDictamen),0,'C');
        $pdf->SetXY(112, 184);        
        $pdf->MultiCell(86,10,utf8_decode('DICTAMEN DEL TRABAJO RECEPCIONAL'),0,'L');


        $pdf->Rect(11,195,5,0); 
        $pdf->SetXY(11, 189);        
        $pdf->MultiCell(5,10,utf8_decode($docCertificado),0,'C');
        $pdf->SetXY(16, 189);        
        $pdf->MultiCell(86,10,utf8_decode('CERTIFICADO DE BACHILLERATO'),0,'L');

        $pdf->Rect(107,195,5,0); 
        $pdf->SetXY(107, 189);        
        $pdf->MultiCell(5,10,utf8_decode($docTrabajoRecepcional),0,'C');
        $pdf->SetXY(112, 189);        
        $pdf->MultiCell(86,10,utf8_decode('TRABAJO RECEPCIONAL'),0,'L');

     
        $pdf->Rect(11,200,5,0); 
        $pdf->SetXY(11, 194);        
        $pdf->MultiCell(5,10,utf8_decode($docCertificadoENormal),0,'C');
        $pdf->SetXY(16, 194);        
        $pdf->MultiCell(86,10,utf8_decode('CERTIFICADO DE EDUCACION NORMAL'),0,'L');

        $pdf->Rect(107,200,5,0); 
        $pdf->SetXY(107, 194);        
        $pdf->MultiCell(5,10,utf8_decode($docRegistrosFirmas),0,'C');
        $pdf->SetXY(112, 194);        
        $pdf->MultiCell(86,10,utf8_decode('REGISTRO DE FIRMAS DE JURADOS'),0,'L');

        $pdf->Rect(11,205,5,0); 
        $pdf->SetXY(11, 199);        
        $pdf->MultiCell(5,10,utf8_decode($docConstanciaSS),0,'C');
        $pdf->SetXY(16, 199);        
        $pdf->MultiCell(90,10,utf8_decode('CONSTANCIA DE SERVICIO PROFESIONAL DE INDOLE SOCIAL'),0,'L');

        $pdf->Rect(107,205,5,0); 
        $pdf->SetXY(107, 199);        
        $pdf->MultiCell(5,10,utf8_decode($docReeciboPago),0,'C');
        $pdf->SetXY(112, 199);        
        $pdf->MultiCell(86,10,utf8_decode('RECIBO DE PAGO POR DERECHO'),0,'L');

        $pdf->SetFont('Arial','B',11);
        $pdf->SetXY(7, 209);        
        $pdf->MultiCell(30,5,utf8_decode('DICTAMEN:'),0,'C');
        $pdf->SetFont('Arial','',11);
        $pdf->SetXY(32, 209);        
        $pdf->MultiCell(35,5,utf8_decode($dictamen),0,'C');

        $pdf->SetFont('Arial','B',11);
        $pdf->SetXY(65, 209);        
        $pdf->MultiCell(135,5,utf8_decode('No. DE AUTORIZACIÓN DE EXÁMEN PROFESIONAL: '.$noAutorizacion),0,'C');

        $pdf->Rect(10,219,78,7);
        $pdf->Rect(88,219,68,7);
        $pdf->Rect(156,219,46,7);       


        $pdf->Rect(10,226,78,45);
        $pdf->Rect(88,226,68,45);
        $pdf->Rect(156,226,46,45);

        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(10, 219);        
        $pdf->MultiCell(78,7,utf8_decode('REVISADA Y REGISTRADA POR'),0,'C');

        $pdf->SetXY(88, 219);        
        $pdf->MultiCell(68,7,utf8_decode('NOMBRE Y FIRMA DE VALIDACIÓN'),0,'C');

        $pdf->SetXY(156, 219);        
        $pdf->MultiCell(46,7,utf8_decode('SELLO'),0,'C');

        $pdf->SetXY(11, 246);        
        $pdf->MultiCell(76,4,utf8_decode($responsableControlEscolar),0,'C');
        $pdf->Rect(11,256,76,0);
        $pdf->SetXY(14, 259);        
        $pdf->MultiCell(68,4,utf8_decode('RESPONSABLE DE CONTROL ESCOLAR DE LA INSTITUCIÓN'),0,'C');


        $pdf->SetXY(89, 246);        
        $pdf->MultiCell(66,4,utf8_decode($director),0,'C');
        $pdf->Rect(89,256,66,0);
        $pdf->SetXY(89, 259);        
        $pdf->MultiCell(66,4,utf8_decode('DIRECTOR(A) DE LA INSTITUCION'),0,'C');


    //include("../../conexion/conexion2.php");
    //$con=conexion();
    //$sql="";	
    //$res=mysql_query($sql,$con); 
    //if(mysql_num_rows($res)>0)
    //{
    //}

$pdf->Output();
?>