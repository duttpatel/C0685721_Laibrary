<?php 
session_start();
$studentid=$_SESSION['studentid'];
$sname=$_SESSION['user1'];
$sid=0;
$name="";
$gender="";
$dob="";
$add="";
$city="";
$province="";
$pincode="";
$email="";
$weblink="";
$course="";
if(isset($studentid))
{
		$sid=$studentid;
		$connect=mysqli_connect("localhost",'root','','lms');
		$query="select * from StudentMaster where StudentId=$studentid";
		$result=mysqli_query($connect,$query);
		$record=mysqli_fetch_assoc($result);
		$name=$record['Name'];
		$gender=$record['Gender'];
		$dob=$record['DOB'];
		$add=$record['Address'];
		$city=$record['City'];
		$province=$record['Province'];
		$pincode=$record['PostalCode'];
		$email=$record['Email'];
		$weblink=$record['Weblink'];
		$course=$record['Course'];
}
mysqli_close($connect);
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library Management System | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

	<!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <script src="validation2.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>LMS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $sname; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
			
                  
                  
                  <li><a><i class="fa fa-edit"></i> Update <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="updateprofile.php">update Profile</a></li>
					  <li><a href="changepassword.php">Change Password</a></li>
                    </ul>
                  </li>
                  
				  <li><a><i class="fa fa-edit"></i>View Book <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
					            <li><a href="viewbookuser.php">View Book</a></li>
					            
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Request Book <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					            <li><a href="requestbook.php">Request Book</a></li>
                      
                    </ul>
                  </li>
				  
				 
                 
                  
                 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?php echo $name; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
		  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                </div>
              </div>
            </div>
			
			
			
			 <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Update Profile <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class=""></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Change Details <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class=""></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post" action="updateprofilecode.php" onSubmit="return myvalidation()">
					
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Student Id
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="sid" value="<?php echo $sid; ?>" readonly="" class="form-control col-md-7 col-xs-12"/>
                          <span id="firsterror" style="displa:none;"></span>
                        </div>
                      </div>
					
						
						
						
						
						
						
						
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Student Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Enter Name" name="name1" value ="<?php echo $name;?>">
                          <span id="firsterror" style="displa:none;"></span>
                        </div>
                      </div>
					  
					
					  
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gender
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="gender" required="required" class="form-control col-md-7 col-xs-12" placeholder="Gender" name="gender" value ="<?php echo $gender; ?>">
                          <span id="gendererror" style="displa:none;"></span>
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date Of Birth
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="dob" required="required" class="form-control col-md-7 col-xs-12" placeholder="" name="dob" value ="<?php echo $dob;?>">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="address" required="required" class="form-control col-md-7 col-xs-12" placeholder="Address" name="add" value ="<?php echo $add;?>">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="city" required="required" class="form-control col-md-7 col-xs-12" placeholder="City" name="City" value ="<?php echo $city;?>">
                          <span id="cityerror" style="displa:none;"></span>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Province
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="province" required="required" class="form-control col-md-7 col-xs-12" placeholder="Province" name="province" value ="<?php echo $province;?>">
                          <span id="provinceerror" style="displa:none;"></span>
                        </div>
                      </div>
					  
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Postal Code
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="pincode" required="required" class="form-control col-md-7 col-xs-12" placeholder="Postal Code" name="pincode" value ="<?php echo $pincode;?>">
                          <span id="pincodeerror2" style="displa:none;"></span>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email Address
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email Address" name="email" value ="<?php echo $email;?>">
                          <span id="emailerror" style="displa:none;"></span>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Website Link
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="wemail" required="required" class="form-control col-md-7 col-xs-12" placeholder="Website Link" name="weblink" value ="<?php echo $weblink;?>">
                          <span id="wemailerror" style="displa:none;"></span>
                        </div>
                      </div>
					  
					  
					  
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" class="form-control col-md-7 col-xs-12" placeholder="Annual Basic Pay" name="course" value ="<?php echo $course;?>" readonly="">
                          <span id="payerror" style="displa:none;"></span>
                        </div>
                      </div>
				  
				  
				   
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						
						<input type="submit" name="update" class="btn btn-primary" value="update">
						
						<input class="btn btn-primary" type="reset">
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

       
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					   <div class="row" style="display:none;">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Modify Details <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class=""></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					  
					  <?php if(isset($_SESSION['msg'])): ?>

<div class="msg">
<?php 
echo $_SESSION['msg'];
unset($_SESSION['msg']);

?>
</div>

<?php endif ?>
<table class="table">
	<thead>
		<th> Name</th>
		<th>Gender</th>
		<th>City</th>
		<th>Province</th>
		<th>DOJ</th>
		<th>Basic Pay</th>
		<th colspan="2">Action</th>
	</thead>
	<tbody>
	<?php while($row=mysqli_fetch_array($result)){ ?>
			
			<tr>
			<td>
			<?php echo $row['Name'];?>
			</td>
			<td>
			<?php echo $row['Gender'];?>
			</td>
			<td>
			<?php echo $row['City'];?>
			</td>
			<td>
			<?php echo $row['Province'];?>
			</td>
			<td>
			<?php echo $row['DOJ'];?>
			</td>
			<td>
			<?php echo $row['BasicPay'];?>
			</td>
			
			<td>
				<a class="btn btn-primary" href="Employee.php?edit=<?php echo $row['EId']; ?>">Edit</a>
			</td>
			<td>
				<a class="btn btn-primary" href="EmployeeCode.php?del=<?php echo $row['EId']; ?>">Delete</a>
			</td>		
		</tr>
		<?php } ?>
	</tbody>
</table>

                    
                  </div>
                </div>
              </div>
            </div>

       
                       

                  </div>
                </div>
              </div>

			
			
			
			
			
			
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
	
	
  </body>
</html>
