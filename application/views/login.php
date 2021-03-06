<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Knowledge Management System</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url('') ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('') ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('') ?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url('') ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url('') ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('') ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('') ?>assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<!-- <div class="logo text-center"><img src="<?= base_url('') ?>assets/img/logo-dark.png" alt="Klorofil Logo"></div> -->
								<p class="lead">Login</p>
							</div>
							<?= form_open('login') ?>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input class="form-control" placeholder="NIP" type="text" name="nip">
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input class="form-control" placeholder="Password" type="password" name="password">
								</div>
								<br>
								<!-- <div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div> -->
								<button type="submit" name="login" value="Login" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<!-- <div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div> -->
							<?= form_close() ?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Knowledge Management System</h1>
							<!-- <p>by The Develovers</p> -->
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
