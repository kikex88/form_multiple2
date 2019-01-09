<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

		<style type="text/css">
			#register_form fieldset:not(:first-of-type) {
			display: none;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h2>Example: Multi Step Form using jQuery, Bootstrap and PHP</h2>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<div class="alert alert-success hide"></div>
			<form id="register_form" novalidate action="form_action.php" method="post">
				<fieldset>
					<h2>Step 1: Add Account Details</h2>
					<div class="form-group">
						<label for="email">Email address*</label>
						<input type="email" class="form-control" required id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="password">Password*</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<input type="button" class="next-form btn btn-info" value="Next" />
				</fieldset>
				<fieldset>
					<h2> Step 2: Add Personal Details</h2>
					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
					</div>
					<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
					<input type="button" name="next" class="next-form btn btn-info" value="Next" />
				</fieldset>
				<fieldset>
					<h2>Step 3: Add Contact Information</h2>
					<div class="form-group">
						<label for="mobile">Mobile*</label>
						<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<textarea class="form-control" name="address" placeholder="Communication Address"></textarea>
					</div>
					<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
					<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
				</fieldset>
			</form>
		</div>
	</body>
</html>
