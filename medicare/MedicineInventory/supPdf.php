<?php
    ob_start();
    require('pdf/FPDF/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 16);
    $pdf->SetTextColor(252,3,3);
   
    $pdf->Cell(185,20, "SUPPLIERS RECORD", "0", "1", "C");


    $pdf->SetLeftMargin(40);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont("Arial", "B", 10);

    $pdf->cell(10,10,"SID", "1", "0", "C");
    $pdf->cell(30,10,"Supplier Name", "1", "0", "C");
    $pdf->cell(60,10,"Address", "1", "0", "C");
    $pdf->cell(30,10,"Phone No", "1", "0", "C");
    $pdf->Ln();
    $pdf->SetFont("Arial", "", 10);


    $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "select * from supplier";
        $result = $con->prepare($query);
        $result->execute();
        if($result->rowCount()!=0){
            while($supplier = $result->fetch()){
                $pdf->cell(10,10,$supplier['sid'], "1", "0", "C");
                $pdf->cell(30,10,$supplier['supplierName'], "1", "0", "C");
                $pdf->cell(60,10,$supplier['address'], "1", "0", "C");
                $pdf->cell(30,10,$supplier['phoneNo'], "1","1", "C");
            }
        }else{
            echo 'NOT FOUND';
        }
    }
    
   $pdf->Output();
   ob_end_flush();
?>