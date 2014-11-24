@extends('layout')
@section('body')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        @if (isset($success))
        <h2>Reset Password</h2>
        <br/>
        <h3>Please set your new password.</h3>
        <br/>
        <br/>
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
        {{ Form::open(array( 'method' => 'post')) }}
        <div class="form-group">
            {{Form::label('password','Password')}}
            {{Form::password('password', array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('password_confirmation','Password Confirm')}}
            {{Form::password('password_confirmation',array('class' => 'form-control'))}}
        </div>

        <div class="form-group">
            {{Form::submit('Submit', array('class' => 'btn btn-primary login'))}}
        </div>
        {{ Form::close() }}
        @endif
        <div class="errors">
            <h3>@if (isset($token_message)) {{$token_message}} @endif</h3>
        </div>
    </div>
</div>

@stop
