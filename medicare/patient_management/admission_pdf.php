<?php
require('pdf/FPDF/fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=medicare','root','');

class myPDF extends FPDF{
    function header(){
        // $this->Image('logo.jpg',2,1);
        $this->SetFont('Arial','B',24);
        $this->Cell(276,5,'Medicare',0,0,'C');
        $this->Ln();
        $this->Ln();
        $this->SetFont('Times','',22);
        $this->cell(276,5,'Patient Admission Report',0,0,'C');
        $this->Ln(20);
    } 
    function footer(){
        $this->setY(-15);
        $this->SetFont('Arial','',8);
        $this->cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(32,10,' ADMISSION ID',1,0,'C');
        $this->Cell(30,10,' PATIENT ID',1,0,'C');
        $this->Cell(30,10,' TELEPHONE',1,0,'C');
        $this->Cell(40,10,' ADMISSION DATE',1,0,'C');
        $this->Cell(40,10,' ADMISSION TIME',1,0,'C');
        $this->Cell(45,10,' CHECK UP TYPE',1,0,'C');
        $this->Cell(60,10,' CONSULTING DOCTOR',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt=$db->query('select *from admission');
        while($data =$stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(32,10, $data->pid,1,0,'C');
            $this->Cell(30,10,$data-> aid,1,0,'L');
            $this->Cell(30,10,$data->telephone,1,0,'L');
            $this->Cell(40,10,$data->a_date,1,0,'L');
            $this->Cell(40,10,$data->a_time,1,0,'L');
            $this->Cell(45,10,$data->checkup_type,1,0,'L');
            $this->Cell(60,10,$data->consulting_doc,1,0,'L');
            $this->Ln();
        }    

    }

}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
