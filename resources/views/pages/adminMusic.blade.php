@extends('layouts.appDash')
@section('content')


<table class="table-striped">
  <tr>
   <th>ID</th>
    <th>Music_Name</th>
    <th>Singer</th>
    <th>Image</th>
    <th>Audio</th>
    <th>Modify</th>
 
  <tr>

@foreach ($music as $item)
   <tr>
       <td>{{ $item->id}}</td>
       <td>{{ $item->Music_Name }}</td>
       <td>{{ $item->Music_Singer }}</td>
       <td>{{ $item->Music_Image }}</td>
       <td>{{ $item->Music_Audio_File }}</td>  
       <td>
         <a href='delete/{{ $item->id }}'>Delete</a>    
       </td>  
   </tr>
@endforeach

</table>

<link rel="stylesheet" href="{{asset('styles/adminblog.css')}}">
@endsection