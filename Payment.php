
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
           
           padding-top: 5px;
        }
      </style>
    </head>
    <body >
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Payment Form</h4>
        </div>
        <div class=" card-body bg-success text-white">
            <form action="confirm.php" method="post">
                <label for="email">Email</label>
                <input type="text" name="email" value="" class="form-control">
                <label for="pay">Payment</label>
                <input type="radio" name="pay" value="Paid" >Paid <input type="radio" name="pay" value="Pending!" >Pending<br>
                <input type="submit" value="Submit" class="btn btn-primary text-white" name="submit">
            </form>
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>