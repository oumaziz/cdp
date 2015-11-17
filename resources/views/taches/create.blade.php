<?php

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
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('code','Code')  !!}
        {!! Form::text('code',null, ['class' => 'form-control' ]) !!}
    </div>
            </div>
        </div>
    </div>




    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('description','Description')  !!}
        <textarea class = "form-control" type ="text" name="description" id="description"></textarea>
    </div>
            </div>
        </div>
    </div>



    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('start_date','Start Date')  !!}
        {!! Form::input('date','start_date', null , ['class' => 'form-control' ]) !!}
    </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('end_date','end_date')  !!}
        {!! Form::input('date','end_date', null , ['class' => 'form-control' ]) !!}

    </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
                <div class="form-group">
                    {!! Form::label('us_story_id','User Story')  !!}
                    {!! Form::select('us_story_id',$us_stories ,null,['class' => 'form-control' ]) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
                <div class="form-group">
                    {!! Form::label('sprint_id','Sprint')  !!}
                    {!! Form::select('sprint_id',$sprints,null,['class' => 'form-control' ]) !!}
                </div>
            </div>
        </div>
    </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-md-push-1">
    <div class="form-group">
        {!! Form::label('predecessors[]','Predecessors')  !!}
        {!! Form::select('predecessors[]',$predecessors,null,['class' => 'form-control', 'multiple' => true ]) !!}

    </div>
                        </div>
                    </div>
                </div>

    <button class="btn btn-primary">Send</button>

    {!! Form::close() !!}




@stop




