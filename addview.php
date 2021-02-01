<?php
session_start();
include("db.php"); 
$pagename="Advertisement"; 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 
echo "<title>".$pagename."</title>"; 
echo "<body>";
include ("headfile.html"); 
echo "<h4>".$pagename."</h4>"; 
$addid=$_GET['u_add_id']; 
 

//create a $SQL variable and populate it with a SQL statement that retrieves advertisement details
$SQL="select addId, addName, description,catagary, sellerId, price, state, image from add where addId= $addid";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
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
echo "<p><b>£".$arrayp['price']."</b></p>"; //display advertisement price as contained in the array

 
echo "<form method=post>";

echo "</select> ";
echo "<input type=submit value='ADD TO Cart' name='addTocart'>"; 
echo "<input type=hidden name=h_addid value=".$addid.">";
echo "</form>"; 
echo "</td>";

echo "</tr>";
}
echo "</table>";
include("footfile.html"); //include head layout
echo "</body>";
?>