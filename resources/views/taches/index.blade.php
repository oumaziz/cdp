
@extends('default')
@section('content')

 

    <div class="container">
        <h2>List of tasks</h2>
    @if(count($taches))
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Code</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Predecessors</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($taches as $tache)
                <tr>
                    <td>{{ $tache->code }}</td>
                    <td>{{ $tache->description }}</td>
                    <td>{{$tache->start_date }}</td>
                    <td>{{$tache->end_date  }}</td>
                    <td>{{$tache->predecessors  }}</td>
                    <td>
                        <p><a class="btn btn-primary btn-xs" href={{ URL::action("Taches\TachesController@edit") }}>Edit</a>  
                        <a class="btn btn-primary btn-xs" href={{ URL::action("Taches\TachesController@destroy") }}>Destroy</a></p>               
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else 
        <p> Aucune Taches n'était ajoutée !!</p>
    @endif
      <a href= {{ URL::action("Taches\TachesController@create",[$idSprint]) }} class= 'btn btn-primary'> Add Task</a>
    </div>







@stop
