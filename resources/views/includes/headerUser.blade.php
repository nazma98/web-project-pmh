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


          <li>  <a href="/admin/dashboard" role="button" aria-haspopup="true" aria-expanded="false" >
                                    Dashboard
                </a>
        </li>
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

<link rel="stylesheet" href="{{asset('styles/dash.css')}}" >
