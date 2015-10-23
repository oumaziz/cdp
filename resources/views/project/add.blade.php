<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'un Projet</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-push-1">
            <form action="{{  URL::action("ProjectController@add", null) }}" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group form-group-label">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                            <label class="floating-label" for="title">Nom du projet :</label>
                            <input type="text" class="form-control" name="title" placeholder="Nom du projet" data-hint="Ce champ est obligatoire"/>
                        </div>
                    </div>
                </div>


                <div class="form-group form-group-label">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                            <label class="floating-label" for="description">Description du projet :</label>
                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group form-group-label">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                            <label class="floating-label" for="startDate">Date de début :</label>
                            <input type="date" name="startDate" class="form-control"/>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                            <button class="btn">Ajouter</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>