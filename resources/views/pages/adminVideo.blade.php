@extends('layouts.appDash')
@section('content')


<table class="table-striped">
  <tr>
   <th>ID</th>
    <th>Title</th>
      <th>Image</th>
    <th>Link</th>
    <th>Modify</th>
  <tr>

@foreach ($videos as $post)
   <tr>
       <td>{{ $post->id}}</td>
       <td>{{ $post->Video_Name }}</td>
       <td>{{ $post->Video_Image }}</td>
       <td>{{ $post->Video_Link }}</td>  
       <td>
         <a href='deletev/{{ $post->id }}'>Delete</a>    
       </td>  
   </tr>
@endforeach

</table>

<link rel="stylesheet" href="{{asset('styles/adminblog.css')}}">
@endsection