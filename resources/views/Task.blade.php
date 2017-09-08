<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="/task" method="POST">
	{{csrf_field()}}
	<label for="task">Ajouter une taches</label>
	<input type="text" name="task">
<input type="submit" name="envoyer">
</form>

	
</body>
</html>