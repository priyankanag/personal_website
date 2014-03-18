
<html>
	<head>
		<title>Miniport by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Top</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="me image image-full"><img src="images/me.jpg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1>Hi. I'm <strong>Priyanka Nag</strong>.</h1>
							</header>
				<p>I Am a supporter of FOSS and presently involved with a few Open Source Communities as well like Mozilla and Wikipedia. 
				<br>I am currently an intern at a start-up called 'PurpleGear Software Pvt. Ltd.'.
				A developer by professions...a content writer by passion. Technical writings, blogging etc are stuff that I do as hobby. </p>							
						</div>

						<div class="8u">
							<br><br>
							<header>
								<h2 class="text-center">My history</h2>
							</header>
				<p>I have been India's representative to World Skills London 2011 for the category of Software Solutions for Business. <br>
				I have been an exchange student from my college to Nanyang Technoligical University for one semester where I have had the opportunity to learn a few interesting subjects like Computer Game Programming, Algorithms etc.
				<br>I have also received the Chancellor's Gold medal against scoring the highest marks in my graduation. </p>					
				<a href="#work" class="button button-big">Learn about what I do</a>
						</div>
						<div class="4u">
							<br><br><br><br>
							<span class="me image image-full"><img src="images/me2.jpg" alt="" /></span>
						</div>

					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper wrapper-style2">
				<article id="work">
					<header>
						<h2>I do some really amazing things.</h2>
						<span>Find out more about me.</span>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box box-style1">
									<span class="fa featured fa-github"></span>
									<a href="https://github.com/priyankanag" target="blank"><h3>My Workshop</h3></a>
								</section>
							</div>
							<div class="4u">
								<section class="box box-style1">
									<span class="fa featured fa-file-o"></span>
									<a href="http://priyankaivy.blogspot.in/" target="blank"><h3>My scribblings</h3></a>
								</section>
							</div>

							<div class="4u">
								<section class="box box-style1">
									<span class="fa featured fa-linkedin-square"></span>
									<a href="http://www.linkedin.com/in/priynag" target="blank"><h3>My career</h3></a>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>Wanna get in touch with me?</p>
						<a href="#contact" class="button button-big">Get in touch with me</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper wrapper-style4">
				<article id="contact" class="container small">
					<header>
						<h2>Want to hire me? Get in touch!</h2>
					</header>
					<div>
						<div class="row">
							<div id="contact-form" class="12u">

								<form id="contact" method="post" action="submit" onsubmit="submitted=true;">
									<div>
										<div class="row half">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<a href="#" class="button form-button-submit">Send Message</a>
												<a href="#" class="button button-alt form-button-reset">Clear Form</a>
											</div>
										</div>
									</div>
								</form>

			<?php

			if (!isset($_POST["submit"]))
				{
				$from = $_POST["email"];
				$subject = $_POST["subject"];
				$message = $_POST["message"];
				$message = wordwrap($message, 70);
				mail("priynag@gmail.com",$subject,$message,$from);
				}

			?>

			</div>
					</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li class="twitter"><a href="https://twitter.com/priynag" class="fa fa-twitter"><span>Twitter</span></a></li>
									<li class="facebook"><a href="https://www.facebook.com/priyanka.nag" class="fa fa-facebook"><span>Facebook</span></a></li>
									<li class="googleplus"><a href="https://plus.google.com/u/0/+priyankanag" class="fa fa-google-plus"><span>Google+</span></a></li>
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; 2014 Priyanka Nag</li>
						</ul>
					</footer>
				</article>
			</div>


	</body>
</html>