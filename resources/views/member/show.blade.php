@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Liste des membres</b></div>
                    <div class="panel-body">
                        <?php $i = 1; ?>
                        @if(count($members))
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        N°
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($members as $member)
                                    <tr>
                                        <th> {{ $i++ }}</th>
                                        <th> {{$member->email}} </th>
                                        <td> <a href= {{ URL::action( "MemberController@remove",[$project_id,$member->Developer_id]) }} class= 'btn btn-primary btn-xs'> Delete</a> </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Aucun membre n'a été ajouté.</p>
                        @endif
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Ajouter un membre</b></div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="{{  URL::action("MemberController@add", [$project_id]) }}" method="POST" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail du nouveau membre" required/>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn">Ajouter</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


