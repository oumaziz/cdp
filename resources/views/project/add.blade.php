@extends('default')
@section('content')
<div class="container">
    <h2> Ajout d'un projet</h2>
</br>
<div class="row">
    <div class="col-md-10 col-md-push-1">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (count($errors) > 0)

            <strong>Oups !</strong> Il y a eu un petit souci :<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    
    @endif

        <form action="{{  URL::action("ProjectController@add", null) }}" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group form-group-label">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <label class="floating-label" for="title">Nom du projet </label>
                        <input type="text" class="form-control" name="title" placeholder="Nom du projet" data-hint="Ce champ est obligatoire"/>
                    </div>
                </div>
            </div>


            <div class="form-group form-group-label">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <label class="floating-label" for="description">Description du projet </label>
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group form-group-label">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <label class="floating-label" for="repo">Dépot  </label>
                        <input type="text" class="form-control" name="repo" placeholder="comptedemo/mondepot"/>
                    </div>
                </div>
            </div>

            <div class="form-group form-group-label">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <label class="floating-label" for="branch">Branche  </label>
                        <input type="text" class="form-control" name="branch" placeholder="master"/>
                    </div>
                </div>
            </div>

            <div class="form-group form-group-label">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <label class="floating-label" for="startDate">Date de début </label>
                        <input type="date" name="startDate" class="form-control"/>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-10 col-md-push-1">
                        <button class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
</div>
@stop
