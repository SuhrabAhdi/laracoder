@extends('layout.default')
@section('title','Edit post')

@section('content')
<h1>Edit post</h1>

<form action="{{route('post.update',$post)}}" method="post" enctype='multipart/form-data'>
@csrf
@method('PUT')
<p>Title:</p>
<input  type="text" name="title" id=""  value="{{$post->title}}"><br>
<small style='color:brown'>{{$errors->first('title')}}</small>
<p>Content:</p><br>
<textarea name="content" id="" cols="30" rows="10">
{{$post->content}}
</textarea><br><br>
<small style='color:brown'>{{$errors->first('content')}}</small><br>
<img src="{{URL::asset('images/'.$post->image)}}" alt="" width="150" height="150"><br>
<input type="file" name="image" id=""><br><br>
<small style='color:brown'>{{$errors->first('image')}}</small><br><br>
<button type="submit">Update</button>
</form>

@endsection