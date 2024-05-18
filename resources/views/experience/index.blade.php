<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

<link rel="stylesheet" href="assets/css/CreateCV.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="./assets/js/module/CreateCV.js"></script>
  <base href="{{ asset('/') }}">
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


    
<h2 class="container">Experience</h2>

@foreach($Experience as $e)
     <div class="container">
        
     <div class="card">
        <div class="card-body">
        <table style="width: 100%; border-collapse: collapse;">
  <tr>
    <th style="padding: 10px; border: 1px solid black;">Job Title</th>
    <th style="padding: 10px; border: 1px solid black;">Seniority</th>
    <th style="padding: 10px; border: 1px solid black;">Location</th>
  </tr>
  <tr style="background-color: #f2f2f2;">
    <td style="padding: 10px; border: 1px solid black;">{{$e->job_title}}</td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->seniority}}</td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->location}}</td>
  </tr>
</table>
            
            <a class="btn btn-sm btn-primary" href="{{route('experience.edit',$e)}}" role="button" style="background-color:blue">Edit</a>
            <form action="{{route('experience.destroy',$e)}}" method="POST" style="display:inline">
             @csrf
             @method('DELETE')

             <input type="submit" value="Delete" class="btn btn-sm btn-danger" style="background-color:red">

            </form>
        </div> 
     </div>
     </div>

@endforeach

<div class="container">

 <a class="btn btn-primary mt-2" href="{{route('experience.create')}}" style="background-color:blue"> Add Another Experience</a>

 <a class="btn btn-primary mt-2" href="{{route('skill.index')}}" style="background-color:blue"> Skills</a>
</div>
@include('layouts.footer')
</body>
</html>
