@extends('layout.default')
@section('title','Home')

@section('content')

    <h1>Welcome to {{$name}}</h1>

    {{--this is going to be a comment--}}
  @if($login)
  <p>Welcome to admin dashboard</p>
  @else
 <p>you need to be logged in to access the dashboard</p>
 @endif

 @foreach($roots as $root)
 <p>The square of {{$root}} is {{$root*$root}}</p>
 @endforeach

@php 
for($i = 0; $i<=20; $i++ )
{
    if($i%2 == 0)
    echo $i."<br>";
}
@endphp

{{date('D M, Y')}}
<p>{{number_format(2500.84393,2)}}</p>
@include('partials.newsletter')
 @endsection
