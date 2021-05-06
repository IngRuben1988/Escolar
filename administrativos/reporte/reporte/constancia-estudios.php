<?php
require('fpdf/fpdf.php');

$noOficio = 'OFI/REG/12345678900001';
$nombreAlumno = 'ALONDRA MARGARITA DE LA CRUZ LASTRA';
$anioCursa = 'PRIMER AÑO';
$semestre = 'SEGUNDO';
$fechaInicia =  '18 de Agosto de 2014';
$fechaTermina = '16 de Enero de 2015';
$cicloEscolar = '2014-2015';
$fechaDocto = ' 10 días del mes de enero del año dos mil quince';
$director = 'MTRA. LAURA YANELY ESPINOZA SÁNCHEZ';

class PDF extends FPDF
{	
    // Cabecera de página
    function Header()
    {

        $this->Image('Gobierno_del_Estado_de_Tabasco.jpg',21,5,13,20);
        $this->SetFont('Arial','B',10);
        $this->Cell(195,10,utf8_decode('SECRETARÍA DE EDUCACIÓN'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('SUBSECRETARÍA DE EDUCACIÓN MEDIA Y SUPERIOR'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('DIRECCIÓN DE EDUCACION SUPERIOR'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('UNIDAD DE PROFESIONALES DE LA EDUCACIÓN'),0,0,'C');    
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

        $pdf->Rect(100,38,80,27);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(210,10,utf8_decode('DEPENDENCIA:'),0,0,'C');    
        $pdf->Ln(2);        
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(258,12,utf8_decode('Escuela "Rosario María Gutiérrez Eskildsen"'),0,0,'C');  
        $pdf->Ln(1);
        $pdf->Cell(259,16,utf8_decode('Licenciatura en Educación Preescolar'),0,0,'C');         
        $pdf->Ln(1);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(199,28,utf8_decode('CLAVE: '),0,0,'C');           
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(-172,28,utf8_decode('27ENE0002Z'),0,0,'C');           
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(207,28,utf8_decode('No. de Oficio: '),0,0,'C');           
        $pdf->SetFont('Arial','B',8);        
        $pdf->Cell(-150,28,utf8_decode($noOficio),0,0,'C');           
        $pdf->Ln(15);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(204,30,utf8_decode('ASUNTO: '),0,0,'C');           
        $pdf->SetFont('Arial','',10);        
        $pdf->Cell(-125,30,utf8_decode('Constancia de Estudios.'),0,0,'C');           
        $pdf->Ln(12);

        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(25, 70);
        $pdf->Cell(20,28,utf8_decode('A QUIEN CORRESPONDA: '),0,0,'L');                    

        $texto = 'La que suscribe, Director(a) de la Escuela "ROSARIO GUTIERREZ ESKILDSEN" clave 27ENE002Z: ';
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 95);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J');                    

        $texto = 'H A C E   C O N S T A R';
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(25, 115);
        $pdf->MultiCell(160,5,utf8_decode($texto),0,'C');                    
        
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 125);
        $pdf->Cell(0,30,utf8_decode('Que la '),0,0,'L');                    
        
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(39, 125);
        $pdf->Cell(0,30,utf8_decode('C.'),0,0,'L');                    
        
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(39, 125);
        $pdf->Cell(0,30,utf8_decode('C. '.$nombreAlumno.','),0,0,'L');                    
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(162, 125);
        $pdf->Cell(30,30,utf8_decode('es alumno(a) regular de'),0,0,'R');                    

        $texto = 'esta institución educativa, y actualmente cursa el '.$anioCursa.' de la Licenciatura en Educación Preescolar, Iniciando el '.$semestre.' semestre que inicia el '.$fechaInicia.' y termina el '. $fechaTermina.', correspondiente al Ciclo Escolar '.$cicloEscolar. '.';
        $pdf->SetXY(25, 143);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J');                    


        $texto = 'A petición de la interesada y para los usos que le convengan, se extiende la presente constancia de la ciudad de Villahermosa, capital del Estado de Tabasco, a los '.$fechaDocto.'.';
        $pdf->SetXY(25, 170);
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