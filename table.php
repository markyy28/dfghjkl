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

<form method="POST"  action="additem.php" style="margin-left:20px; margin-right:20px;">
<p style="font-size:16px; font-weight:bold;">ICT COOR PROFILE </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">School ID</label>
      <input  class="form-control full-width" type="text" name="product_name" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Recipient School</label>
      <input class="form-control full-width" type="text" name="price" placeholder="">
    </div>

  </div>
  <p style="font-size:16px; font-weight:bold;">ICT COORDINATOR FOR DATA MANAGEMENT </p>  
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Complete Name</label>
      <input  class="form-control full-width" type="text" name="quant" placeholder="">
    </div>

    <div class="form-group col-md-3">
      <label for="name">Contact Number</label>
      <input  class="form-control full-width" type="text" name="datanumber" placeholder="">
    </div>
    <div class="form-group col-md-3">
      <label for="name">Baccalaureate Degree</label>
      <input  class="form-control full-width" type="text" name="databac" placeholder="">
    </div>
    <div class="form-group col-md-3">
      <label for="name">Number of Years as a ICT Coordinator</label>
      <input  class="form-control full-width" type="text" name="datacoor" placeholder="">
    </div>
  </div>

  <p style="font-size:16px; font-weight:bold;">ICT COORDINATOR FOR DCP PROGRAMS AND PROJECTS </p>  
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Complete Name</label>
      <input  class="form-control full-width" type="text" name="dcpname" placeholder="">
    </div>

    <div class="form-group col-md-3">
      <label for="name">Contact Number</label>
      <input  class="form-control full-width" type="text" name="dcpcon" placeholder="">
    </div>
    <div class="form-group col-md-3">
      <label for="name">Baccalaureate Degree</label>
      <input  class="form-control full-width" type="text" name="dcpbac" placeholder="">
    </div>
    <div class="form-group col-md-3">
      <label for="name">Number of Years as a ICT Coordinator</label>
      <input  class="form-control full-width" type="text" name="dcpcoor" placeholder="">
    </div>
    

  </div>


  <p style="font-size:16px; font-weight:bold;">SCHOOL HEAD </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">Complete Name</label>
      <input  class="form-control full-width" type="text" name="headname" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Contact Number</label>
      <input  class="form-control full-width" type="text" name="headcon" placeholder="">
    </div>
  
  </div>


  <p style="font-size:16px; font-weight:bold;">SCHOOL PROPERTY CUSTODIAN </p>  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">Complete Name</label>
      <input  class="form-control full-width" type="text" name="cusname" placeholder="">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Contact Number</label>
      <input  class="form-control full-width" type="text" name="cuscon" placeholder="">
    </div>
    <div class="form-group col-md-4">
      <label for="name">Number of Years as a School Property Custodian</label>
      <input  class="form-control full-width" type="text" name="cusyear" placeholder="">
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
                                <h4 class="header-title">ICT COOR PROFILE</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-dark text-center table-bordered table-striped">
                                            <thead class="text-uppercase">
                                                <tr style="font-size: 12px" class="table-active">
                                                    <th scope="col">NO.</th>
                                                    <th scope="col">School ID</th>
                                                    <th scope="col">RECIPIENT School</th>
                                                    <th style="background-color:#9ACD32" scope="col">ICT COORDINATOR FOR DATA MANAGEMENT (COMPLETE NAME)</th>
                                                    <th style="background-color:#9ACD32" scope="col">ICT COORDINATOR FOR DATA MANAGEMENT (CONTACT NUMBER)</th>
                                                    <th style="background-color:#9ACD32" scope="col">ICT COORDINATOR FOR DATA MANAGEMENT (BACCALAUREATE DEGREE)</th>
                                                    <th style="background-color:#9ACD32" scope="col">ICT COORDINATOR FOR DATA MANAGEMENT (NUMBER OF YEARS AS ICT COORDINATOR)</th>
                                                    <th style="background-color:yellow" scope="col">ICT COORDINATOR FOR DCP PROGRAMS AND PROJECTS (COMPLETE NAME)</th>
                                                    <th style="background-color:yellow" scope="col">ICT COORDINATOR FOR DCP PROGRAMS AND PROJECTS (CONTACT NUMBER)</th>
                                                    <th style="background-color:yellow" scope="col">ICT COORDINATOR FOR DCP PROGRAMS AND PROJECTS (BACCALAUREATE DEGREE)</th>
                                                    <th style="background-color:yellow" scope="col">ICT COORDINATOR FOR DCP PROGRAMS AND PROJECTS (NUMBER OF YEARS AS ICT COORDINATOR)</th>
                                                    <th style="background-color:orange" scope="col">SCHOOL HEAD (COMPLETE NAME)</th>
                                                    <th style="background-color:orange" scope="col">SCHOOL HEAD  (CONTACT NUMBER)</th>
                                                    <th style="background-color:pink" scope="col">SCHOOL PROPERTY CUSTODIAN (COMPLETE NAME)</th>
                                                    <th style="background-color:pink" scope="col">SCHOOL PROPERTY CUSTODIAN (CONTACT NUMBER)</th>
                                                    <th style="background-color:pink" scope="col">SCHOOL PROPERTY CUSTODIAN (NUMBER OF YEARS AS SCHOOL PROPERTY CUSTODIAN)</th>


                                                    <th scope="col">Action</th>
													 

                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
			<?php 
               $conn = new mysqli("localhost","root","","inventorymanagement");
               $sql = "SELECT * FROM product";
               $result = $conn->query($sql);
					$count=0;
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
					  $count=$count+1;
                   ?>
                  
                   
                   <tr>
                    <th><?php echo $count ?></th>
                      <th><?php echo $row["product_name"] ?></th>
                      <th><?php echo $row["price"]  ?></th>
                      <th><?php echo $row["quantity"]  ?></th>
                      <th><?php echo $row["datanumber"]  ?></th>
                      <th><?php echo $row["databac"]  ?></th>
                      <th><?php echo $row["datacoor"]  ?></th>
                      <th><?php echo $row["dcpname"]  ?></th>
                      <th><?php echo $row["dcpcon"]  ?></th>
                      <th><?php echo $row["dcpbac"]  ?></th>
                      <th><?php echo $row["dcpcoor"]  ?></th>
					  <th><?php echo $row["headname"]  ?></th>
                      <th><?php echo $row["headcon"]  ?></th>
                      <th><?php echo $row["cusname"]  ?></th>
					  <th><?php echo $row["cuscon"]  ?></th>
                      <th><?php echo $row["cusyear"]  ?></th>
					  <!-- <th> <a href="up"Edit</a><a href="edit.php?id=<?php echo $row["product_id"] ?>">Edit</a> <a href="up"Edit</a><a href="delete.php?id=<?php echo $row["product_id"] ?>" style="color:red">Delete</a></th> -->
                      <th>
    <a href="javascript:void(0);" onclick="editWithPassword(<?php echo $row["product_id"] ?>)">Edit</a>
    <a href="javascript:void(0);" onclick="deleteWithPassword(<?php echo $row["product_id"] ?>)" style="color:red">Delete</a>
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
	<title>Add Info.</title>
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
    function editWithPassword(productId) {
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
            window.location.href = 'edit.php?id=' + productId;
        } else {
            alert("Incorrect password. Please try again.");
        }
    }

    function deleteWithPassword(productId) {
        var password = prompt("Please enter the password:");
        if (password === null) {
            return; // User clicked cancel
        }

        // Similar to editWithPassword function, perform validation here

        // For demonstration purposes, let's assume the password is 'password'
        if (password === 'password') {
            // Password is correct, redirect to delete page
            window.location.href = 'delete.php?id=' + productId;
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
</body>

</html>
