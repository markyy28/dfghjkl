<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!doctype html>
<html class="no-js" lang="en">

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

    <style>
        .yellow-background {
            background-color: yellow;
        }
    </style>
    
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                
                            </li>
                            
                            <li class="active">
                                <a href="table1.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>SCHOOL PROFILE</span></a>
                               
                            </li>
                            
                            <li class="active">
                                <a href="table.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>ICT COOR PROFILE</span></a>
                               
                            </li>
                            <li class="active">
                                <a href="dcptable.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>DCP DOCUMENTS</span></a>
                               
                            </li>
                            <li class="active">
                                <a href="utiltable.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>UTILIZATION STATUS</span></a>
                               
                            </li>
                            <li class="active">
                                <a href="installtable.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>INSTALLATION STATUS</span></a>
                               
                            </li>
                            
                            </li>
                            <li class="active">
    <a aria-expanded="true"><i class="fa fa-table"></i>
        <select id="forma" name="forma" style="font-size:17px; font-weight:bold; margin-left:8px;">
            <option value="home.php">2020</option>
            <option value="batch1901table.php">BATCH 2019-01</option>
            <option value="batch1902table.php">BATCH 2019-02</option>
            <option value="batch2020table.php">BATCH 2020</option>
            <option value="batch2021table.php">BATCH 2021</option>
            <option value="batch1903table.php">BATCH 2019-03</option>
        </select>
    </a>
</li>
<li class="active">
    <a aria-expanded="true"><i class="fa fa-table"></i>
        <select name="forma" onchange="location = this.value;" style="font-size:17px; font-weight:bold; margin-left:8px;">  
            <option value="home.php">2018</option>
            <option value="batch1801table.php">BATCH 2018-01</option>
        </select>
    </a>
</li>
<li class="active">
    <a aria-expanded="true"><i class="fa fa-table"></i>
        <select name="forma" onchange="location = this.value;" style="font-size:17px; font-weight:bold; margin-left:8px;">  
            <option value="home.php">2016</option>
            <option value="batch42table.php">BATCH 42</option>
            <option value="batch38table.php">BATCH 38</option>
            <option value="batch40table.php">BATCH 40</option>
            <option value="batch36table.php">BATCH 36</option>
            <option value="batch33table.php">BATCH 33</option>
            <option value="batch31table.php">BATCH 31</option>
            <option value="batch30table.php">BATCH 30</option>
        </select>
    </a>
</li>   

<li class="active">
    <a aria-expanded="true"><i class="fa fa-table"></i>
        <select name="forma" onchange="location = this.value;" style="font-size:17px; font-weight:bold; margin-left:8px;">  
            <option value="home.php">2015</option>
            <option value="batch27table.php">BATCH 27</option>
            <option value="batch26table.php">BATCH 26</option>
            <option value="batch25table.php">BATCH 25</option>
            <option value="batch24table.php">BATCH 24</option>
        </select>
    </a>
</li>  
<li class="active">
    <a aria-expanded="true"><i class="fa fa-table"></i>
        <select name="forma" onchange="location = this.value;" style="font-size:17px; font-weight:bold; margin-left:8px;">  
            <option value="home.php">2014 and Below</option>
            <option value="batch19table.php">BATCH 19 AND 23A</option>
            <option value="batch18table.php">BATCH 18</option>
            <option value="batch16table.php">BATCH 16</option>
            <option value="batch13table.php">BATCH 13</option>
            <option value="batch29table.php">BATCH 29</option>
            <option value="batch14table.php">BATCH 14</option>
            <option value="batch7table.php">BATCH 7</option>
        </select>
    </a>
</li>  

<li class="active">
    <a aria-expanded="true"><i class="fa fa-table"></i>
        <select name="forma" onchange="location = this.value;" style="font-size:17px; font-weight:bold; margin-left:10px; width:160px;">  
            <option  value="home.php">Tablets</option>
            <option  value="bayanihantable.php">BAYANIHAN II</option>
            <option value="pulsetable.php">CHERRY PULSE CALABARZON</option>
            <option  value="cubetable.php">CHERRY MOBILE CUBE</option>
            <option value="untratable.php">CHERRY AQUA ULTRA IV</option>
            <option  value="bluetable.php">CHERRY CUBIX CUBE BLUE DEPED</option>
            <option value="whitetable.php">UNBRANDED WHITE TABLET</option>
        </select>
    </a>
