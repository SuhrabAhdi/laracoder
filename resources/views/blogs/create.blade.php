@extends('layout.default')
@section('title','create post')

@section('content')
<h1>Create a new post</h1>
<style>
.error_alert{
    input{
        border:1px solid red;
    }
}
</style>
@include('partials.errors')
<form action="{{route('post.store')}}" method="post" enctype='multipart/form-data'>
@csrf
<p>Title:</p>
<input  type="text" name="title" id="" style="@error('title') border:1px solid red @enderror" value="{{old('title')}}"><br>
<small style='color:brown'>{{$errors->first('title')}}</small>
<p>Email:</p>
<input type="text" name="email" id="" style="@error('email') border:1px solid red @enderror" value="{{old('email')}}"><br>
<small style='color:brown'>{{$errors->first('email')}}</small>
<p>password:</p>
<input type="password" name="password" id=""><br>
<small style='color:brown'>{{$errors->first('password')}}</small>
<p>Confirm your password:</p>
<input type="password" name="password_confirmation" id=""><br>
<small style='color:brown'>{{$errors->first('password_confirmation')}}</small>
<p>Content:</p><br>
<textarea name="content" id="" cols="30" rows="10"></textarea><br><br>
<small style='color:brown'>{{$errors->first('content')}}</small>
<input type="file" name="image" id=""><br><br>
<small style='color:brown'>{{$errors->first('image')}}</small><br><br>
<button type="submit">Submit</button>
</form>

@endsection