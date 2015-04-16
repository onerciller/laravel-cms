
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
	<link rel="stylesheet" href="{{URL::to('backend/assets/css/font-awesome.min.css')}}">
	<script src="//code.jquery.com/jquery.js"></script>
	<link rel="stylesheet" href="{{URL::to('backend/assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css')}}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="{{URL::to('backend/assets/js/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{URL::to('backend/assets/js/plugins/icheck/skins/minimal/blue.css')}}">
	<link rel="stylesheet" href="{{URL::to('backend/assets/js/plugins/select2/select2.css')}}">
	<link rel="stylesheet" href="{{URL::to('backend/assets/js/plugins/fullcalendar/fullcalendar.css')}}">

	<!-- App CSS -->
	<link rel="stylesheet" href="{{URL::to('backend/assets/css/target-admin.css')}}">
	<link rel="stylesheet" href="{{URL::to('backend/assets/css/custom.css')}}">

</head>
<body class="account-bg">

<div class="navbar">

	<div class="container">
		@include('flash::message')

		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<i class="fa fa-cogs"></i>
			</button>

			<h2>ÖNER CMS</h2>
		</div> <!-- /.navbar-header -->

		<div class="navbar-collapse collapse">



		</div> <!--/.navbar-collapse -->

	</div> <!-- /.container -->

</div> <!-- /.navbar -->

<hr class="account-header-divider">

<div class="account-wrapper">


	<div class="account-body">

		<h3 class="account-body-title">Welcome to ÖNER CMS.</h3>

		<h5 class="account-body-subtitle">Please sign in to get access.</h5>

		<form class="form account-form" method="POST" action="">

			<div class="form-group">
				<label for="login-username" class="placeholder-hidden">Username</label>
				<input type="text" name="username" class="form-control" id="login-username" placeholder="Username" tabindex="1">

			</div> <!-- /.form-group -->

			<div class="form-group">
				<label for="login-password" class="placeholder-hidden">Password</label>
				<input type="password" name= "password" class="form-control" id="login-password" placeholder="Password" tabindex="2">
			</div> <!-- /.form-group -->

			<div class="form-group clearfix">
				<div class="pull-left">
					<label class="checkbox-inline">
						<input type="checkbox" class="" name="remember" value="" tabindex="3">Remember me
					</label>
				</div>

				<div class="pull-right">
					<a href="account-forgot.html">Forgot Password?</a>
				</div>
			</div> <!-- /.form-group -->

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
					Signin &nbsp; <i class="fa fa-play-circle"></i>
				</button>
			</div> <!-- /.form-group -->

			{!! Form::token() !!}
			
		</form>
		@include('errors.valid')

	</div> <!-- /.account-body -->


</div> <!-- /.account-wrapper -->

<script>
	window.setTimeout(function() {
		$(".alert-message").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove();
		});
	});
</script>

</body>
</html>