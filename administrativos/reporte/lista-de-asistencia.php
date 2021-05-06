<?php
require('fpdf/fpdf.php');


$a=$_POST['grupos'];

class PDF extends FPDF
{
	
	
    // Cabecera de página
    function Header()
    {

        $this->Image('Escudo_Normal_Preescolar.png',10,5,20,20);
        $this->SetFont('Arial','B',9);
        $this->Cell(295,10,'SECRETARIA DE EDUCACION',0,0,'C');    
        $this->Ln(3);
        $this->Cell(295,10,'SUBSECRETARIA DE EDUCACION MEDIA Y SUPERIOR',0,0,'C');    
        $this->Ln(3);
        $this->Cell(295,10,'DIRECCION DE EDUCACION SUPERIOR',0,0,'C');    
        $this->Ln(3);
        $this->Cell(295,10,'ESCUELA "ROSARIO MARIA GUTIERREZ ESKILDSEN"',0,0,'C');    
        $this->Ln(10);


        $this->SetFont('Arial','',9);  
        $this->SetTextColor(50,50,50);      
        $this->SetFillColor(232,232,232);
        $this->Cell(30,5,'Ciclo Escolar: ',0,0,'R',true);        
        $this->SetFillColor(247,247,247);
        $this->Cell(20,5,'2012',0,0,'C',true);

        $this->SetFillColor(232,232,232);
        $this->Cell(30,5,'Periodo: ',0,0,'R',true);    
        $this->SetFillColor(247,247,247);
        $this->Cell(30,5,'2014-2015',0,0,'C',true);

        $this->SetFillColor(232,232,232);
        $this->Cell(30,5,'Grado y Grupo: ',0,0,'R',true);    
        $this->SetFillColor(247,247,247);
        $this->Cell(20,5,'1 A',0,0,'C',true);

        $this->SetFillColor(232,232,232);
        $this->Cell(30,5,'Docente: ',0,0,'R',true);    
        $this->SetFillColor(247,247,247);
        $this->Cell(85,5,'Nombre del Profesor',0,0,'L',true);


        $this->Ln(6);

        $this->SetFillColor(232,232,232);
        $this->Cell(7,5,'',0,0,'C',true);    
        $this->Cell(70,5,'',0,0,'C',true);    
        $this->Cell(200,5,' ',0,1,'C',true);    

        $this->Cell(7,5,'NO.',0,0,'C',true);    
        $this->Cell(70,5,'NOMBRE DEL ALUMNO(A)',0,0,'C',true);    

        $this->Cell(5,5,'1',0,0,'C',true);    
        $this->Cell(5,5,'2',0,0,'C',true);    
        $this->Cell(5,5,'3',0,0,'C',true);    
        $this->Cell(5,5,'4',0,0,'C',true);    
        $this->Cell(5,5,'5',0,0,'C',true);    
        $this->Cell(5,5,'6',0,0,'C',true);    
        $this->Cell(5,5,'7',0,0,'C',true);    
        $this->Cell(5,5,'8',0,0,'C',true);    
        $this->Cell(5,5,'9',0,0,'C',true);    
        $this->Cell(5,5,'10',0,0,'C',true);    
    
        $this->Cell(5,5,'11',0,0,'C',true);    
        $this->Cell(5,5,'12',0,0,'C',true);    
        $this->Cell(5,5,'13',0,0,'C',true);    
        $this->Cell(5,5,'14',0,0,'C',true);    
        $this->Cell(5,5,'15',0,0,'C',true);    
        $this->Cell(5,5,'16',0,0,'C',true);    
        $this->Cell(5,5,'17',0,0,'C',true);    
        $this->Cell(5,5,'18',0,0,'C',true);    
        $this->Cell(5,5,'19',0,0,'C',true);    
        $this->Cell(5,5,'20',0,0,'C',true);    

        $this->Cell(5,5,'21',0,0,'C',true);    
        $this->Cell(5,5,'22',0,0,'C',true);    
        $this->Cell(5,5,'23',0,0,'C',true);    
        $this->Cell(5,5,'24',0,0,'C',true);    
        $this->Cell(5,5,'25',0,0,'C',true);    
        $this->Cell(5,5,'26',0,0,'C',true);    
        $this->Cell(5,5,'27',0,0,'C',true);    
        $this->Cell(5,5,'28',0,0,'C',true);    
        $this->Cell(5,5,'29',0,0,'C',true);    
        $this->Cell(5,5,'30',0,0,'C',true);    
        $this->Cell(5,5,'31',0,0,'C',true);    
 
        $this->Cell(45,5,'OBSERVACIONES',0,0,'C',true);        

        $this->Ln(6);

    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);

    include("../../conexion/conexion2.php");
    $con=conexion();
    $sql="select ap.ALUM_MATRICULA,ap.ALUM_NOMBRE,ap.ALUM_PATERNO,ap.ALUM_MATERNO,
		cd.DATO_ID,cd.ALUM_CURP,cd.DATO_CONSECUTIVO,cd.DATO_CLAVE,sem.SEM_GRADO_NUMERO,sem.SEM_ID,ag.GRUPO_ID,
		p.PER_ID,sem.SEM_GRADO_LETRA,ag.GRUPO_NOMBRE,concat(p.PER_FECHA_INI,' ',p.PER_FECHA_FIN)AS PERIODO
		from conjunto_datos as cd , semestres as sem,asig_grupos as ag,periodos as p, alum_personas as ap
		where  cd.GRUPO_ID=ag.GRUPO_ID and cd.SEM_ID=sem.SEM_ID 
		and cd.PER_ID=p.PER_ID and ap.ALUM_CURP=cd.ALUM_CURP and cd.DATO_CLAVE='".$a."' 
		order by cd.DATO_CONSECUTIVO";
		
    $res=mysql_query($sql,$con); 
    if(mysql_num_rows($res)>0)
    {
		
        $i = 1;    
        $pdf->SetDrawColor(90,90,90);    
        while($row=mysql_fetch_array($res))
        {
            if ($i == 0) { 
                $i = 1; 
                $pdf->SetFillColor(247,247,247);
            }else{ 
                $i = 0; 
                $pdf->SetFillColor(255,255,255);
            }
            
            //$pdf->Cell(7,5,$row["SEM_GRADO_NUMERO"],1,0,'C',true);    
              
			$consevutivo=$row['DATO_CONSECUTIVO'];
            $nombre = $row['ALUM_PATERNO']." ".$row['ALUM_MATERNO']." ".$row['ALUM_NOMBRE'];
            //$nombre = $row["ap.ALUM_PATERNO"]+" "+$row["ap.ALUM_MATERNO"]+" "+$row["ap.ALUM_NOMBRE"];  
			$pdf->Cell(7,5,$consevutivo,1,0,'C',true);                      
            $pdf->Cell(70,5,utf8_decode($nombre),1,0,'L',true);
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    

            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
            $pdf->Cell(5,5,'',1,0,'C',true);    
 
            $pdf->Cell(45,5,'',1,0,'C',true);        

            $pdf->Ln(5);
        }
    }

$pdf->Output();
?>