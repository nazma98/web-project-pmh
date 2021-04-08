@extends('layouts.master')
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
                <p>Singer:Jesleen Royal Music Director:Amit Trivedi</p>

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
                <h6>Let It Go</h6>
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
                <h6>Fight Song</h6>
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
                <h6>Invisible</h6>
                <p>Single Name & Music Director</p>
                <audio controls>
                    <source src="audio/Letitgo.mp3">
                </audio>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
    </div>

</div>
     @endsection

   </body>             
   