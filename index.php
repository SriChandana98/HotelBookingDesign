
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript"> </script>
	</head>
	body{
		background:#202a3f;
		}
	.container{
		margin-top:200px;
	}
	.glyphicon-search{
		font-size:20px;
	}
	.btn-default{
		background:orange;
		width:100px;
		padding:12.5px;
	}
	.form-control{
		padding:25px;
		font-size:20px;
	}
	<style>
	input[type=text]{
		width:170px;
		box-sizing:border-box;	
		border:2px solid #000000;
		border-radius:5px;
		font-size:16px;
		background-color:white;
	}
	</style>
	<body>
	<div class="container-fluid">
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					  <a class="navbar-brand" href="index.php">Hotel-Booking</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="#myModal" role="button" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
							<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
						</ul>						
					</div>
				</div>			
			<form>
			<div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search" >
                <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            </form>
        </div>				
					    
			</body>
			</html>
			