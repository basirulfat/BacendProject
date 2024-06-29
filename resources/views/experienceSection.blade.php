<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  <script src="./assets/js/module/CreateCV.js"></script>

  <!-- <script defer type="module" src="./assets/js/main.js"></script> -->
  <title>@lang('msg.creat0')</title>
</head>
<body>
@include('layouts.header')
 <!-- genral selection started -->
 <section id="header-section">
    <h4>@lang('msg.creat1').</h4>
    <div class="section-1">
      <ol>
        <li>1</li>
        <span></span>
        <li>2</li>
        <span></span>
        <li>3</li>
        <span></span>
        <li>4</li>
      </ol>
    </div>

    <div class="section-2">
      <h5><i class="fa-solid fa-user"></i>@lang('msg.creat2')</h5>
      <h5><i class="fa-solid fa-graduation-cap"></i>@lang('msg.creat3')</h5>
      <h5><i class="fa-solid fa-kitchen-set"></i>@lang('msg.creat4')</h5>
      <h5><i class="fa-solid fa-briefcase"></i>@lang('msg.creat5')</h5>
    </div>
  </section>
  <!-- genrel selection ended -->
  
  <!-- Experence section started -->
<form action="/experience" enctype="multipart/form-data" method="POST">
  @csrf
  <section id="expereince">

    <h5><i class="fa-solid fa-briefcase"></i>@lang('msg.creat40')</h5>
    <h3>@lang('msg.creat41')</h5>
        <div id="divided-section"></div>
        <p class="form-control">@lang('msg.creat42')</p>
        <div class="form-1">
          <input type="text" id="username" placeholder="Job Title" name="job_title" />
          <span style="color: red; font-size:12px">
                  @error('job_title')
                  {{$message}}
                  @enderror
                 </span>
        </div>

        <div class="form-control">
        <label for="optionsInput">@lang('msg.creat43')</label>
          <input type="text" name="seniority" id="optionsInput" class="options-input" placeholder="Seniority">
          <span style="color: red; font-size:12px">
                  @error('seniority')
                  {{$message}}
                  @enderror
                 </span>
        </div>
        <div class="form-control">
          <label for="optionsInput">@lang('msg.creat44')</label>
          <input type="text" id="optionsInput" name="location" placeholder="Location" class="options-input">
          <span style="color: red; font-size:12px">
                  @error('location')
                  {{$message}}
                  @enderror
                 </span>
        </div>
    

      <div id="buttion-1">

        <div>
                 
        
        </div>
        <div>
       
          <input class="btn-bt" type="submit" value="Submit">
          <button class="btn-1" type="button" onclick="changeColor3(event)" style="width:200px">See CompletedStep</button>
          <a href="{{url('skillSection')}}"> <button class="btn-1" type="button" name="Next">@lang('msg.creat48')</button></a>

        </div>
      </div>
      <div class="message_container"><a href="{{ url('/chat') }}"><i class="ri-message-2-fill  message"></i></a></div>   
  </section>
  </form>
  @include('layouts.footer')
    
</body>
</html>