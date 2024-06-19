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
  $item_name=mysqli_real_escape_string($db, $_POST['batch25school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch25rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch25']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund25']);
  $status=mysqli_real_escape_string($db, $_POST['25status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon25']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec25']);
  $units=mysqli_real_escape_string($db, $_POST['units25']);
  $repair=mysqli_real_escape_string($db, $_POST['repair25']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair25']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost25']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces25']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace25']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost25']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep25']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep25']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost25']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen25']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen25']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost25']);
  $report=mysqli_real_escape_string($db, $_POST['report25']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate25']);
  $reason=mysqli_real_escape_string($db, $_POST['reason25']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks25']);
 
  
    $query = "INSERT INTO batch25 (batch25school_id, batch25rec, batch25, yearfund25, 25status, packcon25, packrec25, units25, repair25, specrepair25, repaircost25, replaces25, specreplace25, replacecost25, unrep25, specunrep25, unrepcost25, stolen25, specstolen25, stolencost25, report25, repdate25, reason25, remarks25) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch25table.php');
  
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