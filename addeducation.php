<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>ADD EDUCATION</h2>

    <form action="" id="addeducationform" method="POST">
      StartYear:<br>
      <input type="text" name="StartYear" placeholder="StartYear">
      <br>
      EndYear:<br>
      <input type="text" name="EndYear" placeholder="EndYear">
      <br>
      UniversityName:<br>
      <input type="text" name=" UniversityName" placeholder=" UniversityName">
      <br>
      Course:<br>
      <input type="text" name="Course" placeholder="Course Name">
      <br>
      Degree:<br>
      <input type="text" name="Degree" placeholder="Degree">
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
if (!empty($_POST['StartYear']) && !empty($_POST['UniversityName']) && !empty($_POST['Course']) && !empty($_POST['Degree'])) {
      $StartYear = $_POST['StartYear'];
      $EndYear = $_POST['EndYear'];
      $UniversityName = $_POST['UniversityName'];
      $Course = $_POST['Course'];
      $Degree = $_POST['Degree'];

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("INSERT INTO `education` (Start_year,End_Year,University_Name,Course,Degree) VALUES('$StartYear','$EndYear','$UniversityName','$Course','$Degree')");
      $dbh->commit();
      print "'$StartYear','$EndYear','$UniversityName','$Course','$Degree'";
      print "Successfully entered";


        
      } 
    
?>

</html>