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
    <form method="POST" action="{{url('/svideo')}}" enctype="multipart/form-data">
        @csrf
    	<div class="form-group">
    		<label>Video Name</label>
    		<input type="text" name="Video_Name" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Video Image</label>
    		<input type="file" name="Video_Image" class="form-control"/> 
    	</div>
    	<div class="form-group">
    		<label>Link</label>
    		<input type="text" name="Video_Link" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Upload" />
        <a class="btn btn-danger" href="/svideo">Cancel</a>
    </form>
              
  </div>
                </div><hr>
                 
    </div>
    

</div>

   </body>
  @endsection
   