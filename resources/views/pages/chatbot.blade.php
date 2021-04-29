@extends('layouts.appUser')
@section('content')
<body>
    <div class="col">
        <div class="con">
            <h1 class="h">Chat with Lucy</h1> <hr>
    <p class="p">
        Lucy is a chatbot to assist you exploring the website as well as talk to you as a friend to reduce your mental stress and anxiety. <br> Also, she will provide you with some tips to stay calm. <br> As Lucy is a beginner, she is still learning manythings.
    </p>
    <p class="p">
        Initially, there are a few questions that Lucy can process or reply to. So bear with her &#128517
    </p>
    <p class="p">
        To chat with Lucy please navigate to the bottom-right message icon and you're good to go!
    </p>
        </div>
        
    </div>
</body>
   
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            title:"Lucy",
            bubbleBackground: "#1f8c8c",
            mainColor: "#2abfbf",
            aboutText: "Powered by Botman",
            introMessage: "Hey it's Lucy. I'm here to help you with some basic query if you have any. I'm still a baby bot &#128118, learning everyday &#128516"        };
    </script>
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   <link rel="stylesheet" href="styles/bot.css">
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    @endsection