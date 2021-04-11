@extends('layouts.master')

@section('content')


    <body>
<h1>
Welcome to Chatbot Lucy
</h1>

    </body>
   
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            title:"Lucy",
            bubbleBackground: "#1f8c8c",
            mainColor: "#2abfbf",
            aboutText: "Powered by PMH",
            introMessage: "Hey it's Lucy. I'm here to help you with some basic query if you have any. I'm still a baby bot &#128118, learning everyday &#128516"        };
    </script>
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    @endsection