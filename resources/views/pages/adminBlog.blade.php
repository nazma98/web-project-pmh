@extends('layouts.appDash')
@section('content')


<table class="table-striped">
  <tr>
   <th>ID</th>
    <th>Title</th>
    <th>Topic</th>
    <th>Content</th>
    <th>Link</th>
    <th>Modify</th>
 
  <tr>

@foreach ($shares as $post)
   <tr>
       <td>{{ $post->id}}</td>
       <td>{{ $post->title }}</td>
       <td>{{ $post->topic }}</td>
       <td>{{ $post->body }}</td>
       <td>{{ $post->link }}</td>  
       <td>
         <a href='deleteb/{{ $post->id }}'>Delete</a>    
       </td>  
   </tr>
@endforeach

</table>

<link rel="stylesheet" href="{{asset('styles/adminblog.css')}}">
@endsection