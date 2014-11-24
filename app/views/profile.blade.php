@extends('layout')
@section('body')
<div class="container profile" id="profile_div" @if ($errors->all()) style="display: none;" @endif>
     <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 style="float: left">Welcome to your profile</h3>
            <button type="button" name="edit" id="btn-edit" class="btn btn-info edit-button" onclick="$('#edit_div').show(500);$('#profile_div').hide(500);">Edit</button>   
        </div>
        <div class="col-md-4 col-md-offset-4" >
            @if (Session::get('success')) <span class="success_msg">Profile  successfully updated!</span> @endif
        </div>
    </div>
     <div class="row">
     <div class="col-md-3 col-md-1">
         <image src="{{{$user->imagePath()}}}" class="profile_image">
    </div>
    <div class="col-md-4 col-md-offset-3">
        <div class="profile_row">
            <label>UserName</label> <span>{{{$user->username}}}</span>
        </div>
        <div class="profile_row">
            <label>Name</label> <span>{{{$user->first_name}}} {{{$user->last_name}}}</span>
        </div>
        <div class="profile_row">
            <label>Email</label> <span>{{{$user->email}}}</span>
        </div>
        <div class="profile_row">
            <label>Phone Number</label> <span>{{{$user->phone_number}}}</span>
        </div>
        <div class="profile_row">
            <label>Address</label> <span>{{{$user->address}}}</span>
        </div>
        <div class="profile_row">
            <label>City</label> <span>{{{$user->city}}}</span>
        </div>
        <div class="profile_row">
            <label>Country</label> <span>{{{$user->country->country_name}}}</span>
        </div>
    </div>
    </div>
</div>
<div id="edit_div" @if (!$errors->all())style="display: none;" @endif>
    @include('user_form')
</div>
@stop