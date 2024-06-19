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
  $item_name=mysqli_real_escape_string($db, $_POST['batch40school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch40rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch40']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund40']);
  $status=mysqli_real_escape_string($db, $_POST['40status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon40']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec40']);
  $units=mysqli_real_escape_string($db, $_POST['units40']);
  $repair=mysqli_real_escape_string($db, $_POST['repair40']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair40']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost40']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces40']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace40']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost40']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep40']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep40']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost40']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen40']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen40']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost40']);
  $report=mysqli_real_escape_string($db, $_POST['report40']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate40']);
  $reason=mysqli_real_escape_string($db, $_POST['reason40']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks40']);
 
  
    $query = "INSERT INTO batch40 (batch40school_id, batch40rec, batch40, yearfund40, 40status, packcon40, packrec40, units40, repair40, specrepair40, repaircost40, replaces40, specreplace40, replacecost40, unrep40, specunrep40, unrepcost40, stolen40, specstolen40, stolencost40, report40, repdate40, reason40, remarks40) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch40table.php');
  
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