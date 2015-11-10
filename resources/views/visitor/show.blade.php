@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Accès pour les visiteurs</b></div>
                    <div class="panel-body">
                        @if($key)
                            <p>Voici le lien à partager avec vos visiteurs : <a href="{{ $key }}"></a></p>
                        @else
                            <p>Vous n'avez pas autorisé les visiteurs. Pour les autoriser veuillez cliquer ici : <a href="{{ URL::action("VisitorController@add", [$project_id]) }}">Autoriser les visiteurs</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection