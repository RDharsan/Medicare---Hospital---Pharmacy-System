<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .button2 {
            background-color: #198754;
            color: white;
        }
        .button3 {
            background-color: #198754;
            color: white;
        }
        .bu {
            margin-left: 220px;
        }
        h3{
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .row {
            display: flex;
            }
        .col{
            flex: 20%;
            padding: 20px;
            height: 300px;
            margin-left: 20px;
            margin-right: 20px;
        }
        .in-row{
            display: flex;
        }
        /* .in-col{
            flex: 20%;
            padding: 20px;
            height: 300px;
        } */
        .tbl{
             width: 1280px!important;
             margin-left: -60px!important;
        }
        .bb{
            background-color: #198754!important;
        }
        .bbb{
            background-color: red!important;
        }
        .bn{
            padding-left: 500px;
        }

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">
</head>
<body>
       <!-- header -->
  <?php
    include('header.php');
    ?>

    <!-- second navigation bar -->
    <div>
        <ul class="secondNav">
            <li><a href="addmedicine.php" class="list" >Add Medicine</a></li>
            <li><a href="viewMedicine.php" class="list">View Medicine Details</a></li>
            <li><a href="search.php" class="list" id="active" style="color:white">Search Medicine</a></li>
            <li><a href="index.php" class="list">Report Generate</a></li>
            <li><a href="addsupplier.php" class="list">Add Suppliers</a></li>
            <li><a href="viewSupplier.php" class="list">View Supplier Details</a></li>
        </ul>

    </div>
    <h3><b>SEARCH DETAILS</b></h3>

    <div class="bn">
        <button name="Search Medicine" type="submit" style="background-color:#198754" class="btn button2" ><a href="searchMedi.php"class="text-light">Search Medicine</a></button><button type="reset" class="btn button2 bu" style="background-color:#198754" name="Search SUpplier"><a href="searchSup.php"class="text-light">Search Supplier</a></button>
    </div>
    
    </form> 
    </div>
    
   







    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
    
</body>
</html>