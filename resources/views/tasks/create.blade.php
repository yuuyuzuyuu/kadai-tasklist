@extends('layouts.app')

@section('content')

  <h1>New Task</h1>
  
  <div class="row">
    <div class="col-6">
      {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group">
          {!! Form::label('content', 'task:') !!}
          {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('status', 'status:') !!}
          {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('submit', ['class' => 'btn btn-light']) !!}
      {!! Form::close() !!}
    </div>
  </div>

@endsection