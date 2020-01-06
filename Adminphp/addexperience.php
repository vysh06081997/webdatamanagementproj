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
      <input type="submit" value="CLEAR">
      <input type="submit" value="ADD">
    </form>
  </div>

  </form>

  <div>
<?php
$showdiv = false;
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
	  unset($_POST['StartYear'],$_POST['EndYear'],$_POST['CompanyNameName'],$_POST['Designation'],$_POST['JobDescription']);
      $showdiv = true;

       
      } 
    
?>
<?php
 $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $dbh->beginTransaction();
$stmt = $dbh->prepare("SELECT Start_Date,End_Date,Company_Name,Designation,Job_Description FROM experience");
$stmt->execute();
$dbh->commit();
?>
<div id="ExperienceDetailsDisplay" style="display:<?php echo $showdiv == true ? 'block' : 'none' ?>">
<table>
    <thead>
        <tr>
            <th>Start_Date</th>
            <th>End_Date</th>
            <th>Company_Name</th>
            <th>Designation</th>
            <th>Job_Description</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $stmt->fetch()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Start_Date']; ?></td>
            <td><?php echo $row['End_Date']; ?></td>
            <td><?php echo $row['Company_Name'];?></td>
            <td><?php echo $row['Designation'];?></td>
            <td><?php echo $row['Job_Description'];?></td>
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