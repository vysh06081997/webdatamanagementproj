<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vysali Pughazhendi's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
      <h1 style="text-align: center; margin-bottom: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
        REFERENCES
      </h1>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-12">
      <div class="col-md-2"></div>
      <div class="col-md-3"><img src="images/Recommendation/R1.jpg" class="contactImg circle" /></div>
      <div class="col-md-5" style="text-align: left">
        <p style="text-align: left">
          "From a fellow designer in Italy I think you have some truly great work here. <br>
          So clean and simple yet personal with a lot of touches. Looking forward to your other posts!"</p>
        <p class="pull-left" style="font-style: italic; margin: 0px"> - Kevin</p>
      </div>
      <div class="col-md-2"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-12">
      <div class="col-md-2"></div>
      <div class="col-md-3"><img src="images/Recommendation/R2.jpg" class="contactImg circle" /></div>
      <div class="col-md-5" style="text-align: left">
        <p style="text-align: left">
          "Yes, i can find no words that could better describe this than "truly great work". <br>
          Well done you, Vysali!"</p>
        <p class="pull-left" style="font-style: italic; margin: 0px"> - Emma</p>
      </div>
      <div class="col-md-2"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-12">
      <div class="col-md-2"></div>
      <div class="col-md-3"><img src="images/Recommendation/R3.jpg" class="contactImg circle" /></div>
      <div class="col-md-5" style="text-align: left">
        <p style="text-align: left">
          "I'm in a Graphic Design class in High School atm doing research on Portfolios,<br>
          you've done an awesome job. I love your work!"</p>
        <p class="pull-left" style="font-style: italic; margin: 0px"> - Ronald</p>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

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
