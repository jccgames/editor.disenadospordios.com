<!DOCTYPE html>
<html ng-app='editor'>
<head>
	<title>Diseñados por Dios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/admin.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/icon.css">
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,100&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- Jqueary -->
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<!--CKEditor-->
	<script type="text/javascript" src='/ckeditor/ckeditor.js'></script>
	<script type="text/javascript" src='/app/encoder.js'></script>
	<!-- Angular.js-->
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js'></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-sanitize.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
	<script type="text/javascript" src='/app/angular.js'></script>
</head>

<body>
	<nav>
		<div class='icon-back'><span class='icon-DxD'></span></div>
		<h1 class='header'>Diseñados por Dios</h1>
		<div class='menu'>
			<ul>
				<li> Pagina de Administrador </li>
			</ul>
		</div>
	</nav>

	<div class='container' ng-controller='articleWriteController'>
		<h1>Titulo: <input type="text" ng-model='article.title'></h1>
		<ul class='inline'>
			<li>Id: {{article.id}}</li>
			<li>Escritor: <input type="text" ng-model='article.author'></li>
			<li>Foto: <input type="text" ng-model='article.picture'></li>
			<li>Url: /blog/<input type="text" ng-model='article.url'></li>
			<li>Likes: {{article.likes}}</li>
			<li>Vistas: {{article.views}}</li>
			<li>Ultima Modificacion: {{article.dateLastMod}}</li>
			<li><button ng-click='save()'>Guardar</button></li>
			<li><button ng-show='article.publish == 0' ng-click='savePublish()'>Guardar y publicar</button></li>
			<li><button ng-show='article.publish == 1' ng-click='saveDraft()'>Regresar a borrador</button></li>
		</ul>

		<textarea name='editor1' id='editor1' rows='10' cols='80'>
		</textarea>
		<script type="text/javascript">
			CKEDITOR.replace('editor1');
		</script>
	</div>

</body>

</html>