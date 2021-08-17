@extends('layouts.app')

@section('content')

  <h1>Sign up</h1>
  
  
  <div class="row">
    <div class="col-sm-6 offset-sm-3">
      
      {!! Form::open(['route' => 'signup.post']) !!}
        <div class="form-group">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
          {!! Form::label('email', 'Email') !!}
          {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
          {!! Form::label('password', 'Password') !!}
          {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
          {!! Form::label('password_confirmation', 'Confirmation') !!}
          {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('Sign up!', ['class' => 'btn btn-light btn-block']) !!}
        
      {!! Form::close() !!}
      
    </div>
  </div>

@endsection