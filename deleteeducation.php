<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>DELETE EDUCATION</h2>

    <form action="" id="deleteeducationform" method="POST">
    UniversityName:<br>
    <input type="text" name="UniversityName" placeholder="Enter UniversityName">
    <br>
    <button>DELETE</button>
    <input type="submit" value="CLOSE">
    </div>
    </form>
</body>
<?php
if  (!empty($_POST['UniversityName'])) {
    $UniversityName = $_POST['UniversityName'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM education WHERE University_Name='$UniversityName'");
      $dbh->commit();
      print "Successfully deleted";


        
      } 
    
?>

</html>