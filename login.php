<?php ob_start(); session_start(); 
  include('db.php');?>
<head>
    <title>Library</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="">
    <script src="https://kit.fontawesome.com/6f4d796be0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" type="image/x-icon" href="images/cover.svg">
  </head>
  <body class="single is-preload">

    <!-- Wrapper -->
      <div id="wrapper">

        <?php include 'navbar.php';?>
  <form class="login" method="post" action="" name="signin-form">
  <div class="login">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="login">
    <label>Password</label>
    <input type="password" name="password" required />
      <button class="login" type="submit" name="login" value="login">Log In</button>
  </div>
</form>
</div>
<!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/main.js"></script>
</body>

<?php
  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $wheres = [];
      $wheres = " WHERE username = '$username' AND password = '$password'";

      $sql = "SELECT * FROM admin $wheres";
      $result = $conn -> query($sql);
      $row = $result -> fetch_array(MYSQLI_ASSOC);

      if (!$result) {
      } else {
              $_SESSION['userid'] = $row['id'];
              header("Location: additem.php",  true,  301 ); 
              exit();
          }
      }?>