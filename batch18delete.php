
<?php
$db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['id']))



{

$result = mysqli_query($db,"DELETE FROM batch18 WHERE batch18_id=".$_GET['id']);
if($result==true)
	echo "sucess";
header("Location:batch18table.php");
}


?>