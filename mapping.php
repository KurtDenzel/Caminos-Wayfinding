<?php  

	include ("connection.php");
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABES - Mapping System</title>

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
		
	</style>	

</head>
<body class="mx-4" style="background-color: #9EB9FF">

	<!-- Container -->
	<div class="container my-4">

		<!-- Welcome Text -->
		<div class="container py-2">

			  <div class="row">

			    <div class="col-sm">
			      	<b class="fs-4">Hello User</b>
			    </div>

			    <div class="col-sm">
					<!-- Blank Placeholder -->
			    </div>

			    <div class="col-sm text-end">
			    	<button onclick="window.location.href='PV_login.php';">
			    		<span class="material-symbols-outlined">
							<img src="images/logout.png" style="width: 4vh">
						</span>
			    	</button>			      	
			    </div>			    

			  </div>

		</div>



		<!-- Search Entry -->
		<div class="container py-3">
			<input type="text" class="form-control rounded-pill shadow-none" name="Name"  placeholder="Where to go?" required>
		</div>
		<!-- Search Entry -->



		<!-- Quick Actions -->
		<div class="container py-2 text-center">

		  <div class="row">

		    <div class="col-sm">
		      	<button type="button" class="btn btn-light w-100 rounded-pill">Canteens 
			      	<span class="material-symbols-outlined">
						<img src="images/canteens.png" style="width: 4vh">
					</span>
				</button>
		    </div>

		    <div class="col-sm">
		      <button type="button" class="btn btn-light w-100 rounded-pill">Restrooms
			      	<span class="material-symbols-outlined">
						<img src="images/restrooms.png" style="width: 4vh">
					</span>
		      </button>
		    </div>

		    <div class="col-sm">
		      	<button type="button" class="btn btn-light w-100 rounded-pill">Facilities
			      	<span class="material-symbols-outlined">
						<img src="images/facilities.png" style="width: 4vh">
					</span>
		      	</button>
		    </div>

		  </div>

		</div>
		<!-- Quick Actions -->



		<!-- Workspace Canvas -->
		<div class="container py-2">
			<div class="p-3 mb-2 bg-light text-dark rounded" style="height: 60vh;">Workspace Canvas</div>		
		</div>
		<!-- Workspace Canvas -->



	</div>
	<!-- Container -->	


	<!-- Included Footer -->
	<?php 
		include "footer.php";
	?>
	<!-- Included Footer -->	


</body>
</html>