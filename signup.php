<?php
session_start();
$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text
echo '
<form action=signup_process.php method=post>

<table style="width:100%, border: 0px; ">
  
  <tr >
	<td>*First Name</td>
	<td><input type="text" name="firstName" value=""></td>
  </tr>
  
   <tr >
	<td>*Last Name</td>
	<td><input type="text" name="lastName" value=""></td>
  </tr>
  
   <tr >
	<td>*Tel No</td>
	<td><input type="text" name="telNo" value=""></td>
  </tr>
  
   <tr >
	<td>*Email Address</td>
	<td><input type="text" name="email" value=""></td>
  </tr>
  
   <tr >
	<td>*Password</td>
	<td><input type="password" name="pw1" value=""></td>
  </tr>
  
  <tr >
	<td>*Confirm Password</td>
	<td><input type="password" name="pw2" value=""></td>
  </tr>
  
  <tr >
	<td><input type=submit value="Sign Up"></td>
	<td><input type=submit value="Clear Form"></td>
  </tr>

</table>
</form>
';
//include("footfile.html"); //include head layout
echo "</body>";
?>