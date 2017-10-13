<?php 
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <script src="validation.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="login">
      
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      
      <div class="login_wrapper">
          <center><div>
              <h1><i class="fa fa-paw"></i> Pay Stub Inc.</h1>
              
            </div>
          </center>
        <div class="animate form login_form">
          <section class="login_content">
              <br>
            <form action="indexcode.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" id="username" name="uid"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" id="password1" name="pwd"/>
              </div>
              <div>
                  <input type="submit" value="Login" class="btn btn-primary">
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sign Up</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                

                
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
      <div class="modal-body">
        <form action="signupcode.php" method="post">
    	<div class="form-group">
	      <label for="email">Student Id : </label>	
    		  <input type="text" class="form-control" id="studentidid" placeholder="Enter Student" name="studentid" onBlur="checkstudent()">
			  <input type="hidden" value="" id="studentidstatus" name="status">
	    </div>
	    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control" id="password" placeholder="Enter password" name="pwd">
	    </div>
    	<div class="checkbox">
		      <label><input type="checkbox" name="remember"> Remember me</label>
	    </div>
    	<input type="submit" value="SignUp" class="btn btn-primary">
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
function checkstudent() {
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
        xmlhttp.open("GET","checkstudent.php?sid="+document.getElementById("studentidid").value,true);
        xmlhttp.send();
    
}
</script>
  </body>
</html>
