<html>
<head>
    <php?
    include 'connect.inc.php';
    ?>
   
        <link rel="stylesheet" type="text/css" href="csslogin.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
    
    
    
    

<body>
<div id="navbar">
    <nav class="navbar .navbar-default" >
  <div class="container-fluid" >
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Trusted Site</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
       <ul class="nav navbar-nav">
            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
        </ul>
      <ul class="nav navbar-nav" id="logout">
          <li><a href="#">Logout</a></li>
          
       </ul>
  </div>
      </nav>
 </div> 
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form>
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login" onclick="return confirm('Are you sure you want to Save?')">
				  </form>
					
				  <div class="login-help">
					<a href="index.php">Register</a> - <a href="#">Forgot Password</a>
				  </div>
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
