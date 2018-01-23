<html>
  <head>
    <php?
    include 'connect.inc.php';
    ?>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="csslogin.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
   <div class="container">
      
	<div class="col-lg-12 well">
	<div class="row">
				<form action="insert.php" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="f_name" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="l_name" placeholder="Enter Last Name Here.." class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" name="address" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text"  name="city" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="state" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" name="zip" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
											
					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" name="c_number" placeholder="Enter Phone Number Here.." class="form-control">
					</div>
                        
                    <div class="form-group">
						<label>Username</label>
						<input type="text" name="username" placeholder="Enter Username Here.." class="form-control">
					</div>
                        
                    <div class="row">
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" name="pass" placeholder="Enter Password Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Confirm Password</label>
								<input type="password" name="cpass" placeholder="Enter Password Here.." class="form-control">
							</div>
				    </div>	
                        
					<div class="form-group">
						<label>Email Address</label>
						<input type="text"  name="email" placeholder="Enter Email Address Here.." class="form-control">
					</div>	
					
					<input type="submit" id = "btn" value="Submit" onclick="return confirm('Are you sure you want to Save?')">				
					</div>
				</form> 
    </div>
	</div>
	</div> 
      
      
     
              
        <script>
     
         $(document).ready(function() {
         $("#submit").click(function(event) {
           if( !confirm('Are you sure that you want to submit the form') ){
              event.preventDefault();
          } 
            });
            });
        </script>
        
    
  </body>
 </html>