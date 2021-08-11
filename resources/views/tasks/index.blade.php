@extends('layouts.app')

@section('content')

  <h1>Task List</h1>
  
  @if (count($tasks) > 0)
    <table class="table table-striped">
      <thead>
        <tr>
          <th>id</th>
          <th>task</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task)
        <tr>
          <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
          <td>{{ $task->content }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @endif
  
  {!! link_to_route('tasks.create', 'new task', [], ['class' => 'btn btn-light']) !!}

@endsection