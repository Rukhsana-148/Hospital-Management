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
if(isset($_POST['search'])){
    $name = $_POST['searchname'];
$sql =  "select  firstname, lastname, email, number from hospital where firstname = '$name'
";
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
        .head{
            background-color: darkblue;
            color:white;
            
        }
      </style>
    </head>
    <body>
    
  <table class="table table-bordered table-striped">
      <div class="head"><thead class="bg-primary text-white">
        <?php echo "Detail of $name"; ?>
      </thead>
      </div>
      <tbody>
          <tr>
              <th>Fristname</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Contuct No.</th>
          </tr>
          <?php
          while($data = $stmt->fetch()){
             
            $fn   = $data['firstname'];
           $ln = $data['lastname'];
           $mail = $data['email'];
           $cont  = $data['number'];
             
          
          ?>
          
          <tr>
             
              <td><?php echo  $fn;?></td>
              <td><?php echo $ln;?></td>
              <td><?php echo $mail;?></td>
              <td><?php echo $cont;?></td>
          </tr>
        <?php
          }
}
          ?>
      </tbody>
  </table>
         
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>