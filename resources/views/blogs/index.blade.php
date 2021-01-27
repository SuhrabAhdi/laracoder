@extends('layout.default')
@section('title','Post lists')

@section('content')
@if(Session::has('status'))
<h3 style="background:green; color:white; padding:8px">{{Session::get('status')}}</h3>
@endif
<h1 >List of posts</h1>
<a href="{{route('post.create')}}">Create a new post</a>
<ul>
@foreach($posts as $post)
<li>
<h3>{{$post->title}}</h3>
<img src="images/{{$post->image}}" alt="">
<p>{{Str::limit($post->content,150)}}
<a href="{{route('post.show',$post)}}">Learn more</a>
</p>

<a href="{{route('post.edit',$post)}}">Edit</a><br>
<form action="{{route('post.destroy',$post)}}" method="post">
@csrf
@method('DELETE')
<button style="background:brown; padding:8px; color:white" type='submit'>Delete</button>
</form>

</li>
@endforeach
</ul>
{{$posts->links()}}



@endsection