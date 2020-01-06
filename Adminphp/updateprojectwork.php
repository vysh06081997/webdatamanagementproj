<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>

<body>


  <div>
    <h2>EDIT PROJECT WORK</h2>

    <form action="" id="editworkform" method="POST" >
      ProjectType:<br>
      <input type="text" name="ProjectType" placeholder="Project Type">
      <br>
	  ProjectName:<br>
      <input type="text" name="ProjectName" placeholder="Project Name">
      <br>
      <br>
      <br>
      <button>CLEAR</button>
      <button>UPDATE</button>

  
    </form>

  <div>

<?php
//header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
//header( 'Cache-Control: post-check=0, pre-check=0', false ); 
//header( 'Pragma: no-cache' ); 
 $showdiv = false;
 
if ( !empty($_POST['ProjectName'])) {
      $ProjectType = $_POST['ProjectType'];
      $ProjectName = $_POST['ProjectName'];

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("UPDATE projectwork SET projecttype='$ProjectType', projectname='$ProjectName'");
      $dbh->commit();
      print "Successfully updated";
      unset($_POST['ProjectType'],$_POST['ProjectName']);
      $showdiv = true;
    
    
      
}  
?>


<?php
 $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $dbh->beginTransaction();
$stmt = $dbh->prepare("SELECT projecttype, projectname FROM projectwork");
$stmt->execute();
$dbh->commit();

?>



<!-- style="display:none" -->
<div id="ProjectworksDisplay" style="display:<?php echo $showdiv == true ? 'block' : 'none' ?>">
<table >
    <thead>
        <tr>
            <th>projecttype</th>
            <th>projectname</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $stmt->fetch()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['projecttype']; ?></td>
            <td><?php echo $row['projectname']; ?></td>
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