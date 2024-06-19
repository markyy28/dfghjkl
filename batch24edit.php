<?php

include('config.php');


if (isset($_POST['submit']))
{
$id=$_POST['id'];
$item_name=mysqli_real_escape_string($db, $_POST['batch24school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch24rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch24']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund24']);
  $status=mysqli_real_escape_string($db, $_POST['24status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon24']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec24']);
  $units=mysqli_real_escape_string($db, $_POST['units24']);
  $repair=mysqli_real_escape_string($db, $_POST['repair24']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair24']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost24']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces24']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace24']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost24']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep24']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep24']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost24']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen24']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen24']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost24']);
  $report=mysqli_real_escape_string($db, $_POST['report24']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate24']);
  $reason=mysqli_real_escape_string($db, $_POST['reason24']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks24']);

mysqli_query($db,"UPDATE batch24 SET  batch24school_id='$item_name', batch24rec='$item_rec', batch24='$batch19',  yearfund24='$yearfund', 24status='$status', packcon24='$packcon', packrec24='$packrec', units24='$units', repair24='$repair', specrepair24='$specrepair', repaircost24='$repaircost', replaces24='$replaces', specreplace24='$specreplace', replacecost24='$replacecost', unrep24='$unrep', specunrep24='$specunrep', unrepcost24='$unrepcost', stolen24='$stolen' , specstolen24='$specstolen', stolencost24='$stolencost', report24='$report', repdate24='$repdate', reason24='$reason', remarks24='$remarks' WHERE batch24_id='$id'");

header("Location:batch24table.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM batch24 WHERE batch24_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['batch24_id'];
$item_name = $row['batch24school_id'];
$item_rec= $row['batch24rec'];
$batch19= $row['batch24'];
$yearfund= $row['yearfund24'];
$status = $row['24status'];
$packcon= $row['packcon24'];
$packrec= $row['packrec24'];
$units= $row['units24'];

$repair= $row['repair24'];
$specrepair= $row['specrepair24'];
$repaircost = $row['repaircost24'];
$replaces= $row['replaces24'];
$specreplace= $row['specreplace24'];
$replacecost= $row['replacecost24'];
$unrep= $row['unrep24'];
$specunrep = $row['specunrep24'];
$unrepcost= $row['unrepcost24'];
$stolen= $row['stolen24'];
$specstolen= $row['specstolen24'];
$stolencost= $row['stolencost24'];
$report = $row['report24'];
$repdate= $row['repdate24'];
$reason= $row['reason24'];
$remarks= $row['remarks24'];

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







<form method="POST"  action="batch24edit.php" style="margin-left:120px; margin-right:120px; margin-bottom:40px; margin-top:40px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">V.4-DCP STATUS-BATCH 24   </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="batch24school_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="batch24rec" value="<?php echo $item_rec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batch24" value="<?php echo $batch19; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Year Funded</label>
      <input class="form-control full-width" type="text" name="yearfund24" value="<?php echo $yearfund; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Status(Functional/Defective/ForCondemn)</label>
      <input class="form-control full-width" type="text" name="24status" value="<?php echo $status; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Package Content</label>
      <input class="form-control full-width" type="text" name="packcon24" value="<?php echo $packcon; ?>" />
    </div>
    

  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Number of Package Received</label>
      <input class="form-control full-width" type="text" name="packrec24" value="<?php echo $packrec; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">No. Of Working Units</label>
      <input class="form-control full-width" type="text" name="units24" value="<?php echo $units; ?>" />
    </div>
    
      
    </div>
    
    <p style="font-size:16px; font-weight:bold;"> DEFECTIVE
(Please encode number and  specfication of the particular defective parts) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Units for Repair</label>
      <input class="form-control full-width" type="text" name="repair24" value="<?php echo $repair; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Unit for Repair</label>
      <input class="form-control full-width" type="text" name="specrepair24" value="<?php echo $specrepair; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="repaircost24" value="<?php echo $repaircost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">No. Of Units for Replacement</label>
      <input class="form-control full-width" type="text" name="replaces24" value="<?php echo $replaces; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification of Particular for Replacement</label>
      <input class="form-control full-width" type="text" name="specreplace24" value="<?php echo $specreplace; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="replacecost24" value="<?php echo $replacecost; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="name">No. Of Unrepairable Unit</label>
      <input class="form-control full-width" type="text" name="unrep24" value="<?php echo $unrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification Particular Unrepairable Part</label>
      <input class="form-control full-width" type="text" name="specunrep24" value="<?php echo $specunrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="unrepcost24" value="<?php echo $unrepcost; ?>" />
    </div>

  </div>


  <p style="font-size:16px; font-weight:bold;">  STOLEN
(Please encode number and  specfication of the particular STOLEN UNITS) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Stolen Unit</label>
      <input class="form-control full-width" type="text" name="stolen24" value="<?php echo $stolen; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Stolen Unit</label>
      <input class="form-control full-width" type="text" name="specstolen24" value="<?php echo $specstolen; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="stolencost24" value="<?php echo $stolencost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">Is It Already Reported? Yes/NO</label>
      <input class="form-control full-width" type="text" name="report24" value="<?php echo $report; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">If Yes, Please State the Date Reported</label>
      <input class="form-control full-width" type="date" name="repdate24" value="<?php echo $repdate; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">If No, Please State the Reason</label>
      <input class="form-control full-width" type="text" name="reason24" value="<?php echo $reason; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-8">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarks24" value="<?php echo $remarks; ?>" />
    </div>
    

  </div>
  </div>
  

 
  <input type="submit" name="submit" value="Edit Records">
</form>


</body>
</html>
