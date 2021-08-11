@extends('layouts.app')

@section('content')

  <h1>Edit of Number {{ $task->id}}</h1>
  
  <div class="row">
    <div class="col-6">
      {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
          {!! Form::label('content', 'task:') !!}
          {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        {!! FOrm::submit('update', ['class' => 'btn btn-light']) !!}
      {!! Form::close() !!}
    </div>
  </div>

@endsection