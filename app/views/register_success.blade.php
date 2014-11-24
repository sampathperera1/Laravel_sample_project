@extends('layout')
@section('body')
<div class="container">
    <div>
        <h2>You have successfully registerd with the system.</h2>
        <br/>
        <br/>
        <br/>
        <h4>Please check your email <u>{{{Session::get('email')}}}</u>, to activate your account.</h4>
        <br/>
        <h5>It maybe dansing on your SPAM folber ;)</h5>
        <br/>
        <br/>
        <h4>You will be redirect to the landing page in <span id="timeLeft">10</span> seconds.</h4>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        window.setInterval(function () {
            var timeLeft = $("#timeLeft").text();
            if (eval(timeLeft) == 0) {
                window.location = ("{{url('/')}}");
            } else {
                $("#timeLeft").html(eval(timeLeft) - eval(1));
            }
        }, 1000);
    });
</script>
@stop