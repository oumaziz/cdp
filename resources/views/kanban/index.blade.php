<?php

?>
@extends('default')
@section('content')

    <h2>Kanban</h2>

    <table class="table table-bordered">
        <thead >
        <tr class="success">
            <th>ToDo</th>
            <th>Doing</th>
            <th>Done</th>
        </tr>
        </thead>
        <tbody>


        @foreach($taches as $tache)

            @if($tache->state == 0)
                <tr>
                    <td>{{ $tache->description }} </td>
                    <td> </td>
                    <td> </td>
                </tr>
            @endif

            <p style="display:none;" >{{ $name = array_search($tache, $results) }}</p>

            @if($tache->state == 1)
                <tr>
                    <td> </td>
                    <td>{{ $tache->description." [".$name."]" }} </td>
                    <td> </td>
                </tr>
            @endif

            @if($tache->state == 2)
                <tr>
                    <td> </td>
                    <td> </td>
                    <td>{{ $tache->description." [".$name."]" }} </td>
                </tr>
            @endif

        @endforeach



        </tbody>
    </table>

@stop