<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Recaptcha de Google </title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<form action="procesa.php" method="POST">
		<input type="texto" name="texto">
		<br>
		<div class="g-recaptcha" data-sitekey=""></div>
		<input type="submit" value="Enviar">	
	</form>
</body>
</html>