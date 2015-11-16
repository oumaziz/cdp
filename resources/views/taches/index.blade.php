<?php

?>

@extends('default')
@section('content')

   <!--  <p><a class="btn btn-info btn-lg center-block" style="width:1000px" href="{{ route('taches.taches.create') }}">Add Task</a></p>  -->




    <div class="container">
        @if(!empty($taches))
        <h2>List of tasks of sprint {{$id}}</h2>
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
            @endif
            @if(empty($taches))
                <h2>There is no task in your sprint {{$id}}, please add one !</h2>
            @endif

            @foreach($taches as $tache)
                <tr>
                    <td>{{ $tache->code }}</td>
                    <td>{{ $tache->description }}</td>
                    <td>{{$tache->start_date }}</td>
                    <td>{{$tache->end_date  }}</td>
                    <td>{{$tache->predecessors  }}</td>
                    <td>
                        <p><a class="btn btn-warning" style="width:130px" href="{{ route('taches.taches.edit',$tache->id) }}">Edit</a></p>
                        {!! Form::open(['method'=>'delete', 'url'=>route('taches.taches.destroy',$tache->id)]) !!}
                        <button style="width:130px" class="btn btn-danger">Destroy</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <p><a class="btn btn-info btn-lg center-block" href="{{ route('taches.taches.create') }}">Add Task</a></p>
        <a href= {{ route('kanban.taches.show',$id) }} class= 'btn btn-default'> show Kanban</a>
    </div>







@stop

