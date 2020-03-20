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
		<form action="<?= base_url('User/create');?>" method="post" autocomplete="off" >
			<div class="form-group">
				<label for="forename">Forename</label>
				<input type="text" name="forename" id="forename" placeholder="Please enter your Firstname">
			</div>
			<div class="form-group">
				<label for="surname">Surname</label>
				<input type="text" name="surname" id="surname" placeholder="Please enter your Surname">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" placeholder="Please enter your email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password"  id="password" placeholder="Please enter your password" autocomplete="off" >
			</div>
			<div class="form-group">
				<label for="confirm_password">Confirm Password</label>
				<input type="password" name="confirm_password"  id="confirm_password" placeholder="Please enter your re-enter your password">
			</div>
			<div class="form-group">
				<input type="submit" class="btn bg-primary" value="Create">
			</div>
			<input type="hidden" name="action" value="create">
		</form>
		</div>
		</div>
	<?php echo view('widgets/foot'); ?>
	</body>
</html>