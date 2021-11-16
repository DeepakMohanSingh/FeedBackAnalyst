<?php
 set_time_limit(100); 
$flag=0;
if(isset($_POST["submit"]))
{
	require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
    # Setting your API key
    //set_api_key("oWbiJzj34eCBB3KvfMBgGrAsro3gvB54jYTseART02w");
	require('apikey.php');
	
	$filepath = "files/".$_FILES['file']['name'];
	$fileExtensions = ['csv'];
	$fileName = $_FILES['file']['name'];
	$fileSize = $_FILES['file']['size'];
	$tmp = explode('.', $fileName);
    $fileExtension = end($tmp);
	
	if (in_array($fileExtension,$fileExtensions)) 
	{
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
	{
	  $flag=1;
	  $file = fopen($filepath,"r");
	  $line = fgetcsv($file);
	  $result=""; $happy=0; $sad=0; $excited=0; $angry=0; $nofeedback=0; $color=0;
      while (($line = fgetcsv($file)) !== FALSE) {
      //$line is an array of the csv elements
	  if($line[2]==null)
	  {
   		$nofeedback++;
	    continue;
	  }
	  $response = emotion($line[2]);
	  $object = json_decode($response);
	  $ar = array("HAPPY"=>$object->emotion->Happy, "EXCITED"=>$object->emotion->Excited, "SAD"=>$object->emotion->Sad, "ANGRY"=>$object->emotion->Angry);
	  $keyOfhighestVal= array_keys($ar,max($ar));
	  $result = $keyOfhighestVal[0];
	  if(strcmp($result,"HAPPY")==0)
		$happy++;
	  else if(strcmp($result,"EXCITED")==0)
		$excited++;
	  else if(strcmp($result,"SAD")==0)
		$sad++;
	  else
		$angry++;
    }
    fclose($file);
	if($happy>=$excited&&$happy>$sad&&$happy>$angry)
		$color=1;
	else if($excited>=$happy&&$excited>$sad&&$excited>$angry)
		$color=2;
	
	}
	else
	{
		echo "File upload failed.";
	}
  }
}
else
{
	echo "error";
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
  </head>
  <body>
    
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
	<?php
	   if($flag==0)
	   {
		 ?>
		 <br><br><br><br><br>
             <section class="ftco-section ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		
		                <span><h5 align="center"><font color="white">This file extension is not allowed. Please upload a CSV file</font></h5></span>
		              
		        
	        </div>
        </div>
    	</div>
    </section>
	<br>
	<p align="center"><a href="uploadfile.php?id=2" class="btn btn-primary px-4 py-3">Upload file</a></p>
	<br><br><br><br><br><br><br><br>
         <?php		 
	   }
	   else
	   {
	?>

    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate p-md-5">
		    		<div class="row py-md-5">
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		               
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>

    <section class="ftco-section ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">FeedBack Analysis-Result</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
				  <?php if($color==1)
				  {
					  ?>
					  <img src="images/result.gif" style="position: absolute;" width="50%" />
					  <?php
				  }
				  ?>
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $happy; ?>">0</strong>
		                <span>Happy</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
				  <?php if($color==2)
				  {
					  ?>
					  <img src="images/result.gif" style="position: absolute;" width="50%" />
					  <?php
				  }
				  ?>
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $excited; ?>">0</strong>
		                <span>Excited</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $sad; ?>">0</strong>
		                <span>Sad</span>
		              </div>
		            </div>
		          </div>
				  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $angry; ?>">0</strong>
		                <span>Angry</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $nofeedback; ?>">0</strong>
		                <span>No Feedback</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section><br><br>

    <section>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5">
    				<img src="images/undraw_podcast_q6p7.svg" class="img-fluid" alt="">
    				<div class="heading-section ftco-animate mt-5">
	            <h2 class="mb-4">Try our services</h2>
	            <p>Try any of our three analysis features.</p>
	          </div>
    			</div>
    			<div class="col-md-6 py-5">
    				<div class="row">
    					<div class="col-md-6 ftco-animate">
    						<a href="uploadfile.php?id=1">
							<div class="media block-6 services border text-center">
		            	<div class="icon d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud-computing"></span>
		            	</div>
		              <div class="mt-3 media-body media-body-2">
		                <h3 class="heading">Effect</h3>
		                <p>Even the all-powerful Pointing has no control about the blind texts</p>
		              </div>
		            </div></a>
    					</div>
    					<div class="col-md-6 ftco-animate">
						<a href="uploadfile.php?id=2">
    						<div class="media block-6 services border text-center">
		            	<div class="icon d-flex align-items-center justify-content-center">
		            		<span class="flaticon-cloud"></span>
		            	</div>
		              <div class="mt-3 media-body media-body-2">
		                <h3 class="heading">Emotion</h3>
		                <p>Even the all-powerful Pointing has no control about the blind texts</p>
		              </div>
		            </div></a>
    					</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    					<div class="col-md-6 ftco-animate">
    						<a href="uploadfile.php?id=3"><div class="media block-6 services border text-center">
		            	<div class="icon d-flex align-items-center justify-content-center">
		            		<span class="flaticon-server"></span>
		            	</div>
		              <div class="mt-3 media-body media-body-2">
		                <h3 class="heading">Abusive</h3>
		                <p>Even the all-powerful Pointing has no control about the blind texts</p>
		              </div>
		            </div></a>
    					</div>
    				</div>
          </div>
    		</div>
    	</div>
    </section>
	<?php
	   }
	?>

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
</html>