
<html>
	<head>
		<title>Fion</title>
		
                 
				        <meta charset="utf-8"/>
					    <meta name="viewport" content="width=device-width, initial-scale=1">
					    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
				    	<title>Health Care System</title>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
		
							<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
							<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    					
	               <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" />
		       	  <link rel= "stylesheet" href="../css/login.css" type="text/css" />
							 		  
		<script>
                     function getLocation() {
                      if (navigator.geolocation) {
                         navigator.geolocation.getCurrentPosition(showPosition);
                          } else { 

                         }
                         }

               function

                    document.getElementById("latitude").value = ""+ position.coords.latitude ;
                     document.getElementById("longitude").value = ""+position.coords.longitude;
                }




</script>
 		
		</head>
		<body>

		<div class="se-pre-con"></div>
		
		                                  <div class="cover">
		                                  <div class="jumbotron container-fluid maincontent">
									

									<ul class="nav nav-tabs nav-justified navy">
											  <li role="presentation" id="signupitem"  class="active"><a href="#">Register</a></li>
											  <li role="presentation" id="loginitem"><a href="logindoctor.php" >Login</a></li>
									</ul>
											
									<div class="content-white">
									<form id="register" method="POST" action="../php/signup.php">
									
							            <div class="form-group">
													<div class="input-group firstname">
														<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													  <input type="text" class="form-control input-lg" name="Firstname" id="Firstname" placeholder="Your Name" >
												   </div>
												   </div>
												   
												   <div class="form-group">
													<div class="input-group lastname">
														<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													  <input type="text" class="form-control input-lg" name="Lastname" id="Lastname"  placeholder="User Name">
													</div>
												 </div>
											
                                          
											 <input type="hidden" name="latitude" id="latitude" />
											  <input type="hidden" name="longitude" id="longitude" />
											
											
											<div class="form-group">
													 <div class="input-group">
													<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
													<input type="email" class="form-control input-lg" name="EmailId" id="Email" placeholder="Email">
												  </div>
											</div>
                                                

                                
										   <div class="form-group">
													 <div class="input-group phone">
													<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													<input type="text" class="form-control input-lg" name="license" id="phne"  placeholder="License No">
												  </div>
											</div>


                                                <div class="form-group">
                                                  <label for="sel1">Specialist type</label>
                                                  <select class="form-control" id="sel1" name="special">
                                                    <option>Dentist</option>
                                                    <option>Othopaedic</option>
                                                    <option>Physician</option>
                                                    <option>Optician</option>
                                                  </select>
                                            </div>

                                            <div class="form-group">
                                                     
                                            <input type="text" class=" input-lg" name="start" id="start" style="width: 40%" placeholder="Start Time">
                                                 
                                           <select class="input-lg" id="sel1" name="ap1" >
                                                    <option>AM</option>
                                                     <option>PM</option>
                                          </select>

                                            </div>

                                            <div class="form-group">
                                                     
                                            <input type="text" class=" input-lg" name="end" id="end" placeholder="End Time" style="width: 40%">
                                                 
                                           <select class="input-lg" id="sel1" name="ap2"
                                                     <option>PM</option>
                                          </select>

                                            </div>

										   <div class="form-group">
													 <div class="input-group phone">
													<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
													<input type="tel" class="form-control input-lg" name="phne" id="phne"  placeholder="Contact No">
												  </div>
											</div>
										 
                                    

                                    



									     
									   
									       <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
													<input type="password" class="form-control input-lg" id="Pass" name="Password" id="Password" placeholder="Password">
										           </div>
										  </div>
										  
										  
										  <div class="form-group">
													 <div class="input-group password-confirm">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
													<input type="password" class="form-control input-lg" name="PasswordConfirm" id="Password-Confirm" placeholder="Confirm password">
										          </div>
										  </div>
										  
										  
										  
										
											<div class="text-center">
													<button type="submit" class="text-center btn btn-primary btn-lg" name="Submit">Create an Account</button>				
									    </div>
						  </form>
						  	</div>
						                   
					 
	        </div>
	       </div>
		   
		  
		 </body>
		           <link href='https://fonts.googleapis.com/css?family=Sirin+Stencil' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Mada' rel='stylesheet' type='text/css'>
		 
		 
						  </html>
		
		