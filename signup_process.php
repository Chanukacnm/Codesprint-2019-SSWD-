<?php
session_start();
include("db.php");
$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	
	
	if(!empty($_POST['firstName']) && !empty($_POST['lastName'])  && !empty($_POST['telNo']) && !empty($_POST['email']) || !empty($_POST['pw1']) || !empty($_POST['pw2'])) {
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$telno=$_POST['telNo'];
		if ($_POST['pw1'] != $_POST['pw2']){
			echo "<p><b> Sign-up failed!</b>";
			echo "<p> The 2 password are not matching";
			echo "<p> Make sure you enter them correctly";
			echo "<p> Go back to <a href='signup.php'>sign up</a>";
		}
		else{
			$pwOne=$_POST['pw1'];
			$pwTwo=$_POST['pw2'];
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
			if (preg_match($pattern,$_POST['email'])){
				$email=$_POST['email'];
				$SQL="Insert into users (userFName,userSName,userTelNo,userEmail,userPassword,userType) values('$firstName','$lastName','$telno','$email','$pwTwo','c')";
				$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
				$errorNo=mysqli_errno($conn);
				
				if ($errorNo==0){
					echo "<p>Sign-up successful!";
					echo "<p>To continue, please <a href='login.php'>login</a>";
				}
				else {
					if($errorNo==1062){
						echo "<p>Email has already been taken";
						echo "<p> Go back to <a href='signup.php'>sign up</a>";
					}
					if ($errorNo==1064) {
						echo "<p>Invalid characters such as ' and \ have been entered.";
						echo "<p> Go back to <a href='signup.php'>sign up</a>";
					}

				}
			}
			else {
				echo "<p><b> Sign-up failed!</b>";
				echo "<p> Email not valid";
				echo "<p> Make sure you enter a correct email address";
				echo "<p> Go back to <a href='signup.php'>sign up</a>";
			}
		}
	}
	else {
		echo "<p><b> Sign-up failed!</b>";
		echo "<p> Your signup form is incomplete and all fields are mandatory";
		echo "<p> Make sure you provide all the required details";
		echo "<p> Go back to <a href='signup.php'>sign up</a>";
	}
include("footfile.html"); //include head layout
echo "</body>";
?>