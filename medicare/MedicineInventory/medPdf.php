<?php
    ob_start();
    require('pdf/FPDF/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 25);
    $pdf->SetTextColor(25,135,84);
    $pdf->Cell(185,10,'MEDICARE',"0","0",'C');
    $pdf->Ln();
    $pdf->SetFont("Arial", "B", 16);
    $pdf->SetTextColor(252,3,3);
    $pdf->Cell(185,20, "MEDICINES RECORD", "0", "1", "C");


    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont("Arial", "B", 10);

    $pdf->cell(9,10,"MID", "1", "0", "C");
    $pdf->cell(25,10,"Medicine Type", "1", "0", "C");
    $pdf->cell(27,10,"Medicine Name", "1", "0", "C");
    $pdf->cell(31,10,"Manufacture Date", "1", "0", "C");
    $pdf->cell(21,10,"Expire date", "1", "0", "C");
    $pdf->cell(26,10,"Supplier Name", "1", "0", "C");
    $pdf->cell(16,10,"Quantity", "1", "0", "C");
    $pdf->cell(18,10,"Package", "1", "0", "C");
    $pdf->cell(14,10,"Dosage", "1", "0", "C");
    $pdf->cell(10,10,"Units", "1", "1", "C");
    $pdf->SetFont("Arial", "", 9);

    $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "select * from medicine";
        $result = $con->prepare($query);
        $result->execute();
        if($result->rowCount()!=0){
            while($medicine = $result->fetch()){
                $pdf->cell(9,10,$medicine['mid'], "1", "0", "C");
                $pdf->cell(25,10,$medicine['medicineType'], "1", "0", "C");
                $pdf->cell(27,10,$medicine['medicineName'], "1", "0", "C");
                $pdf->cell(31,10,$medicine['manufactureDate'], "1","0", "C");
                $pdf->cell(21,10,$medicine['expireDate'], "1", "0", "C");
                $pdf->cell(26,10,$medicine['supplierName'], "1", "0", "C");
                $pdf->cell(16,10,$medicine['quantityAmount'], "1", "0", "C");
                $pdf->cell(18,10,$medicine['package'], "1", "0", "C");
                $pdf->cell(14,10,$medicine['dosageAmount'], "1", "0", "C");
                $pdf->cell(10,10,$medicine['units'], "1","1", "C");
            }
        }else{
            echo 'NOT FOUND';
        }
    }
    
   $pdf->Output();
   ob_end_flush();
?>