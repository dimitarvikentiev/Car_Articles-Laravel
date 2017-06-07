@extends('layouts.app')

    <style type="text/css">
        .profile-img{
            max-width: 150px;
            border: 5px solid #fff;
            border-radius: 100%;
            box-shadow: 0 2px 2px rgba(0,0,0,0.3);
        }
    </style>

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}">
                    <h1>{{ $user->name }}</h1>
                    <h5>{{ $user->email }}</h5>

                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <label>Update profile image</label>
                        <input type="file" name="avatar" style="margin-left: 37%;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" style="margin-top: 10px">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection