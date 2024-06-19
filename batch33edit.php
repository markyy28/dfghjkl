<?php

include('config.php');


if (isset($_POST['submit']))
{
$id=$_POST['id'];
$item_name=mysqli_real_escape_string($db, $_POST['batch33school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch33rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch33']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund33']);
  $status=mysqli_real_escape_string($db, $_POST['33status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon33']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec33']);
  $units=mysqli_real_escape_string($db, $_POST['units33']);
  $repair=mysqli_real_escape_string($db, $_POST['repair33']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair33']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost33']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces33']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace33']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost33']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep33']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep33']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost33']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen33']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen33']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost33']);
  $report=mysqli_real_escape_string($db, $_POST['report33']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate33']);
  $reason=mysqli_real_escape_string($db, $_POST['reason33']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks33']);


mysqli_query($db,"UPDATE batch33 SET  batch33school_id='$item_name', batch33rec='$item_rec', batch33='$batch19',  yearfund33='$yearfund', 33status='$status', packcon33='$packcon', packrec33='$packrec', units33='$units', repair33='$repair', specrepair33='$specrepair', repaircost33='$repaircost', replaces33='$replaces', specreplace33='$specreplace', replacecost33='$replacecost', unrep33='$unrep', specunrep33='$specunrep', unrepcost33='$unrepcost', stolen33='$stolen' , specstolen33='$specstolen', stolencost33='$stolencost', report33='$report', repdate33='$repdate', reason33='$reason', remarks33='$remarks' WHERE batch33_id='$id'");

header("Location:batch33table.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM batch33 WHERE batch33_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['batch33_id'];
$item_name = $row['batch33school_id'];
$item_rec= $row['batch33rec'];
$batch19= $row['batch33'];
$yearfund= $row['yearfund33'];
$status = $row['33status'];
$packcon= $row['packcon33'];
$packrec= $row['packrec33'];
$units= $row['units33'];

$repair= $row['repair33'];
$specrepair= $row['specrepair33'];
$repaircost = $row['repaircost33'];
$replaces= $row['replaces33'];
$specreplace= $row['specreplace33'];
$replacecost= $row['replacecost33'];
$unrep= $row['unrep33'];
$specunrep = $row['specunrep33'];
$unrepcost= $row['unrepcost33'];
$stolen= $row['stolen33'];
$specstolen= $row['specstolen33'];
$stolencost= $row['stolencost33'];
$report = $row['report33'];
$repdate= $row['repdate33'];
$reason= $row['reason33'];
$remarks= $row['remarks33'];

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







<form method="POST"  action="batch33edit.php" style="margin-left:120px; margin-right:120px; margin-bottom:40px; margin-top:40px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">V.4-DCP STATUS-BATCH 36   </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="batch33school_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="batch33rec" value="<?php echo $item_rec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batch33" value="<?php echo $batch19; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Year Funded</label>
      <input class="form-control full-width" type="text" name="yearfund33" value="<?php echo $yearfund; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Status(Functional/Defective/ForCondemn)</label>
      <input class="form-control full-width" type="text" name="33status" value="<?php echo $status; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Package Content</label>
      <input class="form-control full-width" type="text" name="packcon33" value="<?php echo $packcon; ?>" />
    </div>
    

  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Number of Package Received</label>
      <input class="form-control full-width" type="text" name="packrec33" value="<?php echo $packrec; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">No. Of Working Units</label>
      <input class="form-control full-width" type="text" name="units33" value="<?php echo $units; ?>" />
    </div>
    
      
    </div>
    
    <p style="font-size:16px; font-weight:bold;"> DEFECTIVE
(Please encode number and  specfication of the particular defective parts) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Units for Repair</label>
      <input class="form-control full-width" type="text" name="repair33" value="<?php echo $repair; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Unit for Repair</label>
      <input class="form-control full-width" type="text" name="specrepair33" value="<?php echo $specrepair; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="repaircost33" value="<?php echo $repaircost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">No. Of Units for Replacement</label>
      <input class="form-control full-width" type="text" name="replaces33" value="<?php echo $replaces; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification of Particular for Replacement</label>
      <input class="form-control full-width" type="text" name="specreplace33" value="<?php echo $specreplace; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="replacecost33" value="<?php echo $replacecost; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="name">No. Of Unrepairable Unit</label>
      <input class="form-control full-width" type="text" name="unrep33" value="<?php echo $unrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification Particular Unrepairable Part</label>
      <input class="form-control full-width" type="text" name="specunrep33" value="<?php echo $specunrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="unrepcost33" value="<?php echo $unrepcost; ?>" />
    </div>

  </div>


  <p style="font-size:16px; font-weight:bold;">  STOLEN
(Please encode number and  specfication of the particular STOLEN UNITS) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Stolen Unit</label>
      <input class="form-control full-width" type="text" name="stolen33" value="<?php echo $stolen; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Stolen Unit</label>
      <input class="form-control full-width" type="text" name="specstolen33" value="<?php echo $specstolen; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="stolencost33" value="<?php echo $stolencost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">Is It Already Reported? Yes/NO</label>
      <input class="form-control full-width" type="text" name="report33" value="<?php echo $report; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">If Yes, Please State the Date Reported</label>
      <input class="form-control full-width" type="date" name="repdate33" value="<?php echo $repdate; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">If No, Please State the Reason</label>
      <input class="form-control full-width" type="text" name="reason33" value="<?php echo $reason; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-8">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarks33" value="<?php echo $remarks; ?>" />
    </div>
    

  </div>
  </div>
  

 
  <input type="submit" name="submit" value="Edit Records">
</form>


</body>
</html>
