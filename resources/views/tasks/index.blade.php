@extends('layouts.app')

@section('content')

  @if (Auth::check())
  
    <h1>Task List</h1>
    @if (count($tasks) > 0)
      <table class="table table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>task</th>
            <th>status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
          <tr>
            <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endif
    {!! link_to_route('tasks.create', 'new task', [], ['class' => 'btn btn-light']) !!}
  
  @else
  
    <h1 class="text-center">Welcome to Task List</h1>
  
  @endif
  
@endsection