</li>  
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->


        
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    
                    <!-- profile info & task notification-->
                    <div class="col-md-6 col-sm-4 clearfix">
                        
                    </div>
                </div>
            </div>
            
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="table1.php">SCHOOL PROFILE</a></li>
                                <li><a href="table.php">ICT COOR PROFILE</a></li>
                                <li><a href="dcptable.php">DCP DOCUMENTS</a></li>
                                <li><a href="installtable.php">INSTALLATION STATUS</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                
                               <a class="dropdown-item" href="index.php?logout='1'">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div>
            
    
            <body>
            
            
            
<!-- /ghjk -->

<form method="POST"  action="utiladditem.php" style="margin-left:20px; margin-right:20px;">
<p style="font-size:16px; font-weight:bold;">UTILIZATION STATUS </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input  class="form-control full-width" type="text" name="utilschool_id" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="utilrec" placeholder="">
    </div>
    <div class="form-group col-md-4">
      <label for="name">Batch</label>
      <input  class="form-control full-width" type="text" name="utilbatch" placeholder="">
    </div>

  </div>
  <!-- <p style="font-size:12px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>   -->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">1. Functional Status</label>
      <select  class="form-control full-width"  name="funcstatus" placeholder="Select">
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
        <select class="form-control full-width" id="utilstat" name="utilstat" placeholder="Select" onchange="changeColor()">
            <option></option>
            <option value="a. Instructional Use">a. Instructional Use</option>
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
      <input  class="form-control full-width" type="text" name="levels" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="name">3.2 Subject</label>
      <input class="form-control full-width" type="text" name="sub" placeholder="">
    </div>
    <div class="form-group col-md-4">
      <label for="name">3.3 Person In-Charge</label>
      <input  class="form-control full-width" type="text" name="person" placeholder="">
    </div>
  

  </div>

  <div class="form-row" style="background-color:yellow">
  <div class="form-group col-md-4">
      <label for="name">Frequency of Usage</label>
      <select  class="form-control full-width"  name="fre" placeholder="Select">
      <option ></option>
      <option >a. Daily</option>
            <option >b. 2-3x a Week</option>
            <option >c. Weekly</option>
            <option >d. Quarterly</option>
        </select>
    </div>

    <div class="form-group col-md-4">
      <label for="name">3.5 DCP Package Location</label>
      <input class="form-control full-width" type="text" name="loc" placeholder="">
    </div>
    <div class="form-group col-md-4">
      <label for="name">3.6 Avilable MOVs for DCP Utilization</label>
      <input  class="form-control full-width" type="text" name="pack" placeholder="">
    </div>
  

  </div>
<br/>
<p style="font-size:16px; font-weight:bold;">4.  STATUS OF DCP Package internet connection </p>  
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">4.1  Is the Package connected to Internet? </label>
      <select  class="form-control full-width"  name="internet" placeholder="Select">
      <option ></option>
      <option >YES</option>
            <option >No</option>
            
        </select>
    </div>
    <div class="form-group col-md-4">
      <label for="name">4.2 if YES, what is the source of the connection? </label>
      <select  class="form-control full-width"  name="connections" placeholder="Select">
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
      <input  class="form-control full-width" type="text" name="ad" placeholder="">
    </div>
    

  </div>
    </br>
  <div class="form-row" style="background-color:#FF7F7F;"> 
    <div class="form-group col-md-4">
      <label for="name">5.1  Name of Person using the DCP Package</label>
      <input  class="form-control full-width" type="text" name="usingpack" placeholder="">
    </div>

    </div>

<br/>

    <p style="font-size:16px; font-weight:bold; background-color:#ADD8E6;">6. If your Answer in Utilization Status (Color Buue) is letter C (Both A & B),  
