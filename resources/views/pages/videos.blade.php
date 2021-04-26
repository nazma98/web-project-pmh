@extends('layouts.master')
@section('content')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
       <!-- <link rel="stylesheet" href="styles/style.css">-->
        <link rel="stylesheet" href="styles/stylevideo.css">
<body>

<div class="movie-container">
    <div class="movie-header">
            <div class="title">
                <p><a href="https://en.wikipedia.org/wiki/The_Video">Video</a></p>
            </div>
     </div>
    <div class="movie-playlist">
        <div class="movie-menu text-center">
            <div class="menu">
                <ul>
                    <li><a href="https://www.youtube.com/results?search_query=self+love+motivational+video">Self Love Videos</a></li>
                    <li><a href="https://www.youtube.com/results?search_query=English+motivational+video">English Motivational Videos</a></li>
                    <li><a href="https://www.youtube.com/results?search_query=Bangla+motivational%2F+Inspiringvideo">Bangla Motivational Videos</a></li>
                    <li><a href="https://www.youtube.com/results?search_query=hindi+motivational+video">Hindi Motivational Videos</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="movie-box">

                         <div class="box2">
                    <h1>Motivational Videos</h1>
                    <p>
                    The main purpose of a motivational video is to inspire Viewers . These videos are not meant to train employees or deliver information. Instead, they are carefully designed to inspire listeners to develop a sense of greater loyalty to the organization & renew their commitment to excellence.<br><br>
                        
                         <strong>Benefits of Motivational videos</strong><br>
1. The main purpose of a motivational video is to inspire Viewers . These videos are not meant to train<br> employees or deliver information. Instead, they are carefully designed to inspire listeners to develop a sense of greater loyalty to the organization & renew their commitment to excellence. Such videos can instill a feeling of pride and personal dedication, and infuse optimism and energy in all employees.<br> 
2. Employees learn undiscovered skills that can help them deal with obstacles.<br> 
3. Employees are encouraged to think about different ways to face challenges.<br> 
4. Motivational videos delivers important message to the Viewer.<br> 
5. Motivational videos help employees building teamwork skills.<br> 
6. Employees are encouraged to make the best use of their talent.<br> 
7. Motivational videos can encourage employees to develop new approaches to solve a problem.<br> 
8. Motivational videos enable employees to see boundless possibilities.<br> 
9. Employees will learn to set and achieve goals.<br>
                        <br>
                        <a href="https://www.slideshare.net/cinimage/benefits-of-motivational-videos">Content Source</a>
                    </p>
                </div><hr>
                 <div class="box2">
                    <h1>MOtivational Video Resourses</h1>
                    <p>
                     Here we are presenting some resources,by using these resourses you will get about idea about some good videos.You will able to decide which video  should you watch.<br>
                     <br>
                        <a class="btn btn-primary text-center" href="https://www.oberlo.com/blog/23-inspirational-videos-will-completely-blow-away">Inspirational Videos</a>
                                               <a class="btn btn-primary text-center" href="https://www.teachthought.com/pedagogy/5-videos-to-motivate-students/">Motivational Videos For Students</a>
                                               <a class="btn btn-primary text-center" href="https://www.oberlo.com/blog/23-inspirational-videos-will-completely-blow-away">Motivational Videos For Employee</a>
                                               <a class="btn btn-primary text-center" href="https://www.bing.com/videos/search?q=Motivation+for+Women&FORM=RESTAB">Motivation For Women</a>
                                               <a class="btn btn-primary text-center" href="https://www.bing.com/videos/search?q=Religious+video+for+motivation&qpvt=Religious+video+for+motivation&FORM=VDRE">Religious Videos For Motivation</a>
                    </p>
                </div><hr>
             
             @foreach($videos as $video)
                      <div class="movie-info">
                <div class="movie-img"> 
                    <img src="storage/{{ $video->Video_Image }}">
            </div>      
            <div class="movie-name">
                <h6>{{ $video->Video_Name }}</h6>
                <br>
                <br>
                <a href="{{ $video->Video_Link }}" target="_blank"><button>Go To Video Source</button></a>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
        @endforeach
        
        
        
        
        
                    <div class="box2">
                    <h1>Motivational Video Resourses</h1>
                    <p>
                    Do you want to add your video in this playlist?Please add this.If you want to upload other video in this playlist feel free to do that.<br>
                    Just click the below link to upload video link here by hosting that video somewhere else amd make that video there public to view.<br>
                       
                     <br>

                        <a class="btn btn-primary text-center" href="/uploadVideo">Upload Video Link</a>
                        
                    </p>
                </div><hr>
        


        

    </div>

</div>
   

   </body>    
  @endsection
              
   