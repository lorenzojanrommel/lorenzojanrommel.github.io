
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php display_title() ?> </title>
  <?php require "partials/head.php" ?>
</head>
<body>
<?php require "partials/nav.php"; ?>
<div class="container">
	<div class="row">
	<div class="col s12">
	<div class="col s9">
		<?php display_content() ?>
	</div>
	<div class="col s3">
	<?php require "partials/sidebar.php"; ?>
	</div>
	</div>
	</div>
</div>
<?php require "partials/footer.php"; ?>
</body>
</html>