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
  $item_name=mysqli_real_escape_string($db, $_POST['batch29school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch29rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch290']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund29']);
  $status=mysqli_real_escape_string($db, $_POST['29status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon29']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec29']);
  $units=mysqli_real_escape_string($db, $_POST['units29']);
  $repair=mysqli_real_escape_string($db, $_POST['repair29']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair29']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost29']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces29']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace29']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost29']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep29']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep29']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost29']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen29']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen29']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost29']);
  $report=mysqli_real_escape_string($db, $_POST['report29']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate29']);
  $reason=mysqli_real_escape_string($db, $_POST['reason29']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks29']);
 
  
    $query = "INSERT INTO batch29 (batch29school_id, batch29rec, batch290, yearfund29, 29status, packcon29, packrec29, units29, repair29, specrepair29, repaircost29, replaces29, specreplace29, replacecost29, unrep29, specunrep29, unrepcost29, stolen29, specstolen29, stolencost29, report29, repdate29, reason29, remarks29) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch29table.php');
  
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