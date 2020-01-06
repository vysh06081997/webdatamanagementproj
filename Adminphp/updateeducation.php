<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>EDIT EDUCATION</h2>

    <form action="" id="updateeducationform" method="POST">
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
      <input type="submit" value="CLEAR">
      <input type="submit" value="UPDATE">
    </form>
  </div>

  </form>

  <div>
<?php
 $showdiv = false;
if (!empty($_POST['StartYear']) && !empty($_POST['UniversityName']) && !empty($_POST['Course']) && !empty($_POST['Degree'])) {
      $StartYear = $_POST['StartYear'];
      $EndYear = $_POST['EndYear'];
      $UniversityName = $_POST['UniversityName'];
      $Course = $_POST['Course'];
      $Degree = $_POST['Degree'];

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("UPDATE education SET Start_Year='$StartYear', End_Year='$EndYear', Course='$Course', Degree='$Degree' WHERE University_Name='$UniversityName'");
      $dbh->commit();
      print "Successfully Updated";
	   unset($_POST['StartYear'],$_POST['EndYear'],$_POST['UniversityName'],$_POST['Course'],$_POST['Degree']);
      $showdiv = true;


        
      } 
    
?>
<?php
 $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $dbh->beginTransaction();
$stmt = $dbh->prepare("SELECT Start_Year, End_Year, University_Name, Course, Degree FROM education");
$stmt->execute();
$dbh->commit();
?>
<div id="UpdateEducationDisplay" style="display:<?php echo $showdiv == true ? 'block' : 'none' ?>">
<table>
    <thead>
        <tr>
            <th>Start_Year</th>
            <th>End_Year</th>
            <th>University_Name</th>
            <th>Course</th>
            <th>Degree</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $stmt->fetch()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Start_Year']; ?></td>
            <td><?php echo $row['End_Year']; ?></td>
            <td><?php echo $row['University_Name'];?></td>
            <td><?php echo $row['Course'];?></td>
            <td><?php echo $row['Degree'];?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
        </table>
		</div>

 <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
        
</body>

</html>