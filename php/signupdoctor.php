<?php
        session_start();
        include('db.php');
		if(isset($_POST['Submit']))
		{
				

                

					$name = $_POST['Firstname'];
					$username=$_POST['Lastname'];
					$email = $_POST['EmailId'];
                    $salt =$_POST['Password']; 
                    $license=$_POST['License'];
                    $latitude = $_POST['latitude'];
                    $longitude = $_POST['longitude'];
                    $age=$_POST['age'];

                    

				    $query = "insert into patient values('$email','$salt','$name','$age','$latitude','$longitude','$address') ";


					
					$res = mysqli_query($con,$query);
					
							if($res)
							{
								     $_SESSION['user'] = $email;
									header('Location:../html/index.php');									 
							}
							else
							{
								
							}	

        }



?>
