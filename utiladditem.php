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
  $item_name=mysqli_real_escape_string($db, $_POST['utilschool_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['utilrec']);
  $batchs=mysqli_real_escape_string($db, $_POST['utilbatch']);
  $ins=mysqli_real_escape_string($db, $_POST['funcstatus']);
  $utilstat=mysqli_real_escape_string($db, $_POST['utilstat']);
  $levels=mysqli_real_escape_string($db, $_POST['levels']);
  $sub=mysqli_real_escape_string($db, $_POST['sub']);
  $person=mysqli_real_escape_string($db, $_POST['person']);
  $fre=mysqli_real_escape_string($db, $_POST['fre']);
  $loc=mysqli_real_escape_string($db, $_POST['loc']);
  $pack=mysqli_real_escape_string($db, $_POST['pack']);
  $internet=mysqli_real_escape_string($db, $_POST['internet']);
  $connections=mysqli_real_escape_string($db, $_POST['connections']);
  $ad=mysqli_real_escape_string($db, $_POST['ad']);
  $usingpack=mysqli_real_escape_string($db, $_POST['usingpack']);
  $boths=mysqli_real_escape_string($db, $_POST['boths']);
  $names=mysqli_real_escape_string($db, $_POST['names']);
  $lev=mysqli_real_escape_string($db, $_POST['lev']);
  $mov=mysqli_real_escape_string($db, $_POST['mov']);


    $query = "INSERT INTO util (utilschool_id, utilrec, utilbatch, funcstatus, utilstat, levels, sub, person, fre, loc, pack, internet, connections, ad, usingpack, boths, names, lev, mov) 
  			  VALUES('$item_name','$item_rec','$batchs','$ins','$utilstat','$levels','$sub','$person','$fre','$loc','$pack','$internet','$connections','$ad','$usingpack','$boths','$names','$lev','$mov')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: utiltable.php');
  
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