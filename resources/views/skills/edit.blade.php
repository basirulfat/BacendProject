
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
<form action="{{route('skill.update',$skill)}}" enctype="multipart/form-data" method="POST">
  @csrf
  @method('PUT')
 <section id="skill-section">
    <div class="form-control">
      <label for="username">Skill</label>
      <input type="text" id="username" placeholder="Enter Skill" name="skill" value="{{$skill->skill}}" />
    </div>

    <div class="form-control">
      <label for="">Skill Level</label>
      <select id="status_prfile" name="Skill_level" placeholder="Skill Level" value="{{$skill->Skill_level}}">
        <option value="Basic">Basic</option>
        <option value="intermidate">Intermidite</option>
        <option value="advance">Advance</option>
        <option value="expert">Expert</option>
      </select>

    </div>
    <div>
              
      <input type="submit" value="Submit" style="background-color:blue;padding:0.5rem;color:white">
    </div>
  </section>
 </form>
 @include('layouts.footer')
</body>
</html>

