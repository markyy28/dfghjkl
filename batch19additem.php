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
  $item_name=mysqli_real_escape_string($db, $_POST['batch9school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch9rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch9']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund9']);
  $status=mysqli_real_escape_string($db, $_POST['9status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon9']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec9']);
  $units=mysqli_real_escape_string($db, $_POST['units9']);
  $repair=mysqli_real_escape_string($db, $_POST['repair9']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair9']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost9']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces9']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace9']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost9']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep9']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep9']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost9']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen9']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen9']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost9']);
  $report=mysqli_real_escape_string($db, $_POST['report9']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate9']);
  $reason=mysqli_real_escape_string($db, $_POST['reason9']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks9']);
 
  
    $query = "INSERT INTO batch19 (batch9school_id, batch9rec, batch9, yearfund9, 9status, packcon9, packrec9, units9, repair9, specrepair9, repaircost9, replaces9, specreplace9, replacecost9, unrep9, specunrep9, unrepcost9, stolen9, specstolen9, stolencost9, report9, repdate9, reason9, remarks9) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch19table.php');
  
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