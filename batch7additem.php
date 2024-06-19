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
  $item_name=mysqli_real_escape_string($db, $_POST['batch7school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch7rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch7']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund7']);
  $status=mysqli_real_escape_string($db, $_POST['7status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon7']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec7']);
  $units=mysqli_real_escape_string($db, $_POST['units7']);
  $repair=mysqli_real_escape_string($db, $_POST['repair7']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair7']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost7']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces7']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace7']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost7']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep7']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep7']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost7']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen7']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen7']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost7']);
  $report=mysqli_real_escape_string($db, $_POST['report7']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate7']);
  $reason=mysqli_real_escape_string($db, $_POST['reason7']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks7']);
 
  
    $query = "INSERT INTO batch7 (batch7school_id, batch7rec, batch7, yearfund7, 7status, packcon7, packrec7, units7, repair7, specrepair7, repaircost7, replaces7, specreplace7, replacecost7, unrep7, specunrep7, unrepcost7, stolen7, specstolen7, stolencost7, report7, repdate7, reason7, remarks7) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch7table.php');
  
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