<!DOCTYPE html>
<html>
<head>
	<title>Submitted Information</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="container">
	<div id="form_container">
		<h1 id="heading">Submitted Information</h1>
			<p>Name: <?php echo $_POST["name"]; ?></p>
			<p>Dojo Location: <?php echo $_POST["location"]; ?></p>
			<p>Favorite Language: <?php echo $_POST["language"]; ?></p>
			<p>Comments: <?php echo $_POST["comments"]; ?></p>
	</div>
</div>
</body>
</html>