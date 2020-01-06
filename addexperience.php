<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>ADD EXPERIENCE</h2>

    <form action="" id="addexperienceform" method="POST">
      StartYear:<br>
      <input type="text" name="StartYear" placeholder="StartYear">
      <br>
      EndYear:<br>
      <input type="text" name="EndYear" placeholder="EndYear">
      <br>
      CompanyName:<br>
      <input type="text" name=" CompanyName" placeholder=" CompanyName">
      <br>
      Designation:<br>
      <input type="text" name="Designation" placeholder="Designation">
      <br>
      JobDescription:<br>
      <input type="text" name="JobDescription" placeholder="JobDescription">
      <br>
      <br>
      <br>
      <input type="submit" value="CLOSE">
      <input type="submit" value="ADD">
    </form>
  </div>

  </form>

  <div>
</body>
<?php
if (!empty($_POST['StartYear']) && !empty($_POST['CompanyName']) && !empty($_POST['Designation']) && !empty($_POST['JobDescription'])) {
      $StartYear = $_POST['StartYear'];
      $EndYear = $_POST['EndYear'];
      $CompanyName = $_POST['CompanyName'];
      $Designation = $_POST['Designation'];
      $JobDescription = $_POST['JobDescription'];

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("INSERT INTO `experience` (Start_Date,End_Date,Company_Name,Designation,Job_Description) VALUES('$StartYear','$EndYear','$CompanyName','$Designation','$JobDescription')");
      $dbh->commit();
      print "Successfully entered";
      print "$StartYear','$EndYear','$CompanyName','$Designation','$JobDescription";

       
      } 
    
?>

</html>