<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			Sign In
		</div>

		<div class="card">
			<div class="card-body login-card-body">
				<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="row">
						<div class="col-4">
							<button type="submit" value="Login" class="btn btn-primary btn-block">Sign In</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</body>