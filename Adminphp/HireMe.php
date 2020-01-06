<?php
session_start();
$Name ="";
$Amount ="";
$Details = "";
$dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $dbh->beginTransaction();
$a = $dbh->prepare("SELECT Name,Amount,Details FROM packagedetails");
$a->execute();
$dbh->commit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vysali Pughazhendi's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="portfolio.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/roundSlider/1.3.2/roundslider.js"></script>
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
            <h1
                style="text-align: left; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
                HIRE ME
            </h1>
			<div class="col-md-1" style="text-align: left;padding-left:0px;padding-top:50px;">
      <a onclick="AddPackage()" id="AddPack"><span class="glyphicon glyphicon-plus"></span>ADD</a>
      <a onclick="DeletePackage()" id="DelPack">DELETE</a>
      <a onclick="UpdatePackage()" id="EditPack">UPDATE</a>
    </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <div style="align:left">
		<?php while( $row = $a->fetch()) : ?>
        <div class="col-md-10" style="border-top:solid;padding-top:50px;">
            <div class="col-md-4" style="border-right: solid;"><img style="height:170px;width:200px;" src="images/HireMe/car1.png"/>
                  </div>
            <div class="col-md-6" style="text-align: left; padding-left:50px;">
                <h3 style="text-align: left;margin:0px;"><?php echo $row['Amount'] ?></h3> <br>
                <p style="text-align: left"><?php echo $row['Name']?></p>
                <p style="color: white;text-align: left">
                   <?php echo $row['Details']?>
                </p>
                <p style="font-weight: bold;text-align: left">CONTACT US</p>
                 <?php endwhile ?>
                 <?php session_destroy() ?>

            </div>
        </div>
      </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="col-md-12">
            <h1
                style="text-align: left; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
                SKILLS & KNOWLEDGE</h1>
            <div class="col-md-5 pull-left">
                <h5 style="text-align: left">SOFTWARE</h5>
                <p style="text-align: left">HTML</p>
                <div class="skills html">90%</div>
                <p style="text-align: left">CSS</p>
                <div class="skills css">80%</div>
                <p style="text-align: left">JavaScript</p>
                <div class="skills js">65%</div>
                <p style="text-align: left">PHP</p>
                <div class="skills php">60%</div>
            </div>
            <div class="col-md-6 pull-left">
                <h5 style="text-align: left">RECOGNITION</h5>
                <div class="col-md-8">
                    <div class="col-md-2 pull-left" style="padding-top:10px;">
                        <span class="glyphicon glyphicon-picture" style="color: white; font-size: 50px;">
                        </span>
                    </div>
                    <div class="col-md-6">
                        <h6>INTERNATIONAL DESIGN AWARD</h6>
                        <p> 15th March 2014 / New York State University<br> Place 3</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-2 pull-left" style="padding-top:10px;">
                        <span class="glyphicon glyphicon-pencil" style="color: white; font-size: 50px;">
                        </span>
                    </div>
                    <div class="col-md-6">
                        <h6>LOGO DESIGN CONTEST</h6>
                        <p> 10th October 2016 / Chicago<br> Place 2</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-2 pull-left" style="padding-top:10px;">
                        <span class="glyphicon glyphicon-briefcase" style="color: white; font-size: 50px;">
                        </span>
                    </div>
                    <div class="col-md-6">
                        <h6>WEB DESIGN CONTEST</h6>
                        <p> 10th January 2018 / Baltimore<br> Place 2</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
        <div class="col-md-12">
            <div class="col-md-5">
                <h5 style="text-align: left">LANGUAGE SKILLS</h5>
                <br>
                <br>
                <div class="col-md-3" style="text-align: left;color: white">FRENCH </div>
                <div class="col-md-3" style="text-align: left;color: white">TAMIL </div>
                <div class="col-md-3" style="text-align: left;color: white">ENGLISH </div>
                <br>
                <br>
                <div class="col-md-3"><input type="range" id="myFrench"> </div>
                <div class="col-md-3"><input type="range" id="myTamil"> </div>
                <div class="col-md-3"><input type="range" id="myEnglish"> </div>

            </div>
            <div class="col-md-6 pull-left">
                <h5 style="text-align: left">KNOWLEGDE</h5>
                <div class="col-md-4">
                    <ul style="color: white;text-align: left">
                        <li>Google Analytics</li>
                        <li>Microsoft Azure</li>
                        <li>Amazon Web Services</li>
                        <li>Angular 4/6/8</li>
                        <li>Vue Js</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul style="color: white;text-align: left">
                        <li>Word Press</li>
                        <li>Adobe</li>
                        <li>PHP</li>
                        <li>Python</li>
                        <li>REST APIs</li>
                    </ul>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h5 style="text-align: left">HOBBIES AND INTEREST</h5>
                <br><br>
                <div class="col-md-10">
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-plane" style="color: white; font-size: 50px;"></span>
                    </div>
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-camera" style="color: white; font-size: 50px;"></span>
                    </div>
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-globe" style="color: white; font-size: 50px;"></span>
                    </div>
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-film" style="color: white; font-size: 50px;"></span>
                    </div>
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-tags" style="color: white; font-size: 50px;"></span>
                    </div>
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-heart" style="color: white; font-size: 50px;"></span>
                    </div>
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-headphones" style="color: white; font-size: 50px;"></span>
                    </div>
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-blackboard" style="color: white; font-size: 50px;"></span>
                    </div>
                    <div class="col-md-1">
                        <span class="glyphicon glyphicon-duplicate" style="color: white; font-size: 50px;"></span>
                    </div>
                </div>
                <br><br><br><br>
                <div class="col-md-10">
                    <div class="col-md-1" style="text-align: left;color: white">
                        TRAVEL
                    </div>
                    <div class="col-md-1" style="text-align: left;color: white">
                        PHOTOS
                    </div>
                    <div class="col-md-1" style="text-align: left;color: white">
                        MARKETING
                    </div>
                    <div class="col-md-1" style="text-align: left;color: white">
                        MOVIES
                    </div>
                    <div class="col-md-1" style="text-align: left;color: white">
                        SHOPPING
                    </div>
                    <div class="col-md-1" style="text-align: left;color: white">
                        FITNESS
                    </div>
                    <div class="col-md-1" style="text-align: left;color: white">
                        MUSIC
                    </div>
                    <div class="col-md-1" style="text-align: left;color: white">
                        TECHS
                    </div>
                    <div class="col-md-1" style="text-align: left;color: white">
                        HISTORY
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            $("#myFrench").roundSlider({
                sliderType: "min-range",
                handleShape: "round",
                width: 5, // width of the roundSlider
                radius: 30, // radius size
                value: 60 // value you want to apply
            });
            $("#myTamil").roundSlider({
                sliderType: "min-range",
                handleShape: "round",
                width: 5, // width of the roundSlider
                radius: 30, // radius size
                value: 100 // value you want to apply
            });
            $("#myEnglish").roundSlider({
                sliderType: "min-range",
                handleShape: "round",
                width: 5, // width of the roundSlider
                radius: 30, // radius size
                value: 100 // value you want to apply
            });

            function openLogin() {
                var myWindow = window.open("login.php", "", "width=700,height=500,modal=yes")
            }
            function openSignUp() {
                var myWindow = window.open("signup.php", "", "width=700,height=500,modal=yes")
            }
			function AddPackage() {
      var myWindow = window.open("addpackage.php", "", "width=700,height=500,modal=yes")
    }
	function DeletePackage() {
      var myWindow = window.open("deletepackage.php", "", "width=700,height=500,modal=yes")
    }
	function UpdatePackage() {
      var myWindow = window.open("updatepackage.php", "", "width=700,height=500,modal=yes")
    }

        </script>
</body>

</html>
