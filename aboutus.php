<?php
session_start();
$pagename="Hit-Ad-the largest marketplace in Sri Lanka!"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text
echo "<p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more in <b>Sri Lanka</b>!";
include("footfile.html"); //include head layout
echo "</body>";
?>