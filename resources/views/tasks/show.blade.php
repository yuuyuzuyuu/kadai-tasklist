@extends('layouts.app')

@section('content')

  <h1>Number {{ $task->id }} task</h1>
  
  <table class="table table-bordered">
    <tr>
      <th>id</th>
      <td>{{ $task->id }}</td>
    </tr>
    <tr>
      <th>task</th>
      <td>{{ $task->content }}</td>
    </tr>
  </table>

  {!! link_to_route('tasks.edit', 'edit', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
  
  {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('delete', ['class' => 'btn btn-light']) !!}
  {!! Form::close() !!}

@endsection