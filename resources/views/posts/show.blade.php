@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div>
                            <span>{{ $post->title }}</span>
                        </div>
                        <div class="badge" style="background-color: gray;">
                            <span>{{ $post->created_at->diffForHumans() }}</span>
                            <span> by </span>
                            <span>{{ $post->user->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <img class="pull-left" style="padding-right: 15px;" src="/uploads/images/{{ $post->image }}">
                    {{ $post->content }}
                </div>
                <div class="panel-footer clearfix" style="background-color: white">
                    @if($post->user_id == Auth::id())
                        <form action="/posts/{{ $post->id }}" method="POST" class="pull-right" style="margin-left: 25px">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a class="pull-right" href="/posts/{{ $post->id }}/edit">
                            <button class="btn btn-success btn-sm">Edit</button>
                        </a>
                    @endif
                    <a target="_blank" class="pull-right" href="{{ url('/posts/' . $post->id . '/pdf')}}">
                        <button class="btn btn-success btn-sm" style="margin-right: 10px" >Export</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection