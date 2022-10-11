<?php
   ob_start();
   require('pdf/FPDF/fpdf.php');
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont("Arial", "B", 16);
   $pdf->SetTextColor(252,3,3);
   $pdf->Cell(185,20, "Lab Equipment Report", "0", "1", "C");
   

   //table coloumn
   $pdf->SetLeftMargin(25);
   $pdf->SetTextColor(0,0,0);
   $pdf->SetFont("Arial", "B", 10);

    $pdf->cell(25,10,"Equipment ID", "1", "0", "C");
    $pdf->cell(30,10,"Equipment", "1", "0", "C");
    $pdf->cell(30,10,"Model", "1", "0", "C");
    $pdf->cell(25,10,"Ins.Date", "1", "0", "C");
    $pdf->cell(30,10,"Cost", "1", "0", "C");
    $pdf->cell(23,10,"Est.Lifespan", "1", "1", "C");
    $pdf->SetFont("Arial", "", 10);

    //table rows
    $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "select * from labequipment";
        $result = $con->prepare($query);
        $result->execute();
        if($result->rowCount()!=0){
            while($labeq = $result->fetch()){
                // // $pdf->cell(20,10,$employe['id'], "1", "0", "C");
                // // $pdf->cell(40,10,$employe['name'], "1", "0", "C");
                // // $pdf->cell(40,10,$employe['age'], "1", "0", "C");
                // // $pdf->cell(40,10,$employe['salary'], "1","1", "C");
                $pdf->cell(25,10,$labeq['equipment_id'], "1", "0", "C");
                $pdf->cell(30,10,$labeq['equipment'], "1", "0", "C");
                $pdf->cell(30,10,$labeq['model'], "1", "0", "C");
                $pdf->cell(25,10,$labeq['insurance_date'], "1", "0", "C");
                $pdf->cell(30,10,$labeq['cost'], "1", "0", "C");
                $pdf->cell(23,10,$labeq['estimated_lifespan'], "1","1", "C");
            }
        }else{
            echo 'Not Found';
        }
    }
    
    $pdfTitle = 'Lab Equipment Report.pdf';
    $pdf->Output( 'D', $pdfTitle, true );
  
   
   ob_end_flush();

?>