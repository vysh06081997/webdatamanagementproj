<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body style="background-color: white">
  <div id="id01">
    <form action="" method="POST">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname">
      <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" id="psw" name="psw">
      <div id="passwordError" style="color:red">Password is minimum 8 characters </div>
      <br>
      <button type="submit" class="login" onclick="validateForm()">Login</button>
      <button type="button" class="cancelbtn" onclick="form.reset()">Cancel</button>
    </form>
    <?php

    if (!empty($_POST['uname']) && !empty($_POST['psw'])) {
      $user = $_POST['uname'];
      $pass = $_POST['psw'];

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $stmt = $dbh->prepare("SELECT * FROM personal_details WHERE Username= ? AND Password= ?");
      $stmt->bindParam(1, $user, PDO::PARAM_STR);
      $stmt->bindParam(2, $pass, PDO::PARAM_STR);
      $stmt->execute();
      $fetched = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!empty($fetched)) {
        session_start();
        $_SESSION['sess_user'] = $user;

        /* Redirect browser */
        header("Location: http://www.mohan.com");
      } else {
        session_destroy();
        echo "Invalid username or password!";
        header('Location: login.php');
      }
    }
    ?>
</body>


</html>