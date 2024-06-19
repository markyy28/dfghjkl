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
  $item_name=mysqli_real_escape_string($db, $_POST['batch13school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch13rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch13']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund13']);
  $status=mysqli_real_escape_string($db, $_POST['13status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon13']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec13']);
  $units=mysqli_real_escape_string($db, $_POST['units13']);
  $repair=mysqli_real_escape_string($db, $_POST['repair13']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair13']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost13']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces13']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace13']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost13']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep13']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep13']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost13']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen13']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen13']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost13']);
  $report=mysqli_real_escape_string($db, $_POST['report13']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate13']);
  $reason=mysqli_real_escape_string($db, $_POST['reason13']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks13']);
 
  
    $query = "INSERT INTO batch13 (batch13school_id, batch13rec, batch13, yearfund13, 13status, packcon13, packrec13, units13, repair13, specrepair13, repaircost13, replaces13, specreplace13, replacecost13, unrep13, specunrep13, unrepcost13, stolen13, specstolen13, stolencost13, report13, repdate13, reason13, remarks13) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch13table.php');
  
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