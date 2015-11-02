<!doctype html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Ajouter/Modifier une UserStory</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
@if($victim)

<p>
	<label for="description">Description</label> : <input type ="text" name="description" id="description" size="100" maxlength="500" value ="<?php echo $victim->description; ?>"/> <br />
	<label for="priority">Priorité</label> : <input type ="number" name="priority" id="priority" min="0" value="<?php echo $victim->priority; ?>" /> <br />
	<label for="difficulty">Difficulté</label> : <input type ="number" name="difficulty" id="difficulty" min="0" value="<?php echo $victim->difficulty; ?>" /> <br />
	<input type ="checkbox" name="done" id="done" value="<?php echo $victim->status; ?>" /><label for="done">Terminée</label> <br />

	</form>
</p>
@else
	<label for="description">Description</label> : <input type ="text" name="description" id="description" size="100" maxlength="500" /> <br />
	<label for="priority">Priorité</label> : <input type ="number" name="priority" id="priority" min="0"  /> <br />
	<label for="difficulty">Difficulté</label> : <input type ="number" name="difficulty" id="difficulty" min="0"  /> <br />
	<input type ="checkbox" name="done" id="done"  /><label for="done">Terminée</label> <br />

	</form>
@endif
</body>
</html>