@extends('layouts.appUser')
@section('content')
<link rel="stylesheet" href="styles/stylestorytelling.css">
<body>
    <div class="box">
            <h1>Welcome To Share Board</h1>
        <p>Write Down In The Below Section</p>
        <p>See The Post By Clicking The Button</p><a class="btn btn-primary" href="/seepost">See The Post On Share Board</a>
         
    </div>
    <div class="box">
        <div style="color:white">{{ @$message }}</div>
          <div class="panel-body">
    <form method="POST" action="{{url('/seepost')}}">
        @csrf
    	<div class="form-group">
    		<label>Share Title</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
            	<div class="form-group">
    		<label>Topic Name</label>
    		<input type="text" name="topic" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Body</label>
    		<textarea rows="6"  name="body" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<label>Link</label>
    		<input type="text" name="link" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="/seepost">Cancel</a>
    </form>
              
  </div>
    </div>
   
    
</body>
@endsection