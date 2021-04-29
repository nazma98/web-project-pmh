@extends('layouts.appUser')
@section('content')
<link rel="stylesheet" href="styles/stylestorytelling.css">
<body>
    <div class="box">
            <h1>Welcome To Share Board</h1>
         <a class="btn btn-primary text-center" href="/sharepost">Share Now</a>
    </div>
     @foreach($shares as $post)
    <div class="box">
        <div class="well">
            <h2><strong>Title:</strong>{{ $post->title }}</h2>
            <hr/>
            <h3><strong>Topic:</strong>{{ $post->topic }}</h3>
            <hr/>
			<p><strong>Date:</strong>{{ $post->created_at }}</p>
			<hr/>
			<h3><strong>Post:</strong><br></h3><p>{{ $post->body }}</p>
            <br>
            <a class="btn btn-primary" href="{{ $post->link }}" target="_blank"><p>Go To Website</p></a>
            <br> 
        </div>
		<br>
    </div>
   @endforeach
    
</body>
@endsection