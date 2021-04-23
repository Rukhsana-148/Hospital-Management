<?php
$dsn = "mysql:dbname=mydb; host=localhost";
$user = "root";
$pass = "";

try{
    $pdo = new PDO($dsn, $user, $pass);
}
catch(PDOException $e){
    echo "connection fail....".$e->getMessage();
}


$sql =  "SELECT `email`, `payment` FROM `paymentlist` ";
$stmt = $pdo->prepare($sql);
$stmt->execute();

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
        .search{
            margin-top:-40px;
            margin-left:400px;
        }
      </style>
    </head>
    <body>
    
  
      <div class="card">
        <div class="card-header card-header-tabs bg-primary text-white" style="padding-bottom:-30px">
        
          <h4 style="text-align:center;">Details of Patients Payment</h4>
            
          </div>
          <div class="card-body">
      <table class="table table-bordered table-striped  table-responsive-sm">
      <tbody>
          <tr>
             
              <th class="bg-info text-white">Email</th>
              <th class="bg-info text-white">Payment</th>
          </tr>
          <?php
         
          while($data = $stmt->fetch()){
           $mail = $data['email'];
           $cont  = $data['payment'];
          ?>
          
          <tr>   
              <td><?php echo $mail;?></td>
              <td><?php echo $cont;?></td>
          </tr>
        <?php
          }
          ?>
      </tbody>
  </table>
        </div>
         
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>