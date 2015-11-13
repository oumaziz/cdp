<?php

?>

@extends('default')
@section('content')

    <p><a class="btn btn-info btn-lg" style="width:500px" href="{{ route('taketache.taches.update') }}">Finish your task</a> <a class="btn btn-info btn-lg" style="width:500px" href="{{ route('kanban.taches.index') }}">Current Kanban</a></p>


    <h2>Take a Task</h2>

    @if(Session::has('success'))
        <div class="alert alert-success">

          {{ Session::get('success') }}

        </div>
    @endif
    <table class="table table-bordered">
        <tbody>

        @foreach($taches as $tache)
            @if($tache->state == 0)
            <tr>
                <td>{{ $tache->description }} </td>
                <td><a class="btn btn-primary" style="width:130px" href="{{ route('taketache.taches.edit',$tache->id) }}">Take</a></td>
            </tr>
            @endif

        @endforeach



        </tbody>
    </table>

@stop
