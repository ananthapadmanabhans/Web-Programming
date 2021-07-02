<?php

require 'dbconnection.php';

$SL_No = $_POST['SL_No'];
$Name = $_POST['Name'];
$Date = strval($_POST['Date']);
$Status = $_POST['Status'];

$query = "SELECT * FROM bookingstatus where Date='".$Date."'";

$result = mysqli_query($con,$query);


if(mysqli_num_rows($result)==0)
{

    #insertion
    $query = "INSERT INTO bookingstatus(SL_No,Name,Date,Status) VALUES ('".$SL_No."',".$Name.",'".$Date."','".$Status."')";

    $result = mysqli_query($con,$query);

    if($result)
    {
        echo "<script>alert('New registraion successful !')</script>";
    }
    else
    {
        echo "<script>alert('Database insertion failed! Please try again')</script>";
    }

}

else
{
    echo "<script>alert('Not VAccant')</script>";
}


echo "<a href='bodyphp.php'>Go Back to Lising Page</a>";

?>