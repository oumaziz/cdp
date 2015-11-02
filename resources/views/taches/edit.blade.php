<?php
?>



@extends('default')
@section('content')


<h2>Edit</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['method'=>'put', 'url'=>route('taches.taches.update',$tache->id)]) !!}

<div class="form-group">
    {!! Form::label('code','Code')  !!}
    {!! Form::text('code',$tache->code, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description')  !!}
    {!! Form::textarea('description',$tache->description, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('start_date','Start Date')  !!}
    {!! Form::text('start_date',$tache->start_date, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('end_date','end_date')  !!}
    {!! Form::text('end_date',$tache->end_date, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('predecessors','predecessors')  !!}
    {!! Form::text('predecessors',$tache->predecessors, ['class' => 'form-control' ]) !!}
</div>

<button class="btn btn-primary">Send</button>

{!! Form::close() !!}




@stop
