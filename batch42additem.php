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
  $item_name=mysqli_real_escape_string($db, $_POST['batch42school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch42rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch42']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund42']);
  $status=mysqli_real_escape_string($db, $_POST['42status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon42']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec42']);
  $units=mysqli_real_escape_string($db, $_POST['units42']);
  $repair=mysqli_real_escape_string($db, $_POST['repair42']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair42']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost42']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces42']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace42']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost42']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep42']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep42']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost42']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen42']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen42']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost42']);
  $report=mysqli_real_escape_string($db, $_POST['report42']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate42']);
  $reason=mysqli_real_escape_string($db, $_POST['reason42']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks42']);
 
  
    $query = "INSERT INTO batch42 (batch42school_id, batch42rec, batch42, yearfund42, 42status, packcon42, packrec42, units42, repair42, specrepair42, repaircost42, replaces42, specreplace42, replacecost42, unrep42, specunrep42, unrepcost42, stolen42, specstolen42 , stolencost42, report42, repdate42, reason42, remarks42) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch42table.php');
  
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