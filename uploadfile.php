
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Upload file-FeedBackAnalyst</title>
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
	 #pageloader
{
  background: rgba( 255, 255, 255, 0.8 );
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}
#pageloader h4
{
  left: 41%;
  text-align: center;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 60%;
}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
	 $(document).ready(function(){
  $("#myform").on("submit", function(){
    $("#pageloader").fadeIn();
  });//submit
});//document ready
	</script>
	
	<script>
    $(document).ready(function(){
        $("#file_selected").change(function(){
            document.getElementById("options").style.display = "block";
        });
    });
	
	 window.onload = function() {
       document.getElementById("options").style.display = "none";
     };
</script>
	
  </head>
  <body>
  <div id="pageloader">
   <h4 align="center">Analysing...Please be patient..</h4>
   <img src="images/loader-64x/Preloader_2.gif" alt="processing..." />
</div>
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
    <br><br><br>
    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/csvupdated.png);">
	    		</div>
	    		<div class="col-md-6 ftco-animate p-md-5">
		    		<div class="row py-md-5">
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4">Upload File</h2>
			              	<p>We work only with .csv files.(Columns exactly matching with our defined screenshot)</p>
							
							<form action="analyse.php" method="POST" enctype="multipart/form-data" id="myform">
							  <input type="file" name="file" class="btn" id="file_selected" required>
							  <br><br>
							  <div id="options">
							  <p>Great! Now select any feature to analyse.</p>
							  <input type="submit" name="submit" class="btn btn-primary p-2" value="Sentiment" onclick='this.form.action="analyse.php";'>
							  <input type="submit" name="submit" class="btn btn-primary p-2" value="Emotion" onclick='this.form.action="emotion.php";'>
							  <input type="submit" name="submit" class="btn btn-primary p-2" value="Taxonomy" onclick='this.form.action="taxonomy.php";'>
							  <input type="submit" name="submit" class="btn btn-primary p-2" value="Abusiveness" onclick='this.form.action="abusive.php";'>
							  </div>
							</form>
							
				            </div>
		              </div>


		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
    			<div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
            <h2 class="mb-4">How it works</h2>
          </div>
    		</div>
    		<div class="row">
          <div class="col-md-12 align-items-center ftco-animate">
            
            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              	<div class="d-md-flex">
	              	<div class="one-forth align-self-center">
	              		<img src="images/undraw_laravel_and_vue_59tp.svg" class="img-fluid" alt="">
	              	</div>
	              	<div class="one-half ml-md-5 align-self-center">
		                <h2 class="mb-4">Integration of NLP</h2>
						<p>We make use of exisiting Text analytics API providing three major features, namely, sentiment, emotion and abusive text analysis  on the feedback of each client</p>
		              	<p>Text Analytics API is a cloud-based service that provides sophisticated natural language processing over raw text to analyze text.</p>
		       
		              </div>
	              </div>
              </div>

              <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                <div class="d-md-flex">
	              	<div class="one-forth order-last align-self-center">
	              		<img src="images/undraw_visual_data_b1wx.svg" class="img-fluid" alt="">
	              	</div>
	              	<div class="one-half order-first mr-md-5 align-self-center">
		                <h2 class="mb-4">Performance VPS hosting</h2>
		              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
		              </div>
	              </div>
              </div>

              <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                <div class="d-md-flex">
	              	<div class="one-forth align-self-center">
	              		<img src="images/undraw_business_plan_5i9d.svg" class="img-fluid" alt="">
	              	</div>
	              	<div class="one-half ml-md-5 align-self-center">
		                <h2 class="mb-4">Effective VPS hosting</h2>
		              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
		              </div>
	              </div>
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
  <script type='text/javascript' src="../Scripts/jquery-1.4.1.min.js"></script>
<script src="../Scripts/jquery-1.4.1.js" type="text/javascript"></script>
<script src="../Scripts/jquery.maskedinput.js" type="text/javascript"></script>

  </body>
</html>