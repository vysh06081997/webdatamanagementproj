<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>DELETE PACKAGE</h2>

    <form action="" id="deletepackageform" method="POST">
    PackageName:<br>
    <input type="text" name="PackageName" placeholder="Enter PackageName">
    <br>
    <button>DELETE</button>
    <input type="submit" value="CLOSE">
    </div>
    </form>
</body>
<?php
if  (!empty($_POST['PackageName'])) {
    $CompanyName = $_POST['PackageName'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM packagedetails WHERE Name='$PackageName'");
      $dbh->commit();
      print "Successfully deleted";


        
      } 
    
?>

</html>