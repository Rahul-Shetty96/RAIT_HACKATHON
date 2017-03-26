<!DOCTYPE html>
<html>
<head>

	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title>Health Care System</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="index.css">

	<style>
		
{box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

#mah
{
width:100%; height:500px ; background-color : blue;
}
	</style>

	<script type="text/javascript">

		   $(function() {
		        $(window).scroll(function() {
		            if($(window).scrollTop() > $(".search").offset().top-400){
		            		$(".my").show('slow');
		            }else{
		                $(".my").hide();
		            }
		        });
		    });
	

	</script>
    

</head>
<body>

	<div class="row image">
	
			<div id="btn" class="row" >
				      <button type="button" class="btn btn-primary btn-lg col-md-offset-10 menu">
				          <span class="glyphicon glyphicon-align-justify"></span> Menu
				      </button>
				</div>

			<div class="switch">
			 <div class="row" id="row">
				<div class="col-sm-4" id="one" >
                    <div class="col-lg-12" id="one1">

                        <a class="a" href="#"><p> Search the doctor</p></a>
                        <p> </p>
                     </div>

                     <div class="col-lg-12" id="one2">
                          <a class="a" href="#"><p> medical</p></a>
                     </div>

                     <div class="col-lg-12" id="one3">
                          <a class="a" href="#"><p> blood bank </p></a>
                     </div>
                </div>


                <div class="col-sm-4" class="two" >
                    <div class="col-lg-12" id="two1">
                         <a class="a" href="#"><p> Search the doctor</p></a>
                    </div>

                     <div class="col-lg-12" id="two2">
                        <a class="a" href="#"><p> Search the doctor</p></a>
                     </div>

                     <div class="col-lg-12" id="two3">
                            <p><a class="a" href="#"> Search the doctor <br/> </a> </p>
                     </div>
                </div>

			</div><!--row of six -->

		</div><!-- end of switch -->
	</div><!-- p1 -->


	<div class="p2 container">

			<div class="row p2-text">
				Search for Appointment
			</div>


			<div class="row search">
				<div class="col-md-3 col-md-offset-1">
					<div class="input-group>
					    <span class="glyphicon glyphicon-search"></span>
					    <input type="text" class="form-control" placeholder="Search by Specialist" aria-describedby="basic-addon1">
				    </div>
				</div>
				<div class="col-md-3 col-md-offset-1">
				    <div class="input-group>
					    <span class="glyphicon glyphicon-search"></span>
					    <input type="text" class="form-control" placeholder="Search by Doctor" aria-describedby="basic-addon1">
				    </div>
				</div>

				<div class="col-md-3 col-md-offset-1">
				    <button type="button" class="btn btn-default success"><span class="glyphicon glyphicon-search"></span>Search</button>
				</div>
			</div>
	</div><!-- p2 -->

	<div class="map container"></div><!-- p3 -->


	<div class="services container my">

		<div class="row services-row-1 l1">
			<div class="col-md-4 ser">
				<div class="service1">
					
					<img src="https://3.imimg.com/data3/HC/NN/MY-1846785/formulation-250x250.jpg" class="image1" style="width:100%">
  					<div class="middle1">
  					  <div class="text1">Search Medicinal Availability</div>
  					  </div>
				</div>
			</div>
			<div class="col-md-4 ser">
				<div class="service2">
						<img src="http://www.seniorlifemgmt.com/wp-content/uploads/2015/06/3D-Medicine-Cartoon-Picture-9.jpg" class="image2" style="width:100%">
  					<div class="middle2">
  					  <div class="text2">Schedule urgent appointment</div>
  					  </div>
				</div>
			</div>
			<div class="col-md-4 ser">
				<div class="service3">

  					<img src="https://media.giphy.com/media/13FbkI8aaDMYAE/giphy.gif" class="image3" style="width:100%">
  					<div class="middle3">
  					  <div class="text3">Search Nearby Blood Bank</div>
  					  </div>
					
				</div>
			</div>
		</div>

		<div class="row services-row-2 l4">
			<div class="col-md-4 ser">
				<div class="service4">
					
					<img src="img_avatar.png" class="image4" style="width:100%">
  					<div class="middle4">
  					  <div class="text4">Search Nearby Blood Bank</div>
  					  </div>

				</div>
			</div>
			<div class="col-md-4 ser">
				<div class="service5">
					
					<img src="img_avatar.png" class="image5" style="width:100%">
  					<div class="middle5">
  					  <div class="text5">Search Nearby Blood Bank</div>
  					  </div>

				</div>
			</div>
			<div class="col-md-4 ser">
				<div class="service6">
					
					<img src="img_avatar.png" class="image6" style="width:100%">
  					<div class="middle6">
  					  <div class="text6">Search Nearby Blood Bank</div>
  					  </div>

				</div>
			</div>
		</div>

	</div>
		

	</div><!-- p4 -->
<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="slideshow-container">

<div class="mySlides fade" >
  <div class="numbertext" ></div>
  <div id = "mah"></div>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
 <div id = "mah"></div>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <div id = "mah"></div>
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

    

    <div class="row footer">
    	Copyright
    </div>
<script>

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
  
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>