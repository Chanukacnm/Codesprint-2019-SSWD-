<?php
include ("db.php"); //include db.php file to connect to DB
$pagename="Search Results"; //create and populate variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

//create a $SQL variable and populate it with a SQL statement that retrieves product details
$SQL="select addId, addName, description,catagary, sellerId, price, state, image from adds";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
echo "<form>";
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array
echo "<a href=addview.php?u_add_id=".$arrayp['addId'].">";
echo "<img src=images/".$arrayp['image']." height=200 width=200></a>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h5>".$arrayp['addName']."</h5>"; //display advertisement name as contained in the array
echo "<p>".$arrayp['description']."</p>"; //display advertisement description as contained in the array
echo "<p><b>".$arrayp['price']."</b></p>"; //display advertisement description as contained in the array
echo "</td>";
echo "<td style='border: 0px'>";
echo "<p>" ;
echo "<input type = 'submit' value= 'Add to Cart'>";
echo "</tr>";
}
echo "</table>";
echo "</form>";
include("footfile.html"); //include head layout
echo "</body>";





?>