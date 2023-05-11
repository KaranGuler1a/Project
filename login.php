<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<header>
        <div class="main">
        <div class="logo">
          <a href="front.php"></a>
          </div>
          <div class="nav_bar"> 
           <ul class="nav">
<li><a href="front.php">Home</a></li>
<li><a href="services.php">Services</a></li>
<li><a href="contact.php">Contact us</a></li>
<li class="active"><a href="login.php">Login</a></li>
</ul></div>
      
</div>
     </header>

<div class="form_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
				<form method="post" action="connect.php" class="form_horizontal">
					<div class="form_icon"><i class="fa fa-user-circle"></i></div>
				<h3 class="title">login form</h3>
				<div class="form-group">
					<span class="input-icon"><i class="fa fa-user"></i></span>
					<input class= "form-control" type="email" name="email" placeholder="username" required="">
				</div>
				<div class="form-group">
					<span class="input-icon"><i class="fa fa-lock"></i></span>
					<input class= "form-control" type="password" name="password" placeholder="password" required="">
				</div>
				<button class="btn signin" name="btn_signin">login</button>
				<ul class="form-options">
					<li><a href="#">Forgot username/password</a></li>
					<li><a href="form.php">Create new account<i class="fa fa-arrow-right"></i></a></li>
				</ul>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>