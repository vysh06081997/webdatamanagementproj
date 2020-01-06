<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>Have a Project you'd like to discuss</h2>

    <form action="" method="POST">
      Name:<br>
      <input type="text" name="name"><br>
      E-mail:<br>
      <input type="text" name="mail"><br>
      Comment:<br>
      <input type="text" name="comment" size="200"><br><br>

      <button style="background-color: black;color:white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode',
        Geneva, Verdana, sans-serif" type="submit">SEND</button>
    </form>
  </div>
</body>
<?php
if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['comment'])) {
  try {
    $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // If the values are posted, insert them into the database.
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $comment = $_POST['comment'];

    $dbh->beginTransaction();
    $dbh->exec("INSERT INTO `projectdiscussion` (`Contact_Id`, `name`, `emailid`, `comment`) VALUES(NULL, '$name','$mail','$comment')");
    $dbh->commit();
    print "message sent";
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}
?>

</html>