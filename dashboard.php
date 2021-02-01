<?php
include ("db.php");  //include db.php file to connect to DB
$pagename="HitAd";

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
//include ("headfile.html"); //include header layout file
//include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//search bar

echo"<h2>Catagories</h2>";
echo "<a href='searchresults.php'> Vehicles</a><br>";
echo "<a href='searchresults.php'> Property</a><br>";
echo "<a href='searchresults.php'> Electronics</a><br>";
echo "<a href='searchresults.php'> Mobiles</a><br>";
echo "<a href='searchresults.php'> Computer</a><br>";
echo "<a href='searchresults.php'> Travel</a><br>";

include("footfile.html"); //include head layout
echo "</body>";
?>
