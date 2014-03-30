<?php
if(!defined('PAGE')) {
	die('Not for single use.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>EHAM Gate Finder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">EHAM Gate Finder</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav">
					<li<?php echo (PAGE == 'search') ? ' class="active"' : '' ?>><a href="#">Search</a></li>
					<li<?php echo (PAGE == 'gates') ? ' class="active"' : '' ?>><a href="#">Occupied Gates</a></li>
					<li<?php echo (PAGE == 'config') ? ' class="active"' : '' ?>><a href="#">Configure</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">