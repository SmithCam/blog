<html>
		<head>
		<title>Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="">
		<script src="https://kit.fontawesome.com/6f4d796be0.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/x-icon" href="images/cover.svg">
	</head>
	<body class="single is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<?php include 'navbar.php';?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="contact.php">Get in Contact!</a></h2>
										<p class="readable">Send an email message or find Blogtown on social media below!</p>
									</div>
								</header>

								<div class="fcf-body">
									<div id="fcf-form">
									    <h3 class="fcf-h3">Contact</h3>
										<h3>blogtown@example.com</h3>
									    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
									        
									        <div class="fcf-form-group">
									            <label for="Name" class="fcf-label">Name</label>
									            <div class="fcf-input-group">
									                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
									            </div>
									        </div>

									        <div class="fcf-form-group">
									            <label for="Email" class="fcf-label">Email Address</label>
									            <div class="fcf-input-group">
									                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
									            </div>
									        </div>

									        <div class="fcf-form-group">
									            <label for="Message" class="fcf-label">Message</label>
									            <div class="fcf-input-group">
									                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000"></textarea>
									            </div>
									        </div>

									        <div class="fcf-form-group">
									            <button type="submit" id="fcf-button" class="button fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block send-button">Send Message</button>
									        </div>
									    </form>
									    </div>
									</div>
							</article>

					</div>

				<!-- Footer -->
						<section id="footer">
						<br>
						<br>
								<ul class="icons">
									<li><a href="https://www.goodreads.com/" target ="_blank" class="fa-brands fa-goodreads-g"><span class="label">Goodreads</span></a></li>

									<li><a href="https://twitter.com/" target ="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>

									<li><a href="https://www.facebook.com/" target ="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>

									<li><a href="https://www.reddit.com/" target ="_blank" class="icon brands fa-reddit"><span class="label">Reddit</span></a></li>

									<li><a href="https://www.instagram.com/" target ="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
								<p class="copyright">Blogtown 2022. Created by <a href="contact.php">Cameron Smith.</p>
							</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>