<?php

?>

@extends('default')
@section('content')

    <h2>Take a Task</h2>

    <table class="table table-bordered">
    <tbody>
    {!! Form::open(['url'=>route('taches.taches.take')]) !!}

    @foreach($taches as $tache)
    <tr>
        <td>{!! Form::label('description',$tache->description)  !!} </td>
        <td>  {!! Form::checkbox('take', 'yes')!!} </td>
    </tr>

    @endforeach

    <button class="btn btn-primary">Send</button>

    {!! Form::close() !!}
    </tbody>
    </table>



@stop
