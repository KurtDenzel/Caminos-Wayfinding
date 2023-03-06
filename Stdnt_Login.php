<?php  

	include ("connection.php");
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABES - Parents / Visitors Wayfinding</title>

	<!-- CSS CDN FRAMEWORKS: -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<!-- jQUery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<!-- Custom Shadow CSS -->
	<style type="text/css">

		.shadow-custom {
		  box-shadow: 0 2px 17px 0 rgba(0, 0, 0, .25), 0 3px 10px 5px rgba(0, 0, 0, 0.05) !important;
		  border-radius: 15px;
		}

		.loader {
		  border: 16px solid #F3F3F3;
		  border-radius: 50%;
		  border-top: 16px solid #3498DB;
		  width: 50px;
		  height: 50px;
		  -webkit-animation: spin 2s linear infinite; /* Safari */
		  animation: spin 2s linear infinite;
		}

		/* Safari */
		@-webkit-keyframes spin {
		  0% { -webkit-transform: rotate(0deg); }
		  100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}		
		
	</style>	

</head>
<body>

	<section class="vh-100" style="background-color: #9EB9FF; ">
		<div class="container py-5 h-50">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col col-xl-10">
					<div class="card" style="border-radius: 1rem;">

						<div class="row g-0">
				           <div class="col-md-6 col-lg-5 d-none d-md-block">
				              <img src="images/ABESBG2.jpg"
				                alt="login form" class="img-fluid" 
				                	style="
				                	border-radius: 1rem 0 0 1rem; 
				                	height: 85vh; 
				                	width: 66vh;
				                	filter: blur(2px);
  									-webkit-filter: blur(2px);
  									background-color: rgba(142, 169, 237, 0.4);  " />
				            </div>							

					            <div class="col-md-6 col-lg-7 d-flex align-items-center">
					              <div class="card-body p-lg-5 text-black">				            

									<!-- Welcome Text -->
									<div class="container text-center py-3">
										<img src="images/logobrand.png" class="img-fluid" style="width: 10vh;">
										<h1 class="fs-1" style="font-weight: bold;">Login</h1>
										

									</div>
									<!-- Welcome Text -->


									<div class="container text-center pt-2">
										
										<div class="row mx-5 g-0">

												<!-- Login Procedure -->
												<div class="justify-content-center mt-3">
													<div class="d-grid gap-2">
														<button type="submit" name="login" onclick="window.location.href='mapping.php';" 
															 value="login" class="btn btn-primary block" >
															Proceed
														</button>
													</div>
												</div>
												<!-- Login Procedure -->	

									  	</div>

									</div>

									<div class="py-5">
										<!-- Included Footer -->
										<?php 
											include "footer.php";
										?>
										<!-- Included Footer -->
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>