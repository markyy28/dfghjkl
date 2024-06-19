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
  $item_name=mysqli_real_escape_string($db, $_POST['batch38school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch38rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch38']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund38']);
  $status=mysqli_real_escape_string($db, $_POST['38status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon38']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec38']);
  $units=mysqli_real_escape_string($db, $_POST['units38']);
  $repair=mysqli_real_escape_string($db, $_POST['repair38']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair38']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost38']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces38']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace38']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost38']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep38']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep38']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost38']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen38']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen38']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost38']);
  $report=mysqli_real_escape_string($db, $_POST['report38']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate38']);
  $reason=mysqli_real_escape_string($db, $_POST['reason38']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks38']);
 
  
    $query = "INSERT INTO batch38 (batch38school_id, batch38rec, batch38, yearfund38, 38status, packcon38, packrec38, units38, repair38, specrepair38, repaircost38, replaces38, specreplace38, replacecost38, unrep38, specunrep38, unrepcost38, stolen38, specstolen38, stolencost38, report38, repdate38, reason38, remarks38) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch38table.php');
  
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