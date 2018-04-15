<!DOCTYPE html>
<?php include 'css.php' ?>;
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background-image: url(lgn10.jpg);">

			<div class="container">
				
					<div class="row">
						<div class="col-md-4"></div>
							<div class="col-md-4" id="lgn-form" >
								<center><b class="lgn-head">Login</b></center>
								<form style="padding: 10px 0px 0px">
									

									<div class="form-group">
										 <i class="icon-user"></i>
										<input type="text" name="un" class="form-control text" placeholder="User Name">
									</div>
									<div class="form-group" >
									
										<input type="Password" name="pass" class="form-control Password" placeholder="Password">

										
									</div>

									<div class="form-group" >
										<button type="button" class="btn btn-primary btn-block">Login</button>
										<label style="padding: 18px 40px 0px">Not a Member ? <a href="form.php" style="color: black">Sign Up</label>
									</div>


								</form>

							

						</div>

					</div>
			</div>

			</body>
</html>