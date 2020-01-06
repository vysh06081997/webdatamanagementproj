<?php
session_start();
$Start_Year = "";
  $End_Year = "";
  $University_Name = "";
  $Course = "";
  $Degree ="";
 $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $dbh->beginTransaction();
$a = $dbh->prepare("SELECT Start_Year,End_Year,University_Name,Course,Degree FROM education");
$a->execute();
$dbh->commit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
  <nav>
    <div class="col-md-2"
      style="margin:0px;padding:0px;padding-left:20px;padding-right:20px;color: white;font-family: Georgia, 'Times New Roman', Times, serif;font-weight: bold">
      Vysali Pughazhendi</div>
    <a class="tabHover" href="HomePage.php"><span class="glyphicon glyphicon-home"></span> HOME</a>
    <a class="tabHover" href="Skills.php"><span class="glyphicon glyphicon-cog"></span> MY SKILLS</a>
    <a class="tabHover" href="Recommendation.php"><span class="glyphicon glyphicon-thumbs-up"></span>
      RECOMMENDATION</a>
    <a class="tabHover" href="Works.php"><span class="glyphicon glyphicon-blackboard"></span> WORKS</a>
    <a class="tabHover" href="blog.php"><span class="glyphicon glyphicon-modal-window"></span> BLOG</a>
    <a class="tabHover" href="HireMe.php"><span class="glyphicon glyphicon-briefcase"></span> HIRE ME</a>
    <a class="tabHover" href="Contact.php"><span class="glyphicon glyphicon-earphone"></span> CONTACT ME</a>
    <a id="loginBtn" onclick="openLogin()"><span class="glyphicon glyphicon-user"></span>&nbsp; LOG IN</a>
    <a id="signUpBtn" onclick="openSignUp()"><span class="glyphicon glyphicon-log-in"></span> &nbsp;SIGN UP</a>
  </nav>
</head>

<body>
  <div style="text-align: center;width: 100%;padding-left:50px; display: inline-block" class="col-md-10">
    <div class="col-md-12">
      <div class="col-md-5">
        <h1 style="text-align: left; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
          SKILLS & <br>EXPERTISE
        </h1>
        <div style="color: grey">Visual Designer, Front-End Developer 3D Designer.
        </div>
        <br>
        <div style="height:300px;width:200px;" class="pull-left">
          <img src="images/AboutMe/profile 1.jpg" style="height:300px;width:300px;" />
        </div>
      </div>
      <div class="col-md-5">
        <table style="align-items: center">
          <tr>
            <td width="300px" style="padding-right: 30px;">
              <div><img src="" /></div><br>
              <div>
                <h6 style="text-align:left">BRANDING &nbsp;&nbsp;<span class="glyphicon glyphicon-send"></span></h6>
              </div>
              <div>
                <p style="text-align:left">Creating logos and posters for your company</p>
              </div>
            </td>
            <td width="300px">
              <div><img src="" /></div><br>
              <div>
                <h6 style="text-align:left">MARKETING &nbsp;&nbsp;<span class="glyphicon glyphicon-globe"></span> </h6>
              </div>
              <div>
                <p style="text-align:left">Trend designs for better experience of both images, logos and websites</p>
              </div>
            </td>
          </tr>
          <tr>
            <td width="300px" style="padding-right: 30px;">
              <div><img src="" /></div><br>
              <div>
                <h6 style="text-align:left">DESIGNING &nbsp;&nbsp;<span class="glyphicon glyphicon-pencil"></span> </h6>
              </div>
              <div>
                <p style="text-align:left">Maintaining the quality and productivity in the works to please my clients.
                </p>
              </div>
            </td>
            <td width="300px">
              <div><img src="" /></div><br>
              <div>
                <h6 style="text-align:left">PROGRAMMING &nbsp;&nbsp; <span
                    class="glyphicon glyphicon-modal-window"></span></h6>
              </div>
              <div>
                <p style="text-align:left">Developing applications and systems that meet the needs and streamline the
                  work and experience of
                  the users.</p>
              </div>
            </td>
          </tr>
        </table>
        <br>
        <br>
        <div>
          <h5><b style="color: grey">Smart Digital Solutions </b> A Front-End Developer<br></h5>
          <img src="images/AboutMe/device01.png" style="height:100px;width:120px;" />
          <img src="images/AboutMe/device02.png" style="height:100px;width:120px;" />
          <img src="images/AboutMe/device03.png" style="height:100px;width:120px;" />
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="col-md-12" style="border-top:solid;"><br><br>
      <h1 style="text-align: left; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
        EDUCATION
      </h1>
    </div>
    <br><br><br><br><br><br>
    <div class="col-md-1" style="text-align: left;padding-left:0px;padding-top:50px;">
      <a onclick="AddEducation()" id="AddEdu"><span class="glyphicon glyphicon-plus"></span>ADD</a><br>
      <a onclick="DeleteEducation()" id="DelEdu"><span class="glyphicon glyphicon-minus-sign"></span>DELETE</a><br>
      <a onclick="UpdateEducation()" id="EditEdu"><span class="glyphicon glyphicon-circle-arrow-up"></span>UPDATE</a>
    </div>
    <br><br><br><br><br><br>
     <?php while( $row = $a->fetch()) : ?>
    <div class="col-md-10" style="border-top:solid;"><br><br>
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
          <?php echo $row['Start_Year']; ?> <?php echo $row['End_Year'] ?>
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;"><?php echo $row['Course'] ?></h6>
      </div>
      <div class="col-md-5" style="text-align: left;padding-top:30px;">
        <h4 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
        <?php echo $row['Course'] ?> </h4> <br>
        <h6 style="text-align: center;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey">
          <?php echo $row['University_Name'] ?></h6>
      </div>
      <?php endwhile ?>