Please accomplish This ROW Please state the reason/justification</p>  
<div class="form-row" style="background-color:#ADD8E6;">
<div class="form-group col-md-4">
      <label for="name"></label>
      <input  class="form-control full-width" type="text" name="boths" placeholder="">
    </div>
    

  </div>
    </br>
  <div class="form-row" style="background-color:#ADD8E6;"> 
    <div class="form-group col-md-4">
      <label for="name">6.1 Name of Person using the DCP Package</label>
      <input  class="form-control full-width" type="text" name="names" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="name">6.2 Grade Level Using the DCP Package</label>
      <input  class="form-control full-width" type="text" name="lev" placeholder="">
    </div>
    <div class="form-group col-md-4">
      <label for="name">6.3 MOVs for Utilization</label>
      <input  class="form-control full-width" type="text" name="mov" placeholder="">
    </div>

    </div>


    
  <div class="form-row">
    <div class="form-group col-md-4 offset-md-8">
      <div class="float-right">
      <button type="submit" class="btn btn-default" name="add">Add item</button>
      </div>
    </div>
  </div>
</form>

<!-- <form method="POST" class="form-inline" action="additem.php">
  <div class="form-group">
 
  &nbsp; <label for="name">School ID</label>
    <input type="text" class="form-control" name="product_name">
&nbsp;
  </div>
  <div class="form-group">
    <label for="name">Recipient School</label>
    <input type="text" class="form-control" name="price">
     </div><br/> <br/> <br/> <br/>
  
 <p style="font-size:12px, font-weight:bold">ICT COORDINATOR FOR DATA MANAGEMENT </p>  

  <div class="form-group">
        <label for="name">Complete Name</label>
        <input type="text" name="quant" id="quant" min="1" max="">
    </div>
    <div class="form-group">
    <label for="name">Contact Number</label>
    <input type="text" class="form-control" name="datanumber">
  </div>
  <button type="submit" class="btn btn-default" name="add">Add item</button>
 
</form>  -->
</body>
            <div class="main-content-inner">
                <div class="row">
                   
                    <!-- Contextual Classes start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">INSTALLATION STATUS</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-dark text-center table-bordered table-striped">
                                            <thead class="text-uppercase">
                                                <tr style="font-size: 12px" class="table-active">
                                                    <th scope="col">NO.</th>
                                                    <th scope="col">School ID</th>
                                                    <th scope="col">RECIPIENT School</th>
                                                    <th scope="col">Batch</th>
                                                    <th scope="col">1.FUNCTIONALITY STATUS</th>
                                                    <th scope="col">2.UTILIZATION STATUS</th>
                                                    
                                                    <th scope="col" style="background-color:yellow;">For INSTRUCTIONAL USE (3.1 Grade Level)</th>
                                                    <th scope="col" style="background-color:yellow;">For INSTRUCTIONAL USE (3.2 Subject)</th>
                                                    <th scope="col" style="background-color:yellow;">For INSTRUCTIONAL USE (3.3 Person In-Charge)</th>
                                                    <th scope="col" style="background-color:yellow;">For INSTRUCTIONAL USE (3.4 Frequency of Usage)</th>
                                                    <th scope="col" style="background-color:yellow;">For INSTRUCTIONAL USE (3.5 DCP Package Location)</th>
                                                    <th scope="col" style="background-color:yellow;">For INSTRUCTIONAL USE (3.6 Avilable MOVs for DCP Utilization)</th>
                                                 
                                                    <th scope="col">4. STATUS OF DCP Package internet connection (4.1 Is the Package connected to Internet?)</th>
                                                    <th scope="col">4. STATUS OF DCP Package internet connection (4.2 if YES, what is the source of the connection?)</th>
                                                   
                                                    <th scope="col" style="background-color: #FF7F7F;">5. If your Answer in Utilization Status (Color Red) is letter B (For ADMINISTRATIVE USE), Please accomplish This ROW Please state the reason/justification</th>
                                                    <th scope="col" style="background-color:#FF7F7F;">5.1 Name of Person using the DCP Package</th>
                                                 
                                                    <th scope="col" style="background-color: #ADD8E6;">6. If your Answer in Utilization Status (Color Buue) is letter C (Both A & B), Please accomplish This ROW Please state the reason/justification</th>
                                                    <th scope="col" style="background-color:#ADD8E6;">6.1 Name of Person using the DCP Package</th>
                                                    <th scope="col" style="background-color:#ADD8E6;">6.2 Grade Level Using the DCP Package</th>
                                                    <th scope="col" style="background-color:#ADD8E6;">6.3 MOVs for Utilization</th>

                                                    <th scope="col">Action</th>
													 

                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
			<?php 
               $conn = new mysqli("localhost","root","","inventorymanagement");
               $sql = "SELECT * FROM util";
               $result = $conn->query($sql);
					$count=0;
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
					  $count=$count+1;
                   ?>
                  
                   
                   <tr>
                    <th><?php echo $count ?></th>
                      <th><?php echo $row["utilschool_id"] ?></th>
                      <th><?php echo $row["utilrec"]  ?></th>
                      <th><?php echo $row["utilbatch"] ?></th>
                      <th><?php echo $row["funcstatus"]  ?></th>
                      <th><?php echo $row["utilstat"] ?></th>
                      <th><?php echo $row["levels"]  ?></th>
                      <th><?php echo $row["sub"]  ?></th>
                      <th><?php echo $row["person"]  ?></th>
                      <th><?php echo $row["fre"]  ?></th>
                      <th><?php echo $row["loc"]  ?></th>
                      <th><?php echo $row["pack"]  ?></th>
                      <th><?php echo $row["internet"]  ?></th>
                      <th><?php echo $row["connections"]  ?></th>
                      <th><?php echo $row["ad"]  ?></th>
                      <th><?php echo $row["usingpack"]  ?></th>
                      <th><?php echo $row["boths"]  ?></th>
                      <th><?php echo $row["names"]  ?></th>
                      <th><?php echo $row["lev"]  ?></th>
                      <th><?php echo $row["mov"]  ?></th>

					  
					  <!-- <th> <a href="up"Edit</a><a href="dcpedit.php?id=<?php echo $row["util_id"] ?>">Edit</a> <a href="up"Edit</a><a href="delete.php?id=<?php echo $row["util_id"] ?>">Delete</a></th> -->
                      <th>
    <a href="javascript:void(0);" onclick="editWithPassword(<?php echo $row["util_id"] ?>)">Edit</a>
    <a href="javascript:void(0);" onclick="deleteWithPassword(<?php echo $row["util_id"] ?>)" style="color:red">Delete</a>
