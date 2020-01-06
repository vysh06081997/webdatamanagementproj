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
    <input type="submit" value="CLEAR">
    </div>
    </form>

<?php
$showdiv = false;
if  (!empty($_POST['CompanyName'])) {
    $CompanyName = $_POST['CompanyName'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM experience WHERE Company_Name='$CompanyName'");
      $dbh->commit();
      print "Successfully deleted";
      unset($_POST['CompanyName']);
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
<div id="DeleteExperienceDisplay" style="display:<?php echo $showdiv == true ? 'block' : 'none' ?>">
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