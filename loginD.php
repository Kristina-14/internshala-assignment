<?php 
    $login = false;
    $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
        include 'partials\_dbconnect.php';
        $username = $_POST["username"];
        $email1 = $_POST["email1"];
        $password = $_POST["password"];

        
            $sql = "Select * from customer where username='$username' AND email='$email1' AND password='$password'";            
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
                $login = true;
                //starting the session at this point.
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: addCars.php");
            }        
            else{
                $showError = "Invalid Credentials. Sign Up, first!";
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

    <title>Login</title>
  </head>
  <body>
   <?php require 'partials\_nav.php' ?>
<?php
if($login)
{echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Login Successfull!</strong> You are now logged in.
</div>';}

if($showError)
{echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error! </strong>'. $showError.'
</div>';}
?>
   <div class="container">
    <h2 class="text-center">Login to your Account</h2>
    <br/><br/><br/>
                <form action="/internshala-assignment/loginD.php" method="post">
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
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Confirm Details</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>