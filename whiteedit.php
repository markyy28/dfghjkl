<?php

include('config.php');


if (isset($_POST['submit']))
{
$id=$_POST['id'];
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
 

mysqli_query($db,"UPDATE white SET  batchwschool_id='$item_name', batchwrec='$item_rec', batchw='$batch19',  yearfundw='$yearfund', wstatus='$status', packconw='$packcon', packrecw='$packrec', unitsw='$units', repairw='$repair', specrepairw='$specrepair', repaircostw='$repaircost', replacesw='$replaces', specreplacew='$specreplace', replacecostw='$replacecost', unrepw='$unrep', specunrepw='$specunrep', unrepcostw='$unrepcost', stolenw='$stolen' , specstolenw='$specstolen', stolencostw='$stolencost', reportw='$report', repdatew='$repdate', reasonw='$reason', remarksw='$remarks' WHERE batchw_id='$id'");

header("Location:whitetable.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM white WHERE batchw_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['batchw_id'];
$item_name = $row['batchwschool_id'];
$item_rec= $row['batchwrec'];
$batch19= $row['batchw'];
$yearfund= $row['yearfundw'];
$status = $row['wstatus'];
$packcon= $row['packconw'];
$packrec= $row['packrecw'];
$units= $row['unitsw'];

$repair= $row['repairw'];
$specrepair= $row['specrepairw'];
$repaircost = $row['repaircostw'];
$replaces= $row['replacesw'];
$specreplace= $row['specreplacew'];
$replacecost= $row['replacecostw'];
$unrep= $row['unrepw'];
$specunrep = $row['specunrepw'];
$unrepcost= $row['unrepcostw'];
$stolen= $row['stolenw'];
$specstolen= $row['specstolenw'];
$stolencost= $row['stolencostw'];
$report = $row['reportw'];
$repdate= $row['repdatew'];
$reason= $row['reasonw'];
$remarks= $row['remarksw'];

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







<form method="POST"  action="whiteedit.php" style="margin-left:120px; margin-right:120px; margin-bottom:40px; margin-top:40px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">UNBRANDED WHITE TABLET   </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="batchwschool_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="batchwrec" value="<?php echo $item_rec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batchw" value="<?php echo $batch19; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Year Funded</label>
      <input class="form-control full-width" type="text" name="yearfundw" value="<?php echo $yearfund; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Status(Functional/Defective/ForCondemn)</label>
      <input class="form-control full-width" type="text" name="wstatus" value="<?php echo $status; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Package Content</label>
      <input class="form-control full-width" type="text" name="packconw" value="<?php echo $packcon; ?>" />
    </div>
    

  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Number of Package Received</label>
      <input class="form-control full-width" type="text" name="packrecw" value="<?php echo $packrec; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">No. Of Working Units</label>
      <input class="form-control full-width" type="text" name="unitsw" value="<?php echo $units; ?>" />
    </div>
    
      
    </div>
    
    <p style="font-size:16px; font-weight:bold;"> DEFECTIVE
(Please encode number and  specfication of the particular defective parts) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Units for Repair</label>
      <input class="form-control full-width" type="text" name="repairw" value="<?php echo $repair; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Unit for Repair</label>
      <input class="form-control full-width" type="text" name="specrepairw" value="<?php echo $specrepair; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="repaircostw" value="<?php echo $repaircost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">No. Of Units for Replacement</label>
      <input class="form-control full-width" type="text" name="replacesw" value="<?php echo $replaces; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification of Particular for Replacement</label>
      <input class="form-control full-width" type="text" name="specreplacew" value="<?php echo $specreplace; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="replacecostw" value="<?php echo $replacecost; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="name">No. Of Unrepairable Unit</label>
      <input class="form-control full-width" type="text" name="unrepw" value="<?php echo $unrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification Particular Unrepairable Part</label>
      <input class="form-control full-width" type="text" name="specunrepw" value="<?php echo $specunrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="unrepcostw" value="<?php echo $unrepcost; ?>" />
    </div>

  </div>


  <p style="font-size:16px; font-weight:bold;">  STOLEN
(Please encode number and  specfication of the particular STOLEN UNITS) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Stolen Unit</label>
      <input class="form-control full-width" type="text" name="stolenw" value="<?php echo $stolen; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Stolen Unit</label>
      <input class="form-control full-width" type="text" name="specstolenw" value="<?php echo $specstolen; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="stolencostw" value="<?php echo $stolencost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">Is It Already Reported? Yes/NO</label>
      <input class="form-control full-width" type="text" name="reportw" value="<?php echo $report; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">If Yes, Please State the Date Reported</label>
      <input class="form-control full-width" type="date" name="repdatew" value="<?php echo $repdate; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">If No, Please State the Reason</label>
      <input class="form-control full-width" type="text" name="reasonw" value="<?php echo $reason; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-8">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarksw" value="<?php echo $remarks; ?>" />
    </div>
    

  </div>
  </div>
  

 
  <input type="submit" name="submit" value="Edit Records">
</form>


</body>
</html>
