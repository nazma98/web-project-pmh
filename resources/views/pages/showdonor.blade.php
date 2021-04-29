<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  @extends('layouts.appUser')
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
<section id="showlist">
<h3 class="h3">Donor List</h3>
  <table class="table">
  <thead class="thead-dark">
  <tr>
  <th scope="col">Name</th>
  <th scope="col">Email</th>
  <th scope="col">Address</th>
  <th scope="col">Contact no</th>
  <th scope="col">Want to donate</th>
  <th scope="col">Bood Group</th>
  </tr>
  </thead>
  @foreach($donors as $donor)
  <tr>
  <td>{{$donor['name']}}</td>
  <td>{{$donor['email']}}</td>
  <td>{{$donor['address']}}</td>
  <td>{{$donor['contact_no']}}</td>
  <td>{{$donor['want_to_donate']}}</td>
  <td>{{$donor['blood_group']}}</td>
  </tr>
  @endforeach
  </table>
  </section>
  </body>
</html>
@endsection