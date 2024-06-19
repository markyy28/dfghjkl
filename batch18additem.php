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
  $item_name=mysqli_real_escape_string($db, $_POST['batch18school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch18rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch18']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund18']);
  $status=mysqli_real_escape_string($db, $_POST['18status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon18']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec18']);
  $units=mysqli_real_escape_string($db, $_POST['units18']);
  $repair=mysqli_real_escape_string($db, $_POST['repair18']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair18']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost18']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces18']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace18']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost18']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep18']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep18']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost18']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen18']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen18']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost18']);
  $report=mysqli_real_escape_string($db, $_POST['report18']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate18']);
  $reason=mysqli_real_escape_string($db, $_POST['reason18']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks18']);
 
  
    $query = "INSERT INTO batch18 (batch18school_id, batch18rec, batch18, yearfund18, 18status, packcon18, packrec18, units18, repair18, specrepair18, repaircost18, replaces18, specreplace18, replacecost18, unrep18, specunrep18, unrepcost18, stolen18, specstolen18, stolencost18, report18, repdate18, reason18, remarks18) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: batch18table.php');
  
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