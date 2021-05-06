<?php
require('fpdf/fpdf.php');


$nombreAlumno = $_GET['nombre'];
$matricula = $_GET['matricula'];
$servicio = $_GET['servicio'];
$semestre = 'SEGUNDO';


class PDF extends FPDF
{	
    // Cabecera de página
    function Header()
    {

        $this->SetFont('Arial','B',10);
        $this->Cell(195,10,utf8_decode('SECRETARÍA DE EDUCACIÓN'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('SUBSECRETARÍA DE EDUCACIÓN MEDIA Y SUPERIOR'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('DIRECCIÓN DE EDUCACION SUPERIOR'),0,0,'C');    
        $this->Ln(4);
        $this->Cell(195,10,utf8_decode('UNIDAD DE PROFESIONALES DE LA EDUCACIÓN'),0,0,'C');    
        $this->Ln(0);

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
        $pdf->SetXY(25, 70);
        $pdf->Cell(20,28,utf8_decode('Hoja de Tramite para Solicitud de Servicio: '),0,0,'L');                    

        $texto = 'Alumno(a): '.$nombreAlumno.'.';
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 95);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J'); 
		                   
        $texto = 'Matricula: '.$matricula.'.';
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 100);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J');  
		  
        $texto = 'Servicio Requerido: '.$servicio.'.';
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 105);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J'); 		        

       
	    
	    $texto = 'Al Requerir un Servicio a Control Escolar se Requiere un Recibo de Pago bajo el Numero de Cuenta Bancaria: '.
		'795033560003 Banco: Banamex Sucursal: 001 a Nombre: Control Escolar  costo $100.00 MXN.';
		
        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 115);
        $pdf->MultiCell(167,5,utf8_decode($texto),0,'J');        
	   
        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(25, 190);
        $pdf->Cell(20,28,utf8_decode('ATENTAMENTE '),0,0,'L');                    
        $pdf->SetXY(25, 200);
        $pdf->Cell(20,28,utf8_decode($director),0,0,'L');                    

        $pdf->SetFont('Arial','',12);
        $pdf->SetXY(25, 205);
        $pdf->Cell(20,28,utf8_decode('CONTROL ESCOLAR'),0,0,'L');                    

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY(25, 220);
        $pdf->Cell(20,28,utf8_decode('c.c.p. Archivo.'),0,0,'L');                                    


        $pdf->SetFont('Arial','',8);
        $pdf->SetXY(25, 223);
        $pdf->Cell(20,28,utf8_decode('LYES/NCRP/JRPA/A.'),0,0,'L');                                    
                

$pdf->Output();
?>