

<nav class="navbar navbar-expand-lg navbar-dark mynavbar sticky-top"> 
 
 <img src="{{URL::asset('/images/Logo1.png')}}" alt="Logo" width="75px" height="75px">
 <h6 class="cl" style="font-size:15px;"><whitespace> </whitespace>Burn your time <br>to refresh your mind</h6>
    <br>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
    <!-- <span class="navbar-toggler-icon"></span> -->
  <!-- </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
           <ul id="menu">
      <li class="nav-item active">
     
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#Entertainment">How To Motivate<span class="sr-only">(current)</span></a>
                  <ul>
          <li><a href="/music">Music For<br>Motivation</a></li>
          <li><a href="/movies">Movies For<br>Motivation</a></li>
          <li><a href="/svideo">Videos For<br>Motivation</a></li>
        <li><a href="/game">Games For<br>Motivation</a></li>
        </ul>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#Nature">Nature <span class="sr-only">(current)</span></a>
        <ul>
<li><a href="/astro">Astronomy</a></li>
<li><a href="/travelling">Travelling</a></li>


        </ul>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="/reading">Reading <span class="sr-only">(current)</span></a>
        <ul>
          
         
          <li><a href="/poems">Literature</a></li>
          <li><a href="/arts">Arts</a></li>
        </ul>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#Conversation">Conversation <span class="sr-only">(current)</span></a>
        <ul>
          <li><a href="/Story_telling">Share To<br>Inspire</a></li>
          <li><a href="/bot">Normal<br>Chat</a></li>
          
        </ul>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#Daily Hacks">Daily Hacks <span class="sr-only">(current)</span></a>
        <ul>
          <li><a href="/FirstAid">First Aid</a></li>
            <li><a href="/tvideo">Craft<br>Videos</a></li>
        </ul>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#Social Service">Social Service <span class="sr-only">(current)</span></a>
        <ul>
          <li><a href="/donation">Donation</a></li>
          <li><a href="/volunteering">Volunteer<br>Hiring</a></li>
            <li><a href="/counsiling">Counsiling</a></li>
        </ul>
      </li>
      
	 <li class="nav-item active">
        <a class="nav-link" href="#Account">Account <span class="sr-only">(current)</span></a>
        <ul>

        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


       <!--   <li>  <a href="/user/dashboard" role="button" aria-haspopup="true" aria-expanded="false" >
                                    Dashboard
                </a>
        </li> -->
          <li> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </li>
        @endguest
        </ul>
      </li>

     
    </ul>
      </ul>
    </div>
    

</nav>

