<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow.Guru</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- imported bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- imported fontawsome -->
    <script src="https://kit.fontawesome.com/43bba9fe74.js" crossorigin="anonymous"></script>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow.Guru</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- imported bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- imported fontawsome -->
    <script src="https://kit.fontawesome.com/43bba9fe74.js" crossorigin="anonymous"></script>
</head>
<body>
   
<form action="login.php" method="post" >
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<!-- <h6 class="mb-0 pb-3"><span>Log In </span></h6> -->
						<?php
						if (isset($_GET['error'])){
							
						}
						?><p  ></p>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<!-- <label for="reg-log"></label> -->
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn-login" >login</button>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div> 
</form>
</body>
</html>
</body>
</html>