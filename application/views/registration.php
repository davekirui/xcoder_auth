<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin-left:25%;
		margin-right:25%;
		margin-bottom:25%;
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
		
	}

	xcdr{
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color:#FF0000;
		display: block;
		margin: 5px 0 5px 0;
		padding: 5px 5px 5px 5px;
		text-align:center;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
    <h1>Xcoder Auth Register: </h1>

	<div id="body">

		
		<?php
		echo form_open('xcoder_auth/xcoder_reg');		
        ?>
		<pre>
		email address   : <input type="text" name="email">
		user name       : <input type="text" name="user">
		password        : <input type="password" name="password">
		confirm password: <input type="password" name="confirm_password">
		                  <input type="submit" value="register">
		</pre>
		
		
		<xcdr><?php echo form_error('email');	?>
		<?php echo form_error('user');	?>
		<?php echo form_error('password');	?>
		<?php echo form_error('confirm_password');	?></xcdr>
		<?php echo form_close()?>
  </div>
    <a href="<?php echo site_url('redirect/xcoder_login') ?>"> login |</a><a href="<?php echo site_url('redirect/xcoder_reg') ?>">   Register |</a><a href="<?php echo site_url('redirect/xcoder_forgot') ?>">   forgot Password |</a>
    <a href="<?php echo site_url('xcoder_auth/xcoder_logout') ?>"> logout |</a>

	<p class="footer">Dave Kirui </p>
</div>

</body>
</html>