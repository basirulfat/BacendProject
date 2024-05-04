<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Creat CV</title>
  
  <base href="{{ asset('/') }}">
  
  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- <script defer type="module" src="./assets/js/main.js"></script> -->
 
  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
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
  <!--=============== HEADER ===============-->
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
  <!-- Experence section started -->
<form action="{{route('experience.update',$experience)}}" enctype="multipart/form-data" method="POST">
  @csrf
  @method('PUT')
  <section id="expereince">

    <h5><i class="fa-solid fa-briefcase"></i>Enter Your Work Experience</h5>
    <h3>What jobs do you like to work in?</h5>
        <div id="divided-section"></div>
        <p class="form-control">Please enter at least 1 job title.</p>
        <div class="form-1">
          <input type="text" id="username" placeholder="Job Title" name="job_title" value="{{$experience->job_title}}"/>
          <small></small>
        </div>

        <div class="form-control">
        <label for="optionsInput">Seniority Level</label>
          <input type="text" name="seniority" id="optionsInput" class="options-input" placeholder="Seniority"  value="{{$experience->seniority}}">
        </div>
        <div class="form-control">
          <label for="optionsInput">Location</label>
          <input type="text" id="optionsInput" name="location" class="options-input" value="{{$experience->location}}">
        </div>
    

      <div id="buttion-1">

        <div>
               
        
        </div>
        <div>
          <!-- <button class="btn-1" type="button" name="Save">Save</button> -->
          <input class="btn-bt" type="submit" value="Submit">
          <button class="btn-1" type="button" name="Next" onclick="changeColor3()">Next</button>
        </div>
      </div>
  </section>
  </form>
@include('layouts.footer')
</body>

</html>