<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
	unset($_SESSION['first_name']);
	unset($_SESSION['last_name']);
	header("location: table.php");
    header("location: table1.php");
    header("location: dcptable.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="Inventmng/srtdash/assets/bootstrap.min.css">
</head>
<body>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
   
</div>
<script>src="srtdash/assets/js/vendor/jquery-2.2.4.min.js" </script>
<script>src="srtdash/assets/js/vendor/modernizr-2.8.3.min.js" </script>
</body>
</html>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
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
                <!-- <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div> -->
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
                            <li class="active">
    <a aria-expanded="true"><i class="fa fa-table"></i>
        <select name="forma" onchange="location = this.value;" style="font-size:17px; font-weight:bold; margin-left:8px;">  
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
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                           
                            
        
                        </ul>
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
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                 
							<a class="dropdown-item" href="index.php?logout='1'">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
          <div>
		
		 <?php  if (isset($_SESSION['first_name']) ) : ?>
		<h2 style="text-align:center"> Welcome <strong><?php echo $_SESSION['first_name']; echo " " ;echo $_SESSION['last_name'];?></strong></h2>
		
		<?php endif ?>
		<img src="img.jpg" alt="welcome " style="width:100%; height:50%;">
		
		</div>
               
                
                    
        </div>
		
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <!-- <p>© Copyright Partho Bala. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p> -->
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        
           
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

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
