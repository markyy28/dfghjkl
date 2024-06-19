<?php

include('config.php');


if (isset($_POST['submit']))
{
$id=$_POST['id'];
$item_name=mysqli_real_escape_string($db, $_POST['batch30school_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batch30rec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batch30']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfund30']);
  $status=mysqli_real_escape_string($db, $_POST['30status']);
  $packcon=mysqli_real_escape_string($db, $_POST['packcon30']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrec30']);
  $units=mysqli_real_escape_string($db, $_POST['units30']);
  $repair=mysqli_real_escape_string($db, $_POST['repair30']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepair30']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircost30']);
  $replaces=mysqli_real_escape_string($db, $_POST['replaces30']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplace30']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecost30']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrep30']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrep30']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcost30']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolen30']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolen30']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencost30']);
  $report=mysqli_real_escape_string($db, $_POST['report30']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdate30']);
  $reason=mysqli_real_escape_string($db, $_POST['reason30']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarks30']);


mysqli_query($db,"UPDATE batch30 SET  batch30school_id='$item_name', batch30rec='$item_rec', batch30='$batch19',  yearfund30='$yearfund', 30status='$status', packcon30='$packcon', packrec30='$packrec', units30='$units', repair30='$repair', specrepair30='$specrepair', repaircost30='$repaircost', replaces30='$replaces', specreplace30='$specreplace', replacecost30='$replacecost', unrep30='$unrep', specunrep30='$specunrep', unrepcost30='$unrepcost', stolen30='$stolen' , specstolen30='$specstolen', stolencost30='$stolencost', report30='$report', repdate30='$repdate', reason30='$reason', remarks30='$remarks' WHERE batch30_id='$id'");

header("Location:batch30table.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM batch30 WHERE batch30_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['batch30_id'];
$item_name = $row['batch30school_id'];
$item_rec= $row['batch30rec'];
$batch19= $row['batch30'];
$yearfund= $row['yearfund30'];
$status = $row['30status'];
$packcon= $row['packcon30'];
$packrec= $row['packrec30'];
$units= $row['units30'];

$repair= $row['repair30'];
$specrepair= $row['specrepair30'];
$repaircost = $row['repaircost30'];
$replaces= $row['replaces30'];
$specreplace= $row['specreplace30'];
$replacecost= $row['replacecost30'];
$unrep= $row['unrep30'];
$specunrep = $row['specunrep30'];
$unrepcost= $row['unrepcost30'];
$stolen= $row['stolen30'];
$specstolen= $row['specstolen30'];
$stolencost= $row['stolencost30'];
$report = $row['report30'];
$repdate= $row['repdate30'];
$reason= $row['reason30'];
$remarks= $row['remarks30'];

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







<form method="POST"  action="batch30edit.php" style="margin-left:120px; margin-right:120px; margin-bottom:40px; margin-top:40px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">V.4-DCP STATUS-BATCH 30   </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="batch30school_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="batch30rec" value="<?php echo $item_rec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batch30" value="<?php echo $batch19; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Year Funded</label>
      <input class="form-control full-width" type="text" name="yearfund30" value="<?php echo $yearfund; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Status(Functional/Defective/ForCondemn)</label>
      <input class="form-control full-width" type="text" name="30status" value="<?php echo $status; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Package Content</label>
      <input class="form-control full-width" type="text" name="packcon30" value="<?php echo $packcon; ?>" />
    </div>
    

  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Number of Package Received</label>
      <input class="form-control full-width" type="text" name="packrec30" value="<?php echo $packrec; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">No. Of Working Units</label>
      <input class="form-control full-width" type="text" name="units30" value="<?php echo $units; ?>" />
    </div>
    
      
    </div>
    
    <p style="font-size:16px; font-weight:bold;"> DEFECTIVE
(Please encode number and  specfication of the particular defective parts) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Units for Repair</label>
      <input class="form-control full-width" type="text" name="repair30" value="<?php echo $repair; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Unit for Repair</label>
      <input class="form-control full-width" type="text" name="specrepair30" value="<?php echo $specrepair; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="repaircost30" value="<?php echo $repaircost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">No. Of Units for Replacement</label>
      <input class="form-control full-width" type="text" name="replaces30" value="<?php echo $replaces; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification of Particular for Replacement</label>
      <input class="form-control full-width" type="text" name="specreplace30" value="<?php echo $specreplace; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="replacecost30" value="<?php echo $replacecost; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="name">No. Of Unrepairable Unit</label>
      <input class="form-control full-width" type="text" name="unrep30" value="<?php echo $unrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification Particular Unrepairable Part</label>
      <input class="form-control full-width" type="text" name="specunrep30" value="<?php echo $specunrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="unrepcost30" value="<?php echo $unrepcost; ?>" />
    </div>

  </div>


  <p style="font-size:16px; font-weight:bold;">  STOLEN
(Please encode number and  specfication of the particular STOLEN UNITS) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Stolen Unit</label>
      <input class="form-control full-width" type="text" name="stolen30" value="<?php echo $stolen; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Stolen Unit</label>
      <input class="form-control full-width" type="text" name="specstolen30" value="<?php echo $specstolen; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="stolencost30" value="<?php echo $stolencost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">Is It Already Reported? Yes/NO</label>
      <input class="form-control full-width" type="text" name="report30" value="<?php echo $report; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">If Yes, Please State the Date Reported</label>
      <input class="form-control full-width" type="date" name="repdate30" value="<?php echo $repdate; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">If No, Please State the Reason</label>
      <input class="form-control full-width" type="text" name="reason30" value="<?php echo $reason; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-8">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarks30" value="<?php echo $remarks; ?>" />
    </div>
    

  </div>
  </div>
  

 
  <input type="submit" name="submit" value="Edit Records">
</form>


</body>
</html>
