<?php
   ob_start();
   require('pdf/FPDF/fpdf.php');
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont("Arial", "B", 16);
   $pdf->SetTextColor(252,3,3);
   $pdf->Cell(185,20, "Appointment Report", "0", "1", "C");

   //table coloumn
   $pdf->SetLeftMargin(12); 
   $pdf->SetTextColor(0,0,0);
   $pdf->SetFont("Arial", "B", 10);

    $pdf->cell(50,10,"Doctor_Name", "1", "0", "C");
    $pdf->cell(20,10,"Appointment_date", "1", "0", "C"); 
    $pdf->cell(40,10,"Appointment_time", "1", "0", "C");
    $pdf->cell(20,10,"Status", "1", "0", "C");
    $pdf->cell(35,10,"Speciality", "1", "0", "C");
    $pdf->cell(20,10,"Patient Name", "1", "1", "C");
    $pdf->SetFont("Arial", "", 8);

    //table rows
    $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "Anubama#21");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "select * from appointment";
        $result = $con->prepare($query);
        $result->execute();
        if($result->rowCount()!=0){
            while($appointment = $result->fetch()){

               
                $pdf->cell(50,10,$appointment['Dr_Name'], "1", "0", "C");
                $pdf->cell(20,10,$appointment['App_date'], "1", "0", "C");
                $pdf->cell(40,10,$appointment['App_time'], "1", "0", "C");
                $pdf->cell(20,10,$appointment['status'], "1", "0", "C");
                $pdf->cell(35,10,$appointment['speciality'], "1", "0", "C");
                $pdf->cell(20,10,$appointment['patient_name'], "1","1", "C");
              
            }

        }else{
            echo 'Not Found';
        }
    }
   
   $pdf->Output();
   ob_end_flush();

?>

