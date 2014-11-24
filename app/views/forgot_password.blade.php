@extends('layout')
@section('body')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Forgot Password?</h2>
        <br>
        <h5>Please enter your username. </h5>
        <h5>We will send you an email with instructions to reset your password</h5>
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
        {{ Form::open(array('url' => 'forgot_password', 'method' => 'post')) }}
        <div class="form-group">
            {{Form::label('username','Username')}}
            {{Form::text('username', null, array('class' => 'form-control'))}}
        </div>
        
        <div class="form-group">
            {{Form::submit('Submit', array('class' => 'btn btn-primary login'))}}
        </div>
        {{ Form::close() }}
    </div>

</div>
@stop