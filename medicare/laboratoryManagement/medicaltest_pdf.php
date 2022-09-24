<?php
   ob_start();
   require('pdf/FPDF/fpdf.php');
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont("Arial", "B", 16);
   $pdf->SetTextColor(252,3,3);
   $pdf->Cell(185,20, "Medical Laboratory Report", "0", "1", "C");

   //table coloumn
   $pdf->SetLeftMargin(12);
   $pdf->SetTextColor(0,0,0);
   $pdf->SetFont("Arial", "B", 10);

    $pdf->cell(50,10,"Test type", "1", "0", "C");
    $pdf->cell(20,10,"Lab room", "1", "0", "C");
    $pdf->cell(40,10,"Lab in-charge", "1", "0", "C");
    $pdf->cell(20,10,"Nurse", "1", "0", "C");
    $pdf->cell(35,10,"Test Done By", "1", "0", "C");
    $pdf->cell(20,10,"Test Date", "1", "1", "C");
    $pdf->SetFont("Arial", "", 8);

    //table rows
    $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "select * from medicaltest";
        $result = $con->prepare($query);
        $result->execute();
        if($result->rowCount()!=0){
            while($medicaltest = $result->fetch()){
                // $pdf->cell(20,10,$employe['id'], "1", "0", "C");
                // $pdf->cell(40,10,$employe['name'], "1", "0", "C");
                // $pdf->cell(40,10,$employe['age'], "1", "0", "C");
                // $pdf->cell(40,10,$employe['salary'], "1","1", "C");
                $pdf->cell(50,10,$medicaltest['test_type'], "1", "0", "C");
                $pdf->cell(20,10,$medicaltest['lab_room'], "1", "0", "C");
                $pdf->cell(40,10,$medicaltest['lab_incharge'], "1", "0", "C");
                $pdf->cell(20,10,$medicaltest['nurse'], "1", "0", "C");
                $pdf->cell(35,10,$medicaltest['test_doneby'], "1", "0", "C");
                $pdf->cell(20,10,$medicaltest['test_date'], "1","1", "C");
            }
        }else{
            echo 'Not Found';
        }
    }
   
   $pdf->Output();
   ob_end_flush();

?>