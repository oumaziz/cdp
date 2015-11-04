<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'un Sprint</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br/>
    <div class="row">
        <form action="{{  URL::action("SprintController@add", [$project_id]) }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group form-group-label">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <label class="floating-label" for="StartDate">Date de début :</label>
                        <input type="date" name="StartDate" class="form-control"/>
                    </div>
                </div>
            </div>

            <div class="form-group form-group-label">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <label class="floating-label" for="EndDate">Date de fin :</label>
                        <input type="date" name="EndDate" class="form-control"/>
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