<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <base href="{{asset('/')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive CV</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!--=============== CSS ===============-->

    <link rel="stylesheet" type="text/css" href="./assets/css/resume.css" />
    <!-- <link rel="stylesheet" type="text/css" href="css/data.css" /> -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <!--=============== HEADER ===============-->
   @include('layouts.header')
    <!--=============== your cv ===============-->

    @foreach($users as $user)
    <div id="General-container">
      <div class="resume__container">
        <div class="left_Side">
          <div class="profileText">
            <div class="imgBx">
              <img class="photo" src="{{ asset($user->image) }}" />
            </div>
            <br />
           
              <h2>{{ $user->full_name }} <br />{{$user->second_name}} <br> <span>{{$user->military_service_status}}</span></h2>
              <h2><span>Birth Day::{{$user->date_of_birth}}</span></h2>
           
          </div>

          <div class="contactInfo">
            <h3 class="title">Contact Info</h3>
            <ul>
              <li>
                <span class="icon"
                  ><i class="fa fa-phone" aria-hidden="true"></i
                ></span>
                <span class="text">{{$user->phone}}</span>
              </li>
              <li>
                <span class="icon"
                  ><i class="fa fa-envelope-o" aria-hidden="true"></i
                ></span>
                <span class="text">{{$user->email}}</span>
              </li>
              <li>
                <span class="icon"
                  ><i class="fa fa-globe" aria-hidden="true"></i
                ></span>
                <span class="text">www.mywebsite.com</span>
              </li>
              <li>
                <span class="icon"
                  ><i class="fa fa-linkedin" aria-hidden="true"></i
                ></span>
                <span class="text">Gender:{{$user->gender}}</</span>
              </li>
              <li>
                <span class="icon"
                  ><i class="fa fa-map-marker" aria-hidden="true"></i
                ></span>
                <span class="text">{{$user->country}};</span>
                <span class="text"> {{$user->city}};</span>
                <span class="text">{{$user->address}};</span>
              </li>
               
            </ul>
          </div>
         
          @foreach($education as $e)
          <div class="contactInfo education">
          <h3 class="title">Education</h3>
            <ul>
              <li>
                <h4>School Name: {{$e->school_name}}</h4>
                <br>
              </li>
              <li>
                <h4>University Name:{{$e->university_name}}</h4>
                <br>
                <h4>Unversity Type: {{$e->university_type}}</h4>
               <br>
                <h4>Field:{{$e->field_of_study}}</h4>
                <br>
                <h4>Degree:{{$e->degree_level}}</h4>
                <br>
                <h4>Start Year:{{$e->start_year}}</h4>
                <br>
                <h4>End Year:{{$e->end_year}}</h4>
                <br>
                <h4>Country:{{$e->country}}</h4>
                <br>
                <h4>City:{{$e->city}}</h4>

              </li>
              <li>
                <h5>1997 - 2007</h5>
                <h4>12-month English Program</h4>
                <h4>Samimi english academy</h4>
              </li>
            </ul>
          </div>
          @endforeach
          <div class="contactInfo language">
            <h3 class="title">Languages</h3>
            <ul>
              <li>
                <span class="text">English</span>
                <span class="percent">
                  <div class="englishw50"></div>
                </span>
              </li>
            </ul>
            <ul>
              <li>
                <span class="text">Russian</span>
                <span class="percent">
                  <div class="russianw90"></div>
                </span>
              </li>
            </ul>
            <ul>
              <li>
                <span class="text">French</span>
                <span class="percent">
                  <div class="frenchw30"></div>
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="right_Side">
          <div class="about">
            <h2 class="title2">Profile</h2>
            <p>
             {{$e->description}}
            </p>
          </div>
          @endforeach

          @foreach($Experience as $ex)
          <div class="about">
            <h2 class="title2">Experience</h2>
            <div class="box">
              <div class="year_company">
                <h5>{{$e->start_year}}</h5>
                <h5>MRC</h5>
              </div>
              <div class="text">
                <h4>{{$ex->job_title}}</h4>
                <p>
                {{$ex->seniority}}
                </p>
              </div>
            </div>
          </div> 
          @endforeach

          @foreach($skill as $s)
          <div class="about skills">
            <h2 class="title2">Professionals skills</h2>
            <div class="box">
              <h4>{{$s->skill}}</h4>
              <div class="percent">
                <div class="htmlws30"></div>
              </div>
              <h4>{{$s->Skill_level}}</h4>
              <div class="percent">
                <div class="htmlws30"></div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="about interest">
            <h2 class="title2">Interests</h2>
            <ul>
              <li><i class="fa fa-book" aria-hidden="true"></i> Reading</li>
              <li><i class="fa fa-gamepad" aria-hidden="true"></i> Gaming</li>
              <li><i class="fa fa-cutlery" aria-hidden="true"></i> Cooking</li>
              <li><i class="fa fa-code" aria-hidden="true"></i> Codding</li>
            </ul>
          </div>
        </div>
       
      </div>
     
      <a class="btn btn-sm btn-primary" href="{{ route('personalInformation.index') }}" role="button" style="background-color:blue; color:white;position: relative; left: 250px; width:200px;">Edit Your CV</a>
      <a class="btn btn-sm btn-primary" href="#" role="button" style="background-color:blue; color:white;position: relative; left: 250px; width:200px;">Download CV</a>
      <!--=============== FOOTER ===============-->
      @include('layouts.footer')


      
    </div>

    <!--=============== MAIN JS ===============-->

    <script defer type="module" src="./assets/js/main.js"></script>

    <!-- <script defer src="./assets/js/main.js"></script> -->
  </body>
</html>
