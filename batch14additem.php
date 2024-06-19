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
  $item_name=mysqli_real_escape_string($db, $_POST['batch14school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch14rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch14']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund14']);
  $status=mysqli_real_escape_string($db, $_POST['14status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon14']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec14']);
  $units=mysqli_real_escape_string($db, $_POST['units14']);
  $repair=mysqli_real_escape_string($db, $_POST['repair14']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair14']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost14']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces14']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace14']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost14']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep14']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep14']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost14']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen14']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen14']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost14']);
  $report=mysqli_real_escape_string($db, $_POST['report14']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate14']);
  $reason=mysqli_real_escape_string($db, $_POST['reason14']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks14']);
 
  
    $query = "INSERT INTO batch14 (batch14school_id, batch14rec, batch14, yearfund14, 14status, packcon14, packrec14, units14, repair14, specrepair14, repaircost14, replaces14, specreplace14, replacecost14, unrep14, specunrep14, unrepcost14, stolen14, specstolen14, stolencost14, report14, repdate14, reason14, remarks14) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch14table.php');
  
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