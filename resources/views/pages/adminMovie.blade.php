@extends('layouts.appDash')
@section('content')


<table class="table-striped">
  <tr>
   <th>ID</th>
    <th>Title</th>
      <th>Director</th>
    <th>Content</th>
      <th>Image</th>
    <th>Link</th>
    <th>Modify</th>
  <tr>

@foreach ($movies as $post)
   <tr>
       <td>{{ $post->id}}</td>
       <td>{{ $post->Movie_Name }}</td>
       <td>{{ $post->Movie_Director }}</td>
       <td>{{ $post->Movie_Description }}</td>
       <td>{{ $post->Movie_Image}}</td>
       <td>{{ $post->Movie_Link }}</td>  
       <td>
         <a href='deleteo/{{ $post->id }}'>Delete</a>    
       </td>  
   </tr>
@endforeach

</table>

<link rel="stylesheet" href="{{asset('styles/adminblog.css')}}">
@endsection