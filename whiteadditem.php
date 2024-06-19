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
  $item_name=mysqli_real_escape_string($db, $_POST['batchwschool_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batchwrec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batchw']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfundw']);
  $status=mysqli_real_escape_string($db, $_POST['wstatus']);
  $packcon=mysqli_real_escape_string($db, $_POST['packconw']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrecw']);
  $units=mysqli_real_escape_string($db, $_POST['unitsw']);
  $repair=mysqli_real_escape_string($db, $_POST['repairw']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepairw']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircostw']);
  $replaces=mysqli_real_escape_string($db, $_POST['replacesw']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplacew']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecostw']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrepw']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrepw']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcostw']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolenw']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolenw']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencostw']);
  $report=mysqli_real_escape_string($db, $_POST['reportw']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdatew']);
  $reason=mysqli_real_escape_string($db, $_POST['reasonw']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarksw']);
 
  
    $query = "INSERT INTO white (batchwschool_id, batchwrec, batchw, yearfundw, wstatus, packconw, packrecw, unitsw, repairw, specrepairw, repaircostw, replacesw, specreplacew, replacecostw, unrepw, specunrepw, unrepcostw, stolenw, specstolenw, stolencostw, reportw, repdatew, reasonw, remarksw) 
  			  VALUES('$item_name','$item_rec','$batch19','$yearfund','$status','$packcon', '$packrec','$units' ,'$repair', '$specrepair', '$repaircost','$replaces', '$specreplace', '$replacecost', '$unrep', '$specunrep', '$unrepcost', '$stolen', '$specstolen', '$stolencost', '$report', '$repdate', '$reason', '$remarks')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: whitetable.php');
  
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