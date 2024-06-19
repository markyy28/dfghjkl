<?php

include('config.php');

if (isset($_POST['submit']))
{
$id=$_POST['id'];
$item_name=mysqli_real_escape_string($db, $_POST['utilschool_id']);
  $item_rec=mysqli_real_escape_string($db, $_POST['utilrec']);
  $batchs=mysqli_real_escape_string($db, $_POST['utilbatch']);
  $ins=mysqli_real_escape_string($db, $_POST['funcstatus']);
  $utilstat=mysqli_real_escape_string($db, $_POST['utilstat']);
  $levels=mysqli_real_escape_string($db, $_POST['levels']);
  $sub=mysqli_real_escape_string($db, $_POST['sub']);
  $person=mysqli_real_escape_string($db, $_POST['person']);
  $fre=mysqli_real_escape_string($db, $_POST['fre']);
  $loc=mysqli_real_escape_string($db, $_POST['loc']);
  $pack=mysqli_real_escape_string($db, $_POST['pack']);
  $internet=mysqli_real_escape_string($db, $_POST['internet']);
  $connections=mysqli_real_escape_string($db, $_POST['connections']);
  $ad=mysqli_real_escape_string($db, $_POST['ad']);
  $usingpack=mysqli_real_escape_string($db, $_POST['usingpack']);
  $boths=mysqli_real_escape_string($db, $_POST['boths']);
  $names=mysqli_real_escape_string($db, $_POST['names']);
  $lev=mysqli_real_escape_string($db, $_POST['lev']);
  $mov=mysqli_real_escape_string($db, $_POST['mov']);

mysqli_query($db,"UPDATE util SET  utilschool_id='$item_name', utilrec='$item_rec', utilbatch='$batchs', funcstatus='$ins', utilstat='$utilstat',  levels='$levels',  sub='$sub',  person='$person',  fre='$fre',  loc='$loc',  pack='$pack',  internet='$internet',  connections='$connections',  ad='$ad',  usingpack='$usingpack',  boths='$boths',  names='$names',  lev='$lev',  mov='$mov'   WHERE util_id='$id'");

header("Location:utiltable.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM util WHERE util_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['util_id'];
$item_name = $row['utilschool_id'];
$item_rec= $row['utilrec'];
$batchs= $row['utilbatch'];
$ins= $row['funcstatus'];
$utilstat = $row['utilstat'];
$levels = $row['levels'];
$sub= $row['sub'];
$person= $row['person'];
$fre= $row['fre'];
$loc= $row['loc'];
$pack= $row['pack'];
$internet= $row['internet'];
$connections= $row['connections'];
$ad= $row['ad'];
$usingpack= $row['usingpack'];
$boths= $row['boths'];
$names= $row['names'];
$lev= $row['lev'];
$mov= $row['mov'];
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



<form method="POST"  action="utiledit.php" style="margin-left:70px; margin-right:70px; margin-top:70px; margin-bottom:70px;">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<p style="font-size:16px; font-weight:bold;">UTILIZATION STATUS </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input class="form-control full-width" type="text" name="utilschool_id" value="<?php echo $item_name; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="utilrec" value="<?php echo $item_rec; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">Batch</label>
      <input class="form-control full-width" type="text" name="utilbatch" value="<?php echo $batchs; ?>" />
    </div>

  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">1. Functional Status</label>
      <select  class="form-control full-width" type="text" name="funcstatus" value="<?php echo $ins; ?>">
      <option ></option>
      <option >a. Functional/Working</option>
            <option >b. Not Fully Functional</option>
            <option >c. For Repair</option>
            <option >d. For Replacement/Non-Serviceable</option>
            <option >e. For Condemn/Disposal
Stolen</option>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="name">2. Utilization Status</label>
        <select class="form-control full-width" id="utilstat" name="utilstat" value="<?php echo $utilstat; ?> onchange="changeColor()">
            <option></option>
            <option value="a. Instructional Use<">a. Instructional Use</option>
            <option value="b. Administrative Use">b. Administrative Use</option>
            <option value="c. Both A & B">c. Both A & B</option>
        </select>
    </div>
    

  </div>

    <p style="font-size:16px; font-weight:bold; background-color:yellow">3. If your Answer in Utilization Status (Color Yellow) is letter A (For INSTRUCTIONAL USE),  
Please accomplish This ROW</p>  
  <div class="form-row" style="background-color:yellow">
    <div class="form-group col-md-4">
      <label for="name">3.1 Grade Level</label>
      <input class="form-control full-width" type="text" name="levels" value="<?php echo $levels; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">3.2 Subject</label>
      <input class="form-control full-width" type="text" name="sub" value="<?php echo $sub; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">3.3 Person In-Charge</label>
      <input class="form-control full-width" type="text" name="person" value="<?php echo $person; ?>" />
    </div>
  

  </div>

  <div class="form-row" style="background-color:yellow">
  <div class="form-group col-md-4">
        <label for="name">Frequency of Usage</label>
        <select class="form-control full-width" id="utilstat" name="fre" value="<?php echo $fre; ?> onchange="changeColor()">
            <option></option>
            <option >a. Daily</option>
            <option >b. 2-3x a Week</option>
            <option >c. Weekly</option>
            <option >d. Quarterly</option>
        </select>
    </div>

    <div class="form-group col-md-4">
      <label for="name">3.5 DCP Package Location</label>
      <input class="form-control full-width" type="text" name="loc" value="<?php echo $loc; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">3.6 Avilable MOVs for DCP Utilization</label>
      <input class="form-control full-width" type="text" name="pack" value="<?php echo $pack; ?>" />
    </div>
  

  </div>
<br/>
<p style="font-size:16px; font-weight:bold;">4.  STATUS OF DCP Package internet connection </p>  
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">4.1  Is the Package connected to Internet? </label>
      <select  class="form-control full-width"  name="internet" value="<?php echo $internet; ?>">
      <option ></option>
      <option >YES</option>
            <option >No</option>
            
        </select>
    </div>
    <div class="form-group col-md-4">
      <label for="name">4.2 if YES, what is the source of the connection? </label>
      <select  class="form-control full-width" type="text" name="connections" value="<?php echo $connections; ?>">
      <option ></option>
      <option >Personal Source (ex. Mobile Data, Hostspot)</option>
            <option >School Source (ex. LAN, Wifi)</option>
            
        </select>
    </div>
    

  </div>

  <br/>
<p style="font-size:16px; font-weight:bold; background-color:#FF7F7F;">5. If your Answer in Utilization Status (Color Red) is letter B (For ADMINISTRATIVE USE),  
Please accomplish This ROW Please state the reason/justification</p>  
<div class="form-row" style="background-color:#FF7F7F;">
<div class="form-group col-md-4">
      <label for="name"></label>
      <input class="form-control full-width" type="text" name="ad" value="<?php echo $ad; ?>" />
    </div>
    

  </div>
    </br>
  <div class="form-row" style="background-color:#FF7F7F;"> 
    <div class="form-group col-md-4">
      <label for="name">5.1  Name of Person using the DCP Package</label>
      <input class="form-control full-width" type="text" name="usingpack" value="<?php echo $usingpack; ?>" />
    </div>

    </div>

<br/>

    <p style="font-size:16px; font-weight:bold; background-color:#ADD8E6;">6. If your Answer in Utilization Status (Color Buue) is letter C (Both A & B),  
Please accomplish This ROW Please state the reason/justification</p>  
<div class="form-row" style="background-color:#ADD8E6;">
<div class="form-group col-md-4">
      <label for="name"></label>
      <input class="form-control full-width" type="text" name="boths" value="<?php echo $boths; ?>" />
    </div>
    

  </div>
    </br>
  <div class="form-row" style="background-color:#ADD8E6;"> 
    <div class="form-group col-md-4">
      <label for="name">6.1 Name of Person using the DCP Package</label>
      <input class="form-control full-width" type="text" name="names" value="<?php echo $names; ?>" />
    </div>

    <div class="form-group col-md-4">
      <label for="name">6.2 Grade Level Using the DCP Package</label>
      <input class="form-control full-width" type="text" name="lev" value="<?php echo $lev; ?>" />
    </div>
    <div class="form-group col-md-4">
      <label for="name">6.3 MOVs for Utilization</label>
      <input class="form-control full-width" type="text" name="mov" value="<?php echo $mov; ?>" />
    </div>

    </div>


<br/>
 
  <input type="submit" name="submit" value="Edit Records">

  
</form>
<script>
        function changeColor() {
            var selectBox = document.getElementById("utilstat");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            var textField = document.getElementById("utilstat");
            if (selectedValue === "a. Instructional Use") {
                textField.style.backgroundColor = "yellow";
            } 
             else if (selectedValue === "b. Administrative Use") {
                textField.style.backgroundColor = "	#FF7F7F";
            } 
            else if (selectedValue === "c. Both A & B") {
                textField.style.backgroundColor = "#ADD8E6";
            } 
        }
    </script>
</body>
</html>
