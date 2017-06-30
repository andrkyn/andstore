<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
Doc

-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>andframe</title>
		<link href="http://fonts.googleapis.com/css?family=Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 

			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/">andframe <span class="cms">andstore</span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">MAIN PAGE</a></li>
						<li><a href="/services">SERVICES</a></li>
						<li><a href="/orders">ORDERS</a></li>
						<li class="last"><a href="/contacts">CONTACTS</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Generation</h3>
						<p align="justify" class="quote">
						«Notebook»
						</p>
						<p align="justify" class="quote">
						«Mobile phone»
						</p>
						<p align="justify" class="quote">
						«Xiaomi Mi Band 2»
						</p>
						<p align="justify" class="quote">
						« Sandisk»
						</p>
						<p align="justify" class="quote">
						«Flashlight»
						</p>
					</div>
					<div class="side-box">
						<h3>Main menu</h3>
						<ul class="list">
							<li class="first "><a href="/">MAIN PAGE</a></li>
							<li><a href="/services">SERVICES</a></li>
							<li><a href="/orders">ORDERS</a></li>
                            <li class="last"><a href="/contacts">CONTACTS</a></li>
                            <li><a href="/login">Login</a></li>
                        </ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include '../src/views/'.$content_view; ?>


					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>My contacts</h3>
					<ul class="list">
						<li class="first">tel: +38(067)7664947</li>
						<li>skype: Andreyken2</li>
						<li class="last">email: andrhil14@gmail.com</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>About me</h3>
					<p>
                        Here company information
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">andframe andstore</a> &copy; 2017</a>
		</div>
	</body>
</html>