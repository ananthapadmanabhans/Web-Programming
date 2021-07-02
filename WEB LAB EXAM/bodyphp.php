<?php 

require 'dbconnection.php';

$query = "SELECT * FROM bookingstatus";


$result = mysqli_query($con,$query);
echo'<!DOCTYPE html><html lang="en"><head>';
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">';
echo '</head><body>';
echo "<h2 style='align-content: center; color:#00888;'>Convension Center List</h2>";
echo "<table>";
echo "<form action='insertion.php' method='post'>";
echo '<tr><td>SL NO: </td><td><input type="number" name="SL_No"></td></tr>';
echo "<tr><td>Name: </td><td><input type='text' name='Name'></td></tr>";

echo '<tr><td>Select Date: </td><td><input type="date" name="Date"></td></tr>';
echo '<tr><td>Status: </td><td><input type="text" name="Status"></td></tr>';
echo '<tr><td><input type="submit" value="Insert"></td></tr>';
echo '</form></table>';
echo '<br><br>';
echo '';



if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo '<table style="border: 2cm; padding: auto; border-spacing: 2ch;">';
        echo "<tr>";
        echo "<td>".$row["SL_No"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        
        echo "<td>".$row["Date"]."</td>";
        echo "<td>".$row["Status"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</body></html>";
}

?>