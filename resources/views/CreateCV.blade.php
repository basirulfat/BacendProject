<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

  <!-- <script defer type="module" src="./assets/js/main.js"></script> -->

</head>

<body>
  <!--=============== HEADER ===============-->

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



  <!-- Personal information section started -->
  <form action="/personalInformation" enctype="multipart/form-data" method="POST">
   @csrf
   @if(session()->has('success'))
       <p>{{ session('success') }}</p>
   @endif
   <section id="personal-information-section">
    <h5><i class="fa-solid fa-user"></i>@lang('msg.creat6')</h5>

    <div id="sub-info">
      <div class="sub-infor-section">
          <h2>@lang('msg.creat7')</h2>
          <div id="divide-section">
            <div class="divid-child">
              <div class="form-control-2">
                <label for="username">@lang('msg.creat8')</label>
                <input type="text" id="username" name="full_name" placeholder="Enter FullName" />
                 <span style="color: red;font-size:12px">
                  @error('full_name')
                  {{$message}}
                  @enderror
                 </span>
                <!-- <small>Error message</small> -->
              </div>

              <div class="form-control-2">
                <label for="username">@lang('msg.creat9')</label>
                <input type="text" id="secondname" name="second_name" placeholder="Enter Second Name" />
                <span style="color: red;font-size:12px">
                  @error('second_name')
                  {{$message}}
                  @enderror
                 </span>
              </div>
            </div>
            <div class="divid-child">

              <div class="form-control-2">
                <label for="email">@lang('msg.creat10')</label>
                <input type="text" id="email" name="email" placeholder="Enter email" />
                <span style="color: red;font-size:12px">
                  @error('email')
                  {{$message}}
                  @enderror
                 </span>
              </div>

              <div class="form-control-2">
                <label for="number">@lang('msg.creat11')</label>
                <input type="number" id="number" name="phone" placeholder="Enter Phone" />
                <span style="color: red; font-size:12px">
                  @error('phone')
                  {{$message}}
                  @enderror
                 </span>
              </div>

              <div class="form-control-2">
                <label for="Address">@lang('msg.creat12')</label>
                <input type="text" id="address" name="address" placeholder="Enter Address" />
                <span style="color: red; font-size:12px">
                  @error('address')
                  {{$message}}
                  @enderror
                 </span>
              </div>
            </div>
          </div>
      </div>

      <div id="image-section">
        <h4>@lang('msg.creat13')</h4>
        <label for="input-file" id="drop-area">
          <input type="file" accept="image/*" name="image" id="input-file" hidden>
          <div id="img-view" >
              <img src="assets/images/drag.jpG" alt="">
              <p>@lang('msg.creat14') <br> @lang('msg.creat15')</p>
              <span>@lang('msg.creat16')</span>
          </div>
        </label>
       
      </div>
    </div>
    
    <div id="gender-section" >
      <h4>@lang('msg.creat17')</h4>
      <label for="male">Male</label>
      <input type="radio" id="male" name="gender" value="male" checked />
      <label for="female">Female</label>
      <input type="radio" id="female" name="gender" value="female" />
    </div>

    <div id="country-info">
      <div class="form-control-2" >
        <div>
          <label for="Date">@lang('msg.creat20')</label>
          <input type="date" id="date" name="date_of_birth" />
          <span style="color: red; font-size:12px">
                  @error('date_of_birth')
                  {{$message}}
                  @enderror
                 </span>
        </div>

        <div>
          <label for="">@lang('msg.creat21')</label>
          <select id="status_prfile" name="military_service_status">
            <option value="Designing">Designing</option>
            <option value="Development">Development</option>
            <option value="Analyzing">Analyzing</option>
            <option value="Management">Management</option>
          </select>
        </div>
      </div>

      <div class="form-control-2">
        <div>
          <label for="country">@lang('msg.creat22')</label>
          <input type="text" id="country" name="country" placeholder="enter yur country"/>
          <span style="color: red; font-size:12px">
                  @error('country')
                  {{$message}}
                  @enderror
                 </span>
        </div>

        <div>
          <label for="City">@lang('msg.creat23')</label>
          <input type="text" id="text" name="city" placeholder="enter your city"/>
          <span style="color: red; font-size:12px">
                  @error('city')
                  {{$message}}
                  @enderror
                 </span>
        </div>

        <div>
          <input id="submit"  type="submit" value="Submit">
          <button class="btn-1" type="button" onclick="changeColor(event)" style="width:200px">See CompletedStep</button>
          <a href="{{url('educationSection')}}"><button class="btn-bt" type="button" name="Next">@lang('msg.creat24')</button></a>
        </div>
      </div>
    </div>
    <div class="message_container"><a href="{{ url('/chat') }}"><i class="ri-message-2-fill  message"></i></a></div>   
  </section>
</form>

  <!--=============== FOOTER ===============-->
 @include('layouts.footer')
</body>

</html>