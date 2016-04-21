<!DOCTYPE html>
<html ng-app='blog'>
<head>
	<title>Diseñados por Dios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://disenadospordios.com/css/main.css">
	<link rel="stylesheet" type="text/css" href="http://disenadospordios.com/css/icon.css">
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,100&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- Jqueary -->
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<!--CKEditor-->
	<script type="text/javascript" src='/ckeditor/ckeditor.js'></script>
	<!-- Angular.js-->
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js'></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-sanitize.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
	<script type="text/javascript" src='app/angular.js'></script>
</head>

<body>
	<nav>
		<div class='icon-back'><span class='icon-DxD'></span></div>
		<h1 class='header'>Diseñados por Dios</h1>
		<div class='menu'>
			<ul>
				<li>Para Jovenes</li>
				<li>Para Lideres</li>
				<li>Videos</li>
			</ul>
		</div>
	</nav>

	<div class='container'>
		<form>
			<textarea name='editor1' id='editor1' rows='10' cols='80'>
			</textarea>
			<script type="text/javascript">
				CKEDITOR.replace('editor1');
				CKEDITOR.instances.editor1.setData("<p>My Text</p>");
			</script>
		</form>
	</div>
</body>

</html>