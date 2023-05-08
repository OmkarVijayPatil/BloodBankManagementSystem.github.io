<?php 
    session_start();
    if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Certificate</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="../bootstrap/css//bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- jQuery file -->
    <script src="../includes/juqery_latest.js"></script>
    <style>
        #certificate{
            padding-top: 5%;
            text-align: center;
            border: 10px groove gray;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 m-auto" id="certificate">
                <span class="align-center text-success">
                    <h1><i>Certificate Of Appreciation</i> <br></h1>
                    <h1><i>For Blood Donation</i></h1>
                </span><br><br>
                <strong>This certificate of appreciation is given to Mr / Ms :- <?php echo $_SESSION['name']; ?> for voluntarily donating blood </strong><br><hr><br>
                <strong>ORGANIZED BY :- Ajeenkya D.Y Patil University</strong><br><br><hr><br>
                <p>I EXTEND OUR APPRECIATION OF YOUR BLOOD<br> DONATION IN THIS ORGANIZATION</p><br><br>
                <span style="padding-right:80%;">DATE:</span><br>
                <span style="padding-right:75%;">CHAIRMAN:</span> <br><br><br><br><br>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
else{
    header('Location:login.php');
}