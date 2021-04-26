@extends('layouts.master')
@section('content')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
       <!-- <link rel="stylesheet" href="styles/style.css">-->
        <link rel="stylesheet" href="styles/styleMusic.css">

<body>
<div class="music-container">
    <div class="music-box">
        <div class="box2">
          <div class="panel-body">
    <form method="POST" action="{{url('/movies')}}" enctype="multipart/form-data">
        @csrf
    	<div class="form-group">
    		<label>Movie Name</label>
    		<input type="text" name="Movie_Name" class="form-control" />
    	</div>
            	<div class="form-group">
    		<label>Movie Director</label>
    		<input type="text" name="Movie_Director" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Movie Image</label>
    		<input type="file" name="Movie_Image" class="form-control"/> 
    	</div>
        <div class="form-group">
    		<label>Description</label>
    		<textarea rows="6"  name="Movie_Description" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<label>Link</label>
    		<input type="text" name="Movie_Link" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" href="/movies" value="Upload" />
        <a class="btn btn-danger" href="/movies">Cancel</a>
    </form>
              
  </div>
                </div><hr>
                 
    </div>
    

</div>

   </body>
  @endsection
   