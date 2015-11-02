<?php
/**
 * Created by PhpStorm.
 * User: tijani
 * Date: 25/10/15
 * Time: 15:48
 */

?>

@extends('default')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Add Your Task</h2>

    {!! Form::open(['url'=>route('taches.taches.store')]) !!}

    <div class="form-group">
        {!! Form::label('code','Code')  !!}
        {!! Form::text('code',null, ['class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description')  !!}
        {!! Form::textarea('description', null , ['class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('start_date','Start Date')  !!}
        {!! Form::text('start_date', null , ['class' => 'form-control' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('end_date','end_date')  !!}
        {!! Form::text('end_date', null , ['class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('predecessors','predecessors')  !!}
        {!! Form::text('predecessors', null , ['class' => 'form-control' ]) !!}
    </div>

    <button class="btn btn-primary">Send</button>

    {!! Form::close() !!}




@stop



