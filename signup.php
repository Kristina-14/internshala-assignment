<?php 
    $showAlert = false;
    $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
        include 'partials\_dbconnect.php';
        $username = $_POST["username"];
        $email1 = $_POST["email1"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $exists = false;
        if(($password == $cpassword) && $exists == false){
            $sql = "INSERT INTO `users` (`username`, `email`, `password`, `dt`) VALUES ('$username', '$email1', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
        
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
   <?php require 'partials\_nav.php' ?>
<?php
if($showAlert)
{echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Sign Up Successfull!</strong> You can now login.
</div>';}

if($showError)
{echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error! </strong>'. $showError.'
</div>';}
?>
   <div class="container">
    <h2 class="text-center">Signup to our Website</h2>
    <br/><br/><br/>
                <form action="/internshala-assignment/signup.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label" style="font-weight: bold;">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email1" class="form-label" style="font-weight: bold;">Email address</label>
                    <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text" style="font-style: italic;">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"  style="font-weight: bold;">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label"  style="font-weight: bold;">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                    <div id="detailsHelp" class="form-text" style="font-style: italic;">Make sure to type the same password.</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Confirm Details</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>