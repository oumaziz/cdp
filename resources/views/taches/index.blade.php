<?php


?>



@extends('default')
@section('content')

<h1>Welcome</h1>

<p><a class="btn btn-info btn-lg" style="width:1000px" href="{{ route('taches.taches.create') }}">Add Task</a></p>




    <div class="container">
        <h2>List of tasks</h2>
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
                    <p><a class="btn btn-primary" style="width:130px" href="{{ route('taches.taches.edit',$tache->id) }}">Edit</a></p>
                    {!! Form::open(['method'=>'delete', 'url'=>route('taches.taches.destroy',$tache->id)]) !!}
                    <button style="width:130px" class="btn btn-primary">Destroy</button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>







@stop
