<?php

include('config.php');


if (isset($_POST['submit']))
{
$id=$_POST['id'];
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

mysqli_query($db,"UPDATE batch18 SET  batch18school_id='$item_name', batch18rec='$item_rec', batch18='$batch19',  yearfund18='$yearfund', 18status='$status', packcon18='$packcon', packrec18='$packrec', units18='$units', repair18='$repair', specrepair18='$specrepair', repaircost18='$repaircost', replaces18='$replaces', specreplace18='$specreplace', replacecost18='$replacecost', unrep18='$unrep', specunrep18='$specunrep', unrepcost18='$unrepcost', stolen18='$stolen' , specstolen18='$specstolen', stolencost18='$stolencost', report18='$report', repdate18='$repdate', reason18='$reason', remarks18='$remarks' WHERE batch18_id='$id'");

header("Location:batch18table.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM batch18 WHERE batch18_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['batch18_id'];
$item_name = $row['batch18school_id'];
$item_rec= $row['batch18rec'];
$batch19= $row['batch18'];
$yearfund= $row['yearfund18'];
$status = $row['18status'];
$packcon= $row['packcon18'];
$packrec= $row['packrec18'];
$units= $row['units18'];

$repair= $row['repair18'];
$specrepair= $row['specrepair18'];
$repaircost = $row['repaircost18'];
$replaces= $row['replaces18'];
$specreplace= $row['specreplace18'];
$replacecost= $row['replacecost18'];
$unrep= $row['unrep18'];
$specunrep = $row['specunrep18'];
$unrepcost= $row['unrepcost18'];
$stolen= $row['stolen18'];
$specstolen= $row['specstolen18'];
$stolencost= $row['stolencost18'];
$report = $row['report18'];
$repdate= $row['repdate18'];
$reason= $row['reason18'];
$remarks= $row['remarks18'];

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







<form method="POST"  action="batch18edit.php" style="margin-left:120px; margin-right:120px; margin-bottom:40px; margin-top:40px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">V.4-DCP STATUS-BATCH 18   </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="batch18school_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="batch18rec" value="<?php echo $item_rec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batch18" value="<?php echo $batch19; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Year Funded</label>
      <input class="form-control full-width" type="text" name="yearfund18" value="<?php echo $yearfund; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Status(Functional/Defective/ForCondemn)</label>
      <input class="form-control full-width" type="text" name="18status" value="<?php echo $status; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Package Content</label>
      <input class="form-control full-width" type="text" name="packcon18" value="<?php echo $packcon; ?>" />
    </div>
    

  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Number of Package Received</label>
      <input class="form-control full-width" type="text" name="packrec18" value="<?php echo $packrec; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">No. Of Working Units</label>
      <input class="form-control full-width" type="text" name="units18" value="<?php echo $units; ?>" />
    </div>
    
      
    </div>
    
    <p style="font-size:16px; font-weight:bold;"> DEFECTIVE
(Please encode number and  specfication of the particular defective parts) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Units for Repair</label>
      <input class="form-control full-width" type="text" name="repair18" value="<?php echo $repair; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Unit for Repair</label>
      <input class="form-control full-width" type="text" name="specrepair18" value="<?php echo $specrepair; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="repaircost18" value="<?php echo $repaircost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">No. Of Units for Replacement</label>
      <input class="form-control full-width" type="text" name="replaces18" value="<?php echo $replaces; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification of Particular for Replacement</label>
      <input class="form-control full-width" type="text" name="specreplace18" value="<?php echo $specreplace; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="replacecost18" value="<?php echo $replacecost; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="name">No. Of Unrepairable Unit</label>
      <input class="form-control full-width" type="text" name="unrep18" value="<?php echo $unrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification Particular Unrepairable Part</label>
      <input class="form-control full-width" type="text" name="specunrep18" value="<?php echo $specunrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="unrepcost18" value="<?php echo $unrepcost; ?>" />
    </div>

  </div>


  <p style="font-size:16px; font-weight:bold;">  STOLEN
(Please encode number and  specfication of the particular STOLEN UNITS) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Stolen Unit</label>
      <input class="form-control full-width" type="text" name="stolen18" value="<?php echo $stolen; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Stolen Unit</label>
      <input class="form-control full-width" type="text" name="specstolen18" value="<?php echo $specstolen; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="stolencost18" value="<?php echo $stolencost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">Is It Already Reported? Yes/NO</label>
      <input class="form-control full-width" type="text" name="report18" value="<?php echo $report; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">If Yes, Please State the Date Reported</label>
      <input class="form-control full-width" type="date" name="repdate18" value="<?php echo $repdate; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">If No, Please State the Reason</label>
      <input class="form-control full-width" type="text" name="reason18" value="<?php echo $reason; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-8">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarks18" value="<?php echo $remarks; ?>" />
    </div>
    

  </div>
  </div>
  

 
  <input type="submit" name="submit" value="Edit Records">
</form>


</body>
</html>
