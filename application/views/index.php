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
  <h1><?php echo $page_title?> </h1>

	<div id="body">
	  <pre>&nbsp;</pre>
	     <?php include 'header_check.php'; ?><br>
         <pre>
         
         
       Interface your USSD Dials anywhere in EastAfrica
       Download #bonyeza 1.0.2 www.bonyeza.wordpress.com/release
       
       
       credits: @davekirui @bonyeza @pesadroid @gram_data
       
      #welcome
      </pre>
  </div>
<a href="<?php echo site_url('redirect/xcoder_login') ?>"> login |</a><a href="<?php echo site_url('redirect/xcoder_reg') ?>">   Register |</a><a href="<?php echo site_url('redirect/xcoder_forgot') ?>">   forgot Password |</a>
    <a href="<?php echo site_url('xcoder_auth/xcoder_logout') ?>"> logout |</a>
	<p class="footer">Dave Kirui </p>
</div>



     
       
    </body>
</html>
