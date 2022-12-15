<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color : #82E0AA;">
  <?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script> alert('Hurray! User created');
                  window.location='transfermoney.php';
             </script>";
    }
  }
  ?>

  <?php
  include 'navbar.php';
  ?>

  <h2 class="text-center pt-4" style="color : black; padding-top: 4.5rem!important;">Create a User</h2>
  <br>

  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>
        <div class="screen-body">
          <div class="screen-body-item left">
            <img class="img-fluid" src="img/users.png" style="border: none; border-radius: 50%;">
          </div>
          <div class="screen-body-item">
            <form class="app-form" method="post">
              <div class="app-form-group">
                <input class="app-form-control" placeholder="Enter Your Name" type="text" name="name" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="Enter Mail Id" type="email" name="email" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="Balance" type="number" name="balance" required>
              </div>
              <br>
              <div class="app-form-group button">
                <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
              </div>
            </form>
          </div>
        </div>
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