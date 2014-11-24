@extends('layout')
@section('body')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Login</h2>
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
        {{ Form::open(array('url' => 'login', 'method' => 'post')) }}
        <div class="form-group">
            {{Form::label('username','Username')}}
            {{Form::text('username', null, array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('password','Password')}}
            {{Form::password('password', array('class' => 'form-control'))}}
        </div>
        <div class="form-group remember">
            {{Form::label('remember','Remember me')}}
            {{Form::checkbox('remember', null, array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::submit('Login', array('class' => 'btn btn-primary login'))}}
        </div>
        {{ Form::close() }}
    </div>
        <div class="col-md-4 col-md-offset-4">
            <br/>
            {{link_to('forgot_password', 'Forgot Password?')}}
        </div>
</div>
@stop