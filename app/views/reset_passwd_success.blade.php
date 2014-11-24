@extends('layout')
@section('body')
<div class="container">
    <div>
        <h2>Reset Password Success!</h2>
        <br/>
        <br/>
        <h4>Please login with your new password.</h4>
        <br/>
        <br/>
        <h4>You will be redirect to the login page in <span id="timeLeft">10</span> seconds.</h4>
    </div>
</div>
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
@stop