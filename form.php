
<html>
<head>
	<title>REGISTRATION FORM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
    

</head>
<body>

<header>
        <div class="main">
        <div class="logo">
          <a href="front.php"><img src="img/logo.jpg"></a>
          </div>
          <div class="nav_bar"> 
           <ul class="nav">
<li><a href="front.php">Home</a></li>
<li><a href="services.php">Services</a></li>
<li><a href="contact.php">Contact us</a></li>
<li><a href="login.php">Login</a></li>
</ul></div>
      
</div>
     </header>
<div id="error"></div>
<div class="form_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
				<form method= "post" action="connection.php" class="form_horizontal">
					<div class="form_icon"><i class="fa fa-user-circle"></i></div>
				<h3 class="title">Registration form</h3>
				<div class="form-group">
					<span class="input-icon"><i class="fa fa-user-o"></i></span>
					 <input id="name" class= "form-control" type="text" name="name" placeholder="Name" required="">
				</div>
				<div class="form-group">
					<span class="input-icon"><i class="fa fa-user"></i></span>
					<input id ="email" class= "form-control" type="email" name="email" placeholder="E-mail" required="" >
				</div>
				<div class="form-group">
					<span class="input-icon"><i class="fa fa-lock"></i></span>
					<input id="password" class= "form-control" type="password" name="password" placeholder="password" required="">
				</div>
								
				<div class="form-group">
					<span class="input-icon"><i class="fa fa-phone"></i></span>
					<input id="phonenumber" class= "form-control" type="text" name="phonenumber" placeholder="Phone number" required="">
				</div>
				<div class="form-group">
					<span class="input-icon"><i class="fa fa-map-marker"></i></span>
					<input id="pincode" class= "form-control" type="text" name="pincode" placeholder="Pincode" required="">
				</div>
				<input class="btn btn_register" type="submit"></input>
				<ul class="form-options">
					<li><a href="login.php">Already Registered<i class="fa fa-arrow-right"></i></a></li>
				</ul>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>