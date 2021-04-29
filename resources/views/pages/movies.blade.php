@extends('layouts.appUser')
@section('content')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
       <!-- <link rel="stylesheet" href="styles/style.css">-->
        <link rel="stylesheet" href="styles/styleMovies.css">
<body>

<div class="movie-container">
    <div class="movie-header">
            <div class="title">
                <p><a href="https://en.wikipedia.org/wiki/The_Movie">Movie</a></p>
            </div>
     </div>
    <div class="movie-playlist">
        <div class="movie-menu text-center">
            <div class="menu">
                <ul>
                    <li><a href="https://www.imdb.com/list/ls051088602/">English Motivational Movies</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/List_of_Academy_Award-winning_films">List of Academy-Award Winning Movies</a></li>
                    <li><a href="https://www.bing.com/search?q=Bangla+best+movies&qs=n&form=QBRE&sp=-1&pq=bangla+best+movies&sc=1-18&sk=&cvid=50849FC560BD4BD497483831F2E101B4">Bangla Best Movies</a></li>
                    <li><a href="https://www.bing.com/search?q=korean+motivation+movie&qs=n&form=QBRE&sp=-1&pq=ko+motivation+movie&sc=0-19&sk=&cvid=9159BCFB1B5445A58702E04FC65A3BB2">Korean Motivational Songs</a></li>
                    <li><a href="https://www.filmykeeday.com/50-best-inspirational-and-motivational-hindi-movies-bollywood/">Hindi Motivational Songs</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="movie-box">

                    <div class="box2">
                    <h1>Why do we watch movies?</h1>
                    <p>
        Movie is a way of telling stories or share experience.We all agree movies allow us to escape and there’s value in that but it’s more than simple escapism. Movies take us to places we’ve never been and inside the skin of people quite different from ourselves. They offer us a window onto the wider world, broadening our perspective and opening our eyes to new wonders.
                    </p>
              </div>
                 <div class="box2">
                    <h1>Movie Resourses</h1>
                    <p>
                     Here we are presenting some resources,by using these resourses you will get about idea about some good movies.You will able to decide which movie should you watch.
                     <br>
                        <br>
                        
                        <a class="btn btn-success text-center" href="                        https://www.elle.com/uk/life-and-culture/culture/news/a33440/best-happy-films-movies-list/">List Of Movies Which Will Make You Happy</a>
                        <a class="btn btn-success text-center" href="https://blog.runrun.it/en/motivational-movies/">Motivational Movies on Leadership</a>
                        <a class="btn btn-success text-center" href="https://leverageedu.com/blog/motivational-movies-for-students/">Motivational Movies For Students</a>
                        <a class="btn btn-success text-center" href="https://www.imdb.com/">Overall Information About Movies-IMDb</a>

                    </p>
                      </div><hr>
                <div class="box2">
            <h1>Search Movie</h1>
<form class="example" method="get" action="{{url('/searchmovie')}}">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
        </div><hr>

            @foreach($movies as $movie)
                      <div class="movie-info">
                <div class="movie-img"> 
                    <img src="storage/{{ $movie->Movie_Image }}">
            </div>      
            <div class="movie-name">
                <h6>{{ $movie->Movie_Name }}</h6>
                <p>Director:{{ $movie->Movie_Director }}</p>
                <p>Movie Concept:{{ $movie->Movie_Description }}</p>
                <a href="{{ $movie->Movie_Link }}" target="_blank"><button>Go To Website</button></a>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
        @endforeach
                                     </div><hr>


                    <div class="box2">
                    <h1>Movie Resourses</h1>
                    <p>
                    Do you want to add your suggested movie in this list?Please add this.<br>
                    Just click the below link to upload movie suggestion.<br>
                       
                     <br>

                        <a class="btn btn-primary text-center" href="/uploadMovie">Give Movie Suggestion     </a>
                        
                    </p>
                </div><hr>
        


    </div>
   

   </body>    
  @endsection
              
   