<html>
<?php
include 'db.php';
$sql = "";
$nextPage = '2';
$previousPage = '';
$showPrevious = false;
$showNext = true;
$wheres = [];
$tags = 'none';
if(isset($_GET['tags']))
{
	$tags = $_GET['tags'];
	$wheres[] = " WHERE TAGONE = '$tags' OR TAGTWO = '$tags' ";
}
$wheres = implode(" OR ", $wheres);

if(isset($_GET['page'])) {
  if ($_GET['page'] == '2')
  {
  		$sql = "SELECT * FROM blogtown $wheres ORDER BY ID DESC LIMIT 10, 10";
  	  $result = $conn -> query($sql);
      $nextPage = '3';
      $previousPage = '1';
      $showNext = false;
      $showPrevious = true;
  }
  elseif ($_GET['page'] == '3')
  {
      $sql = "SELECT * FROM blogtown $wheres ORDER BY ID DESC LIMIT 20, 10";
      $result = $conn -> query($sql);
      $nextPage = '4';
      $previousPage = '2';
      $showNext = false;
      $showPrevious = true;
  }
  elseif ($_GET['page'] == '4')
  {
      $sql = "SELECT * FROM blogtown $wheres ORDER BY ID DESC LIMIT 30, 10";
      $result = $conn -> query($sql);
      $nextPage = '5';
      $previousPage = '3';
      $showNext = false;
      $showPrevious = true;
  }
  elseif ($_GET['page'] == '5')
  {
      $sql = "SELECT * FROM blogtown $wheres ORDER BY ID DESC LIMIT 50, 10";
      $result = $conn -> query($sql);
      $nextPage = '6';
      $previousPage = '4';
      $showNext = false;
      $showPrevious = true;
  }
  else {
      $sql = "SELECT * FROM blogtown $wheres ORDER BY ID DESC LIMIT 10";
      $result = $conn -> query($sql);
      $nextPage = '2';
      $previousPage = '';
  }
}
else {
  $sql = "SELECT * FROM blogtown $wheres ORDER BY ID DESC LIMIT 10";
  $result = $conn -> query($sql);
  $nextPage = '2';
  $previousPage = '';
}
?>
		<head>
		<title>Posts</title>
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

						<!-- Post -->
						<?php while($row = $result -> fetch_array(MYSQLI_ASSOC)):?>
						<div>
							<article class="post posts feed">
								<header>
									<div class="title">
										<h2><a href="<?php echo $row['FILENAME'] ?>"><?php echo $row['TITLE'] ?></a></h2>
										<p class="subheading"><?php echo $row['SUBHEADINGONE'] ?></p>
									</div>
									<div class="meta"> 
										<time class="published" datetime="<?php echo $row['DATE'] ?>"><?php echo $row['DATE'] ?></time>
										<a href="about.php" class="author"><span class="name"><?php echo $row['AUTHOR'] ?></span><img src="images/<?php echo $row['AUTHORPIC'] ?>" alt="" /></a>
									</div>
								</header>
								<a href="<?php echo $row['FILENAME'] ?>" class="image featured"><img src="images/<?php echo $row['IMAGEONE'] ?>" alt="" /></a>
								<p><?php echo $row['BLURB'] ?></p>
								<footer>
									<ul class="actions">
										<li><a href="<?php echo $row['FILENAME'] ?>" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="posts.php?tags=<?php echo $row['TAGONE'] ?>"><?php echo $row['TAGONE'] ?></a></li>
										<li><a href="posts.php?tags=<?php echo $row['TAGTWO'] ?>"><?php echo $row['TAGTWO'] ?></a></li>
									</ul>
								</footer>
							</article>
						</div>
						<?php endwhile;?>

						<?php if(($tags != 'none')) : ?>
						<div class="row">
							<?php if($showPrevious && $previousPage != '1') : ?>
		    					<a href="posts.php?page=<?php echo $previousPage ?>&tags=<?php echo $tags ?>" class="pagebutton button large">Previous</a>
							<?php endif; ?>

							<?php if($previousPage == '1'): ?>
		    					<a href="posts.php?tags=<?php echo $tags ?>" class="pagebutton button large">Previous</a>
							<?php endif; ?>

							<?php if($showNext): ?>
		    					<a href="posts.php?page=<?php echo $nextPage ?>&tags=<?php echo $tags ?>" class="pagebutton button large">Next</a>
							<?php endif; ?>
						</div>
						<?php endif; ?>

						<?php if(($tags == 'none')) : ?>
						<div class="row">
							<?php if($showPrevious && $previousPage != '1') : ?>
		    					<a href="posts.php?page=<?php echo $previousPage ?>" class="pagebutton button large">Previous</a>
							<?php endif; ?>

							<?php if($previousPage == '1'): ?>
		    					<a href="posts.php" class="pagebutton button large">Previous</a>
							<?php endif; ?>

							<?php if($showNext): ?>
		    					<a href="posts.php?page=<?php echo $nextPage ?>" class="pagebutton button large">Next</a>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						

				<!-- Footer -->
					<section id="footer">
						<br>
						<br>
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