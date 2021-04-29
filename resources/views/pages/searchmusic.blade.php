@extends('layouts.appUser')
@section('content')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
       <!-- <link rel="stylesheet" href="styles/style.css">-->
        <link rel="stylesheet" href="styles/styleMusic.css">

<body>
<div class="music-container">
 
    <div class="music-header">
            <div class="title">
                <p><a href="https://en.wikipedia.org/wiki/The_Music">Music</a></p>
            </div>
    </div>
    <div class="music-playlist">
        <div class="music-menu text-center">
            <div class="menu">
                <ul>
                    <li><a href="https://www.youreducationportal.com/motivational-bengali-songs/">Bangla Motivational Songs</a></li>
                    <li><a href="https://www.developgoodhabits.com/motivational-songs/">English Motivational Songs</a></li>
                    <li><a href="https://www.popxo.com/2020/08/motivational-hindi-songs/">Hindi Motivational Songs</a></li>
                    <li><a href="https://siachenstudios.com/lists/10-best-sufi-songs-you-must-listen-pt-1/">Sufi Motivational Songs</a></li>
                </ul>
            </div>
        </div>
    </div>
           <div class="box2">
            <h1>Search Music</h1>
     <form class="example" method="GET" action="{{url('/searchmusic')}}">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
        </div><hr>
    
                @foreach($music as $music)
                      <div class="music-info">

                <div class="music-img"> 
                    <img src="storage/{{ $music->Music_Image }}">
            </div>      
            <div class="music-name">
                 <h6>{{ $music->Music_Name }}</h6>
                <p>Singer:{{ $music->Music_Singer }}</p>
                <audio controls>
                    <source src="storage/{{ $music->Music_Audio_File }}">
                </audio>
            </div>

            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
        @endforeach
                    <div class="box2">
                    <h1>Music Resourses</h1>
                    <p>
                    Do you want to add you song in this playlist?Please add this.If you want to upload other music in this playlist feel free to do that.<br>
                    Just click the below link to upload music.<br>
                       
                     <br>

                        <a class="btn btn-primary text-center" href="/uploadMusic">Upload Music     </a>
                        
                    </p>
                </div><hr>
        
    </div>
    

   </body>
  @endsection