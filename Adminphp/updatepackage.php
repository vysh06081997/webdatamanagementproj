<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>
  <div>
    <h2>EDIT PACKAGE</h2>

    <form action="" id="editpackageform" method="POST">
      Name:<br>
      <input type="text" name="Name" placeholder="Name">
      <br>
      Amount:<br>
      <input type="text" name="Amount" placeholder="Amount">
      <br>
      Details:<br>
      <input type="text" name=" Details" placeholder="Details">
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
if (!empty($_POST['Name']) && !empty($_POST['Amount']) && !empty($_POST['Details'])) {
      $Name = $_POST['Name'];
      $Amount = $_POST['Amount'];
      $Details = $_POST['Details'];

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("UPDATE packagedetails SET Amount='$Amount', Details='$Details' WHERE Name='$Name'");
     
      $dbh->commit();
      print "Successfully updated";


       
      } 
    
?>
<?php
 $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $dbh->beginTransaction();
$stmt = $dbh->prepare("SELECT Name,Amount,Details FROM packagedetails");
$stmt->execute();
$dbh->commit();
?>
<div id="UpdatePackageDisplay" style="display:<?php echo $showdiv == true ? 'block' : 'none' ?>">
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