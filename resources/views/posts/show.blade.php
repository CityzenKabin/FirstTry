@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
<div class="rounded" style="border:2px solid #73AD21; padding: 20px;">
    <h1>{{$post->title}}</h1>
    <img style="width: 100%" height="400px" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr><small>Written on {{$post->created_at}}by {{$post->user->name}}</small>
    <hr>
</div>
    @if(!Auth::guest())
    @if(Auth::user()->id==$post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger' ])}}
    {!! Form::close() !!}
    @endif
    @endif
    <div>
        <h1>i am kabin</h1>
    </div>
@endsection