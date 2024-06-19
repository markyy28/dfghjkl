<?php

include('config.php');


if (isset($_POST['submit']))
{
$id=$_POST['id'];
$item_name=mysqli_real_escape_string($db, $_POST['batchpschool_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batchprec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batchp']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfundp']);
  $status=mysqli_real_escape_string($db, $_POST['pstatus']);
  $packcon=mysqli_real_escape_string($db, $_POST['packconp']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrecp']);
  $units=mysqli_real_escape_string($db, $_POST['unitsp']);
  $repair=mysqli_real_escape_string($db, $_POST['repairp']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepairp']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircostp']);
  $replaces=mysqli_real_escape_string($db, $_POST['replacesp']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplacep']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecostp']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrepp']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrepp']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcostp']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolenp']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolenp']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencostp']);
  $report=mysqli_real_escape_string($db, $_POST['reportp']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdatep']);
  $reason=mysqli_real_escape_string($db, $_POST['reasonp']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarksp']);
 

mysqli_query($db,"UPDATE pulse SET  batchpschool_id='$item_name', batchprec='$item_rec', batchp='$batch19',  yearfundp='$yearfund', pstatus='$status', packconp='$packcon', packrecp='$packrec', unitsp='$units', repairp='$repair', specrepairp='$specrepair', repaircostp='$repaircost', replacesp='$replaces', specreplacep='$specreplace', replacecostp='$replacecost', unrepp='$unrep', specunrepp='$specunrep', unrepcostp='$unrepcost', stolenp='$stolen' , specstolenp='$specstolen', stolencostp='$stolencost', reportp='$report', repdatep='$repdate', reasonp='$reason', remarksp='$remarks' WHERE batchp_id='$id'");

header("Location:pulsetable.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM pulse WHERE batchp_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['batchp_id'];
$item_name = $row['batchpschool_id'];
$item_rec= $row['batchprec'];
$batch19= $row['batchp'];
$yearfund= $row['yearfundp'];
$status = $row['pstatus'];
$packcon= $row['packconp'];
$packrec= $row['packrecp'];
$units= $row['unitsp'];

$repair= $row['repairp'];
$specrepair= $row['specrepairp'];
$repaircost = $row['repaircostp'];
$replaces= $row['replacesp'];
$specreplace= $row['specreplacep'];
$replacecost= $row['replacecostp'];
$unrep= $row['unrepp'];
$specunrep = $row['specunrepp'];
$unrepcost= $row['unrepcostp'];
$stolen= $row['stolenp'];
$specstolen= $row['specstolenp'];
$stolencost= $row['stolencostp'];
$report = $row['reportp'];
$repdate= $row['repdatep'];
$reason= $row['reasonp'];
$remarks= $row['remarksp'];

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







<form method="POST"  action="pulseedit.php" style="margin-left:120px; margin-right:120px; margin-bottom:40px; margin-top:40px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">BAYANIHAN LAPTOPS (CHERRY PULSE CALABARZON)  </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="batchpschool_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="batchprec" value="<?php echo $item_rec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batchp" value="<?php echo $batch19; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Year Funded</label>
      <input class="form-control full-width" type="text" name="yearfundp" value="<?php echo $yearfund; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Status(Functional/Defective/ForCondemn)</label>
      <input class="form-control full-width" type="text" name="pstatus" value="<?php echo $status; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Package Content</label>
      <input class="form-control full-width" type="text" name="packconp" value="<?php echo $packcon; ?>" />
    </div>
    

  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Number of Package Received</label>
      <input class="form-control full-width" type="text" name="packrecp" value="<?php echo $packrec; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">No. Of Working Units</label>
      <input class="form-control full-width" type="text" name="unitsp" value="<?php echo $units; ?>" />
    </div>
    
      
    </div>
    
    <p style="font-size:16px; font-weight:bold;"> DEFECTIVE
(Please encode number and  specfication of the particular defective parts) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Units for Repair</label>
      <input class="form-control full-width" type="text" name="repairp" value="<?php echo $repair; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Unit for Repair</label>
      <input class="form-control full-width" type="text" name="specrepairp" value="<?php echo $specrepair; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="repaircostp" value="<?php echo $repaircost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">No. Of Units for Replacement</label>
      <input class="form-control full-width" type="text" name="replacesp" value="<?php echo $replaces; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification of Particular for Replacement</label>
      <input class="form-control full-width" type="text" name="specreplacep" value="<?php echo $specreplace; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="replacecostp" value="<?php echo $replacecost; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="name">No. Of Unrepairable Unit</label>
      <input class="form-control full-width" type="text" name="unrepp" value="<?php echo $unrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification Particular Unrepairable Part</label>
      <input class="form-control full-width" type="text" name="specunrepp" value="<?php echo $specunrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="unrepcostp" value="<?php echo $unrepcost; ?>" />
    </div>

  </div>


  <p style="font-size:16px; font-weight:bold;">  STOLEN
(Please encode number and  specfication of the particular STOLEN UNITS) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Stolen Unit</label>
      <input class="form-control full-width" type="text" name="stolenp" value="<?php echo $stolen; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Stolen Unit</label>
      <input class="form-control full-width" type="text" name="specstolenp" value="<?php echo $specstolen; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="stolencostp" value="<?php echo $stolencost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">Is It Already Reported? Yes/NO</label>
      <input class="form-control full-width" type="text" name="reportp" value="<?php echo $report; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">If Yes, Please State the Date Reported</label>
      <input class="form-control full-width" type="date" name="repdatep" value="<?php echo $repdate; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">If No, Please State the Reason</label>
      <input class="form-control full-width" type="text" name="reasonp" value="<?php echo $reason; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-8">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarksp" value="<?php echo $remarks; ?>" />
    </div>
    

  </div>
  </div>
  

 
  <input type="submit" name="submit" value="Edit Records">
</form>


</body>
</html>
