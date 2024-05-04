<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Creat CV</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <base href="{{ asset('/') }}">
  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- <script defer type="module" src="./assets/js/main.js"></script> -->
  <link rel="stylesheet" href="assets/css/CreateCV.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="./assets/js/module/CreateCV.js"></script>

  <!-- <script defer type="module" src="./assets/js/main.js"></script> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
<style>
    .active{
        font-weight:border;
    }
    
</style>

</head>

<body>
  <!--=============== HEADER ===============-->
@include('layouts.header')
 
<div class="container-fluid border bg-light" style="margin-top: 100px;width:1380px;">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item" {{request()->is('user_detail') ? 'active': ''}}><a href="{{route('personalInformation.index')}}">Personal Information</a></li>
    <li class="breadcrumb-item" {{request()->is('education') ? 'active': ''}}><a href="{{route('education.index')}}">Education</a></li>
    <li class="breadcrumb-item" {{request()->is('experience')  ?'active': ''}}><a href="{{route('experience.index')}}">Work History</a></li>
    <li class="breadcrumb-item" {{request()->is('skill') ? 'active': ''}}><a href="{{route('skill.index')}}">Skills</a></li>
  </ol>
</nav>
</div>
  
  <!-- genrel selection ended -->

<!-- Educaiton -->
<form action="{{route('education.update', $education)}}" enctype="multipart/form-data" method="POST" id="form" class="form" autocomplete="off">
  <section id="education-section">
    <h5>
      <i class="fa-solid fa-graduation-cap"></i>Enter Your Education
      Carefully!
    </h5>

    <div id="sub-info">
      <div class="sub-infor-section">
          @csrf
          @method('PUT')
          <h2>Enter Your Full Education Career</h2>
          <div id="divide-section">
            <div class="divid-child">
              <div class="form-control">
                <label for="school_name">School Name</label>
                <input type="text" id="username" name="school_name" placeholder="Enter School Name" value="{{$education->school_name}}" />
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">Field of Study</label>
                <select id="status_prfile" name="field_of_study">
                  <option value="{{$education->engeenring}}">engeenring</option>
                  <option value="{{$education->Develpment}}">Develpment</option>
                  <option value="{{$education->Anaylisig}}">Anaylisig</option>
                  <option value="{{$education->Managment}}">Managment</option>
                </select>
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">Degree Level</label>
                <select id="status_prfile" name="degree_level">
                  <option value="{{$education->jonier}}">jonier</option>
                  <option value="{{$education->Senior}}">Senior</option>
                  <option value="{{$education->expert}}">expert</option>
                  <option value="{{$education->advance}}">Advance</option>
                </select>
                <small>Error message</small>
              </div>
              <div class="form-control-2">
                <label for="s-year">Start-Year</label>
                <input type="date" id="start-year" name="start_year" value="{{$education->start_year}}"/>
                <small>Error message</small>
                <label for="year">End-Year</label>
                <input type="date" id="end-year" name="end_year" value="{{$education->end_year}}"/>
                <small>Error message</small>
              </div>
            </div>

            <div class="divid-child">

              <div class="form-control">
                <label for="university_name">University Name</label>
                <input type="text" value="{{$education->university_name}}" id="username" name="university_name" placeholder="Enter university"  />
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="university_type">University Type</label>
                <select id="status_prfile" name="university_type">
                  <option value="{{$education->public}}">Public</option>
                  <option value="{{$education->privite}}">Privite</option>
                  <option value="{{$education->gevernomental}}">none-gevernomental</option>
                </select>
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" value="{{$education->country}}"/>
                <small>Error message</small>
                <label for="City">City</label>
                <input type="text" id="text" name="city" value="{{$education->city}}"/>
                <small>Error message</small>

              </div>

              <div class="form-control-2">
                <label for="description">Desciption (Optional)</label>
                <textarea id="textarea-section" id="description" cols="30" rows="10" name="description"></textarea>
              </div>

              <div id="buttion-1">
                
       
                  
           
              
             
                <a class="btn-bt" style="width:200px" href="{{route('education.create')}}">Add Another Education</a>
                <div>
                  <input class="btn-bt" type="submit" value="Submit">
                </div>
              </div>
            </div>
     
      </section>
   </form>

  <!-- Education section ended -->

  <!--=============== FOOTER ===============-->
 @include('layouts.footer')
</body>

</html>