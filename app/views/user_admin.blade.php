@extends('layout')
@section('body')
<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <h2>User Admin</h2>
    </div>
    <div class="row head">
        <div class="col-md-12" style="margin-left: 20px">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>#</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>@if ($user->status == 1) <button type="button" class="btn btn-danger" data-id="{{{$user->id}}}">Disable</button>
                            @else <button type="button" class="btn btn-success" data-id="{{{$user->id}}}">Enable</button>
                            @endif
                        </td>
                        <td> {{{$user->id}}}</td>
                        <td>{{{$user->username}}}</td>
                        <td> {{{$user->first_name}}}</td>
                        <td> {{{$user->last_name}}}</td>
                        <td> {{{$user->email}}}</td>
                        <td> {{{$user->phone_number}}}</td>
                        <td> {{{$user->address}}}</td>
                        <td> {{{$user->city}}}</td>
                        <td> {{{$user->country->country_name}}}</td>
                        <td> {{{$user->created_at}}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
    $(document).on("click", ".btn", function(){
        var clicked_btn = $(this);
        $.ajax({
            url: "toggle/"+clicked_btn.data("id"),
            cache: false
            })
            .done(function(result) {
                if(result === "Enable")  {
                    clicked_btn.removeClass("btn-danger");
                    clicked_btn.addClass("btn-success");
                }   else {
                    clicked_btn.addClass("btn-danger");
                    clicked_btn.removeClass("btn-success");
                }
                clicked_btn.html(result);
            });
            });
    });
</script>
@stop