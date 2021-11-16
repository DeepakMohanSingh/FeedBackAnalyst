<?php
 
if(isset($_GET["positive"]))
{
	$dataPoints = array( 
	array("label"=>"Positive", "y"=>$_GET["positive"]),
	array("label"=>"Negative", "y"=>$_GET["negative"]),
	array("label"=>"Neutral", "y"=>$_GET["neutral"]),
	array("label"=>"Nofeedback", "y"=>$_GET["nofeedback"])
    );
}
else if(isset($_GET["happy"]))
{
	$dataPoints = array( 
	array("label"=>"Happy", "y"=>$_GET["happy"]),
	array("label"=>"Excited", "y"=>$_GET["excited"]),
	array("label"=>"Sad", "y"=>$_GET["sad"]),
	array("label"=>"Angry", "y"=>$_GET["angry"]),
	array("label"=>"No Feedback", "y"=>$_GET["nofeedback"])
    );
}
else if(isset($_GET["abusive"]))
{
	$dataPoints = array( 
	array("label"=>"Abusive", "y"=>$_GET["abusive"]),
	array("label"=>"Hate Speech", "y"=>$_GET["hatespeech"]),
	array("label"=>"Neither", "y"=>$_GET["neither"]),
	array("label"=>"Nofeedback", "y"=>$_GET["nofeedback"])
    );
}
else
{
	$dataPoints = array();
	foreach($_GET as $key=>$value)
	{
		$inner_array = array("label"=>$key, "y"=>$value);
		array_push($dataPoints, $inner_array);
	}
} 
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Result-FeedBackAnalyst</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<style>
	  .no-js #loader { display: none;  }
      .js #loader { display: block; position: absolute; left: 100px; top: 0; }
      .se-pre-con {
	   position: fixed;
	   left: 0px;
	   top: 0px;
	   width: 100%;
	   height: 100%;
	   z-index: 9999;
	   background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
       }
	   
	   .wrapper {
       text-align: center;
       }
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script>
     function myPrint() {
       window.print();
     }
     </script>
  </head>
  <body>
  <br><br><br><br>
  <?php if(isset($_GET["positive"])){ ?>
  <h2 align="center"><b>Sentiment Analysis - Pie Chart Result<b></h2>
  <p align="center"><script>document.write(new Date());</script></p>
  <?php } 
  else if(isset($_GET["happy"])){ ?>
  <h2 align="center"><b>Emotion Analysis - Pie Chart Result<b></h2>
  <p align="center"><script>document.write(new Date());</script></p>
  <?php } 
  else if(isset($_GET["abusive"])){ ?>
  <h2 align="center"><b>Abusive content Analysis - Pie Chart Result<b></h2>
  <p align="center"><script>document.write(new Date());</script></p>
  <?php } 
  else { ?>
  <h2 align="center"><b>Taxonomy Analysis - Pie Chart Result<b></h2>
  <p align="center"><script>document.write(new Date());</script></p>	  
  <?php } ?>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">FeedBackAnalyst</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="domain.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Follow</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	<div id="chartContainer" style="height: 420px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	
	<div class="wrapper">
	<br><br>
       <button class="btn btn-primary p-2" align="center" onclick="myPrint()">Save report</button>
	<br><br>
    </div> 	
	
	<section>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5">
    				<img src="images/undraw_podcast_q6p7.svg" class="img-fluid" alt="">
    				<div class="heading-section ftco-animate mt-5">
	            <h2 class="mb-4">Try our services</h2>
	            <p>Try any of our four analysis features.</p>
	          </div>
    			</div>
    			<div class="col-md-6 py-5">
    				<div class="row">
    					<div class="col-md-6 ftco-animate">
    						<a href="uploadfile.php">
							<div class="media block-6 services border text-center">
		            	<div class="icon d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud-computing"></span>
		            	</div>
		              <div class="mt-3 media-body media-body-2">
		                <h3 class="heading">Effect</h3>
		                <p>Good or bad? Yes or No? <br>Quickly take a look at the number of positive, negative and neutral feedbacks for your requested title/product</p>
		              </div>
		            </div></a>
    					</div>
    					<div class="col-md-6 ftco-animate">
						<a href="uploadfile.php">
    						<div class="media block-6 services border text-center">
		            	<div class="icon d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud"></span>
		            	</div>
		              <div class="mt-3 media-body media-body-2">
		                <h3 class="heading">Emotion</h3>
		                <p>Control others' emotions now! Know how many are happy,sad,excited or angry with your requested title/product.</p>
		              </div>
		            </div></a>
    					</div>
						<div class="col-md-6 ftco-animate">
    						<a href="uploadfile.php"><div class="media block-6 services border text-center">
		            	<div class="icon d-flex align-items-center justify-content-center">
		            		<span class="flaticon-server"></span>
		            	</div>
		              <div class="mt-3 media-body media-body-2">
		                <h3 class="heading">Abusive</h3>
		                <p>Do you know your hate count? :( Know how many used abusive words, hate speech or neither:).</p>
		              </div>
		            </div></a>
    					</div>
						<div class="col-md-6 ftco-animate">
    						<a href="uploadfile.php"><div class="media block-6 services border text-center">
		            	<div class="icon d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud-computing"></span>
		            	</div>
		              <div class="mt-3 media-body media-body-2">
		                <h3 class="heading">Taxonomy</h3>
		                <p>Get to know what are the major categories your product feedback lies under. Its an interesting feature!</p>
		              </div>
		            </div></a>
    					</div>						
    				</div>
          </div>
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 bg-primary p-4">
              <h2 class="ftco-heading-2">FeedBack Analyst</h2>
              <p>Stop reading each word of feedbacks. Know what your clients feel!</p>
              <ul class="ftco-footer-social list-unstyled mb-0">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Navigational</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Office</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Adress to be added very soon after verification</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">datafagroup@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script>
    window.onload = function() {
 
    var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
  });
  chart.render();
 
}
</script>
</html>