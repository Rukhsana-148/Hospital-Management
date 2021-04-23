<?php
  $conn = mysqli_connect("localhost", "root", "", "mydb");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $user_name = $_POST['username'];
	  $password = $_POST['password'];
	  
   $sql = "select * from checking  where username= '$user_name' and password = '$password'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   
   if($count ==1){
	   echo "Login Success";
   }
   else{
	   echo "login failed";
   }
   
  }

?>