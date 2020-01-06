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
$showdiv = false;
    if (!empty($_POST['uname']) && !empty($_POST['psw'])) {
      $user = $_POST['uname'];
      $pass = $_POST['psw'];

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $stmt = $dbh->prepare("SELECT * FROM personal_details WHERE Username= ? AND Password= ?");
      $stmt->bindParam(1, $user, PDO::PARAM_STR);
      $stmt->bindParam(2, $pass, PDO::PARAM_STR);
      $stmt->execute();
      $fetched = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!empty($fetched)) {
        session_start();
        $_SESSION['sess_user'] = $user;
		 $showdiv = true;

        /* Redirect browser */
       
        if(($user == 'vysali') && ($pass == 'vysalipughaz')) {
          echo "Go to admin";
          header("Location: /proj4/Adminphp/HomePage.php");
        } else {
          echo "No admin";
          header("Location: HomePage.php");
        }

        unset($_POST['uname'],$_POST['psw']);

      } else {
        session_destroy();
        echo "Invalid username or password!";
        header('Location:signup.php');
      }
    }
    ?>
	<div id="LoginDetailsDisplay" style="display:<?php echo $showdiv == true ? 'block' : 'none' ?>">
	</div>
	<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>


</html>