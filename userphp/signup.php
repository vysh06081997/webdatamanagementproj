<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>CHECK IN</h2>

    <form action="" id="SignupForm" method="POST">
      First Name:<br>
      <input type="text" name="firstName" placeholder="First Name">
      <br>
      Last Name:<br>
      <input type="text" name="lastName" placeholder="Last Name">
      <br>
      Email:<br>
      <input type="text" name="email" placeholder="Email">
      <br>
      User Name:<br>
      <input type="text" name="username" placeholder="User Name">
      <br>
      Password:<br>
      <input type="password" name="password" placeholder="Password">
      <br>
      <br>
      <br>
      <input type="submit" value="CLEAR">
      <input type="submit" value="SIGN UP">
    </form>
  </div>

  </form>

  <div>

<?php
$showdiv = false;
try {
  $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  // If the values are posted, insert them into the database.
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $stmt = $dbh->prepare("SELECT * FROM personal_details WHERE email_Id = ?");
    $stmt->bindParam(1, $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($user);

    if (!empty($user)) {
      die('email already exists');
    } else {
      $dbh->beginTransaction();
      $dbh->exec("INSERT INTO `personal_details` (Role_id,email_Id,First_Name,Last_Name,Username,Password) VALUES(2,'$email','$firstname', '$lastname','$username', '$password')");
      $dbh->exec("INSERT INTO `userdetails` (Role_Id, Username, password) VALUES(2,'$username','$password')");
      $dbh->commit();
      print "Successfully signed up";
	  unset($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['username'],$_POST['password']);
      $showdiv = true;

      header('Location: login.php');
    }
  }
} catch (PDOException $e) {
  die($e->getMessage());
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
