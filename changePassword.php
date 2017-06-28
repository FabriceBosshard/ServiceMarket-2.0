<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ServiceMarket 2.0</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">ServiceMarket 2.0</a>
			</div>

		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Change Password</div>
					<div class="panel-body">
				<form method="post" action="">
					<div class="row">
						<div class="col-md-6">
							<label for="f_name">Email</label>
							<input type="email" id="email" name="email" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="f_name">Old Password</label>
							<input type="password" id="old_pw" name="old_pw" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="f_name">New Password</label>
							<input type="password" id="new_pw" name="new_pw" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="f_name">Confirm Password</label>
							<input type="password" id="conf_pw" name="conf_pw" class="form-control">
						</div>
					</div>
					<br></br>
					<div class="col-md-12">
						<input type="button" class="btn btn-primary" value="Change Password" name="changePassword" id="changePassword_bnt">
					</div>

					</div>
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
</html>
