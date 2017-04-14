<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	
	dd {
		
	}

	</style>
</head>
<body>

<div id="container">
	<h1><strong>Welcome To MY CodeIgniter Template</strong></h1>

	<div id="body">
		<h2 class="h4">Check if install &amp; setup was successfull:</h2>
		<ul>
			<li><strong>Website Name:</strong> <?php echo ucwords($website_name); ?></li>
			<li><strong>Website Author:</strong> <?php echo ucwords($website_author); ?></li>
			<li><strong>Author Email:</strong> <?php echo strtolower($author_email); ?></li>
			<li><strong>Description:</strong> <?php echo ucwords($website_description); ?></li>
		</ul>


		<h2 class="h4">To Start Editing the Website, follow the following steps: </h2>
		<ol>
			<li>Edit custom config file from the application/config/custom_config.php file</li>
			<li>Create a database and import the base_db.sql from db/base_db.sql</li>
			<li>Load your newly created database in the application/database.php file</li>
			<li>Load Sessions in the application/autoload.php</li>
		</ol>


		<h2>Thank you!</small></h2>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>