<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <title>Basic Banking System</title>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">
    <!-- Introduction section -->
    <div class="row intro py-1" style="background-color : white;">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5" style="margin: 8rem!important;">
          <h3>Welcome to</h3>
          <h1>SPARKS BANK</h1>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img src="img/finance.png" class="img-fluid pt-2" style="height: 300px; padding-top:2.5rem!important; ">
      </div>
    </div>

    <!-- Activity section -->
    <div class="row activity text-center">
      <div class="col-md act">
        <img src="img/work.png" class="img-fluid">
        <br>
        <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
      </div>
      <div class="col-md act">
        <img src="img/pigi.png" class="img-fluid">
        <br>
        <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
      </div>
      <div class="col-md act">
        <img src="img/tran.png" class="img-fluid">
        <br>
        <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
      </div>
    </div>
  </div>
  <footer class="text-center mt-5 py-2">
    <p>&copy copyright 2022. Made by <b>AMAN SAXENA</b> <br>The Sparks Foundation</p>
  </footer>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>