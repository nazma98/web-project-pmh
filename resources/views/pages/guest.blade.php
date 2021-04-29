
@extends('layouts.appGuest')
@section('content')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Mntserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('styles/stylehome.css')}}">



  <body>
        <div class="music-header">
            <div class="title">
                <marquee><h1>Follow Your Dreams</h1></marquee>
            </div>
    </div>
    


    <div class="Home-container" id="Home">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-9 py-5 text-black">
              <h2>Preserve Mental Health</h2>
              <p> A smile can change everything</p>
              <p> You are the creator of you own source of happainess</p>
            </div>
      
            <div class="col-md-3 mb-4">
              <img src="{{asset('images\homeicon.png')}}" width="200" height="200" class="img-fuild rounded-circle border border-light">
            </div>
          </div>
        </div>
      </div>


<!-- Container (About Section) -->
<div id="about" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-md-8 py-5 text-black">
      <h2>Our Goal</h2><br>
      <h4>Our goal is to restore your mental health and motivate you to do what you want and like. Everyone has a hobby. Someone like to do gardening when he gets bore or reading or excercises to be fit or research or anything in the world.</h4><br>
      <h4>We are here to be with you all the time you need.If you want to read books, news, blogs go to the reading section. If you want to have music, movies recommendation go to the entertainment section . If you admire the nature have a visit on our nature sector where you can find astronomy related topics, beautiful natural pictures. We the 21st generation get depressed easily by our surroundings. Why not let those go and give some time to us? Time to ouur family? Hey! You can also have some cooking tips to do with your family or alone. This is your life so enjoy it!</h4>
    </div>
    <div class="col-md-4 mb-4">
      <img src="{{asset('images\Ourgoal.png')}}" alt="" width="450" height="420">
    </div>
  </div>
</div>

<div class="container-fluid bg2-grey">
  <div class="row">
    <div class="col-sm-7">
        <video width="640" height="360" controls class="vid" >
            <source src="{{asset('videos\Weataglance.mp4')}}" type="video/mp4">
          </video>
      </div>
      <div class="col-sm-5">
        <h2>We at a glance</h2><br>
        <h4><strong>MISSION:</strong> We are here for your with some interesting things. Music, movies, drama are here to 
            give you pleasure. Astronomy is here to explore your ideas. See the beauties of nature
            and you have to love the world. Be with your parents and give them daily tips make some 
            crafts and have knowledge about what to do primary things when you are away from doctor
        .</h4><br>
        <h4><strong>VISION:</strong> Live on your own dream , read poem, newspaper and enhance your knowledge. We are here only
            for you.</h4>
      </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center bg-grey">
  <h2>Explore Us</h2>
  <h4>What we provide</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-music logo-small"></span>
      <h4>ENTERTAINMENT</h4>
      <p>You can hear music, Watch video, dance etc</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo-small"></span>
      <h4>NATURE</h4>
      <p>Learn about astronomy, explore other sides of nature.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tint logo-small"></span>
      <h4>DONATION</h4>
      <p>You can donate to others, also you can join as a volunteer</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>COUNSELING</h4>
      <p>You can chat with us and have couseling about your problem</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h4>READING</h4>
      <p>Read news, blogs, poem to calm you down.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4>DAILY HACKS</h4>
      <p>Find amazing craft ideas and home remedies idea</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg2-grey">
  
  <h2>Quotes From Our Team</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, architecto praesentium dolore laborum atque ex molestiae quae eos suscipit provident!"<br><span>Nazma Sarkar</span></h4>
      </div>
      <div class="item">
        <h4>"Always Keep Smiling."<br><span>Rubaiya Reza Sohana</span></h4>
      </div>
      <div class="item">
        <h4>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, necessitatibus minus?"<br><span>Fariha Promi</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
@endsection
