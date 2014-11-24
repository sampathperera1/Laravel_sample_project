<div class="col-md-4 col-md-offset-4">    
    <h2>@if (Auth::check()) Edit Account @else Register @endif</h2>
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-1">
        <image src="assets/img/profile.png" id="profile_image" class="profile_image">
        <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Upload Image</span>
            <input id="fileupload" type="file" name="image" data-url="user/profileimage" multiple>
        </span>
        <div class="errors" id="file_error"></div>
        <div id="progress">
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
    <div class="col-md-4">
        {{ Form::open(array('url' => 'user', 'method' => 'post')) }}
        {{Form::hidden('image', $user->image, array('id' => 'image_hidden'))}}
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
        <div class="form-group">
            {{Form::label('username','Username')}}
            {{Form::text('username', $user->username, array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('first_name','First Name')}}
            {{Form::text('first_name', $user->first_name,array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('last_name','Last Name')}}
            {{Form::text('last_name', $user->last_name, array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::text('email', $user->email, array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('phone_number','Phone Number')}}
            {{Form::text('phone_number', $user->phone_number,array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('address','Address Line')}}
            {{Form::text('address', $user->address, array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('city','City')}}
            {{Form::text('city', $user->city, array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('country','Country')}}
            {{Form::select('country_id', Country::getCountryArray() , $user->country_id, array('class' => 'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('password','Password')}}
            {{Form::password('password',array('class' => 'form-control', 'autocomplete' => 'off'))}}
        </div>
        <div class="form-group">
            {{Form::label('password_confirmation','Password Confirm')}}
            {{Form::password('password_confirmation',array('class' => 'form-control'))}}
        </div>
        {{Form::submit((Auth::check()?'Update':'Register'), array('class' => 'btn btn-primary'))}}
        {{ Form::close() }}
    </div>
</div>
<script src="assets/js/jquery.ui.widget.js"></script>
<script src="assets/js/jquery.iframe-transport.js"></script>
<script src="assets/js/jquery.fileupload.js"></script>
<script>
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            if (data.result.image_name) {
                $('#profile_image').attr("src", "assets/img/" + data.result.image_name);
                $('#image_hidden').val(data.result.image_name);
                $("#file_error").text('');
            }
            if (data.result.error) {
                $("#file_error").text(data.result.msg);
            }
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .bar').css(
                    'width',
                    progress + '%'
                    );
        }
    });
});
$(document).ready(function () {
    console.log($('#image_hidden').val());
    if ($('#image_hidden').val() != '') {
        $('#profile_image').attr("src", "assets/img/" + $('#image_hidden').val());
    }
});
</script>
