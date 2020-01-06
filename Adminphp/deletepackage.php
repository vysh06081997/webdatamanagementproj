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
    <input type="submit" value="CLEAR">
    </div>
    </form>

<?php
$showdiv = false;
if  (!empty($_POST['PackageName'])) {
    $PackageName = $_POST['PackageName'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM packagedetails WHERE Name='$PackageName'");
      $dbh->commit();
      print "Successfully deleted";
      unset($_POST['PackageName']);
      $showdiv = true;

        
      } 
    
?>
<?php
 $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $dbh->beginTransaction();
$stmt = $dbh->prepare("SELECT Name,Amount,Details FROM packagedetails");
$stmt->execute();
$dbh->commit();
?>
<div id="DeletePackageDisplay" style="display:<?php echo $showdiv == true ? 'block' : 'none' ?>">
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $stmt->fetch()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Amount']; ?></td>
            <td><?php echo $row['Details'];?></td>
            
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