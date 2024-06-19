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
  $item_name=mysqli_real_escape_string($db, $_POST['batch30school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch30rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch30']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund30']);
  $status=mysqli_real_escape_string($db, $_POST['30status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon30']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec30']);
  $units=mysqli_real_escape_string($db, $_POST['units30']);
  $repair=mysqli_real_escape_string($db, $_POST['repair30']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair30']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost30']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces30']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace30']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost30']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep30']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep30']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost30']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen30']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen30']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost30']);
  $report=mysqli_real_escape_string($db, $_POST['report30']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate30']);
  $reason=mysqli_real_escape_string($db, $_POST['reason30']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks30']);
 
  
    $query = "INSERT INTO batch30 (batch30school_id, batch30rec, batch30, yearfund30, 30status, packcon30, packrec30, units30, repair30, specrepair30, repaircost30, replaces30, specreplace30, replacecost30, unrep30, specunrep30, unrepcost30, stolen30, specstolen30, stolencost30, report30, repdate30, reason30, remarks30) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch30table.php');
  
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