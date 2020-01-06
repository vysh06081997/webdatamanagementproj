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

    <div class="container">
        <div class="col-md-4">
            <h1 style="text-align: right; margin-bottom: 0px">MY CUSTOMERS</h1>
            <p style="font-style: italic; margin-bottom: 0px">"The more you engage with customers the clearer things
                become and the easier it is to determine
                what you should be doing </p>
            <p class="pull-right" style="font-style: italic; margin: 0px"> - Kevin Stirtz</p>
        </div>
        <div class="col-md-8" style="padding-left:10px">
            <div class="col-md-2" style="padding-left:10px">
                <img class="contactImg" src="images/Contact/logo-1.png" />
            </div>
            <div class="col-md-2" style="padding-left:10px">
                <img class="contactImg" src="images/Contact/logo-2.png" />
            </div>
            <div class="col-md-2" style="padding-left:30px">
                <img class="contactImg" src="images/Contact/logo-3.png" />
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-2" style="padding-left:10px">
                <img class="contactImg" src="images/Contact/logo-4.png" />
            </div>
            <div class="col-md-2" style="padding-left:10px">
                <img class="contactImg" src="images/Contact/logo-5.png" />
            </div>
            <div class="col-md-2" style="padding-left:30px">
                <img class="contactImg" src="images/Contact/logo-1.png" />
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-8" style="padding-left: 150px;">
            <h3> CONTACT ME</h3>
         <!--    <button id="pjtDiscBtn" style="border: none;color: lightgrey; background-color: black" onclick=""> Have a
                project to discuss? <span class="glyphicon glyphicon-info-sign"></span></button>-->
			<a id="ProjectBtn" onclick="openProject()"><span class="glyphicon glyphicon-info-sign"></span>&nbsp; Have a project to discuss ?</a>	
            <br>
            <img src="images/Contact/Contact-me.png" class="contactImg circle">
            <h4 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> Vysali Pughazhendi
            </h4>
            <p style="font-style: italic"><span class="glyphicon glyphicon-envelope"
                    style="color: white"></span>&nbsp;<a href="#" onclick="sendMail()">vysali.pughazhendi@gmail.com</a>
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <!-- <div id="projectDiscussion" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Have a Project you'd like to discuss</h2>
            </div>
            <div class="modal-body">
                <form action="mailto:vysali.pughazhendi@gmail.com" method="post" enctype="text/plain">
                  Name:<br>
                 <input type="text" name="name"><br>
                 E-mail:<br>
                 <input type="text" name="mail"><br>
                 Comment:<br>
<input type="text" name="comment" size="200"><br><br>

                    <button style="background-color: black;color:white;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode',
                Geneva, Verdana, sans-serif" type="submit">SEND</button>
                </form>
            </div>
        </div>
    </div> -->
    <script>
        
        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        //Email Function
        function sendMail() {
            var link = "mailto:vysali.pughazhendi@gmail.com" +
                "?cc=vysali.pughazhendi@gmail.com" +
                "&subject=" + escape("Project Discussion") +
                "&body=" + escape("I would like to discuss regarding a project with you!!!");
            window.location.href = link;
        }
		 function openProject() {
            var myWindow = window.open("projectdiscuss.php", "", "width=700,height=500,modal=yes")
        }
        
        function openLogin() {
            var myWindow = window.open("login.php", "", "width=700,height=500,modal=yes")
        }
        function openSignUp() {
            var myWindow = window.open("signup.php", "", "width=700,height=500,modal=yes")
        }
    
    </script>

          <a class="tabHover" href="HomePage.php"><span class="glyphicon glyphicon-home"></span> HOME</a>
          <a class="tabHover" href="Skills.php"><span class="glyphicon glyphicon-cog"></span> MY SKILLS</a>
          <a class="tabHover" href="Recommendation.php"><span class="glyphicon glyphicon-thumbs-up"></span>
              RECOMMENDATION</a>
          <a class="tabHover" href="Works.php"><span class="glyphicon glyphicon-blackboard"></span> WORKS</a>
          <a class="tabHover" href="blog.php"><span class="glyphicon glyphicon-modal-window"></span> BLOG</a>
          <a class="tabHover" href="HireMe.php"><span class="glyphicon glyphicon-briefcase"></span> HIRE ME</a>
          <a class="tabHover" href="Contact.php"><span class="glyphicon glyphicon-earphone"></span> CONTACT ME</a>


</body>


</html>
