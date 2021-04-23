<?php
$con = new mysqli("localhost", "root", "", "mydb");
if(isset($_POST['submit'])){
    
       $email = $_POST['email'];
    $pay = $_POST['pay'];
$sql = "INSERT INTO `paymentlist`(`Email`, `Payment`) VALUES ('$email','$pay')";
$result = $con->query($sql);
   
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <title>Hello, world!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .box{
            width:400px;
            height:250px;
            background-color:darkblue;
            color:white;
            border:2px solid white;
            border-radius:25px;
            margin-top:100px;
            margin-left:260px;
        }
        h4{
            text-align: center;
            padding-top: 70px;
        }p{
            padding-left: 60px;
        }
        a{
           margin-left: 150px;
        }
      </style>
        </head>
        <body class="bg-primary">
        <div class="box">
            <h4> Your payment is <?php echo $pay;
                "<script>alert('Your paiment is $pay')</script>";?></h4>
            <p>To see the payment list click below button </p>
            <a href="pay.php" class="btn btn-info">Visit</a>
            </div>
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>
</html>