@extends('layouts.master')

@section('content')

<div class="music-container">
    <div class="music-header">
        <i class="fa fa-angle-left"></i>
            <div class="title">
                <p>Music</p>
            </div>
        <i class="fa fa-search"></i>
    </div>
    <div class="music-playlist">
        <div class="music-menu text-center">
            <div class="menu">
                <ul>
                    <li><a href="#">Songs</a></li>
                    <li><a href="#">Albums</a></li>
                    <li><a href="#">Artists</a></li>
                    <li><a href="#">Genres</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="music-box">
        <div class="music-info">
            <div class="music-img">
                <img src="images/Aklacholore.jpg"> 
            </div>

            <div class="music-name">
                <h6>Akla Cholo Re</h6>
                <p>Singer:Jesleen Royal & Music Director:Amit Trivedi</p>
                <audio controls>
                    <source src="audio/Letitgo.mp3">
                </audio>
            </div>

            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
        <div class="music-info">
            <div class="music-img">
                <img src="images/Loveyouzindagi.jpg"> 
            </div>
            <div class="music-name">
                <h6>Love You Zindagi</h6>
                <p>SInger:Jesleen Royal Music Director:Amit Trivedi</p>

                <audio controls>
                    <source src="audio/Letitgo.mp3">
                </audio>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
        <div class="music-info">
            <div class="music-img">
                <img src="images/Letitgo.jpg"> 
            </div>
            <div class="music-name">
                <h6>Single Song Title</h6>
                    <p>Single Name & Music Director</p>
                    <audio controls>
                        <source src="audio/Letitgo.mp3">
                    </audio>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
        <div class="music-info">
            <div class="music-img">
                <img src="images/Fightsong.jpg"> 
            </div>
            <div class="music-name">
                <h6>Single Song Title</h6>
                <p>Single Name & Music Director</p>
                <audio controls>
                    <source src="audio/Letitgo.mp3">
                </audio>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
        <div class="music-info">
            <div class="music-img">
                <img src="images/Invisible.jpg"> 
            </div>
            <div class="music-name">
                <h6>Single Song Title</h6>
                <p>Single Name & Music Director</p>
                <audio controls>
                    <source src="audio/Letitgo.mp3">
                </audio>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
    </div>

</div>
           <!-- <div class="music-play">
              <div class="play-image">
                  <img src="Images/Music/Moana.jpg">
                </div>
                <div class="play-controls">
                    <div class="controls">
                        <div class="song-name">
                            <h5>How Far I Will Go</h5>
                            <p>Alessia Cara</p>
                        </div>
                        <div class="play-icon">
                            <i class="fa fa-step-backward"></i>
                            <i class="fa fa-play"></i>
                            <i class="fa fa-step-forward"></i>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
       <!-- <link rel="stylesheet" href="styles/style.css">-->
        <link rel="stylesheet" href="styles/styleMusic.css">    
@endsection