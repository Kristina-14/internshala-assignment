<!-- dealers will add car details for rental -->
<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: loginD.php");
  exit;
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

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
   <?php require 'partials\_nav.php' ?>
   <p style="font-style: italic; font-weight: bold; margin: 10px;">Welcome, <?php echo $_SESSION['username']?></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <form style="margin:5%;">
  <div class="mb-3">
    <label for="model" class="form-label">Vehicle model</label>
    <input type="text" class="form-control" id="model" name="model" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="model" class="form-label">Vehicle number</label>
    <input type="text" class="form-control" id="vno" name="vno" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="seat" class="form-label">Seating Capacity</label>
    <input type="email" class="form-control" id="seat" name="seat" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="rent" class="form-label">Rent per day</label>
    <input type="email" class="form-control" id="rent" name="rent" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <input type="email" class="form-control" id="desc" name="desc" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Add Car</button>
</form>

  </body>
</html>