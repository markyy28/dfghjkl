<?php

include('config.php');

if (isset($_POST['submit']))
{
$id=$_POST['id'];
$item_name=mysqli_real_escape_string($db, $_POST['installation_id']);
$item_rec=mysqli_real_escape_string($db, $_POST['installrec']);
$batchs=mysqli_real_escape_string($db, $_POST['batchs']);
$ins=mysqli_real_escape_string($db, $_POST['ins']);
$notins=mysqli_real_escape_string($db, $_POST['notins']);
$remarks=mysqli_real_escape_string($db, $_POST['remarks']);

mysqli_query($db,"UPDATE install SET  installation_id='$item_name', installrec='$item_rec', batchs='$batchs', ins='$ins', notins='$notins',  remarks='$remarks'   WHERE install_id='$id'");

header("Location:installtable.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM install WHERE install_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['install_id'];
$installation_id = $row['installation_id'];
$installrec= $row['installrec'];
$batchs= $row['batchs'];
$ins= $row['ins'];
$notins = $row['notins'];
$remarks= $row['remarks'];



}
else
{
echo "No results!";
}
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inventory Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
<title>Edit Item</title>
</head>
<body>



<form method="POST"  action="installedit.php" style="margin-left:20px; margin-right:20px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">INSTALLATION STATUS </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="installation_id" value="<?php echo $installation_id; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="installrec" value="<?php echo $installrec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batchs" value="<?php echo $batchs; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Installed (Yes/No)</label>
      <input class="form-control full-width" type="text" name="ins" value="<?php echo $ins; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Not Installed (Yes/No)</label>
      <input class="form-control full-width" type="text" name="notins" value="<?php echo $notins; ?>" />
    </div>
   
    

  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarks" value="<?php echo $remarks; ?>" />
    </div>

  </div>

 
  <input type="submit" name="submit" value="Edit Records">
</form>

</body>
</html>
