@extends('layout.default')
@section('title','Show details')

@section('content')
<h1>{{$post->title}}</h1>
<img src="{{URL::asset('images/'.$post->image)}}" alt="">
<p>{{$post->content}}</p>
@endsection