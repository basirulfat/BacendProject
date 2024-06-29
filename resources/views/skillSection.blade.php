<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('msg.creat0')</title>
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

<form action="/skill" enctype="multipart/form-data" method="POST">
  @csrf
 <section id="skill-section">
    <div class="form-control">
      <label for="username">@lang('msg.creat49')</label>
      <input type="text" id="username" placeholder="Enter Skill" name="skill"/>
      <span style="color: red; font-size:12px">
                  @error('skill')
                  {{$message}}
                  @enderror
                 </span>
    </div>

    <div class="form-control">
      <label for="">@lang('msg.creat50')</label>
      <select id="status_prfile" name="Skill_level" placeholder="Skill Level">
        <option value="Basic">Basic</option>
        <option value="intermidate">Intermidite</option>
        <option value="advance">Advance</option>
        <option value="expert">Expert</option>
      </select>

    </div>
    <div>

    <div class="message_container"><a href="{{ url('/chat') }}"><i class="ri-message-2-fill  message"></i></a></div>       
      <input class="btn-bt" type="submit" value="Submit">
      <button class="btn-1" type="button" onclick="changeColor4(event)" style="width:200px">See CompletedStep</button>
      <a href="{{url('resume')}}"><button class="btn-1  SeeyourCv" type="button" name="Next">@lang('msg.creat52')</button></a>
    </div>
  </section>
 </form>



@include('layouts.footer')
</body>
</html>