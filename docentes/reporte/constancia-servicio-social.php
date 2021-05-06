<?php
require('fpdf/fpdf.php');

$nombreAlumno = 'ALONDRA MARGARITA DE LA CRUZ LASTRA';
$fechaDocto = ' 10 días del mes de enero del año dos mil quince';
$director = 'MTRA. LAURA YANELY ESPINOZA SÁNCHEZ';
$asignaturas = 'Práctica Profesional I y II';
$generacion = '2012-2016';


class PDF extends FPDF
{	
    // Cabecera de página
    function Header()
    {

        $this->Image('Gobierno_del_Estado_de_Tabasco.jpg',21,5,13,20);
        $this->SetFont('Arial','B',10);
        $this->Cell(195,10,utf8_decode('SECRETARÍA DE EDUCACIÓN'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('SUBSECRETARÍA DE COORDINACIÓN Y DESARROLLO DE'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('LA EDUCACIÓN MEDIA Y SUPERIOR'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('ESCUELA "ROSARIO MARÍA GUTIÉRREZ ESKILDSEN"'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('LICENCIATURA EN EDUCACIÓN PREESCOLAR'),0,0,'C');    
        $this->Ln(0);
        $this->Image('Tabasco_Cambia_Contigo.jpg',170,5,20,20);

        $this->SetTextColor(160,160,160);
        $this->SetFont('Arial','',5);
        $this->Cell(35,10,utf8_decode('"2014 Conmemoración del'),0,0,'C');    $this->Ln(0);
        $this->Cell(35,14,utf8_decode('150 Aniversario de la'),0,0,'C');      $this->Ln(0);
        $this->Cell(35,18,utf8_decode('Gesta Heroica del 27 de'),0,0,'C');    $this->Ln(0);
        $this->Cell(35,22,utf8_decode('Febrero de 1864"'),0,0,'C');           $this->Ln(0);
        $this->Cell(35,26,utf8_decode('"2014 Año de Octavio Paz"'),0,0,'C');  $this->Ln(0);
        $this->Ln(15);
    }

    // Pie de página
    function Footer()
    {
        $direccion1 = 'Cerrada de Ignacio Gutiérrez s/n, colonia Gil y Sáenz';
        $direccion2 = 'Villahermosa, Tabasco        C.P. 86080';
        $direccion3 = 'Teléfono 01-993-3158644      De 14:00 a 20:00 hrs.';
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial','',8);
        // Print centered page number
        $this->Cell(0,0,utf8_decode($direccion1),0,0,'C'); $this->Ln(3);
        $this->Cell(0,0,utf8_decode($direccion2),0,0,'C'); $this->Ln(3);
        $this->Cell(0,0,utf8_decode($direccion3),0,0,'C');        
    }
}

// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','A4');
$pdf->SetMargins(10, 10 , 10, 10);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);

        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(130, 40);
        $pdf->Cell(0,10,utf8_decode('ASUNTO: '),0,0,'L');           
        $pdf->SetFont('Arial','',12); 
        $pdf->SetXY(157, 40);       
        $pdf->Cell(0,10,utf8_decode('CONSTANCIA DE'),0,0,'L');                  
        $pdf->SetXY(155, 45);
        $pdf->Cell(0,10,utf8_decode('SERVICIO SOCIAL.'),0,0,'L');           

        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(25, 50);
        $pdf->Cell(20,28,utf8_decode('A QUIEN CORRESPONDA: '),0,0,'L');                    

        $texto = 'LA QUE SUSCRIBE, DIRECTOR(A) DE LA ESCUELA "ROSARIO GUTIÉRREZ ESKILDSEN" CLAVE 27ENE002Z, UBICADA EN LA CALLE IGNACIO GUTIÉRREZ S/N DE LA COL. GIL Y SÁENZ DE ESTA CIUDAD. ';
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 80);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J');                    

        $texto = 'H A C E   C O N S T A R :';
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(25, 110);
        $pdf->MultiCell(160,5,utf8_decode($texto),0,'C');                    
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 115);
        $pdf->Cell(0,30,utf8_decode('Que la '),0,0,'L');                    
        
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(39, 115);
        $pdf->Cell(0,30,utf8_decode('C.'),0,0,'L');                    
        
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(39, 115);
        $pdf->Cell(0,30,utf8_decode('C. '.$nombreAlumno.','),0,0,'L');                    
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(162, 115);
        $pdf->Cell(30,30,utf8_decode('liberó su Servicio Social,'),0,0,'R');                    

        $texto = 'durante los Semestres VII y VIII, el cual cursó las sigientes asignaturas: '.$asignaturas.' de la Carrera de LICENCIATURA EN EDUCACIÓN PREESCOLAR, Generación '.$generacion.'.';
        $pdf->SetXY(25, 133);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J');                    


        $texto = 'A petición de la interesada y para los usos legales que convengan a sus intereses, se extiende la presente constancia de la ciudad de Villahermosa, capital del Estado de Tabasco, a los '.$fechaDocto.'.';
        $pdf->SetXY(25, 160);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J');                    


        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(25, 190);
        $pdf->Cell(20,28,utf8_decode('ATENTAMENTE '),0,0,'L');                    
        $pdf->SetXY(25, 200);
        $pdf->Cell(20,28,utf8_decode($director),0,0,'L');                    

        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 205);
        $pdf->Cell(20,28,utf8_decode('DIRECTORA'),0,0,'L');                    

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY(25, 220);
        $pdf->Cell(20,28,utf8_decode('c.c.p. Archivo.'),0,0,'L');                                    


        $pdf->SetFont('Arial','',8);
        $pdf->SetXY(25, 223);
        $pdf->Cell(20,28,utf8_decode('LYES/NCRP/JRPA/A.'),0,0,'L');                                    
                


    //include("../../conexion/conexion2.php");
    //$con=conexion();
    //$sql="";	
    //$res=mysql_query($sql,$con); 
    //if(mysql_num_rows($res)>0)
    //{
    //}

$pdf->Output();
?>