<?php

		 
	

     include('../php/db.php');
	 $error = "";
    if(isset($_POST['submit']))
    {
	if(isset($_POST['EmailId']) && $_POST['Password'])  
	{
		$user=mysqli_real_escape_string($con,$_POST['EmailId']);        //idhar changes karna hai 
    	$password=mysqli_real_escape_string($con,$_POST['Password']);


           $res ="SELECT salt FROM doctor WHERE username='$user' ";

		  

		if($password==$res)
		{
			
                 $_SESSION['user'] = $user;
		         header('Location:index.php');
		  	
       }
		else
		{
	             $error = "Username or Password is invalid";
		}
		
		else
		{
	             $error = "Username or Password is invalid";
		}
		
	}
}
?>

<html>
	<head>
		<title>Form Validation</title>
		
                 <meta charset="utf-8">
					  <meta name="viewport" content="width=device-width, initial-scale=1">
					   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
					    <script src="../javascript/jquery.js"></script>
					    <script src="../bootstrap/js/bootstrap.min.js"></script>
						<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
						<script src="../javascript/codelogin.js"></script>
	               <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" />
		           <link rel="stylesheet" href="../css/header.css"  type="text/css"  />
					  <link rel= "stylesheet" href="../css/login.css" type="text/css" />
					  <link rel="stylesheet" href="../css/footer.css"  type="text/css"  />
                 <link rel="stylesheet" href="../css/loader.css"  type="text/css"  />			



                 <style type="text/css">
                 	
 
#forgot_pass_modal, .admin_label{
	text-align: center;
}
#modal_anchor{
	padding-right: 35%;
	float: right;
}


                 </style>>


		</head>
		
		
		<body>
		      <div class="se-pre-con"></div>
		   
		                       
								  <div class="cover">
								         <div class="error"><?php echo $error ?></div>
		                         <div class="jumbotron container-fluid maincontent">
										  <ul class="nav nav-tabs nav-justified navy">
											  <li role="presentation" id="signupitem"  ><a href="registerdoctor.php">Register</a></li>
											  <li role="presentation" id="loginitem" class="active"><a href="#">Login</a></li>
									</ul>
											
									<div class="content-white">
									
									<form id="loginform" method="POST" action="">      
									
									                             
								 <div class="form-group">
													 <div class="input-group">
													<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
													<input type="email" class="form-control input-lg" name="EmailId" id="Email-Id" placeholder="Email">
												  </div>
											</div>
									   
									     <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
													<input type="password" class="form-control input-lg" name="Password" placeholder="Password">
										          </div>
										  </div>
										  
									
										  
										  
										  <div class="password-forgot">
										  
					<a data-toggle="modal" id="modal_anchor" data-target="#forgot_pass_modal">Forgot Passsword?</a>
					<br/><br/><br/>
										  </div>
										  
											
                             <div class="modal fade" id="forgot_pass_modal" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Forgot Password</h4>
								</div>
								<div class="modal-body">
									<form class="form-inline" id="fp">
										<input id="fp_username" name="fp_username" class="form-control" autofocus placeholder="Username" type = "text" required>
										<button type="submit" class="btn btn-primary">Submit</button>
										<img id="fploading" src="../imgs/fploading.gif" alt="Loading" style="height:20px; width:20px;"/>
									</form>
								</div>
								<div class="modal-footer" style="text-align:center;">
									<p class="alert-danger" id="err"></p>
									<p>Email with new password will be sent to your registered mail id</p>
								</div>
							</div>
						</div>
					</div>



											<div class="text-center">
												 	<button type="submit" class="text-center btn btn-primary btn-lg" name="submit">Login</button>
										</form>
									
									 	</div>
						                   
					 
	          </div>
	       </div>
		   </div>
		   
		      <?php require 'footer.php';	?>
		 </body>
		           <link href='https://fonts.googleapis.com/css?family=Sirin+Stencil' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Mada' rel='stylesheet' type='text/css'>
		 
		 
						  </html>