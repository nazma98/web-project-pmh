@extends('layouts.appDash')

@section('content')

<nav  class="style justify-content-center navbar bg-light">
{{Auth::user()->name}} ,
{{ __('You are logged in!') }}
</nav>

<link rel="stylesheet" href="{{asset('styles/indexAdmin.css')}}" >
@endsection
