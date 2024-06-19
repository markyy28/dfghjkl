<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php


// initializing variables
$item_name = "";
$item_rec    = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

// Add item
if (isset($_POST['add'])) {
  // receive all input values from the form
  echo "connect";
  $item_name=mysqli_real_escape_string($db, $_POST['batch26school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch26rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch26']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund26']);
  $status=mysqli_real_escape_string($db, $_POST['26status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon26']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec26']);
  $units=mysqli_real_escape_string($db, $_POST['units26']);
  $repair=mysqli_real_escape_string($db, $_POST['repair26']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair26']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost26']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces26']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace26']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost26']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep26']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep26']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost26']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen26']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen26']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost26']);
  $report=mysqli_real_escape_string($db, $_POST['report26']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate26']);
  $reason=mysqli_real_escape_string($db, $_POST['reason26']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks26']);
 
  
    $query = "INSERT INTO batch26 (batch26school_id, batch26rec, batch26, yearfund26, 26status, packcon26, packrec26, units26, repair26, specrepair26, repaircost26, replaces26, specreplace26, replacecost26, unrep26, specunrep26, unrepcost26, stolen26, specstolen26, stolencost26, report26, repdate26, reason26, remarks26) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch26table.php');
  
}
?>
<!-->

<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<form method="POST" class="form-inline" action="additem.php">
  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" class="form-control" name="product_name">
    
  </div>
  <div class="form-group">
    <label for="name">Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div>
        <label for="name">Quantity</label>
        <input type="number" name="quant" id="quant" min="1" max="">
    </div>
  <button type="submit" class="btn btn-default" name="add">Add item</button>
</form> 

<div>
<a href="table.php">Home</a>
</div>
</body>
</html>
<!-->