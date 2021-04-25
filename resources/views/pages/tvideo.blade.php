@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="tvideo.css">
</head>
<body>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images\vid1.png" class="d-block w-100" alt="Vid1">
            <div class="carousel-caption d-none d-md-block">
              <h2>Videos</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, unde?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images\vid2.png" class="d-block w-100" alt="Vid2">
            <div class="carousel-caption d-none d-md-block">
                <h2>Videos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, unde?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images\vid3.png" class="d-block w-100" alt="Vid3">
            <div class="carousel-caption d-none d-md-block">
                <h2>Videos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, unde?</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!--Container-->
      <div class="Home-container" id="Home">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8 py-5 text-black">
              <h1>Find Amazing & Popular Videos</h1>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ab.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolore nesciunt omnis laboriosam nobis sunt officia voluptate accusamus nulla similique?</p>
            
            </div>
      
            
          </div>
        </div>
      </div>
<!--Technonlogy video-->
      <section id="tech-vid">
        <div class="container series">
        <h3>Popular Tech Videos</h3>
        <div class="row">
        <div class="col-md-4">
        <div class="row">
        <div class="col-6"><img src="images\t1.webp" alt="" width="120px" height="120px">
            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=7aNKtRt-gQ8" role="button">Click Here</a>
        </div>
        <div class="col-6"><img src="images\t2.webp" alt="" width="120px" height="120px">
            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=7aNKtRt-gQ8" role="button">Click Here</a></div>
        </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-6"><img src="images\t3.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
                <div class="col-6"><img src="images\t4.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-6"><img src="images\t5.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
                <div class="col-6"><img src="images\t6.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
                </div>
        </div>
        </div>
        </div>
              </section>
      <!--Craft video-->
      <section id="craft-vid">
        <div class="container series">
        <h3>Popular Craft Videos</h3>
        <div class="row">
        <div class="col-md-4">
        <div class="row">
        <div class="col-6"><img src="images\c1.webp" alt="" width="120px" height="120px">
            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a>
        </div>
        <div class="col-6"><img src="images\c2.webp" alt="" width="120px" height="120px">
            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
        </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-6"><img src="images\c3.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
                <div class="col-6"><img src="images\c4.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-6"><img src="images\c5.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
                <div class="col-6"><img src="images\c6.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=0D5vZNYo12c" role="button">Click Here</a></div>
                </div>
        </div>
        </div>
        </div>
              </section>
              <!--Motivational video-->
              <section id="motvid">
                <div class="container series">
                <h3>Popular Motivational Videos</h3>
                <div class="row">
                <div class="col-md-4">
                <div class="row">
                <div class="col-6"><img src="images\m1.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=UrfpkvvRTns" role="button">Click Here</a>
                </div>
                <div class="col-6"><img src="images\m2.webp" alt="" width="120px" height="120px">
                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=UrfpkvvRTns" role="button">Click Here</a></div>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6"><img src="images\m3.webp" alt="" width="120px" height="120px">
                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=UrfpkvvRTns" role="button">Click Here</a></div>
                        <div class="col-6"><img src="images\m4.webp" alt="" width="120px" height="120px">
                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=UrfpkvvRTns" role="button">Click Here</a></div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6"><img src="images\m5.webp" alt="" width="120px" height="120px">
                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=UrfpkvvRTns" role="button">Click Here</a></div>
                        <div class="col-6"><img src="images\m6.webp" alt="" width="120px" height="120px">
                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=UrfpkvvRTns" role="button">Click Here</a></div>
                        </div>
                </div>
                </div>
                </div>
                      </section>

                      <!--cooking videos-->
                      <section id="cookvid">
                        <div class="container series">
                        <h3>Popular Cooking Videos</h3>
                        <div class="row">
                        <div class="col-md-4">
                        <div class="row">
                        <div class="col-6"><img src="images\f1.webp" alt="" width="120px" height="120px">
                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=4uzlWhX9GRg" role="button">Click Here</a>
                        </div>
                        <div class="col-6"><img src="images\f2.webp" alt="" width="120px" height="120px">
                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=4uzlWhX9GRg" role="button">Click Here</a></div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-6"><img src="images\f3.webp" alt="" width="120px" height="120px">
                                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=4uzlWhX9GRg" role="button">Click Here</a></div>
                                <div class="col-6"><img src="images\f4.webp" alt="" width="120px" height="120px">
                                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=4uzlWhX9GRg" role="button">Click Here</a></div>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-6"><img src="images\f5.webp" alt="" width="120px" height="120px">
                                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=4uzlWhX9GRg" role="button">Click Here</a></div>
                                <div class="col-6"><img src="images\f6.webp" alt="" width="120px" height="120px">
                                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=4uzlWhX9GRg" role="button">Click Here</a></div>
                                </div>
                        </div>
                        </div>
                        </div>
                              </section><!-- Skill Learn-->
                              <section id="learnskill-vid">
                                <div class="container series">
                                <h3>Popular Skill Learning Videos</h3>
                                <div class="row">
                                <div class="col-md-4">
                                <div class="row">
                                <div class="col-6"><img src="images\s1.webp" alt="" width="120px" height="120px">
                                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=6drUzoeHZkg" role="button">Click Here</a>
                                </div>
                                <div class="col-6"><img src="images\s2.webp" alt="" width="120px" height="120px">
                                    <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=6drUzoeHZkg" role="button">Click Here</a></div>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-6"><img src="images\s3.webp" alt="" width="120px" height="120px">
                                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=6drUzoeHZkg" role="button">Click Here</a></div>
                                        <div class="col-6"><img src="images\s4.webp" alt="" width="120px" height="120px">
                                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=6drUzoeHZkg" role="button">Click Here</a></div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-6"><img src="images\s5.webp" alt="" width="120px" height="120px">
                                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=6drUzoeHZkg" role="button">Click Here</a></div>
                                        <div class="col-6"><img src="images\s6.webp" alt="" width="120px" height="120px">
                                            <a class="btn btn-outline-link btn-sm" href="https://www.youtube.com/watch?v=6drUzoeHZkg" role="button">Click Here</a></div>
                                        </div>
                                </div>
                                </div>
                                </div>
                                      </section>  

</body>
</html>
@endsection