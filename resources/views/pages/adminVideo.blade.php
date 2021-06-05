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

@foreach ($videos as $video)
   <tr>
       <td>{{ $video->id}}</td>
       <td>{{ $video->Video_Name }}</td>
       <td>{{ $video->Video_Image }}</td>
       <td>{{ $video->Video_Link }}</td>  
       <td>
         <a href='deletev/{{ $video->id }}'>Delete</a>    
       </td>  
   </tr>
@endforeach

</table>

<link rel="stylesheet" href="{{asset('styles/adminblog.css')}}">
@endsection