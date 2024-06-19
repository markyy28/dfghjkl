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
  $item_name=mysqli_real_escape_string($db, $_POST['batch27school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch27rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch27']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund27']);
  $status=mysqli_real_escape_string($db, $_POST['27status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon27']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec27']);
  $units=mysqli_real_escape_string($db, $_POST['units27']);
  $repair=mysqli_real_escape_string($db, $_POST['repair27']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair27']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost27']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces27']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace27']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost27']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep27']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep27']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost27']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen27']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen27']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost27']);
  $report=mysqli_real_escape_string($db, $_POST['report27']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate27']);
  $reason=mysqli_real_escape_string($db, $_POST['reason27']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks27']);
 
  
    $query = "INSERT INTO batch27 (batch27school_id, batch27rec, batch27, yearfund27, 27status, packcon27, packrec27, units27, repair27, specrepair27, repaircost27, replaces27, specreplace27, replacecost27, unrep27, specunrep27, unrepcost27, stolen27, specstolen27, stolencost27, report27, repdate27, reason27, remarks27) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch27table.php');
  
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