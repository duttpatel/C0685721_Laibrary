<?php
include_once("bookcode.php");
$_SESSION['user']="Admin";

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Payroll Management System | </title>

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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
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
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
			
                  
                  
                  <li><a><i class="fa fa-edit"></i> Manage <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Employee.php">Manage User</a></li>
					  <li><a href="book.php">Manage Book</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>View User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
					            <li><a href="viewadmin.php">View User</a></li>
					            
                      
                    </ul>
                  </li>
				  <li><a><i class="fa fa-edit"></i>View Book <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
					            <li><a href="viewbook.php">View Book</a></li>
					            
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Issue/Return Book <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					            <li><a href="issuebook.php">Issue Book</a></li>
								<li><a href="returnbook.php">Return Book</a></li>
                      
                    </ul>
                  </li>
				  <li><a><i class="fa fa-edit"></i> Request Approval <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					            <li><a href="requestbookapprove.php">Approve Request</a></li>

                      
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
                     Admin
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
                <h3>Manage</h3>
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
                    <h2><i class="fa fa-bars"></i> Manage Book <small></small></h2>
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
                    <h2> Enter Details <small></small></h2>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post" action="bookreturncode.php">
    	            <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Book Id
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="bookidstatus" type="hidden" value="" name="status1"/>
                          <!--<input list="bookdata" name="bookid" class="form-control col-md-7 col-xs-12" placeholder="Book Id" id="bookidid" onChange="checkbook()"/>-->
						  <select class="js-example-basic-single" name="bookid" onChange="checkbook()" id="bookidid">
						  <option value="">Select Book</option>
						<!--<datalist id="bookdata">-->
						<?php
							while($row=mysqli_fetch_assoc($result))
							{
						?>
								<option value="<?php echo $row['BookId']; ?>"><?php echo $row['BookId']."  ".$row['Title'];?></option>
						<?php } ?>
						</select>
                          <span id="firsterror" style="displa:none;"></span>
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Student Id
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input id="studentidstatus" type="hidden" value="" name="status2"/>
							<select class="js-example-basic-single" name="studentid" onChange="checkdata()" id="studentidid">
							<option value="">Select Student</option>
                          <!--<input list="studentdata" name="studentid" class="form-control col-md-7 col-xs-12" placeholder="Student Id" onChange="checkdata()" id="studentidid"/>-->
						<!--<datalist id="studentdata">-->
						<?php
							$connect =mysqli_connect("localhost", 'root','','lms');
        					$r =mysqli_query($connect,"select * from StudentMaster");
							while($row=mysqli_fetch_assoc($r))
							{
						?>
								<option value="<?php echo $row['StudentId']; ?>"><?php echo $row['StudentId']."  ".$row['Name'];?></option>
						<?php } ?>
						</select>
                          <span id="gendererror" style="displa:none;"></span>
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Issue Date
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="Date" required="required" class="form-control col-md-7 col-xs-12" placeholder="Issue Date" name="issuedate" value="<?php echo date('Y-m-d'); ?>" readonly="">
                        </div>
                      </div>
					
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						
						<input type="submit" name="issue" class="btn btn-primary" value="Return">
						
						
						<input class="btn btn-primary" type="reset">
                          <br>
						  <?php if(isset($_SESSION['msg'])): ?>


<div class="msg">
<?php 
echo $_SESSION['msg'];
unset($_SESSION['msg']);

?>
</div>
<?php endif ?>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

       
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					   <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12" style="display:none;">
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
	<script>
function checkdata() {
	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				var rtext=this.responseText;
                if(rtext!="")
				{
					alert(rtext);
					document.getElementById('studentidstatus').value=rtext;
				}
            }
        };
        xmlhttp.open("GET","checkr.php?bid="+document.getElementById("bookidid").value+"&sid="+document.getElementById("studentidid").value,true);
        xmlhttp.send();
    
}
function checkbook() {
	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				var rtext=this.responseText;
                if(rtext!="")
				{
					alert(rtext);
					document.getElementById('bookidstatus').value=rtext;
					
				}
            }
        };
        xmlhttp.open("GET","checkbookdatar.php?bid="+document.getElementById("bookidid").value,true);
        xmlhttp.send();
    
}
</script>
	
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

  </body>
</html>
<?php 
unset($_SESSION["user"]);
?>