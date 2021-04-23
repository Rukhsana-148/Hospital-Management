<?php
  $conn = mysqli_connect("localhost", "root", "", "mydb");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $user_name = $_POST['username'];
	  $password = $_POST['password'];
	  
   $sql = "select * from check  where username= '$user_name' and password = '$password'";
  
   $count = mysqli_num_rows(mysqli_query($conn,$sql));
   
   if($count ==1){
	   header("Location:my_panel.php");
   }
   else{
	   echo "login failed";
   }
   
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
        #ab1:hover{
            cursor: pointer;
            
            
        }
      </style>
    </head>
    <body>
    <div class="container-md" style="width:400px">
      <div class="card">
      <div class="card-header bg-dark text-white">
          <h5>Registration Here</h5>
      </div>
      <div class="card-body" style="background-color:grey">
       <form class="form-control-group"  method="post" action="">
           <label for="username">Username</label>
           <input type="text" name="username" class="form-control">
           <label for="password">Password</label>
           <input type="text" name="password" class="form-control">
           <label></label>
           <input type="submit" name="submit" value="Submit" class="form-control bg-primary text-white" id="ab1">
       </form>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>