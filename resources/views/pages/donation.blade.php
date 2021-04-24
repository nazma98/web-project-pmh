<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  @extends('layouts.master')
@section('content')
    <title>Donate Now</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles/styledonation.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images\blood.jpg" class="d-block w-100" alt="Blood">
            <div class="carousel-caption d-none d-md-block">
              <h2>Donate Blood</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, unde?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images\money.jpg" class="d-block w-100" alt="Money">
            <div class="carousel-caption d-none d-md-block">
                <h2>Donate Money</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, unde?</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images\cloth.jpg" class="d-block w-100" alt="Cloth">
            <div class="carousel-caption d-none d-md-block">
                <h2>Donate Stuffs</h2>
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

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>WHAT CAN YOU DONATE?</h3>
  <p><em>Donate to Save life</em></p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam maxime doloribus suscipit nemo accusamus, vitae aperiam consequuntur aliquam? Est sed nostrum optio impedit, molestiae voluptatem a obcaecati laudantium autem minima?Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, incidunt maxime? Pariatur quia neque dignissimos perspiciatis voluptate! Unde, incidunt nobis.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Donate Blood</strong></p><br>
      <a href="#blood" data-toggle="collapse">
        <img src="images\blood.png" class="img-circle person" alt="Random Name" width="55px" height="55px">
      </a>
     
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Donate Money</strong></p><br>
      <a href="#money" data-toggle="collapse">
        <img src="images\money.png" class="img-circle person" alt="Random Name" width="55px" height="55px">
      </a>
      
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Donate Stuffs</strong></p><br>
      <a href="#cloth" data-toggle="collapse">
        <img src="images\clothes.png" class="img-circle person" alt="Random Name" width="55px" height="55px">
      </a>
      
    </div>
  </div>
</div>

<section id="blood">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <p class="promo-title">Donate Blood to save lives</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quis dolorem cumque! Esse maiores non commodi suscipit ab placeat id quo eligendi quos corrupti atque magnam tenetur ullam quam nam libero debitis labore unde modi, facere itaque voluptate tempore accusantium! Ducimus repudiandae quasi veritatis nostrum quidem omnis sit obcaecati cum!</p>
                
            </div>
            <div class="col-md-6 text-center">
                <img src="images\smile.png" alt="Home"> 
                <a class="btn btn-primary" href="#adddonor" role="button">Become a donor</a>
               
    
            </div>
        </div>
    </div>
           
</section>
<section id="money">
  
    <div class="container">
      <p class="promo-title text-center">Donate Money </p>
        <div class="row ">
          
            <div class="col-md-4">
                <h2>Pay via Bkash</h2>
                <p>Number: 01616136091</p>
                <p>Number: 01716136091</p>
                <a class="btn btn-primary" href="\steps" role="button">Become a Bkash donor</a>
            </div>
            <div class="col-md-4">
             <img src="images\pay.png" alt="" weight="255px" height="255px">
          </div>
          <div class="col-md-4">
            <h2>Pay via Bkash</h2>
            <p>Number: 01616136091</p>
            <p>Number: 01716136091</p>
            <a class="btn btn-primary" href="\steps2" role="button">Become a Nagad donor</a>
        </div>
        </div>
    </div>
  </section>
    <section id="cloth">
    <div class="container-fluid bg-grey">
      <div class="row">
        <div class="col-md-4">
          <img src="images\dcloth.jpg" alt="Donate clitgh" weight="320px" height="360px">
        </div>
        <div class="col-md-8">
          <h2>Donate Stuffs</h2><br>
         <p>You can send your cloths or books to donate. We will distribute them to the unprivileged people</p>
         <p>Address: 13 no road , Bank Town</p>
         <p>Contact: 01616136091</p>
         <p>Gmail: <a href=" tomaju304@gmail.com"> tomaju304@gmail.com </a></p>
         <p>Please Fill this form so that we can contact you whenever we held a physical campaign</p>
         <a class="btn btn-primary" href="#adddonor" role="button">Click Here</a>
        </div>
      </div>
    </div>
</section>
 <!--Donor Details add-->
<section id="adddonor" >
<div class="text-black">
<h2 align="center">Fill The Form to be a Donor</h2>
 <form class="row g-3" action="add" method="POST">
 @csrf
 <div class="col-md-6">
    <label for="inputName4" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="inputName4" placeholder="Sabrina Afrin">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="tomaju304@gmail.com">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text"  name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputContact4" class="form-label">Contact No</label>
    <input type="text"  name="contact_no" class="form-control" id="inputContact4" placeholder="01*********">
  </div>
  <div class="col-12">
    <label for="inputdonation" class="form-label">Want to donate</label>
    <input type="text"  name="want_to_donate" class="form-control" id="inputdonation" placeholder="Blood">
  </div>
  <div class="col-12">
    <label for="bloodGroup" class="form-label">Blood Group</label>
    <input type="text"  name="blood_group" class="form-control" id="bloodGroup" placeholder="A+">
    <small id="bloodHelp" class="form-text text-muted">If you are not donating blood please 'Null' in this field</small>
  </div>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add Me as a donor</button>
  </div>
</form>
</div>
</section>

<!--Show Donor List-->
<section id="showlist">
<div class="container">
<div class="row">

<div class="col-md-6 text-center">
<h2 class="Promo-title">Looking For a Donor?</h2>
<p>If you need blood or looking for a donor then look at the list to check if it could help you.</p>
<a href="/showdonor"><button type="submit" class="btn btn-primary">Show Donor List</button></a>
</div >
<div class="col-md-6 text-center">
<img src="images\smilingstar.png" alt="Smiling Star" width="250px" height="250px">
</div>
</div>
</div>
 <section>
</body>

</html>
@endsection