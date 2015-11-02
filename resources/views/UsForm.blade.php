<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ajouter/Modifier une UserStory</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
@if($us)
    <form action="{{  URL::action("UsController@modifyConfirm", null) }}" class="form-horizontal" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="us" value="{{ $us->id }}">

        <label for="description">Description</label> : <input type ="text" name="description" id="description" size="100" maxlength="500" value ="<?php echo $us->description; ?>"/> <br />
        <label for="priority">Priorité</label> : <input type ="number" name="priority" id="priority" min="0" value="<?php echo $us->priority; ?>" /> <br />
        <label for="difficulty">Difficulté</label> : <input type ="number" name="difficulty" id="difficulty" min="0" value="<?php echo $us->difficulty; ?>" /> <br />
        <input type ="checkbox" name="done" id="done" value="done" <?php if($us->status == 1) echo 'checked="checked"' ?> /><label for="done">Terminée</label> <br />
        <button type="submit" class="btn">Ajouter</button>
    </form>
@else
    <form action="{{  URL::action("UsController@createConfirm", null) }}" class="form-horizontal" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="description">Description</label> : <input type ="text" name="description" id="description" size="100" maxlength="500" /> <br />
        <label for="priority">Priorité</label> : <input type ="number" name="priority" id="priority" min="0"  /> <br />
        <label for="difficulty">Difficulté</label> : <input type ="number" name="difficulty" id="difficulty" min="0"  /> <br />
        <button type="submit" class="btn">Ajouter</button>
    </form>
@endif
</body>
</html>