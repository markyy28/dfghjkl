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
  $item_name=mysqli_real_escape_string($db, $_POST['schoolprof_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['recschool']);
  $district=mysqli_real_escape_string($db, $_POST['district']);
  $contact=mysqli_real_escape_string($db, $_POST['contact']);
  $principal=mysqli_real_escape_string($db, $_POST['principal']);
  $sadd=mysqli_real_escape_string($db, $_POST['sadd']);
  $lkinder=mysqli_real_escape_string($db, $_POST['lkinder']);
  $lg1=mysqli_real_escape_string($db, $_POST['lg1']);
  $lg2=mysqli_real_escape_string($db, $_POST['lg2']);
  $lg3=mysqli_real_escape_string($db, $_POST['lg3']);
  $lg4=mysqli_real_escape_string($db, $_POST['lg4']);
  $lg5=mysqli_real_escape_string($db, $_POST['lg5']);
  $lg6=mysqli_real_escape_string($db, $_POST['lg6']);
  $ljhs=mysqli_real_escape_string($db, $_POST['ljhs']);
  $lshs=mysqli_real_escape_string($db, $_POST['lshs']);
  $tkinder=mysqli_real_escape_string($db, $_POST['tkinder']);
  $tg1=mysqli_real_escape_string($db, $_POST['tg1']);
  $tg2=mysqli_real_escape_string($db, $_POST['tg2']);
  $tg3=mysqli_real_escape_string($db, $_POST['tg3']);
  $tg4=mysqli_real_escape_string($db, $_POST['tg4']);
  $tg5=mysqli_real_escape_string($db, $_POST['tg5']);
  $tg6=mysqli_real_escape_string($db, $_POST['tg6']);
  $tjhs=mysqli_real_escape_string($db, $_POST['tjhs']);
  $tshs=mysqli_real_escape_string($db, $_POST['tshs']);
  $skinder=mysqli_real_escape_string($db, $_POST['skinder']);
  $sg1=mysqli_real_escape_string($db, $_POST['sg1']);
  $sg2=mysqli_real_escape_string($db, $_POST['sg2']);
  $sg3=mysqli_real_escape_string($db, $_POST['sg3']);
  $sg4=mysqli_real_escape_string($db, $_POST['sg4']);
  $sg5=mysqli_real_escape_string($db, $_POST['sg5']);
  $sg6=mysqli_real_escape_string($db, $_POST['sg6']);
  $sjhs=mysqli_real_escape_string($db, $_POST['sjhs']);
  $sshs=mysqli_real_escape_string($db, $_POST['sshs']);
  $ckinder=mysqli_real_escape_string($db, $_POST['ckinder']);
  $cg1=mysqli_real_escape_string($db, $_POST['cg1']);
  $cg2=mysqli_real_escape_string($db, $_POST['cg2']);
  $cg3=mysqli_real_escape_string($db, $_POST['cg3']);
  $cg4=mysqli_real_escape_string($db, $_POST['cg4']);
  $cg5=mysqli_real_escape_string($db, $_POST['cg5']);
  $cg6=mysqli_real_escape_string($db, $_POST['cg6']);
  $cjhs=mysqli_real_escape_string($db, $_POST['cjhs']);
  $cshs=mysqli_real_escape_string($db, $_POST['cshs']);
  $pkinder=mysqli_real_escape_string($db, $_POST['pkinder']);
  $pg1=mysqli_real_escape_string($db, $_POST['pg1']);
  $pg2=mysqli_real_escape_string($db, $_POST['pg2']);
  $pg3=mysqli_real_escape_string($db, $_POST['pg3']);
  $pg4=mysqli_real_escape_string($db, $_POST['pg4']);
  $pg5=mysqli_real_escape_string($db, $_POST['pg5']);
  $pg6=mysqli_real_escape_string($db, $_POST['pg6']);
  $pjhs=mysqli_real_escape_string($db, $_POST['pjhs']);
  $pshs=mysqli_real_escape_string($db, $_POST['pshs']);
  $udcp=mysqli_real_escape_string($db, $_POST['udcp']);
  $ratio=mysqli_real_escape_string($db, $_POST['ratio']);
  $status=mysqli_real_escape_string($db, $_POST['status']);

  
    $query = "INSERT INTO schoolprof (schoolprof_id, recschool, district, contact, principal, sadd, lkinder, lg1, lg2, lg3, lg4, lg5, lg6, ljhs, lshs, tkinder, tg1, tg2, tg3, tg4, tg5, tg6, tjhs, tshs, skinder, sg1, sg2, sg3, sg4, sg5, sg6, sjhs, sshs, ckinder, cg1, cg2, cg3, cg4, cg5, cg6, cjhs, cshs, pkinder, pg1, pg2, pg3, pg4, pg5, pg6, pjhs, pshs, udcp, ratio, status) 
  			  VALUES('$item_name','$item_rec','$district','$contact','$principal','$sadd' ,'$lkinder','$lg1','$lg2','$lg3','$lg4','$lg5','$lg6','$ljhs','$lshs','$tkinder','$tg1','$tg2','$tg3','$tg4','$tg5','$tg6','$tjhs','$tshs','$skinder','$sg1','$sg2','$sg3','$sg4','$sg5','$sg6','$sjhs','$sshs','$ckinder','$cg1','$cg2','$cg3','$cg4','$cg5','$cg6','$cjhs','$cshs','$pkinder','$pg1','$pg2','$pg3','$pg4','$pg5','$pg6','$pjhs','$pshs','$udcp','$ratio','$status')";
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
				
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
  	
  	header('location: table1.php');
  
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