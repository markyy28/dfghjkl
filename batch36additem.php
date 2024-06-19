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
  $item_name=mysqli_real_escape_string($db, $_POST['batch36school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch36rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch36']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund36']);
  $status=mysqli_real_escape_string($db, $_POST['36status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon36']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec36']);
  $units=mysqli_real_escape_string($db, $_POST['units36']);
  $repair=mysqli_real_escape_string($db, $_POST['repair36']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair36']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost36']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces36']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace36']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost36']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep36']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep36']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost36']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen36']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen36']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost36']);
  $report=mysqli_real_escape_string($db, $_POST['report36']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate36']);
  $reason=mysqli_real_escape_string($db, $_POST['reason36']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks36']);
 
  
    $query = "INSERT INTO batch36 (batch36school_id, batch36rec, batch36, yearfund36, 36status, packcon36, packrec36, units36, repair36, specrepair36, repaircost36, replaces36, specreplace36, replacecost36, unrep36, specunrep36, unrepcost36, stolen36, specstolen36, stolencost36, report36, repdate36, reason36, remarks36) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch36table.php');
  
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