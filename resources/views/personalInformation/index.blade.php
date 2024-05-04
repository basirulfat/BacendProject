<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <base href="{{ asset('/') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

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
     
@foreach($users as $user)
    <div class="container">
        <div class="card">
            <div class="card-body">
            <table style="width: 100%; border-collapse: collapse;">
  <tr>
    <td style="padding: 10px; font-weight: bold; width: 30%; border: 1px solid black;">Full Name:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->full_name}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Second Name:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->second_name}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Email:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->email}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Phone:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->phone}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Address:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->address}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Image:</td>
    <td style="padding: 10px; border: 1px solid black;"><img src="{{ $user->image }}" alt="User Image" style="width: 100px; height: 100px;"></td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Gender:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->gender}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Date of Birth:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->date_of_birth}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Military Service Status:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->military_service_status}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">Country:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->country}}</td>
  </tr>
  <tr>
    <td style="padding: 10px; font-weight: bold; border: 1px solid black;">City:</td>
    <td style="padding: 10px; border: 1px solid black;">{{$user->city}}</td>
  </tr>
</table>
                <!-- Add additional information as needed -->

                <a class="btn btn-sm btn-primary" href="{{ route('personalInformation.edit', $user) }}" role="button" style="background-color:blue;">Edit</a>
                <form action="{{ route('personalInformation.destroy', $user) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete" class="btn btn-sm btn-danger" style="background-color:red;">
                </form>
            </div>
        </div>
    </div>
@endforeach
@include('layouts.footer')
</body>
</html>


