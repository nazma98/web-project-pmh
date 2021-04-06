<!doctype html>
<html lang="en">
  <head>
    @include('includes.head')
    <style>
        .cont{
            width:100%;
        }
        </style>
	</head>
	<body>
<div class="cont">

<header class="cont">
    @include('includes.header')
</header>

<div id="main" class="cont">

    @yield('content')

</div>
 
    <footer class="cont">
        @include('includes.footer')
    </footer>

</div>
 

</body>
</html>