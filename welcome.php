<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: login.php");
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
  
    <div style="display: flex; width: auto;">
    <!-- 1 -->
  <div class="card" style="width: 18rem; margin: 20px;">
  <img src="public\296gts.jpg" class="card-img-top" alt="Ferrari 296 GTB">
  <div class="card-body">
    <h5 class="card-title">Ferrari 296 GTB</h5>
    <p class="card-text">The FFerrari unveiled the 296 GTB on June 24, 2021, and it went on sale in 2022. The 296 GTB is a two-seater berlinetta sports car with a mid-rear engine, a 120° V6 engine, and a plug-in electric motor that can produce up to 830 cv</p>
    <a href="#" class="btn btn-primary">Rent Now</a>
  </div>
</div>
<!-- 2 -->
<div class="card" style="width: 18rem; margin: 20px">
  <img src="public\ferrari-roma.webp" class="card-img-top" alt="Ferrari 296 GTB">
  <div class="card-body">
    <h5 class="card-title">Ferrari Roma</h5>
    <p class="card-text">The vehicle is a stunning thing to look at, with a minimalist (by today’s standards) grille and a shark-nose front end. It’s long, lean, and so utterly Ferrari. 
    </p>
    <a href="#" class="btn btn-primary">Rent Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; margin: 20px">
  <img src="public\purosangue.jpg" class="card-img-top" alt="Ferrari 296 GTB">
  <div class="card-body">
    <h5 class="card-title">Ferrari Purosangue</h5>
    <p class="card-text">The Ferrari Purosangue is the first ever four-door, four-seater car in Ferrari’s history, but models with two rear seats have played a significant role in the company’s strategy since the very beginning. 
    </p>
    <a href="#" class="btn btn-primary">Rent Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; margin: 20px">
  <img src="public\Portofino.jpg" class="card-img-top" alt="Ferrari 296 GTB">
  <div class="card-body">
    <h5 class="card-title">Ferrari Testarossa</h5>
    <p class="card-text">The Ferrari Testarossa Spider is a 12-cylinder supercar that debuted in 1984, but never made it to series production. Ferrari built one Spider specifically for Gianni Agnelli, and its s/n is 62987</p>
    <a href="#" class="btn btn-primary">Rent Now</a>
  </div>
</div>
</div>
  </body>
</html>