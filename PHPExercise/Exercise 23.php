<!DOCTYPE html>
<html>
<head>
	<title>Exercise 23</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	if  (version_compare(PHP_VERSION, '6.0.0.0') >= 0){
		echo "I am at least using lastest 6.0.0.0 PHP_VERSION" .PHP_VERSION;
	}
	if  (version_compare(PHP_VERSION, '5.3.0') >= 0){
		echo "I am at least using lastest 5.3.0.0 PHP_VERSION" .PHP_VERSION;
	}
	if  (version_compare(PHP_VERSION, '5.0.0', '>= 0')){
		echo "I am at least using lastest 6.0.0.0 PHP_VERSION" .PHP_VERSION;
	}
	if  (version_compare(PHP_VERSION, '5.0.0','<')){
		echo "I am at least using lastest 6.0.0.0 PHP_VERSION" .PHP_VERSION;
	}
	?>

</body>
</html>