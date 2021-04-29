@extends('layouts.appUser')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firstaid</title>
    <link rel="stylesheet" href="styles/stylefirstaid.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
       <!--banner section-->
       <section id="banner">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="promo-title">Have the firstaid idea easily</p>
            <p>You can have amazing ideas of home remedies. You can also make an excellecnt firstaid kit to have everytime solution </p>
            
        </div>
        <div class="col-md-6 text-center">
            <img src="images\home.png" alt="Home"> 

        </div>
    </div>
</div>
<img src="images\wavehome.png" alt="Wave" class="bottom-img">
       </section>
       <!--What You will need-->
       <section id="need">
           <div class="container text-center">
               <h1 class="title">What will you need?</h1>
               <div class="row text-center">
                   <div class="col-md-4 firstaidkit">
                       <img src="images\firstaidkit.png" alt="Firstaid-kit" class="firstaidkit-img">
                       <h4>First Aid Kit</h4>
                       <p>The first thing you need for home remedies is preparing a first aid kit. This is so simple to make. If you keep by your own neccessity that will be awesome!! </p>
                   </div>
                    <div class="col-md-4 medicinebox">
                       <img src="images\medicinebox.png" alt="MedicineBox" class="medicine-img">
                       <h4>Medicine Box</h4>
                       <p>You will a need a medicine box with different and important medicine so that you have the first stage cure </p>
                   </div>
                   <div class="col-md-4 Knowledge">
                    <img src="images\knowledge.png" alt="Medical Knowledge" class="knowledge-img">
                    <h4>Basic Knowledge</h4>
                    <p>You will need basic knowledge about how to have a first aid or can do the remedies at home very easily </p>
                </div>
               </div>
           </div>
       </section>


 <!--How to make first aid kit-->      
<section id="first-aid-kit">
<div class="container">
    <h1 class="title text-center">How to make a first aid kit?</h1>
    <div class="row">
        <div class="col-md-6">
            <p class="kit-title">You have to keep:</p>
            <ul>
<li>Plasters in a variety of different sizes and shapes</li>
<li>Small, medium and large sterile gauze dressings</li>
<li>At least 2 sterile eye dressings</li>
<li>Triangular bandages</li>
<li>Crêpe rolled bandages</li>
<li>Safety pins</li>
<li>Disposable sterile gloves</li>
<li>Tweezers & scissors</li>
<li>Alcohol-free cleansing wipes</li>
<li>Sticky tape</li>
<li>Thermometer (preferably digital)</li>
<li>Skin rash cream, such as hydrocortisone or calendula</li>
<li>Cream or spray to relieve insect bites and stings</li>
<li>Antiseptic cream</li>
<li>Distilled water for cleaning wounds</li>
<li>Eye wash and eye bath</li>

                </ul>
        </div>
        <div class="col-md-6">
          <img src="images\kit.png" alt="" class="img-fluid" >  
        </div>
    </div>
</div>
</section>

<!--Medicine Box-->
<section id="Medicine-box">
    
    <div class="container">
        <h1 class="title text-center">What to keep in Medicine Box?</h1>
        <div class="row">
            <div class="col-md-6">
                <p class="keepinbox">You have to keep:</p>
                <ul>
    <li>Pain Killers</li>
    <li>Fexo or other cold medicines</li>
    <li>Ointment</li>
    <li>Savlon Cream </li>
    
                    </ul>
            </div>
            <div class="col-md-6">
              <img src="images\medicinebox.png" width="280px" height="140px" alt="" class="img-fluid">  
            </div>
        </div>
    </div>
</section>
</body>
</html>
@endsection