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

@foreach ($movies as $movie)
   <tr>
       <td>{{ $movie->id}}</td>
       <td>{{ $movie->Movie_Name }}</td>
       <td>{{ $movie->Movie_Director }}</td>
       <td>{{ $movie->Movie_Description }}</td>
       <td>{{ $movie->Movie_Image}}</td>
       <td>{{ $movie->Movie_Link }}</td>  
       <td>
         <a href='deleteo/{{ $movie->id }}'>Delete</a>    
       </td>  
   </tr>
@endforeach

</table>

<link rel="stylesheet" href="{{asset('styles/adminblog.css')}}">
@endsection