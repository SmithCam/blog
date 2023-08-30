<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header('Location: login.php');
        exit();
    } else {
        // Show users the page! 
    }
?>
<html>
<?php include 'db.php';?>
		<head>
		<title>Add Item</title>
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

				<h1 class="additemheader"><a href="additem.php">Add Item</a> | <a href="uploader.php">Upload Images</a></h1>

						<!-- Post -->
				<form id='additem' class="additemform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

					Title <input class="title" type="text" name="title" placeholder="Required" required>
					Subtitle <input class="subtitle" type="text" name="subtitle" placeholder="Required" required>
					Blurb <input class="blurb" type="text" name="blurb" placeholder="Required" required>
					Author<input class ="" type="text" name="author" placeholder="Required" required>
					<br>
					Date<input class ="date" type="date" name="date" placeholder="Required" required>
					<br>
					<br>
					Subheading One<input class ="" type="text" name="subheadingone" placeholder="Required" required>
					Body One <textarea name="bodyone" form="additem" placeholder="Required" required></textarea>
					Image One Filename<input class ="imageinput" type="text" name="imageone" placeholder="Required" required>
					Photo Credits One Filename<input class ="imageinput" type="text" name="creditone" placeholder="Required" required>

					Tag One<input class ="imageinput" type="text" name="tagone" placeholder="Required" required>

					Footnoes<input class ="imageinput" type="text" name="footnotes" placeholder="">

					<hr>
					Subheading Two<input class ="" type="text" name="subheadingtwo" placeholder="">
					Body Two <textarea name="bodytwo" form="additem" placeholder=""></textarea>

					<br>
					Subheading Three<input class ="" type="text" name="subheadingthree" placeholder="">
					Body Three <textarea name="bodythree" form="additem" placeholder=""></textarea>

					<br>
					Subheading Four<input class ="" type="text" name="subheadingfour" placeholder="">
					Body Four <textarea name="bodyfour" form="additem" placeholder=""></textarea>

					<br>
					Subheading Five<input class ="" type="text" name="subheadingfive" placeholder="">
					Body Five <textarea name="bodyfive" form="additem" placeholder=""></textarea>

					<br>
					Subheading Six<input class ="" type="text" name="subheadingsix" placeholder="">
					Body Six <textarea name="bodysix" form="additem" placeholder=""></textarea>

					<br>
					Subheading Seven<input class ="" type="text" name="subheadingseven" placeholder="">
					Body Seven <textarea name="bodyseven" form="additem" placeholder=""></textarea>

					<br>
					Subheading Eight<input class ="" type="text" name="subheadingeight" placeholder="">
					Body Eight <textarea name="bodyeight" form="additem" placeholder=""></textarea>

					<br>
					Subheading Nine<input class ="" type="text" name="subheadingnine" placeholder="">
					Body Nine <textarea name="bodynine" form="additem" placeholder=""></textarea>

					<br>
					Subheading Ten<input class ="" type="text" name="subheadingten" placeholder="">
					Body Ten <textarea name="bodyten" form="additem" placeholder=""></textarea>

					<hr>
					Image Two Filename<input class ="imageinput" type="text" name="imagetwo" placeholder="">
					Image Three Filename<input class ="imageinput" type="text" name="imagethree" placeholder="">
					Image Four Filename<input class ="imageinput" type="text" name="imagefour" placeholder="">
					Image Five Filename<input class ="imageinput" type="text" name="imagefive" placeholder="">
					Image Six Filename<input class ="imageinput" type="text" name="imagesix" placeholder="">
					Image Seven Filename<input class ="imageinput" type="text" name="imageseven" placeholder="">
					Image Eight Filename<input class ="imageinput" type="text" name="imageeight" placeholder="">
					Image Nine Filename<input class ="imageinput" type="text" name="imagenine" placeholder="">
					Image Ten Filename<input class ="imageinput" type="text" name="imageten" placeholder="">

					<br>
					Photo Credits Two Filename<input class ="imageinput" type="text" name="credittwo" placeholder="">
					Photo Credits Three Filename<input class ="imageinput" type="text" name="creditthree" placeholder="">

					<br>
					Tag Two<input class ="imageinput" type="text" name="tagtwo" placeholder="">
					Tag Three<input class ="imageinput" type="text" name="tagthree" placeholder="">
					Tag Four<input class ="imageinput" type="text" name="tagfour" placeholder="">
					Tag Five<input class ="imageinput" type="text" name="tagfive" placeholder="">

				 	<hr>
				 	<input class="button submit" type="submit">
			 	</form>
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {

				//Check Fields
			  $required = 1;

			  //title
			  if(isset($_POST['title']) && $_POST['title'] != ''){
			  	$title = "'{$_POST['title']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //subtitle
			  if(isset($_POST['subtitle']) && $_POST['subtitle'] != ''){
			  	$subtitle = "'{$_POST['subtitle']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //blurb
			  if(isset($_POST['blurb']) && $_POST['blurb'] != ''){
			  	$blurb = "'{$_POST['blurb']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //author
			  if(isset($_POST['author']) && $_POST['author'] != ''){
			  	$author = "'{$_POST['author']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //Date
			  if(isset($_POST['date']) && $_POST['date'] != ''){
			  	$date = "'{$_POST['date']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //subheadingone
			  if(isset($_POST['subheadingone']) && $_POST['subheadingone'] != ''){
			  	$subheadingone = "'{$_POST['subheadingone']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //bodyone
			  if(isset($_POST['bodyone']) && $_POST['bodyone'] != ''){
			  	$bodyone = "'{$_POST['bodyone']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //imageone
			  if(isset($_POST['imageone']) && $_POST['imageone'] != ''){
			  	$imageone = "'{$_POST['imageone']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //creditone
			  if(isset($_POST['creditone']) && $_POST['creditone'] != ''){
			  	$creditone = "'{$_POST['creditone']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //tagone
			  if(isset($_POST['tagone']) && $_POST['tagone'] != ''){
			  	$tagone = "'{$_POST['tagone']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //footnotes
			  if(isset($_POST['footnotes']) && $_POST['footnotes'] != ''){
			  	$footnotes = "'{$_POST['footnotes']}'";
			  }
			  else {
			  	$required = 0;
			  }

			  //subheadingtwo
			  if(isset($_POST['subheadingtwo']) && $_POST['subheadingtwo'] != ''){
			  	$subheadingtwo = "'{$_POST['subheadingtwo']}'";
			  }

			  //bodytwo
			  if(isset($_POST['bodytwo']) && $_POST['bodytwo'] != ''){
			  	$bodytwo = "'{$_POST['bodytwo']}'";
			  }

			  //subheadingthree
			  if(isset($_POST['subheadingthree']) && $_POST['subheadingthree'] != ''){
			  	$subheadingthree = "'{$_POST['subheadingthree']}'";
			  }

			  //bodythree
			  if(isset($_POST['bodythree']) && $_POST['bodythree'] != ''){
			  	$bodythree = "'{$_POST['bodythree']}'";
			  }

			  //subheadingfour
			  if(isset($_POST['subheadingfour']) && $_POST['subheadingfour'] != ''){
			  	$subheadingfour = "'{$_POST['subheadingfour']}'";
			  }

			  //bodyfour
			  if(isset($_POST['bodyfour']) && $_POST['bodyfour'] != ''){
			  	$bodyfour = "'{$_POST['bodyfour']}'";
			  }

			  //subheadingfive
			  if(isset($_POST['subheadingfive']) && $_POST['subheadingfive'] != ''){
			  	$subheadingfive = "'{$_POST['subheadingfive']}'";
			  }

			  //bodyfive
			  if(isset($_POST['bodyfive']) && $_POST['bodyfive'] != ''){
			  	$bodyfive = "'{$_POST['bodyfive']}'";
			  }

			  //subheadingsix
			  if(isset($_POST['subheadingsix']) && $_POST['subheadingsix'] != ''){
			  	$subheadingsix = "'{$_POST['subheadingsix']}'";
			  }

			  //bodysix
			  if(isset($_POST['bodysix']) && $_POST['bodysix'] != ''){
			  	$bodysix = "'{$_POST['bodysix']}'";
			  }

			  //subheadingseven
			  if(isset($_POST['subheadingseven']) && $_POST['subheadingseven'] != ''){
			  	$subheadingseven = "'{$_POST['subheadingseven']}'";
			  }

			  //bodyseven
			  if(isset($_POST['bodyseven']) && $_POST['bodyseven'] != ''){
			  	$bodyseven = "'{$_POST['bodyseven']}'";
			  }

			  //subheadingeight
			  if(isset($_POST['subheadingeight']) && $_POST['subheadingeight'] != ''){
			  	$subheadingeight = "'{$_POST['subheadingeight']}'";
			  }

			  //bodyeight
			  if(isset($_POST['bodyeight']) && $_POST['bodyeight'] != ''){
			  	$bodyeight = "'{$_POST['bodyeight']}'";
			  }

			  //subheadingnine
			  if(isset($_POST['subheadingnine']) && $_POST['subheadingnine'] != ''){
			  	$subheadingnine = "'{$_POST['subheadingnine']}'";
			  }

			  //bodynine
			  if(isset($_POST['bodynine']) && $_POST['bodynine'] != ''){
			  	$bodynine = "'{$_POST['bodynine']}'";
			  }

			  //subheadingten
			  if(isset($_POST['subheadingten']) && $_POST['subheadingten'] != ''){
			  	$subheadingten = "'{$_POST['subheadingten']}'";
			  }

			  //bodyten
			  if(isset($_POST['bodyten']) && $_POST['bodyten'] != ''){
			  	$bodyten = "'{$_POST['bodyten']}'";
			  }

			  //imagetwo
			  if(isset($_POST['imagetwo']) && $_POST['imagetwo'] != ''){
			  	$imagetwo = "'{$_POST['imagetwo']}'";
			  }

			  //imagethree
			  if(isset($_POST['imagethree']) && $_POST['imagethree'] != ''){
			  	$imagethree = "'{$_POST['imagethree']}'";
			  }

			  //imagefour
			  if(isset($_POST['imagefour']) && $_POST['imagefour'] != ''){
			  	$imagefour = "'{$_POST['imagefour']}'";
			  }

			  //imagefive
			  if(isset($_POST['imagefive']) && $_POST['imagefive'] != ''){
			  	$imagefive = "'{$_POST['imagefive']}'";
			  }

			  //imagesix
			  if(isset($_POST['imagesix']) && $_POST['imagesix'] != ''){
			  	$imagesix = "'{$_POST['imagesix']}'";
			  }

			  //imageseven
			  if(isset($_POST['imageseven']) && $_POST['imageseven'] != ''){
			  	$imageseven = "'{$_POST['imageseven']}'";
			  }

			  //imageeight
			  if(isset($_POST['imageeight']) && $_POST['imageeight'] != ''){
			  	$imageeight = "'{$_POST['imageeight']}'";
			  }

			  //imagenine
			  if(isset($_POST['imagenine']) && $_POST['imagenine'] != ''){
			  	$imagenine = "'{$_POST['imagenine']}'";
			  }

			  //imageten
			  if(isset($_POST['imageten']) && $_POST['imageten'] != ''){
			  	$imageten = "'{$_POST['imageten']}'";
			  }

			  //credittwo
			  if(isset($_POST['credittwo']) && $_POST['credittwo'] != ''){
			  	$credittwo = "'{$_POST['credittwo']}'";
			  }

			  //creditthree
			  if(isset($_POST['creditthree']) && $_POST['creditthree'] != ''){
			  	$creditthree = "'{$_POST['creditthree']}'";
			  }

			  //creditfour
			  if(isset($_POST['creditfour']) && $_POST['creditfour'] != ''){
			  	$creditfour = "'{$_POST['creditfour']}'";
			  }

			  //tagtwo
			  if(isset($_POST['tagtwo']) && $_POST['tagtwo'] != ''){
			  	$tagtwo = "'{$_POST['tagtwo']}'";
			  }

			  //tagthree
			  if(isset($_POST['tagthree']) && $_POST['tagthree'] != ''){
			  	$tagthree = "'{$_POST['tagthree']}'";
			  }

			  //tagfour
			  if(isset($_POST['tagfour']) && $_POST['tagfour'] != ''){
			  	$tagfour = "'{$_POST['tagfour']}'";
			  }

			  //tagfive
			  if(isset($_POST['tagfive']) && $_POST['tagfive'] != ''){
			  	$tagfive = "'{$_POST['tagfive']}'";
			  }

			  //Check all fields completed
			  if ($required == 0) {
			  	echo "Fill out each required field to add an entry.";
			  } else {

			  	//Update table
			  	$sql = "
					";
					$sql = sprintf("INSERT INTO `blogtown`
					(`title`,
					`subtitle`,
					`blurb`,
					`author`,
					`date`,
					`subheadingone`,
					`bodyone`,
					`imageone`,
					`creditone`,
					`tagone`,
					`footnotes`,
					`subheadingtwo`,
					`bodytwo`,
					`subheadingthree`,
					`bodythree`,
					`subheadingfour`,
					`bodyfour`,
					`subheadingfive`,
					`bodyfive`,
					`subheadingsix`,
					`bodysix`,
					`subheadingseven`,
					`bodyseven`,
					`subheadingeight`,
					`bodyeight`,
					`subheadingnine`,
					`bodynine`,
					`subheadingten`,
					`bodyten`,
					`imagetwo`,
					`imagethree`,
					`imagefour`,
					`imagefive`,
					`imagesix`,
					`imageseven`,
					`imageeight`,
					`imagenine`,
					`imageten`,
					`credittwo`,
					`creditthree`,
					`tagtwo`,
					`tagthree`,
					`tagfour`,
					`tagfive`)
					VALUES
					($title,
					$subtitle,
					$blurb,
					$author,
					$date,
					$subheadingone,
					'%s',
					$imageone,
					$creditone,
					$tagone,
					$footnotes,
					$subheadingtwo,
					'%s',
					$subheadingthree,
					'%s',
					$subheadingfour,
					'%s',
					$subheadingfive,
					'%s',
					$subheadingsix,
					'%s',
					$subheadingseven,
					'%s',
					$subheadingeight,
					'%s',
					$subheadingnine,
					'%s',
					$subheadingten,
					'%s',
					$imagetwo,
					$imagethree,
					$imagefour,
					$imagefive,
					$imagesix,
					$imageseven,
					$imageeight,
					$imagenine,
					$imageten,
					$credittwo,
					$creditthree,
					$tagtwo,
					$tagthree,
					$tagfour,
					$tagfive)",
				//);

    			$conn->real_escape_string($bodyone) /*);*/ ,
    			$conn->real_escape_string($bodytwo),
				$conn->real_escape_string($bodythree),
				$conn->real_escape_string($bodyfour),
				$conn->real_escape_string($bodyfive),
				$conn->real_escape_string($bodysix),
				$conn->real_escape_string($bodyseven),
				$conn->real_escape_string($bodyeight),
				$conn->real_escape_string($bodynine),
				$conn->real_escape_string($bodyten),
				$conn->real_escape_string($footnotes),
				$conn->real_escape_string($blurb));

				//echo $sql;
				$conn -> query($sql);
			  }
			}
			?>
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