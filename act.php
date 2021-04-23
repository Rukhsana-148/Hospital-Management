<?php
$con = new mysqli("localhost", "root", "", "mydb");

if(isset($_POST['submit'])){
    echo "Hello";
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $cont = $_POST['number'];
    $sql = "INSERT INTO `hospital`(`Firstname`, `Lastname`, `Email`, `Number`) VALUES ('$fname','$lname','$email', '$cont')";
    $result = $con->query($sql);
   if($result==true){
       echo "Successful ";
       echo $fname;
       echo "To vist the pateint list click the button
      <a href='Detail.php'>Visit</a>";
   }
    else{
        echo "Not";
    }
    $con->close();
}
?>

