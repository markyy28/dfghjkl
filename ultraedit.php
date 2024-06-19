<?php

include('config.php');


if (isset($_POST['submit']))
{
$id=$_POST['id'];
$item_name=mysqli_real_escape_string($db, $_POST['batchuschool_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['batchurec']);
  $batch19=mysqli_real_escape_string($db, $_POST['batchu']);
  $yearfund=mysqli_real_escape_string($db, $_POST['yearfundu']);
  $status=mysqli_real_escape_string($db, $_POST['ustatus']);
  $packcon=mysqli_real_escape_string($db, $_POST['packconu']);
  $packrec=mysqli_real_escape_string($db, $_POST['packrecu']);
  $units=mysqli_real_escape_string($db, $_POST['unitsu']);
  $repair=mysqli_real_escape_string($db, $_POST['repairu']);
  $specrepair=mysqli_real_escape_string($db, $_POST['specrepairu']);
  $repaircost=mysqli_real_escape_string($db, $_POST['repaircostu']);
  $replaces=mysqli_real_escape_string($db, $_POST['replacesu']);
  $specreplace=mysqli_real_escape_string($db, $_POST['specreplaceu']);
  $replacecost=mysqli_real_escape_string($db, $_POST['replacecostu']);
  $unrep=mysqli_real_escape_string($db, $_POST['unrepu']);
  $specunrep=mysqli_real_escape_string($db, $_POST['specunrepu']);
  $unrepcost=mysqli_real_escape_string($db, $_POST['unrepcostu']);
  $stolen=mysqli_real_escape_string($db, $_POST['stolenu']);
  $specstolen=mysqli_real_escape_string($db, $_POST['specstolenu']);
  $stolencost=mysqli_real_escape_string($db, $_POST['stolencostu']);
  $report=mysqli_real_escape_string($db, $_POST['reportu']);
  $repdate=mysqli_real_escape_string($db, $_POST['repdateu']);
  $reason=mysqli_real_escape_string($db, $_POST['reasonu']);
  $remarks=mysqli_real_escape_string($db, $_POST['remarksu']);
 

mysqli_query($db,"UPDATE ultra SET  batchuschool_id='$item_name', batchurec='$item_rec', batchu='$batch19',  yearfundu='$yearfund', ustatus='$status', packconu='$packcon', packrecu='$packrec', unitsu='$units', repairu='$repair', specrepairu='$specrepair', repaircostu='$repaircost', replacesu='$replaces', specreplaceu='$specreplace', replacecostu='$replacecost', unrepu='$unrep', specunrepu='$specunrep', unrepcostu='$unrepcost', stolenu='$stolen' , specstolenu='$specstolen', stolencostu='$stolencost', reportu='$report', repdateu='$repdate', reasonu='$reason', remarksu='$remarks' WHERE batchu_id='$id'");

header("Location:untratable.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM ultra WHERE batchu_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['batchu_id'];
$item_name = $row['batchuschool_id'];
$item_rec= $row['batchurec'];
$batch19= $row['batchu'];
$yearfund= $row['yearfundu'];
$status = $row['ustatus'];
$packcon= $row['packconu'];
$packrec= $row['packrecu'];
$units= $row['unitsu'];

$repair= $row['repairu'];
$specrepair= $row['specrepairu'];
$repaircost = $row['repaircostu'];
$replaces= $row['replacesu'];
$specreplace= $row['specreplaceu'];
$replacecost= $row['replacecostu'];
$unrep= $row['unrepu'];
$specunrep = $row['specunrepu'];
$unrepcost= $row['unrepcostu'];
$stolen= $row['stolenu'];
$specstolen= $row['specstolenu'];
$stolencost= $row['stolencostu'];
$report = $row['reportu'];
$repdate= $row['repdateu'];
$reason= $row['reasonu'];
$remarks= $row['remarksu'];

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







<form method="POST"  action="ultraedit.php" style="margin-left:120px; margin-right:120px; margin-bottom:40px; margin-top:40px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">CHERRY AQUA ULTRA IV  </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="batchuschool_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="batchurec" value="<?php echo $item_rec; ?>" />
    </div>



  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="batchu" value="<?php echo $batch19; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">Year Funded</label>
      <input class="form-control full-width" type="text" name="yearfundu" value="<?php echo $yearfund; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Status(Functional/Defective/ForCondemn)</label>
      <input class="form-control full-width" type="text" name="ustatus" value="<?php echo $status; ?>" />
    </div>
    <div class="form-group col-md-3">
      <label for="name">Package Content</label>
      <input class="form-control full-width" type="text" name="packconu" value="<?php echo $packcon; ?>" />
    </div>
    

  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Number of Package Received</label>
      <input class="form-control full-width" type="text" name="packrecu" value="<?php echo $packrec; ?>" />
    </div>

    <div class="form-group col-md-3">
      <label for="name">No. Of Working Units</label>
      <input class="form-control full-width" type="text" name="unitsu" value="<?php echo $units; ?>" />
    </div>
    
      
    </div>
    
    <p style="font-size:16px; font-weight:bold;"> DEFECTIVE
(Please encode number and  specfication of the particular defective parts) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Units for Repair</label>
      <input class="form-control full-width" type="text" name="repairu" value="<?php echo $repair; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Unit for Repair</label>
      <input class="form-control full-width" type="text" name="specrepairu" value="<?php echo $specrepair; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="repaircostu" value="<?php echo $repaircost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">No. Of Units for Replacement</label>
      <input class="form-control full-width" type="text" name="replacesu" value="<?php echo $replaces; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification of Particular for Replacement</label>
      <input class="form-control full-width" type="text" name="specreplaceu" value="<?php echo $specreplace; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="replacecostu" value="<?php echo $replacecost; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="name">No. Of Unrepairable Unit</label>
      <input class="form-control full-width" type="text" name="unrepu" value="<?php echo $unrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Specification Particular Unrepairable Part</label>
      <input class="form-control full-width" type="text" name="specunrepu" value="<?php echo $specunrep; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="unrepcostu" value="<?php echo $unrepcost; ?>" />
    </div>

  </div>


  <p style="font-size:16px; font-weight:bold;">  STOLEN
(Please encode number and  specfication of the particular STOLEN UNITS) </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">No. Of Stolen Unit</label>
      <input class="form-control full-width" type="text" name="stolenu" value="<?php echo $stolen; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Specification of Particular Stolen Unit</label>
      <input class="form-control full-width" type="text" name="specstolenu" value="<?php echo $specstolen; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Estimated Cost</label>
      <input class="form-control full-width" type="text" name="stolencostu" value="<?php echo $stolencost; ?>" />
    </div>
    
    

  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="name">Is It Already Reported? Yes/NO</label>
      <input class="form-control full-width" type="text" name="reportu" value="<?php echo $report; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">If Yes, Please State the Date Reported</label>
      <input class="form-control full-width" type="date" name="repdateu" value="<?php echo $repdate; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">If No, Please State the Reason</label>
      <input class="form-control full-width" type="text" name="reasonu" value="<?php echo $reason; ?>" />
    </div>
 
    

  </div>

  <div class="form-row">

    <div class="form-group col-md-8">
      <label for="name">Remarks</label>
      <input class="form-control full-width" type="text" name="remarksu" value="<?php echo $remarks; ?>" />
    </div>
    

  </div>
  </div>
  

 
  <input type="submit" name="submit" value="Edit Records">
</form>


</body>
</html>