</th>
           
                    </tr>
            <?php
                 
                 }
               }

            ?>

                                            </tbody>
                                        </table>
           
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>


</div>   
                    </div>
                    <!-- Contextual Classes end -->
                   
        <!-- main content area end -->
      
<html>
<head>
	<title>Add Item</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

</html>
    






    </div>
    <!-- page container area end -->
    <!-- offset area start -->
   
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>



    <script>
    function editWithPassword(installId) {
        var password = prompt("Please enter the password:");
        if (password === null) {
            return; // User clicked cancel
        }

        // Here you can perform an AJAX request to a server-side script
        // to validate the password before allowing the edit operation
        // Replace 'validate_edit_password.php' with your actual validation script
        // You'll need to pass the password and productId to the server-side script

        // Example AJAX request:
        /*
        $.post('validate_edit_password.php', {password: password, productId: productId}, function(response) {
            if (response === 'success') {
                // Password is correct, redirect to edit page
                window.location.href = 'edit.php?id=' + productId;
            } else {
                alert("Incorrect password. Please try again.");
            }
        });
        */

        // For demonstration purposes, let's assume the password is 'password'
        if (password === 'password') {
            // Password is correct, redirect to edit page
            window.location.href = 'utiledit.php?id=' + installId;
        } else {
            alert("Incorrect password. Please try again.");
        }
    }

    function deleteWithPassword(installId) {
        var password = prompt("Please enter the password:");
        if (password === null) {
            return; // User clicked cancel
        }

        // Similar to editWithPassword function, perform validation here

        // For demonstration purposes, let's assume the password is 'password'
        if (password === 'password') {
            // Password is correct, redirect to delete page
            window.location.href = 'utildelete.php?id=' + installId;
        } else {
            alert("Incorrect password. Please try again.");
        }
    }
</script>


<script>
    // JavaScript to handle select option redirection
    document.getElementById("forma").addEventListener("change", function() {
        var selectedOption = this.options[this.selectedIndex];
        if (selectedOption.value) {
            window.location.href = selectedOption.value;
        }
    });
</script>

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
