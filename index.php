<html>
	<head>
		<title>Blogtown</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="">
		<script src="https://kit.fontawesome.com/6f4d796be0.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/x-icon" href="images/cover.svg">
	</head>
	<body class="is-preload">

		<?php
		include 'db.php';
		$result = $conn -> query("SELECT * FROM blogtown ORDER BY ID DESC LIMIT 8");
		$resultAgain = $conn -> query("SELECT * FROM blogtown ORDER BY ID desc LIMIT 3, 5");

		// array
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		$rowAgain = $resultAgain -> fetch_array(MYSQLI_ASSOC);
		?>

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<?php include 'navbar.php';?>

			<!-- Main -->
				<div id="main">
					<!-- Post One-->
						<article class="post">
							<header>
								<div class="title">
									<h2><a href="article.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></h2>
									<p><?php echo $row['SUBHEADINGONE'] ?></p>
								</div>
								<div class="meta"> 
									<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
									<a href="contact.php" class="author"><span class="name"><?php echo $row['AUTHOR'] ?></span><img src="images/<?php echo $row['AUTHORPIC'] ?>" alt="" /></a>
								</div>
							</header>
							<a href="article.php?id=<?php echo $row['ID'] ?>" class="image featured"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
							<p><?php echo $row['BLURB'] ?></p>
							<footer>
								<ul class="actions">
									<li><a href="article.php?id=<?php echo $row['ID'] ?>" class="button large">Continue Reading</a></li>
								</ul>
								<ul class="stats">
									<li><a href="posts.php?tags=<?php echo $row['TAGONE'] ?>"><?php echo $row['TAGONE'] ?></a></li>
									<li><a href="posts.php?tags=<?php echo $row['TAGTWO'] ?>"><?php echo $row['TAGTWO'] ?></a></li>
								</ul>
							</footer>
						</article>

					<!-- Post Two-->
					<?php $row = $result -> fetch_array(MYSQLI_ASSOC); ?>
						<article class="post">
							<header>
								<div class="title">
									<h2><a href="article.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></h2>
									<p><?php echo $row['SUBHEADINGONE'] ?></p>
								</div>
								<div class="meta">
									<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
									<a href="contact.php" class="author"><span class="name"><?php echo $row['AUTHOR'] ?></span><img src="images/<?php echo $row['AUTHORPIC'] ?>" alt="" /></a>
								</div>
							</header>
							<a href="article.php?id=<?php echo $row['ID'] ?>" class="image featured"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
							<p><?php echo $row['BLURB'] ?></p>
							<footer>
								<ul class="actions">
									<li><a href="article.php?id=<?php echo $row['ID'] ?>" class="button large">Continue Reading</a></li>
								</ul>
								<ul class="stats">
									<li><a href="posts.php?tags=<?php echo $row['TAGONE'] ?>"><?php echo $row['TAGONE'] ?></a></li>
									<li><a href="posts.php?tags=<?php echo $row['TAGTWO'] ?>"><?php echo $row['TAGTWO'] ?></a></li>
								</ul>
							</footer>
						</article>

					<!-- Post Three-->
					<?php $row = $result -> fetch_array(MYSQLI_ASSOC); ?>
						<article class="post">
							<header>
								<div class="title">
									<h2><a href="article.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></h2>
									<p><?php echo $row['SUBHEADINGONE'] ?></p>
								</div>
								<div class="meta">
									<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
									<a href="contact.php" class="author"><span class="name"><?php echo $row['AUTHOR'] ?></span><img src="images/<?php echo $row['AUTHORPIC'] ?>" alt="" /></a>
								</div>
							</header>
							<a href="article.php?id=<?php echo $row['ID'] ?>" class="image featured"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
							<p><?php echo $row['BLURB'] ?></p>
							<footer>
								<ul class="actions">
									<li><a href="article.php?id=<?php echo $row['ID'] ?>" class="button large">Continue Reading</a></li>
								</ul>
								<ul class="stats">
									<li><a href="posts.php?tags=<?php echo $row['TAGONE'] ?>"><?php echo $row['TAGONE'] ?></a></li>
									<li><a href="posts.php?tags=<?php echo $row['TAGTWO'] ?>"><?php echo $row['TAGTWO'] ?></a></li>
								</ul>
							</footer>
						</article>
				</div>

			<!-- Sidebar -->
				<section id="sidebar">

					<!-- Intro -->
						<section id="intro">
							<header>
								<h2 class ="mainname">Blogtown</h2>

								<p></p>
							</header>
						</section>

					<!-- Mini Posts -->
						<section>
							<div class="mini-posts">

								<!-- Mini Post -->
									<article class="mini-post">
										<header>
											<h2><a class ="dark" href="article.php?id=<?php echo $rowAgain['ID'] ?>"><?php echo $rowAgain['TITLE'] ?></a></h2>
											<time class="published" datetime="<?php echo $rowAgain['DATE'] ?>"><?php echo $rowAgain['DATE'] ?></time>
											<a href="contact.php" class="author"><img src="images/<?php echo $rowAgain['AUTHORPIC'] ?>" alt="" /></a>
										</header>
										<a href="article.php?id=<?php echo $rowAgain['ID'] ?>" class="image"><img src="images/<?php echo $rowAgain['IMAGEONE'] ?>" alt="" /></a>
									</article>

								<!-- Mini Post -->
									<article class="mini-post">
										<header>
											<?php $rowAgain = $resultAgain -> fetch_array(MYSQLI_ASSOC); ?>
											<h2><a href="article.php?id=<?php echo $rowAgain['ID'] ?>"><?php echo $rowAgain['TITLE'] ?></a></h2>
											<time class="published" datetime="2<?php echo $rowAgain['DATE'] ?>"><?php echo $rowAgain['DATE'] ?></time>
											<a href="contact.php" class="author"><img src="images/<?php echo $rowAgain['AUTHORPIC'] ?>" alt="" /></a>
										</header>
										<a href="article.php?id=<?php echo $rowAgain['ID'] ?>" class="image"><img src="images/<?php echo $rowAgain['IMAGEONE'] ?>" alt="" /></a>
									</article>

								<!-- Mini Post -->
									<article class="mini-post">
										<header>
											<?php $rowAgain = $resultAgain -> fetch_array(MYSQLI_ASSOC); ?>
											<h2><a href="article.php?id=<?php echo $rowAgain['ID'] ?>"><?php echo $rowAgain['TITLE'] ?></a></h2>
											<time class="published" datetime="<?php echo $rowAgain['DATE'] ?>"><?php echo $rowAgain['DATE'] ?></time>
											<a href="contact.php" class="author"><img src="images/<?php echo $rowAgain['AUTHORPIC'] ?>" alt="" /></a>
										</header>
										<a href="article.php?id=<?php echo $rowAgain['ID'] ?>" class="image"><img src="images/<?php echo $rowAgain['IMAGEONE'] ?>" alt="" /></a>
									</article>

								<!-- Mini Post -->
									<article class="mini-post">
										<header>
											<?php $rowAgain = $resultAgain -> fetch_array(MYSQLI_ASSOC); ?>
											<h2><a href="article.php?id=<?php echo $rowAgain['ID'] ?>"><?php echo $rowAgain['TITLE'] ?></a></h2>
											<time class="published" datetime="<?php echo $rowAgain['DATE'] ?>"><?php echo $rowAgain['DATE'] ?></time>
											<a href="contact.php" class="author"><img src="images/<?php echo $rowAgain['AUTHORPIC'] ?>" alt="" /></a>
										</header>
										<a href="article.php?id=<?php echo $rowAgain['ID'] ?>" class="image"><img src="images/<?php echo $rowAgain['IMAGEONE'] ?>" alt="" /></a>
									</article>

							</div>
						</section>

					<!-- Posts List -->
						<section>
							<ul class="posts">
								<li>
									<article>
										<header>
											<?php $row = $result -> fetch_array(MYSQLI_ASSOC); ?>
											<h3><a href="article.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></h3>
											<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										</header>
										<a href="article.php?id=<?php echo $row['ID'] ?>" class="image"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
									</article>
								</li>
								<li>
									<article>
										<header>
											<?php $row = $result -> fetch_array(MYSQLI_ASSOC); ?>
											<h3><a href="article.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></h3>
											<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										</header>
										<a href="article.php?id=<?php echo $row['ID'] ?>" class="image"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
									</article>
								</li>
								<li>
									<article>
										<header>
											<?php $row = $result -> fetch_array(MYSQLI_ASSOC); ?>
											<h3><a href="article.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></h3>
											<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										</header>
										<a href="article.php?id=<?php echo $row['ID'] ?>" class="image"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
									</article>
								</li>
								<li>
									<article>
										<header>
											<?php $row = $result -> fetch_array(MYSQLI_ASSOC); ?>
											<h3><a href="article.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></h3>
											<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										</header>
										<a href="article.php?id=<?php echo $row['ID'] ?>" class="image"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
									</article>
								</li>
								<li>
									<article>
										<header>
											<?php $row = $result -> fetch_array(MYSQLI_ASSOC); ?>
											<h3><a href="article.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></h3>
											<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										</header>
										<a href="article.php?id=<?php echo $row['ID'] ?>" class="image"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
									</article>
								</li>
							</ul>
						</section>

			<!-- About -->
			<section class="blurb">
				<h1>About</h1>
				<p class="about-top">Coming Soon</p>
				<br>
				<ul class="actions">
					<li><a href="contact.php" class="button">Learn More</a></li>
				</ul>
			</section>

			<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="https://www.goodreads.com/" target ="_blank" class="fa-brands fa-goodreads-g"><span class="label">Goodreads</span></a></li>

					<li><a href="https://twitter.com/" target ="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>

					<li><a href="https://www.facebook.com/" target ="_blank" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>

					<li><a href="https://www.facebook.com/" target ="_blank" class="icon brands fa-reddit"><span class="label">Reddit</span></a></li>

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