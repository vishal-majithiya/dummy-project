<?php include("css.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Regestration Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>

	<div class="container" id="cnt" >
		<div class="row" >
			<div class="col-md-3"></div>


					
					<div class="col-md-6" id="Form" >
						<form action="#" method="post">
						
						<center><b class="Reg-head">Regestration Form</b></center>

						


								<div class="form-group">
									<label>First Name</label>
									<input type="text" name="fn" class="form-control text" placeholder="Enter First Name">
								</div>
								
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" name="ln" class="form-control text" placeholder="Enter Last Name">
								</div>
								
								<div class="form-group">
									<label>Email</label>
									<input type="Email" name="em" class="form-control text" placeholder="Enter Email Address">
								</div>

								<div>
									<label style="padding: 0px 50px 0px">Gender</label>
								
									<input type="radio"  name="Gender"><label class="hby" style="padding: 0px 10px 0px">Male</label>
									<input type="radio" name="Gender"><label class="hby" style="padding: 0px 10px 0px">Female</label>
									
							 	</div>


								 <div class="form-group">
    									<label for="exampleFormControlTextarea1">Address</label>
    									<textarea class="form-control" rows="3" name="add"></textarea>
 								</div>

								<div class="form-group">
	    							<label>City</label>
										  <select  class="form-control" >
										  	  <option>----Select City----</option>
										      <option>Porbandar</option>
										      <option>Jamnagar</option>
										      <option>Rajkot</option>
										      <option>Surat</option>
										      <option>Ahmedabad</option>
									</select>
								</div>

									
								<div>
									<label style="padding: 0px 50px 0px">Hobby</label>
								
									<input type="checkbox" name="re"><label class="hby" style="padding: 0px 10px 0px">Reading</label>
									<input type="checkbox" name="wr"><label class="hby" style="padding: 0px 10px 0px">writing</label>
									
							 	</div>

							 	<div class="form-group">
									<label>Username</label>
									<input type="text" name="un" class="form-control text" placeholder="Enter User Name">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="Password" name="pass" class="form-control text" placeholder="Enter Password">
								</div>
								
								<div class="form-group" id="button1" >
									<button type="Submit" class="btn btn-outline-primary"  name="Submit">Submit</button>
									<button type="Reset" class="btn btn-outline-danger" name="Reset">Reset</button>
								</div>	
			
						</form>
	</div>
			</div>
					</div>

		<script src="bootstrap.bundle.min.js"></script>
</body>
</html>