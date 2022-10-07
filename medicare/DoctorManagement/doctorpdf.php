<?php
   ob_start();
   require('pdf/FPDF/fpdf.php');
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont("Arial", "B", 16);
   $pdf->SetTextColor(252,3,3);
   $pdf->Cell(185,20, "Doctor details Report", "0", "1", "C");

   //table coloumn
   $pdf->SetLeftMargin(12);
   $pdf->SetTextColor(0,0,0);
   $pdf->SetFont("Arial", "B", 10);

    $pdf->cell(50,10,"Name", "1", "0", "C");
    $pdf->cell(20,10,"Address", "1", "0", "C"); 
    $pdf->cell(40,10,"Phone", "1", "0", "C");
    $pdf->cell(20,10,"Email", "1", "0", "C");
    $pdf->cell(35,10,"Current Position", "1", "0", "C");
    $pdf->cell(20,10,"Medical School", "1", "1", "C");
    $pdf->cell(35,10,"Speciality", "1", "0", "C");
    $pdf->cell(20,10,"Director", "1", "1", "C");
    $pdf->SetFont("Arial", "", 8);

    //table rows
    $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "Anubama#21");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "select * from doctor";
        $result = $con->prepare($query);
        $result->execute();
        if($result->rowCount()!=0){
            while($doctor = $result->fetch()){

               
                $pdf->cell(50,10,$doctor['name'], "1", "0", "C");
                $pdf->cell(20,10,$doctor['address'], "1", "0", "C");
                $pdf->cell(40,10,$doctor['phone'], "1", "0", "C");
                $pdf->cell(20,10,$doctor['email'], "1", "0", "C");
                $pdf->cell(35,10,$doctor['position'], "1", "0", "C");
                $pdf->cell(20,10,$doctor['medicalschool'], "1","1", "C");
                $pdf->cell(20,10,$doctor['speciality'], "1","1", "C");
                $pdf->cell(20,10,$doctor['director'], "1","1", "C");
            }

        }else{
            echo 'Not Found';
        }
    }
   
   $pdf->Output();
   ob_end_flush();

?>

