@extends('layouts.master')
@section('content')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
       <!-- <link rel="stylesheet" href="styles/style.css">-->
        <link rel="stylesheet" href="styles/styleMusic.css">

<body>
<div class="music-container">
    <div class="music-box">
        <div class="box2">
                       <div style="color:white">{{ @$message }}</div>
          <div class="panel-body">
    <form method="POST" action="{{url('/music')}}" enctype="multipart/form-data">
        @csrf
    	<div class="form-group">
    		<label>Music Name</label>
    		<input type="text" name="Music_Name" class="form-control" />
    	</div>
            	<div class="form-group">
    		<label>Singer Name</label>
    		<input type="text" name="Music_Singer" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Music Image</label>
    		<input type="file" name="Music_Image" class="form-control"/> 
    	</div>
    	<div class="form-group">
    		<label>Audio File</label>
    		<input type="file" name="Music_Audio_File" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Upload" />
        <a class="btn btn-danger" href="/seepost">Cancel</a>
    </form>
              
  </div>
                </div><hr>
                 
    </div>
    

</div>

   </body>
  @endsection
   