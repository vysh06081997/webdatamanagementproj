<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>EDIT PACKAGE</h2>

    <form action="" id="editpackageform" method="POST">
      Name:<br>
      <input type="text" name="Name" placeholder="Name">
      <br>
      Amount:<br>
      <input type="text" name="Amount" placeholder="Amount">
      <br>
      Details:<br>
      <input type="text" name=" Details" placeholder="Details">
      <br>
      <br>
      <input type="submit" value="CLOSE">
      <input type="submit" value="UPDATE">
    </form>
  </div>

  </form>

  <div>
</body>
<?php
if (!empty($_POST['Name']) && !empty($_POST['Amount']) && !empty($_POST['Details'])) {
      $Name = $_POST['Name'];
      $Amount = $_POST['Amount'];
      $Details = $_POST['Details'];

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("UPDATE packagedetails SET Amount='$Amount', Details='$Details' WHERE Name='$Name'");
     
      $dbh->commit();
      print "Successfully updated";


       
      } 
    
?>

</html>