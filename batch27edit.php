<?php

include('config.php');


if (isset($_POST['submit']))
{
$id=$_POST['id'];
$item_name=mysqli_real_escape_string($db, $_POST['batch27school_id']);
$item_rec=mysqli_real_escape_string($db, $_POST['batch27rec']);
$batch19=mysqli_real_escape_string($db, $_POST['batch27']);
$yearfund=mysqli_real_escape_string($db, $_POST['yearfund27']);
$status=mysqli_real_escape_string($db, $_POST['27status']);
$packcon=mysqli_real_escape_string($db, $_POST['packcon27']);
$packrec=mysqli_real_escape_string($db, $_POST['packrec27']);
$units=mysqli_real_escape_string($db, $_POST['units27']);
$repair=mysqli_real_escape_string($db, $_POST['repair27']);
$specrepair=mysqli_real_escape_string($db, $_POST['specrepair27']);
$repaircost=mysqli_real_escape_string($db, $_POST['repaircost27']);
$replaces=mysqli_real_escape_string($db, $_POST['replaces27']);
$specreplace=mysqli_real_escape_string($db, $_POST['specreplace27']);
$replacecost=mysqli_real_escape_string($db, $_POST['replacecost27']);
$unrep=mysqli_real_escape_string($db, $_POST['unrep27']);
$specunrep=mysqli_real_escape_string($db, $_POST['specunrep27']);
$unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost27']);
$stolen=mysqli_real_escape_string($db, $_POST['stolen27']);
$specstolen=mysqli_real_escape_string($db, $_POST['specstolen27']);
$stolencost=mysqli_real_escape_string($db, $_POST['stolencost27']);
$report=mysqli_real_escape_string($db, $_POST['report27']);
$repdate=mysqli_real_escape_string($db, $_POST['repdate27']);
$reason=mysqli_real_escape_string($db, $_POST['reason27']);
$remarks=mysqli_real_escape_string($db, $_POST['remarks27']);

mysqli_query($db,"UPDATE batch27 SET  batch27school_id='$item_name', batch27rec='$item_rec', batch27='$batch19',  yearfund27='$yearfund', 27status='$status', packcon27='$packcon', packrec27='$packrec', units27='$units', repair27='$repair', specrepair27='$specrepair', repaircost27='$repaircost', replaces27='$replaces', specreplace27='$specreplace', replacecost27='$replacecost', unrep27='$unrep', specunrep27='$specunrep', unrepcost27='$unrepcost', stolen27='$stolen' , specstolen27='$specstolen', stolencost27='$stolencost', report27='$report', repdate27='$repdate', reason27='$reason', remarks27='$remarks' WHERE batch27_id='$id'");

header("Location:batch27table.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM batch27 WHERE batch27_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['batch27_id'];
$item_name = $row['batch27school_id'];
$item_rec= $row['batch27rec'];
$batch19= $row['batch27'];
$yearfund= $row['yearfund27'];
$status = $row['27status'];
$packcon= $row['packcon27'];
$packrec= $row['packrec27'];
$units= $row['units27'];

$repair= $row['repair27'];
$specrepair= $row['specrepair27'];
$repaircost = $row['repaircost27'];
$replaces= $row['replaces27'];
$specreplace= $row['specreplace27'];
$replacecost= $row['replacecost27'];
$unrep= $row['unrep27'];
$specunrep = $row['specunrep27'];
$unrepcost= $row['unrepcost27'];
$stolen= $row['stolen27'];
$specstolen= $row['specstolen27'];
$stolencost= $row['stolencost27'];
$report = $row['report27'];
$repdate= $row['repdate27'];
$reason= $row['reason27'];
$remarks= $row['remarks27'];

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







<form method="POST"  action="batch27edit.php" style="margin-left:120px; margin-right:120px; margin-bottom:40px; margin-top:40px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">V.4-DCP STATUS-BATCH 27   </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="batch27school_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="batch27rec" value="<?php echo $item_rec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batch27" value="<?php echo $batch19; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Year Funded</label>
      <input class="form-control full-width" type="text" name="yearfund27" value="<?php echo $yearfund; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Status(Functional/Defective/ForCondemn)</label>
      <input class="form-control full-width" type="text" name="27status" value="<?php echo $status; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Package Content</label>
      <input class="form-control full-width" type="text" name="packcon27" value="<?php echo $packcon; ?>" />
    </div>
    

  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Number of Package Received</label>
      <input class="form-control full-width" type="text" name="packrec27" value="<?php echo $packrec; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">No. Of Working Units</label>
      <input class="form-control full-width" type="text" name="units27" value="<?php echo $units; ?>" />
    </div>
    
      
    </div>
    
    <p style="font-size:16px; font-weight:bold;"> DEFECTIVE
(Please encode number and  specfication of the particular defective parts) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Units for Repair</label>
      <input class="form-control full-width" type="text" name="repair27" value="<?php echo $repair; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Unit for Repair</label>
      <input class="form-control full-width" type="text" name="specrepair27" value="<?php echo $specrepair; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="repaircost27" value="<?php echo $repaircost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">No. Of Units for Replacement</label>
      <input class="form-control full-width" type="text" name="replaces27" value="<?php echo $replaces; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification of Particular for Replacement</label>
      <input class="form-control full-width" type="text" name="specreplace27" value="<?php echo $specreplace; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="replacecost27" value="<?php echo $replacecost; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="name">No. Of Unrepairable Unit</label>
      <input class="form-control full-width" type="text" name="unrep27" value="<?php echo $unrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification Particular Unrepairable Part</label>
      <input class="form-control full-width" type="text" name="specunrep27" value="<?php echo $specunrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="unrepcost27" value="<?php echo $unrepcost; ?>" />
    </div>

  </div>


  <p style="font-size:16px; font-weight:bold;">  STOLEN
(Please encode number and  specfication of the particular STOLEN UNITS) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Stolen Unit</label>
      <input class="form-control full-width" type="text" name="stolen27" value="<?php echo $stolen; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Stolen Unit</label>
      <input class="form-control full-width" type="text" name="specstolen27" value="<?php echo $specstolen; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="stolencost27" value="<?php echo $stolencost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">Is It Already Reported? Yes/NO</label>
      <input class="form-control full-width" type="text" name="report27" value="<?php echo $report; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">If Yes, Please State the Date Reported</label>
      <input class="form-control full-width" type="date" name="repdate27" value="<?php echo $repdate; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">If No, Please State the Reason</label>
      <input class="form-control full-width" type="text" name="reason27" value="<?php echo $reason; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-8">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarks27" value="<?php echo $remarks; ?>" />
    </div>
    

  </div>
  </div>
  

 
  <input type="submit" name="submit" value="Edit Records">
</form>


</body>
</html>
