<?php

$comment = null;

if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])) {
	$comment = $_POST['preview-form-comment'];
}

?>

<!DOCTYPE html>
<html>
<head>
<title>JavaScript Teacher - Form</title>

	<link rel="stylesheet" type="text/css" href="style/codemirror.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="libs/jquery-3.1.1.slim.min.js"></script>
	<script src="libs/codemirror.js"></script>
	<script src="js/index.js"></script>
	
</head>

<body>
<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?">
	<textarea class="CodeMirror-textarea" name="preview-form-comment" id="preview-form-comment"></textarea>
	<br>
	<input type="submit" name="preview-form-submit" id="preview-form-submit" value="submit"></input>
</form>
	<div id="preview-comment"><?php echo $comment;></div>


</body>