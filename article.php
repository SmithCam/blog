<!DOCTYPE html>
<html>
<?php
	include 'db.php';

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = '0';
	}

	$result = $conn -> query("SELECT * FROM blogtown WHERE id = '$id' LIMIT 1");

	// array
	$row = $result -> fetch_array(MYSQLI_ASSOC);
?>
		<head>
		<title><?php echo $row['TITLE'] ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo $row['SUBTITLE'] ?>">

		<meta property="og:title" content="<?php echo $row['TITLE'] ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.thecoverblog.com/<?php echo $row['FILENAME'] ?>" />
		<meta property="og:image" content="https://www.thecoverblog.com/images/<?php echo $row['IMAGEONE'] ?>" />

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
										<h2><a href="#"><?php echo $row['TITLE'] ?></a></h2>
										<p><?php echo $row['SUBTITLE'] ?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										<a href="#" class="author"><span class="name"><?php echo $row['AUTHOR'] ?></span><img src="images/<?php echo $row['AUTHORPIC'] ?>" alt="" /></a>
									</div>
								</header>

								<figure>
									<span class="image featured">
										<img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" />
										<figcaption><?php echo $row['CREDITONE'] ?></figcaption>
									</span>
								</figure>

								<?php if(!is_null($row['SUBHEADINGONE'])) { ?>
								<div class='postwords postheader'>
									<h2><?php echo $row['SUBHEADINGONE'] ?></h2>
								</div>
								<?php } ?>
								
								<div class='postwords'><?php echo $row['BODYONE'] ?></div>

								<?php if(!is_null($row['IMAGETWO'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGETWO'] ?>"></div>
								<?php } ?>

								<?php if(!is_null($row['SUBHEADINGTWO'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGTWO'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYTWO'])) { ?>
								<div class='postwords'><?php echo $row['BODYTWO'] ?></div>
								<?php } ?>

								<?php if(!is_null($row['IMAGETHREE'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGETHREE'] ?>"></div>
								<?php } ?>
								
								<?php if(!is_null($row['SUBHEADINGTHREE'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGTHREE'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYTHREE'])) { ?>
								<div class='postwords'><?php echo $row['BODYTHREE'] ?></div>
								<?php } ?>

								<?php if(!is_null($row['IMAGEFOUR'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGEFOUR'] ?>"></div>
								<?php } ?>

								<?php if(!is_null($row['SUBHEADINGFOUR'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGFOUR'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYFOUR'])) { ?>
								<div class='postwords'><?php echo $row['BODYFOUR'] ?></div>
								<?php } ?>

								<?php if(!is_null($row['IMAGEFIVE'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGEFIVE'] ?>"></div>
								<?php } ?>

								<?php if(!is_null($row['SUBHEADINGFIVE'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGFIVE'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYFIVE'])) { ?>
								<div class='postwords'><?php echo $row['BODYFIVE'] ?></div>
								<?php } ?>

								<?php if(!is_null($row['IMAGESIX'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGESIX'] ?>"></div>
								<?php } ?>

								<?php if(!is_null($row['SUBHEADINGSIX'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGTWO'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYSIX'])) { ?>
								<div class='postwords'><?php echo $row['BODYSIX'] ?></div>
								<?php } ?>

								<?php if(!is_null($row['IMAGESEVEN'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGESEVEN'] ?>"></div>
								<?php } ?>
								
								<?php if(!is_null($row['SUBHEADINGSEVEN'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGSEVEN'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYSEVEN'])) { ?>
								<div class='postwords'><?php echo $row['BODYSEVEN'] ?></div>
								<?php } ?>

								<?php if(!is_null($row['IMAGEEIGHT'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGEEIGHT'] ?>"></div>
								<?php } ?>

								<?php if(!is_null($row['SUBHEADINGEIGHT'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGEIGHT'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYEIGHT'])) { ?>
								<div class='postwords'><?php echo $row['BODYEIGHT'] ?></div>
								<?php } ?>

								<?php if(!is_null($row['IMAGENINE'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGENINE'] ?>"></div>
								<?php } ?>

								<?php if(!is_null($row['SUBHEADINGNINE'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGNINE'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYNINE'])) { ?>
								<div class='postwords'><?php echo $row['BODYNINE'] ?></div>
								<?php } ?>

								<?php if(!is_null($row['IMAGETEN'])) { ?>
								<div class='middlepic'><img class='middlepic' src="images/<?php echo $row['IMAGETEN'] ?>"></div>
								<?php } ?>

								<?php if(!is_null($row['SUBHEADINGTEN'])) { ?>
								<div class='postwords postheader'><h2><?php echo $row['SUBHEADINGTEN'] ?></h2></div>
								<?php } ?>

								<?php if(!is_null($row['BODYTEN'])) { ?>
								<div class='postwords'><?php echo $row['BODYTEN'] ?></div>
								<?php } ?>

							  <footer class="posttags">
									<ul class="stats">
										<li><a href="posts.php?tags=<?php echo $row['TAGONE'] ?>"><?php echo $row['TAGONE'] ?></a></li>
										<li><a href="posts.php?tags=<?php echo $row['TAGTWO'] ?>"><?php echo $row['TAGTWO'] ?></a></li>
									</ul>
								</footer>
							</article>

							<?php if(!is_null($row['FOOTNOTES'])) { ?>
								<div class='postwordssmall'><?php echo $row['FOOTNOTES'] ?></div>
							<?php } ?>

							<div class="readmoreposts">
			    				<?php include 'miniposts.php';?>
							</div>
					</div>

				<!-- Footer -->
					<section id="footer">
								<ul class="icons">
									<li><a href="https://twitter.com/" target ="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/" target ="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/" target ="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://www.goodreads.com/" target ="_blank" class="fa-brands fa-goodreads-g"><span class="label">Goodreads</span></a></li>
									<li><a href="contact.php" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">Blogtown. Created by <a href="contact.php">Cameron Smith.</p>
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