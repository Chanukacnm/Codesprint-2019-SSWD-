<?php
session_start();
$pagename="Add Advertisement"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); 
echo "<h4>".$pagename."</h4>";
echo "<table style='border: 0px'>";
echo "<form method=post action= add_process.php>";

echo "<tr>";
echo "<td style='border: 0px'>";
echo "<label>*Name</label>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<input type=text name='Name'>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border: 0px'>";
echo "<label>*Description</label>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<input type=text name='Desc'>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border: 0px'>";
echo "<label>*Category</label>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<input type=text name='cat'>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border: 0px'>";
echo "<label>*SellerId</label>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<input type=text name='sellerId'>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border: 0px'>";
echo "<label>*price</label>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<input type=text name='price'>";
echo "</td>";
echo "</tr>";


echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border: 0px'>";
echo "<input type=submit name='signup' value='ADD'>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<input type=reset name='clearForm' value='Clear Form'>";
echo "</td>";
echo "</tr>";

echo "</form>";
echo "</table>";

include("footfile.html"); //include head layout
echo "</body>";
?>