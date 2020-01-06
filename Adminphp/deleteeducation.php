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
    <input type="submit" value="CLEAR">
    </div>
    </form>

<?php
$showdiv = false;
if  (!empty($_POST['UniversityName'])) {
    $UniversityName = $_POST['UniversityName'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM education WHERE University_Name='$UniversityName'");
      $dbh->commit();
      print "Successfully deleted";
	  unset($_POST['UniversityName']);
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
<div id="DeleteEducationDisplay" style="display:<?php echo $showdiv == true ? 'block' : 'none' ?>">
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