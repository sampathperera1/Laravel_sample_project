@extends('layout')
@section('body')
<div class="container">
    <div>
        @if (isset($success))
        <h2>You have successfully acctivate the account.</h2>
        <br/>
        <h3>Please login using your credentials.</h3>
        <br/>
        <br/>
        <h4>You will be redirect to the login page in <span id="timeLeft">10</span> seconds.</h4>
        @endif
        <div class="errors">
            @foreach ($errors->all() as $message)
            <h3>{{$message}}</h3>
            @endforeach
        </div>
    </div>
</div>
@if (isset($success))
<script type="text/javascript">
    $(document).ready(function () {
        window.setInterval(function () {
            var timeLeft = $("#timeLeft").text();
            if (eval(timeLeft) == 0) {
                window.location = ("{{url('login')}}");
            } else {
                $("#timeLeft").html(eval(timeLeft) - eval(1));
            }
        }, 1000);
    });
</script>
@endif
@stop
