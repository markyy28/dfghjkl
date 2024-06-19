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
  $item_name=mysqli_real_escape_string($db, $_POST['batchuschool_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batchurec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batchu']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfundu']);
  $status=mysqli_real_escape_string($db, $_POST['ustatus']);
  $packcon=mysqli_real_escape_string($db, $_POST['packconu']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrecu']);
  $units=mysqli_real_escape_string($db, $_POST['unitsu']);
  $repair=mysqli_real_escape_string($db, $_POST['repairu']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepairu']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircostu']);
  $replaces=mysqli_real_escape_string($db, $_POST['replacesu']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplaceu']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecostu']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrepu']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrepu']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcostu']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolenu']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolenu']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencostu']);
  $report=mysqli_real_escape_string($db, $_POST['reportu']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdateu']);
  $reason=mysqli_real_escape_string($db, $_POST['reasonu']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarksu']);
 
  
    $query = "INSERT INTO ultra (batchuschool_id, batchurec, batchu, yearfundu, ustatus, packconu, packrecu, unitsu, repairu, specrepairu, repaircostu, replacesu, specreplaceu, replacecostu, unrepu, specunrepu, unrepcostu, stolenu, specstolenu, stolencostu, reportu, repdateu, reasonu, remarksu) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: untratable.php');
  
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