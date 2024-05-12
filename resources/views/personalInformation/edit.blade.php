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
    .nav_option{
      background-color:red;
    }
</style>
</head>
<body>
  @include('layouts.header')
<div class=" nav_option  container border bg-light" style="margin-top: 100px;width:1380px;">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item" {{request()->is('user_detail') ? 'active': ''}}><a href="{{route('personalInformation.index')}}">Personal Information</a></li>
        <li class="breadcrumb-item" {{request()->is('education') ? 'active': ''}}><a href="{{route('education.index')}}">Education</a></li>
        <li class="breadcrumb-item" {{request()->is('experience')  ?'active': ''}}><a href="{{route('experience.index')}}">Work History</a></li>
        <li class="breadcrumb-item" {{request()->is('skill') ? 'active': ''}}><a href="{{route('skill.index')}}">Skills</a></li>
      </ol>
    </nav>
</div>
<formta action="{{ route('personalInformation.update', ['personalInformation' => $user->id, 'user_id' => $user->user_id]) }}" enctype="multipart/form-data" method="POST">
   @csrf
   @method('PUT')
   @if(session()->has('success'))
       <p>{{ session('success') }}</p>
   @endif

   @if($errors->any())
       <ul>
           @foreach ($errors->all() as $error)
               <li style="color:red;">{{ $error }}</li>
           @endforeach
       </ul>
   @endif

   <section id="personal-information-section">
    <h5><i class="fa-solid fa-user"></i>Enter your Personal Information</h5>

    <div id="sub-info">
      <div class="sub-infor-section">
          <h2>Enter Your Full Information</h2>
          <div id="divide-section">
            <div class="divid-child">
              <div class="form-control-2">
                <label for="username">Full Name</label>
                <input type="text" id="username" name="full_name" placeholder="Enter FullName" value="{{ $user->full_name }}"/>
              </div>

              <div class="form-control-2">
                <label for="secondname">Second Name</label>
                <input type="text" id="secondname" name="second_name" placeholder="Enter Second Name" value="{{ $user->second_name }}" />
              </div>
            </div>
            <div class="divid-child">
              <div class="form-control-2">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter email" value="{{ $user->email }}" />
              </div>

              <div class="form-control-2">
                <label for="number">Phone</label>
                <input type="number" id="number" name="phone" placeholder="Enter Phone" value="{{ $user->phone }}"/>
              </div>

              <div class="form-control-2">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter Address" value="{{ $user->address }}"/>
              </div>
            </div>
          </div>
      </div>

      <div id="image-section">
        <h4>Please Upload Your Image</h4>
        <label for="input-file" id="drop-area">
          <input type="file" accept="image/*" name="image" id="input-file" hidden>
          <div id="img-view" >
              <img src="assets/images/icon.png" alt="">
              <p>Drag and drop or click here <br> to upload image</p>
              <span>Upload any image from desktop</span>
          </div>
        </label>
        <input id="Upload-btn" type="submit" value="Upload" />
      </div>
    </div>
    
    <div id="gender-section">
      <h4>Gender</h4>
      <label for="male">Male</label>
      <input type="radio" id="male" name="gender" value="male" {{ $user->gender === 'male' ? 'checked' : '' }} />
      <label for="female">Female</label>
      <input type="radio" id="female" name="gender" value="female" {{ $user->gender === 'female' ? 'checked' : '' }} />
    </div>

    <div id="country-info">
      <div class="form-control-2">
        <div>
          <label for="date">Date of Birth</label>
          <input type="date" id="date" name="date_of_birth" value="{{ $user->date_of_birth }}" />
        </div>

        <div>
          <label for="status_prfile">Military Service Status</label>
          <select id="status_prfile" name="military_service_status">
            <option value="Designing" {{ $user->military_service_status === 'Designing' ? 'selected' : '' }}>Designing</option>
            <option value="Development" {{ $user->military_service_status === 'Development' ? 'selected' : '' }}>Development</option>
            <option value="Analyzing" {{ $user->military_service_status === 'Analyzing' ? 'selected' : '' }}>Analyzing</option>
            <option value="Management" {{ $user->military_service_status === 'Management'? 'selected' : '' }}>Management</option>
          </select>
        </div>
      </div>

      <div class="form-control-2">
        <div>
          <label for="country">Country</label>
          <input type="text" id="country" name="country" placeholder="Enter Country" value="{{ $user->country }}" />
        </div>
        <div>
          <label for="city">City</label>
          <input type="text" id="city" name="city" placeholder="Enter City" value="{{ $user->city }}" />
        </div>
      </div>
    </div>

    <input id="btn-bt" type="submit" value="Submit" onclick="changeColor()" style="background-color:blue; padding:0.3rem;color:white;"/>

  </section>
</form>
@include('layouts.footer')
</body>
</html>