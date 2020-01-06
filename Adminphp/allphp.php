<?php 
	session_start();

	// variable declaration
	$Start_Year = "";
	$End_Year = "";
	$University_Name = "";
	$Course = "";
	$Degree =""; 
	$Start_Date = "";
	$End_Date = "";
	$Company_Name ="";
	$Designation ="";
	$Job_Description="";
	$Name ="";
	$Amount ="";
	$Details = "";
	$projecttype = "";
	$projectname = "";
	$results="";
	$results1="";
	$query="";
	$query1="";
	$errors = array(); 
	$_SESSION['success'] = "";
	$host = "127.0.0.1:3306";

	// connect to database
	$db =  new PDO("mysql:host=127.0.0.1:3306;dbname=vysalipu_vysalipughazhendi_portfolio", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($lastname)) { array_push($errors, "Lastname is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (name,lastname,username, email, password) 
					  VALUES('$name','$lastname','$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// 


	// LOGIN USER
	if (isset($_POST['login_user'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0){
		    
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
		   if (mysqli_num_rows($results) == 1){
			    
			    $_SESSION['username'] = $username;
			    $_SESSION['password'] = $password;
			    $_SESSION['success'] = "You are now logged in"; 
			    header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
			    if($username=="nithya97")
			    {
			            header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/admin_hire.html');
			    }
			    
			else 
			{
	            array_push($errors, "Wrong username/password combination");
			}
				
		   }
		
		
			
			
			
		}
		
	    
    }
	
	
		
		
	

//CONTACT FORM
	if (isset($_POST['contact_us'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$message = mysqli_real_escape_string($db, $_POST['message']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($message)) { array_push($errors, "Message is required"); }

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO contactform (name, email, message) 
					  VALUES('$name', '$email', 'message')";
			mysqli_query($db, $query);

		
			header('location:admin_skill.html ');
		}

	}

//add to education
	if (isset($_POST['addeducation'])) {
		// receive all input values from the form
		$Start_Year = mysqli_real_escape_string($db, $_POST['Start_Year']);
		$End_Year = mysqli_real_escape_string($db, $_POST['End_Year']);
		$University_Name = mysqli_real_escape_string($db, $_POST['University_Name']);
		$Course = mysqli_real_escape_string($db, $_POST['Course']);
		$Degree = mysqli_real_escape_string($db, $_POST['Degree']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($Start_Year)) { array_push($errors, "Start_Year is required"); }
		if (empty($End_Year)) { array_push($errors, "End_Year is required"); }
		if (empty($University_Name)) { array_push($errors, "University_Name is required"); }
		if (empty($Course)) { array_push($errors, "Course is required"); }
		if (empty($Degree)) { array_push($errors, "Degree is required"); }
		
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO education (Start_Year,End_Year,University_Name,Course,Degree) 
					  VALUES('$Start_Year', '$End_Year', '$University_Name','$Course','$Degree')";
			mysqli_query($db, $query);
            	$_SESSION['message'] = "Education added"; 
		
			header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}

	}

//add to work experience 

	if (isset($_POST['addexperience'])) {
		// receive all input values from the form
		$Start_Date = mysqli_real_escape_string($db, $_POST['Start_Date']);
		$End_Date = mysqli_real_escape_string($db, $_POST['End_Date']);
		$Company_Name = mysqli_real_escape_string($db, $_POST['Company_Name']);
		$Designation = mysqli_real_escape_string($db, $_POST['Designation']);
		$Job_Description = mysqli_real_escape_string($db, $_POST['Job_Description']);
		
		// form validation: ensure that the form is correctly filled
		
		if (empty($Start_Date)) { array_push($errors, "Start_Date is required"); }
		if (empty($End_Date)) { array_push($errors, "End date is required"); }
		if (empty($Company_Name)) { array_push($errors, "Company_Name is required"); }
		if (empty($Designation)) { array_push($errors, "Designation is required"); }
		if (empty($Job_Description)) { array_push($errors, "Job_Description is required"); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO experience (Start_Date,End_Date,Company_Name,Designation,Job_Description) 
					  VALUES('$Start_Date','$End_Date', '$Company_Name','$Designation','$Job_Description')";
			mysqli_query($db, $query);
            	$_SESSION['message'] = "Work experience added"; 
		
			header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}

	}

//add to hireme

	if (isset($_POST['addpackage'])) {
		// receive all input values from the form
		$Name= mysqli_real_escape_string($db, $_POST['Name']);
		$Amount = mysqli_real_escape_string($db, $_POST['Amount']);
		$Details = mysqli_real_escape_string($db, $_POST['Details']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($Name )) { array_push($errors, "Name is required"); }
		if (empty($Amount)) { array_push($errors, "Amount  is required"); }
		if (empty($Details)) { array_push($errors, "Details  are required"); }
		
	
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO packagedetails info (Name,Amount,Details)
			VALUES('$Name', '$Amount', '$Details')";
			mysqli_query($db, $query);
            	$_SESSION['message'] = "a cart has been added"; 

			header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}

	}
//add to work
	if (isset($_POST['addprojectwork'])) {
		// receive all input values from the form
		$projecttype = mysqli_real_escape_string($db, $_POST['projecttype']);
		$projectname= mysqli_real_escape_string($db, $_POST['projectname']);
	
		
		// form validation: ensure that the form is correctly filled
		if (empty($projecttype )) { array_push($projecttype, "project type is required"); }
		if (empty($projectname)) { array_push($projectname, "project name is required"); }
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO projectwork (projecttype,projectname)
			VALUES('$projecttype', '$projectname')";
			mysqli_query($db, $query);
			$_SESSION['message'] = "Project Work added"; 


			header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}
    }

//modify contents to education table
if (isset($_POST['updateeducation'])) {
		// receive all input values from the form
		$Start_Year = mysqli_real_escape_string($db, $_POST['Start_Year']);
		$End_Year = mysqli_real_escape_string($db, $_POST['End_Year']);
		$University_Name = mysqli_real_escape_string($db, $_POST['University_Name']);
		$Course = mysqli_real_escape_string($db, $_POST['Course']);
		$Degree = mysqli_real_escape_string($db, $_POST['Degree']);
		
		// form validation: ensure that the modify  is correctly filled
		if (empty($Start_Year)) { array_push($errors, "Start_Year is required"); }
		if (empty($End_Year)) { array_push($errors, "End_Year is required"); }
		if (empty($University_Name)) { array_push($errors, "University_Name is required"); }
		if (empty($Course)) { array_push($errors, "Course is required"); }
		if (empty($Degree)) { array_push($errors, "Degree is required"); }
		
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE   education SET Start_Year='$Start_Year',End_Year='$End_Year' , University_Name='$University_Name' , Course = '$Course', Degree = '$Degree'";
					  
			mysqli_query($db, $query);
            	$_SESSION['message'] = "Education modified"; 
		
			header('location:  http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}

	}


//modify contents to worexperience table
if (isset($_POST['updateexperience'])) {
		// receive all input values from the form
		$Start_Date = mysqli_real_escape_string($db, $_POST['Start_Date']);
		$End_Date = mysqli_real_escape_string($db, $_POST['End_Date']);
		$Company_Name = mysqli_real_escape_string($db, $_POST['Company_Name']);
		$Designation = mysqli_real_escape_string($db, $_POST['Designation']);
		$Job_Description = mysqli_real_escape_string($db, $_POST['Job_Description']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($Start_Date)) { array_push($errors, "Start_Date is required"); }
		if (empty($End_Date)) { array_push($errors, "End date is required"); }
		if (empty($Company_Name)) { array_push($errors, "Company_Name is required"); }
		if (empty($Designation)) { array_push($errors, "Designation is required"); }
		if (empty($Job_Description)) { array_push($errors, "Job_Description is required"); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE experience SET Start_Date='$Start_Date',End_Date='$End_Date',Company_Name='$Company_Name',Designation='$Designation',Job_Description='$Job_Description'"; 
					 
			mysqli_query($db, $query);
            	$_SESSION['message'] = "Work experience has been added"; 
		
			header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}

    }

//modify to hireme

	if (isset($_POST['updatepackage'])) {
		// receive all input values from the form
		$Name= mysqli_real_escape_string($db, $_POST['Name']);
		$Amount = mysqli_real_escape_string($db, $_POST['Amount']);
		$Details = mysqli_real_escape_string($db, $_POST['Details']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($Name )) { array_push($errors, "Name is required"); }
		if (empty($Amount)) { array_push($errors, "Amount  is required"); }
		if (empty($Details)) { array_push($errors, "Details  are required"); }
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE  INTO packagedetails info SET Name='$Name',Amount='$Amount',Details='$Details'";
		
			mysqli_query($db, $query);
            	$_SESSION['message'] = "A cart has been modified"; 

			header('location:http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}

	
	}
	
	
//modify  work


	if (isset($_POST['updateprojectwork'])) {
		// receive all input values from the form
		$projecttype = mysqli_real_escape_string($db, $_POST['projecttype']);
		$projectname= mysqli_real_escape_string($db, $_POST['projectname']);
	
		
		// form validation: ensure that the form is correctly filled
		if (empty($projecttype )) { array_push($projecttype, "project type is required"); }
		if (empty($projectname)) { array_push($projectname, "project name is required"); }
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE  SET projecttype ='$projecttype' projectname='$projectname'";
			mysqli_query($db, $query);
			$_SESSION['message'] = "Work modified"; 
        header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}
	}
    
//delete from education


	if (isset($_POST['deleteeducation'])) {
		// receive all input values from the form
		
		$University_Name = mysqli_real_escape_string($db, $_POST['University_Name']);
		
		// form validation: ensure that the form is correctly filled
		
		if (empty($University_Name)) { array_push($errors, "Type the university to be deleted"); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "DELETE * FROM education WHERE University_Name=$University_Name";
			mysqli_query($db, $query);
            $_SESSION['message'] = " One row in Education  deleted"; 
		
			header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}
}
	
///delete from work experience 

	if (isset($_POST['deleteexperience'])) {
		// receive all input values from the form
		
		$Company_Name = mysqli_real_escape_string($db, $_POST['Company_Name']);
		
		
		
		// form validation: ensure that the form is correctly filled
	
		if (empty($Company_Name)) { array_push($errors, "Type the Companyname to be deleted"); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "DELETE * FROM experience WHERE Company_Name=$Company_Name";
			mysqli_query($db, $query);
            	$_SESSION['message'] = "One row  in Work experience is deleted"; 
		
			header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}
	}

	

//delete from  hireme

	if (isset($_POST['deletepackage'])) {
		// receive all input values from the form
		$Name= mysqli_real_escape_string($db, $_POST['Name']);
		
		
		// form validation: ensure that the form is correctly filled
		if (empty($Name )) { array_push($errors, "Name is required"); }
		
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "DELETE * FROM packagedetails info WHERE Name=$Name";
            	$_SESSION['message'] = "a cart has been deleted"; 

			header('location: http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}

		}


//delete from work
	if (isset($_POST['deleteprojectwork'])) {
		// receive all input values from the form
		$projecttype = mysqli_real_escape_string($db, $_POST['projecttype']);
		$projectname= mysqli_real_escape_string($db, $_POST['projectname']);
	
		
		// form validation: ensure that the form is correctly filled
		if (empty($projectname )) { array_push($projectname, "projectname is required"); }
		
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "DELETE * FROM projectwork WHERE projectname=$projectname";
			mysqli_query($db, $query);
			$_SESSION['message'] = "Deleted"; 


			header('location:http://vysalipughazhendi.uta.cloud/project4/Admin/HomePage.php');
		}
    }

?>