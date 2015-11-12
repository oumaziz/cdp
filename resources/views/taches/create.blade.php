
@extends('default')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                        <div class="panel-body">

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

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/taches/store', $idSprint) }}">

    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
        {!! Form::label('code','Code')  !!}
        {!! Form::text('code',null, ['class' => 'form-control' ]) !!}
    </div>
</div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
        {!! Form::label('description','Description')  !!}
        {!! Form::textarea('description', null , ['class' => 'form-control' ]) !!}
    </div>
    </div>
</div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
        {!! Form::label('start_date','Start Date')  !!}
        {!! Form::text('start_date', null , ['class' => 'form-control' ]) !!}
    </div>
    </div>
</div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
        {!! Form::label('end_date','end_date')  !!}
        {!! Form::text('end_date', null , ['class' => 'form-control' ]) !!}
    </div>
</div>
</div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
        {!! Form::label('us_story_id','us_story_id')  !!}
        {!! Form::text('us_story_id', null , ['class' => 'form-control' ]) !!}
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-push-1">
        {!! Form::label('predecessors','predecessors')  !!}
        {!! Form::text('predecessors', null , ['class' => 'form-control' ]) !!}
    </div>
</div>
</div>

    <button class="btn btn-primary">Send</button>

 </form>
</div>
</div>
</div>
</div>
@stop