<?php
    $Start_Date = "";
  $End_Date = "";
  $Company_Name ="";
  $Designation ="";
  $Job_Description="";
  $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $dbh->beginTransaction();
$b = $dbh->prepare("SELECT Start_Date,End_Date,Company_Name,Designation,Job_Description FROM experience");
$b->execute();
$dbh->commit();
?>

    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <div class="col-md-12" style="border-top:solid;"><br><br>
      <h1 style="text-align: left; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
        WORK EXPERIENCE
      </h1>
    </div>
    <br><br><br><br><br><br>
    <div class="col-md-1" style="text-align: left;padding-left:0px;padding-top:50px;">
      <a onclick="AddExp()" id="WorkAdd"><span class="glyphicon glyphicon-plus"></span>ADD</a><br>
      <a onclick="DeleteExp()" id="DelWork"><span class="glyphicon glyphicon-minus-sign"></span>DELETE</a><br>
      <a onclick="UpdateExp()" id="EditWork"><span class="glyphicon glyphicon-circle-arrow-up"></span>UPDATE</a>
    </div>
    <br><br><br><br><br><br>
    <?php while( $row = $b->fetch()) : ?>
      <div class="col-md-10" style="border-top:solid;"><br><br>
      <div class="col-md-4" style="border-right:solid;">
        <h3 style="color:blue; font-family: Verdana, Geneva, Tahoma, sans-serif">
          <?php echo $row['Start_Date']; ?>  <?php echo $row['End_Date'] ?>
        </h3><br>
        <h6 style="color:grey;text-align:right;padding-right:50px;"><?php echo $row['Company_Name'] ?></h6>

      </div>
      <div class="col-md-5" style="text-align: left;padding-top:5px; padding-left: 50px;">
        <h4 style="text-align: left;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: white">
          <?php echo $row['Designation'] ?></h4>
        <br>
        <p
          style="text-align: left;margin:0px; font-family: Georgia, 'Times New Roman', Times, serif;color: grey;font-size:small;">
          <?php echo $row['Job_Description'] ?></h6>
        </p>
      </div>
      <?php endwhile ?>
<?php session_destroy() ?>
    </div>
  </div>

  <script>
    function openLogin() {
      var myWindow = window.open("login.php", "", "width=700,height=500,modal=yes")
    }
    function openSignUp() {
      var myWindow = window.open("signup.php", "", "width=700,height=500,modal=yes")
    }
	function AddEducation() {
      var myWindow = window.open("addeducation.php", "", "width=700,height=500,modal=yes")
    }
	function DeleteEducation() {
      var myWindow = window.open("deleteeducation.php", "", "width=700,height=500,modal=yes")
    }
	function UpdateEducation() {
      var myWindow = window.open("updateeducation.php", "", "width=700,height=500,modal=yes")
    }
	function AddExp() {
      var myWindow = window.open("addexperience.php", "", "width=700,height=500,modal=yes")
    }
	function DeleteExp() {
      var myWindow = window.open("deleteexperience.php", "", "width=700,height=500,modal=yes")
    }
	function UpdateExp() {
      var myWindow = window.open("updateexperience.php", "", "width=700,height=500,modal=yes")
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var spanWork = document.getElementsByClassName("close")[1];


  </script>
</body>

</html>
