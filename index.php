<?php
session_start();
// echo session_id();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assignment: Survey Form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="container">
		<div id="form_container">
		<h1 id="heading">Survey Form</h1>
			<form action="result.php" method="post">
				Name: <input type="text" name="name"><br>
				Dojo Location: <select name="location">
						<option value="Silicon Valley">Silicon Valley</option>
						<option value="Seattle">Seattle</option>
						<option value="Los Angeles">Los Angeles</option>
					</select><br>
				Favorite Language: <select name="language">
					<option value="Javascript">Javascript</option>
					<option value="HTML">HTML</option>
					<option value="PHP">PHP</option>
				</select><br>
				Comments: <textarea name="comments" rows="10" cols="30"></textarea><br>
				<input type="submit">
			</form>
		</div>
</div>
</body>
</html>