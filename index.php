
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
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
          
        }
       
        h4{
            text-align: center;
           color: darkblue;
           padding-top: 5px;
        }
      </style>
    </head>
    <body class="bg-success">
    
        <h4>Hospital Management</h4><a href="login.php" class="btn btn-primary text-white ml-2">Log Out</a>
        <br/>
        <br/>
   <div class="row">
      
       <div class="col-md-3">
           <div class="list-group">
               <a href="" class="list-group-item active">Patients</a>
               <a href="Detail.php" class="list-group-item ">Pateints Details</a>
               <a href="" class="list-group-item ">Add New Patient</a>
               <a href="Payment.php" class="list-group-item">Payment/Checkout</a>
                <a href="pay.php" class="list-group-item">Payment List</a>
           </div>
       </div>
           <br>
           <div class="col-md-3">
           <div class="list-group">
               <a href="" class="list-group-item active">Staff</a>
               <a href="" class="list-group-item">Stuff of Details</a>
               <a href="" class="list-group-item">Add new Stuff</a>
               <a href="" class="list-group-item">Ex Staff Member</a>
           </div>
       </div>
       <div class="col-md-5">
          <div class="card">
              <div class="card-header bg-primary h-100 text-white">
                  <h5>Pateint Form</h5>
              </div>
              <div class="card-body text-primary">
                  <form class="form-group" action="act.php" method="post">
                      <label for="firstname">Firstname</label>
                      <input name="firstname" class="form-control" type="text">
                      <label name="lastname">Lastname</label>
                      <input type="text" name="lastname" class="form-control">
                      <label for="email" >Email</label>
                      <input type="text" name="email" class="form-control">
                      <label for="number">Contuct No.</label>
                          <input type="number" class="form-control" name="number">
                      <br>
                      <label>Doctor</label>
                      <select class="form-control">
                          <option value="Dr. Smith">Dr. Smith</option>
                          <option value="Dr. John">Dr. John</option>
                      </select>
                      <br>
                      <input type="submit" name="submit" class="form-control w-25 bg-primary text-white" value="Submit">
                  </form>
              </div>
          </div>
           
       </div>
   </div>
       
        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>