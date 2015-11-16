<?php
?>

@extends('default')
@section('content')

<div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                        <div class="panel-body">
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
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('code','Code')  !!}
        {!! Form::text('code',$tache->code, ['class' => 'form-control' ]) !!}
    </div>
    </div>
</div>
</div>
<div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('description','Description')  !!}
        {!! Form::textarea('description',$tache->description, ['class' => 'form-control' ]) !!}
    </div>
    </div>
</div>
</div>
<div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('start_date','Start Date')  !!}
        {!! Form::input('date','start_date',$tache->start_date, ['class' => 'form-control' ]) !!}
    </div>
    </div>
</div>
</div>
<div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('end_date','end_date')  !!}
        {!! Form::input('date','end_date',$tache->end_date, ['class' => 'form-control' ]) !!}
    </div>
    </div>
</div>
</div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-md-push-1">
                                        <div class="form-group">
                                            {!! Form::label('us_story_id','User Story')  !!}
                                            {!! Form::select('us_story_id',$us_stories,$tache->us_story_id ,['class' => 'form-control' ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

<div class="form-group">
<div class="row">
<div class="col-md-6 col-md-push-1">
<div class="form-group">
{!! Form::label('sprint_id','Sprint')  !!}
{!! Form::select('sprint_id',$sprints, $tache->sprint_id,['class' => 'form-control' ]) !!}
</div>
</div>
</div>
</div>


<div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('predecessors','predecessors')  !!}
        {!! Form::text('predecessors',$tache->predecessors, ['class' => 'form-control' ]) !!}
    </div>
</div>
</div>
</div>

    <button class="btn btn-warning">Send</button>

    {!! Form::close() !!}
</div>
</div>
</div>
</div>



@stop
