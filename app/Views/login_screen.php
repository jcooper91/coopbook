<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CoopBook</title>
		<?php echo view('widgets/head'); ?>
	</head>
	<body>
		<?php echo view('widgets/navbar'); ?>
		<h1 class="uk-header-xlarge"></h1>
		<div class="uk-container uk-container-xsmall uk-container-center">
		<form action="<?= base_url('user/login');?>" method="post">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" placeholder="Please enter your email">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password"  id="password" placeholder="Please enter your password">
			</div>
			<div class="form-group">
				<a type="submit" class="btn bg-primary">Login</a>
			</div>
			<div class="form-group">
				<a class="uk-muted">Forgotten Password</a>
			</div>
			<input type="hidden" name="action" value="action">
		</form>
		</div>
		</div>
	<?php echo view('widgets/foot'); ?>
	</body>
</html>