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
  $item_name=mysqli_real_escape_string($db, $_POST['batch31school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch31rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch31']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund31']);
  $status=mysqli_real_escape_string($db, $_POST['31status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon31']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec31']);
  $units=mysqli_real_escape_string($db, $_POST['units31']);
  $repair=mysqli_real_escape_string($db, $_POST['repair31']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair31']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost31']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces31']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace31']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost31']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep31']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep31']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost31']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen31']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen31']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost31']);
  $report=mysqli_real_escape_string($db, $_POST['report31']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate31']);
  $reason=mysqli_real_escape_string($db, $_POST['reason31']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks31']);
 
  
    $query = "INSERT INTO batch31 (batch31school_id, batch31rec, batch31, yearfund31, 31status, packcon31, packrec31, units31, repair31, specrepair31, repaircost31, replaces31, specreplace31, replacecost31, unrep31, specunrep31, unrepcost31, stolen31, specstolen31, stolencost31, report31, repdate31, reason31, remarks31) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch31table.php');
  
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