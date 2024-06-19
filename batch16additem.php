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
  $item_name=mysqli_real_escape_string($db, $_POST['batch16school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch16rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch16']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund16']);
  $status=mysqli_real_escape_string($db, $_POST['16status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon16']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec16']);
  $units=mysqli_real_escape_string($db, $_POST['units16']);
  $repair=mysqli_real_escape_string($db, $_POST['repair16']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair16']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost16']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces16']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace16']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost16']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep16']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep16']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost16']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen16']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen16']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost16']);
  $report=mysqli_real_escape_string($db, $_POST['report16']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate16']);
  $reason=mysqli_real_escape_string($db, $_POST['reason16']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks16']);
 
  
    $query = "INSERT INTO batch16 (batch16school_id, batch16rec, batch16, yearfund16, 16status, packcon16, packrec16, units16, repair16, specrepair16, repaircost16, replaces16, specreplace16, replacecost16, unrep16, specunrep16, unrepcost16, stolen16, specstolen16, stolencost16, report16, repdate16, reason16, remarks16) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch16table.php');
  
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