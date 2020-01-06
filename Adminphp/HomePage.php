<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>
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

<body style="height:500px;width:100%;background-image: url('images/HomePage/16.jpg');background-size: 1500px 700px;">



  <h1 style="font-family: Georgia, 'Times New Roman', Times, serif; padding-top: 100px">Welcome To my Website</h1>
  <br>
  <p style="font-family: Georgia, 'Times New Roman', Times, serif">
    It is a great pleasure for me to receive your visit and that my professional information <br> is of your liking and
    meets what you are looking for.
    </div>
    <br>
    <br>
    <br>
    <button class="download"><a style="color: lightskyblue;  text-decoration: none;"
        href="VP Resume.pdf" download="Vysali_Pughazhendi_Resume.pdf">
        <span class="glyphicon glyphicon-save" width="10px" height="10px"></span> DOWNLOAD RESUME
      </a>
    </button>
  </p>

  <!-- <img src="images/HomePage/Welcome.png" style="padding-left:500px"> -->
  <div style="height: 400px;width:200px"></div>
  <footer>
    <p><b>Posted by:</b> Vysali Pughazhendi <img src="email.png" height="20px" width="20px"><a
        href="mailto:vysali.pughazhendi@gmail.com"
        style="padding:0px;  text-decoration: none;">vysali.pughazhendi@gmail.com</a></p>
  </footer>
  <script>

    function openLogin() {
                var myWindow = window.open("login.php", "", "width=700,height=500,modal=yes")
            }
            function openSignUp() {
                var myWindow = window.open("signup.php", "", "width=700,height=500,modal=yes")
            }
  </script>
</body>

</html>
