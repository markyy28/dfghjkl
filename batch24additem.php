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
  $item_name=mysqli_real_escape_string($db, $_POST['batch24school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch24rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch24']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund24']);
  $status=mysqli_real_escape_string($db, $_POST['24status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon24']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec24']);
  $units=mysqli_real_escape_string($db, $_POST['units24']);
  $repair=mysqli_real_escape_string($db, $_POST['repair24']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair24']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost24']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces24']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace24']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost24']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep24']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep24']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost24']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen24']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen24']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost24']);
  $report=mysqli_real_escape_string($db, $_POST['report24']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate24']);
  $reason=mysqli_real_escape_string($db, $_POST['reason24']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks24']);
 
  
    $query = "INSERT INTO batch24 (batch24school_id, batch24rec, batch24, yearfund24, 24status, packcon24, packrec24, units24, repair24, specrepair24, repaircost24, replaces24, specreplace24, replacecost24, unrep24, specunrep24, unrepcost24, stolen24, specstolen24, stolencost24, report24, repdate24, reason24, remarks24) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch24table.php');
  
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