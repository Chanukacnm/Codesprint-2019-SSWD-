<?php
session_start();
include("db.php");
$pagename="Your Addition Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	
	
	//if(!empty($_POST['firstName']) || !empty($_POST['lastName']) || !empty($_POST['address']) || !empty($_POST['postcode']) || !empty($_POST['telNo']) || !empty($_POST['email']) || !empty($_POST['pw1']) || !empty($_POST['pw2'])) {
        $name = $_POST['Name'];
        $desc = $_POST['Dsec'];
        $cat = $_POST['cat'];
        $seller = $_POST['sellerId'];
        $price = $_POST['price'];

        $SQL = "Insert into adds (addName,description,catagary,sellerId,price,state) values('$name','$desc','$cat','$seller','$price','not confirmed')";
        $exeSQL = mysqli_query($conn, $SQL) or die (mysqli_error($conn));
        $errorNo = mysqli_errno($conn);

include("footfile.html"); //include head layout
echo "</body>";
 ?>