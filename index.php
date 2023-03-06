<?php  

	include ("connection.php");
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABES - Wayfinding System</title>

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

		.useraccount .item {
		    background: #8EA9ED;
		    border-radius: 15px;
		    padding: 15px;
		}

		.useraccount .item:hover {
		    background: #E1E1E1;
		    box-shadow: 0 0 0 2px #d0d0d0;
		    border-radius: 15px;
		    padding: 15px;
		    box-shadow: 0 2px 17px 0 rgba(0, 0, 0, .25), 0 3px 10px 5px rgba(0, 0, 0, 0.05) !important;
		    cursor:pointer;
		}

		.bgimage {
			background: url(images/ABESBG.jpg) no-repeat center center fixed;
			height: 100vh;
			align-items: center;
		 	display: flex;
		  	justify-content: center;
			background-color: rgba(142, 169, 237, 0.4);
			-webkit-backdrop-filter: blur(5px);
			backdrop-filter: blur(5px);
		}

		div.transbox {
		  background-color: rgba(142, 169, 237, 0.4);
		  -webkit-backdrop-filter: blur(3px);
		  backdrop-filter: blur(3px);
		  padding: 40px;
		  margin: 65px;
		  font-weight: bold;
		  border-radius: 15px;
		  box-shadow: 0 2px 17px 0 rgba(0, 0, 0, .25), 0 3px 10px 5px rgba(0, 0, 0, 0.05) !important;
		}		

	</style>	

</head>
<body>

	<div class="bgimage">
		<div class="transbox">

			<div class="container pt-5">
				<div class="container container-fluid pt-5">
					<b class="fs-1">Welcome to Caminos!</b>
					<p>this system is an interactive navigation system that helps people find their way around unfamiliar places. It typically consists of maps, signs, and other visual elements that make it easier to orient oneself.</p>
				</div>
			</div>


			<div class="container text-center">
				<div class="row">

					<div class="useraccount col-sm pt-5 p-5">
						<div class="item" onclick="window.location.href='Stdnt_Login.php';">
							<img src="images/student.png" style="width: 15vh">
							<br>
							<span>
								<b class="fs-3">Student</b>
							</span>
						</div>
					</div>

					<div class="useraccount col-sm pt-5 p-5">
						<div class="item" onclick="window.location.href='Faculty.php';">
							<img src="images/faculty.svg"  style="width: 15vh">
							<br>
							<span>	
								<b class="fs-3">Faculty</b>
							</span>
						</div>
					</div>

					<div class="useraccount col-sm pt-5 p-5">
						<div class="item" onclick="window.location.href='PrntVstr_Login.php';">
							<img src="images/parent.svg" style="width: 15vh">
							<br>
							<span>
								<b class="fs-3">Parent / Visitor</b>
							</span>				
						</div>
					</div>

				</div>
			</div>


			<div class="pt-5">
				<!-- Included Footer -->
				<?php 
					include "footer.php";
				?>
				<!-- Included Footer -->	
			</div>


		</div>
	</div>


</body>
</html>