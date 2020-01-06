<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>DELETE EXPERIENCE</h2>

    <form action="" id="deleteexperienceform" method="POST">
    CompanyName:<br>
    <input type="text" name="CompanyName" placeholder="Enter CompanyName">
    <br>
    <button>DELETE</button>
    <input type="submit" value="CLOSE">
    </div>
    </form>
</body>
<?php
if  (!empty($_POST['CompanyName'])) {
    $CompanyName = $_POST['CompanyName'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM experience WHERE Company_Name='$CompanyName'");
      $dbh->commit();
      print "Successfully deleted";


        
      } 
    
?>

</html>