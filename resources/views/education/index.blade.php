<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
<base href="{{ asset('/') }}">
  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- <script defer type="module" src="./assets/js/main.js"></script> -->
  <link rel="stylesheet" href="assets/css/CreateCV.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="./assets/js/module/CreateCV.js"></script>
<style>
    .active{
        font-weight:border;
    }
</style>
</head>
<body>
@include('layouts.header')

<div class="container border bg-light" style="margin-top: 100px;width:1500px;">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item" {{request()->is('user_detail') ? 'active': ''}}><a href="{{route('personalInformation.index')}}">Personal Information</a></li>
    <li class="breadcrumb-item" {{request()->is('education') ? 'active': ''}}><a href="{{route('education.index')}}">Education</a></li>
    <li class="breadcrumb-item" {{request()->is('experience')  ?'active': ''}}><a href="{{route('experience.index')}}">Work History</a></li>
    <li class="breadcrumb-item" {{request()->is('skill') ? 'active': ''}}><a href="{{route('skill.index')}}">Skills</a></li>
  </ol>
</nav>
</div>

    
<h2 class="container">Education</h2>
@foreach($education as $e)
     <div class="container">
        
     <div class="card">
        <div class="card-body">
        <table style="width: 100%; border-collapse: collapse;">
  <tr>
    <th style="padding: 10px; border: 1px solid black;">Attribute</th>
    <th style="padding: 10px; border: 1px solid black;">Value</th>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>School Name:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->school_name}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>Field:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->field_of_study}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>Degree:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->degree_level}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>Start Year:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->start_year}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>End Year:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->end_year}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>University:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->university_name}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>University Type:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->university_type}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>Country:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->country}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>City:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->city}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid black;"><strong>Description:</strong></td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->description}}</td>
  </tr>
</table>
            
            <a class="btn btn-sm btn-primary" href="{{route('education.edit',$e)}}" role="button" style="background-color:blue;">Edit</a>
            <form action="{{route('education.destroy',$e)}}" method="POST" style="display:inline">
             @csrf
             @method('DELETE')

             <input type="submit" value="Delete" class="btn btn-sm btn-danger" style="background-color:red;">

            </form>
        </div> 
     </div>
     </div>

@endforeach

<div class="container">
 <a class="btn btn-primary mt-2" href="{{route('education.create')}}"style="background-color:blue;"> Add Another Education</a>
 <a class="btn btn-primary mt-2" href="{{route('experience.index')}}"style="background-color:blue;"> Work History</a>

</div>
@include('layouts.footer')
</body>
</html>
