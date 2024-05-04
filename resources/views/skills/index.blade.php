<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="{{ asset('/') }}">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

<link rel="stylesheet" href="./assets/css/CreateCV.css" />
<link rel="stylesheet" href="./assets/css/style.css">
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


    
<h2 class="container" >Skill</h2>
@foreach($skill as $e)
     <div class="container">
        
     <div class="card">
        <div class="card-body">
        <table style="width: 100%; border-collapse: collapse;">
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Skill:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->skill}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Skill Level:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$e->Skill_level}}</td>
  </tr>
</table>
           
            
            <a class="btn btn-sm btn-primary" href="{{route('skill.edit',$e)}}" role="button" style="background-color:blue">Edit</a>
            <form action="{{route('skill.destroy',$e)}}" method="POST" style="display:inline">
             @csrf
             @method('DELETE')

             <input type="submit" value="Delete" class="btn btn-sm btn-danger" style="background-color:red">

            </form>
        </div> 
     </div>
     </div>

@endforeach

<div class="container">
 <a class="btn btn-primary mt-2" href="{{route('skill.create')}}" style="background-color:blue"> Add Another Skill</a>
</div>
@include('layouts.footer')

</body>
</html>
