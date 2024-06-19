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
  $item_name=mysqli_real_escape_string($db, $_POST['batch33school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch33rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch33']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund33']);
  $status=mysqli_real_escape_string($db, $_POST['33status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon33']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec33']);
  $units=mysqli_real_escape_string($db, $_POST['units33']);
  $repair=mysqli_real_escape_string($db, $_POST['repair33']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair33']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost33']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces33']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace33']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost33']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep33']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep33']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost33']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen33']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen33']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost33']);
  $report=mysqli_real_escape_string($db, $_POST['report33']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate33']);
  $reason=mysqli_real_escape_string($db, $_POST['reason33']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks33']);
 
  
    $query = "INSERT INTO batch33 (batch33school_id, batch33rec, batch33, yearfund33, 33status, packcon33, packrec33, units33, repair33, specrepair33, repaircost33, replaces33, specreplace33, replacecost33, unrep33, specunrep33, unrepcost33, stolen33, specstolen33, stolencost33, report33, repdate33, reason33, remarks33) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch33table.php');
  
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