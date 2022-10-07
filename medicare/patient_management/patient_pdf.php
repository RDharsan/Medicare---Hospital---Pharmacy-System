<?php
   ob_start();
   require('pdf/FPDF/fpdf.php');
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont("Arial", "B", 16);
   $pdf->SetTextColor(252,3,3);
   $pdf->Cell(185,20, "Patient Report", "0", "1", "C");

   //table coloumn
   $pdf->SetLeftMargin(12);
   $pdf->SetTextColor(0,0,0);
   $pdf->SetFont("Arial", "B", 10);

    
    $pdf->cell(20,10,"Name", "1", "0", "C");
    $pdf->cell(40,10,"NIC", "1", "0", "C");
    $pdf->cell(20,10,"Gender", "1", "0", "C");
    $pdf->cell(35,10,"Date Of Birth", "1", "0", "C");
    $pdf->cell(20,10,"Address", "1", "0", "C");
    $pdf->cell(20,10,"City", "1", "0", "C");
    $pdf->cell(20,10,"Telephone", "1", "1", "C");
    $pdf->SetFont("Arial", "", 8);

    //table rows
    $con = new PDO("mysqli:host=localhost;dbname=medicare", "root", "");
    if(isset($_GET['pid'])){
        $pid=$_GET['pid'];
        $query = "select * from patient";
        $result = $con->prepare($query);
        $result->execute();
        if($result->rowCount()!=0){
            while($patient = $result->fetch()){
                $pdf->cell(20,10,$patient['name'], "1", "0", "C");
                $pdf->cell(40,10,$patient['nic'], "1", "0", "C");
                $pdf->cell(20,10,$patient['gender'], "1", "0", "C");
                $pdf->cell(35,10,$patient['dob'], "1", "0", "C");
                $pdf->cell(20,10,$patient['city'], "1","0", "C");
                $pdf->cell(20,10,$patient['t_phone'], "1","1", "C");
            }
        }else{
            echo 'Not Found';
        }
    }
   
   $pdf->Output();
   ob_end_flush();

?>