<?php

include ('../connection/connect.php');
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];


$stmt=$con->prepare("select * from login where email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows > 0 ){
    $data = $stmt_result->fetch_assoc();
    if($data['password'] === $password){
        header('location: ../home/Home.php');
    }   
}else{
    echo "Invalid email or password";
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../laboratoryManagement/style.css">
    <link rel="stylesheet" href="../laboratoryManagement/secondNav.css">

</head>

<body>
    <div class="header">
        <p>MEDICARE</p>
        </div>
        <p class="para">We Care Always..</p>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
                <div class="card-header text-center text-white" style="background-color: #198754;">
                    <h2>Login form</h2>
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" id="password" class="form-control" name="password">

                        </div>
                        <input type="submit" class="btn btn-primary w-100 " style="background-color: #198754;"  name="submit">
                    </form>
                </div>
                <div class="card-footer text-right">
                    <small>&copy; Medicare hospital</small>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('../laboratoryManagement/footer.php');
    ?>
</body>

</html>