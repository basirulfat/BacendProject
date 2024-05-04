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

</head>

<body>
  <!--=============== HEADER ===============-->

 @include('layouts.header')
  <!-- genral selection started -->
  <section id="header-section">
    <h4>Please Complete The Folowing Section.</h4>
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
      <h5><i class="fa-solid fa-user"></i>Personal Info</h5>
      <h5><i class="fa-solid fa-graduation-cap"></i>Education</h5>
      <h5><i class="fa-solid fa-kitchen-set"></i>Skill</h5>
      <h5><i class="fa-solid fa-briefcase"></i>Experience</h5>
    </div>
  </section>
  <!-- genrel selection ended -->



  <!-- Personal information section started -->
  
  <form action="/personalInformation" enctype="multipart/form-data" method="POST">
   @csrf
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
                <input type="text" id="username" name="full_name" placeholder="Enter FullName" />
                @error('full_name')
                 <small class="text-danger" style="color:red;">{{ $message }}</small>
                @enderror
                <!-- <small>Error message</small> -->
              </div>

              <div class="form-control-2">
                <label for="username">Second Name</label>
                <input type="text" id="secondname" name="second_name" placeholder="Enter Second Name" />
                <small>Error message</small>
              </div>
            </div>
            <div class="divid-child">

              <div class="form-control-2">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter email" />
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="number">Phone</label>
                <input type="number" id="number" name="phone" placeholder="Enter Phone" />
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="Address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter Address" />
                <small>Error message</small>
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
    
    <div id="gender-section" >
      <h4>Gender</h4>
      <label for="male">Male</label>
      <input type="radio" id="male" name="gender" value="male" checked />
      <label for="female">Female</label>
      <input type="radio" id="female" name="gender" value="female" />
    </div>

    <div id="country-info">
      <div class="form-control-2" >
        <div>
          <label for="Date">Date of Birth</label>
          <input type="date" id="date" name="date_of_birth" />
          <small>Error message</small>
        </div>

        <div>
          <label for="">Military Service Status</label>
          <select id="status_prfile" name="military_service_status">
            <option value="Designing">Designing</option>
            <option value="Development">Development</option>
            <option value="Analyzing">Analyzing</option>
            <option value="Management">Management</option>
          </select>
          <small>Error message</small>
        </div>
      </div>

      <div class="form-control-2">
        <div>
          <label for="country">Country</label>
          <input type="text" id="country" name="country"/>
          <small>Error message</small>
        </div>

        <div>
          <label for="City">City</label>
          <input type="text" id="text" name="city"/>
          <small>Error message</small>
        </div>

        <div>
          <input class="btn-bt" type="submit" value="Submit">
          <button class="btn-bt" type="button" name="Next" onclick="changeColor()">Next</button>
        </div>
      </div>
    </div>
  </section>
</form>
<!-- Educaiton -->
<form action="/education" enctype="multipart/form-data" method="POST" id="form" class="form" autocomplete="off">
  <section id="education-section">
    <h5>
      <i class="fa-solid fa-graduation-cap"></i>Enter Your Education
      Carefully!
    </h5>

    <div id="sub-info">
      <div class="sub-infor-section">
          @csrf
          <h2>Enter Your Full Education Career</h2>
          <div id="divide-section">
            <div class="divid-child">
              <div class="form-control">
                <label for="school_name">School Name</label>
                <input type="text" id="username" name="school_name" placeholder="Enter School Name" />
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">Field of Study</label>
                <select id="status_prfile" name="field_of_study">
                  <option value="engeenring">engeenring</option>
                  <option value="development">Develpment</option>
                  <option value="Anaylising">Anaylisig</option>
                  <option value="Managment">Managment</option>
                </select>
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">Degree Level</label>
                <select id="status_prfile" name="degree_level">
                  <option value="jonier">jonier</option>
                  <option value="senior">Senior</option>
                  <option value="expert">expert</option>
                  <option value="advance">Advance</option>
                </select>
                <small>Error message</small>
              </div>
              <div class="form-control-2">
                <label for="s-year">Start-Year</label>
                <input type="date" id="start-year" name="start_year" />
                <small>Error message</small>
                <label for="year">End-Year</label>
                <input type="date" id="end-year" name="end_year"/>
                <small>Error message</small>
              </div>
            </div>

            <div class="divid-child">

              <div class="form-control">
                <label for="university_name">University Name</label>
                <input type="text" id="username" name="university_name" placeholder="Enter university" />
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="university_type">University Type</label>
                <select id="status_prfile" name="university_type">
                  <option value="public">Public</option>
                  <option value="privite">Privite</option>
                  <option value="none-gevernomental">none-gevernomental</option>
                </select>
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="country">Country</label>
                <input type="text" id="country" name="country"/>
                <small>Error message</small>
                <label for="City">City</label>
                <input type="text" id="text" name="city"/>
                <small>Error message</small>

              </div>

              <div class="form-control-2">
                <label for="description">Desciption (Optional)</label>
                <textarea id="textarea-section" id="description" cols="30" rows="10" name="description"></textarea>
              </div>

              <div id="buttion-1">
                
       
                  
           
              
             
                <a class="btn-bt" style="width:200px" href="{{route('education.create')}}">Add Another Education</a>
                <div>
                  <!-- <button class="btn-1" type="submit" name="Save" onclick="validateForm()">Save</button> -->
                  <input class="btn-bt" type="submit" value="Submit">
                  <button class="btn-1" type="button" name="Next" onclick="changeColor2()">Next</button>
                </div>
              </div>
            </div>
     
      </section>
   </form>

  <!-- Education section ended -->


  <!-- Experence section started -->
<form action="/experience" enctype="multipart/form-data" method="POST">
  @csrf
  <section id="expereince">

    <h5><i class="fa-solid fa-briefcase"></i>Enter Your Work Experience</h5>
    <h3>What jobs do you like to work in?</h5>
        <div id="divided-section"></div>
        <p class="form-control">Please enter at least 1 job title.</p>
        <div class="form-1">
          <input type="text" id="username" placeholder="Job Title" name="job_title" />
          <small></small>
        </div>

        <div class="form-control">
        <label for="optionsInput">Seniority Level</label>
          <input type="text" name="seniority" id="optionsInput" class="options-input" placeholder="Seniority">
        </div>
        <div class="form-control">
          <label for="optionsInput">Location</label>
          <input type="text" id="optionsInput" name="location" class="options-input">
        </div>
    

      <div id="buttion-1">

        <div>
                 
        
        </div>
        <div>
       
          <input class="btn-bt" type="submit" value="Submit">
          <button class="btn-1" type="button" name="Next" onclick="changeColor3()">Next</button>
        </div>
      </div>
  </section>
  </form>

 <form action="/skill" enctype="multipart/form-data" method="POST">
  @csrf
 <section id="skill-section">
    <div class="form-control">
      <label for="username">Skill</label>
      <input type="text" id="username" placeholder="Enter Skill" name="skill"/>
    </div>

    <div class="form-control">
      <label for="">Skill Level</label>
      <select id="status_prfile" name="Skill_level" placeholder="Skill Level">
        <option value="Basic">Basic</option>
        <option value="intermidate">Intermidite</option>
        <option value="advance">Advance</option>
        <option value="expert">Expert</option>
      </select>

    </div>
    <div>
      <!-- <button id="btn-of-skill" class="btn-1" type="submit" name="Save" onclick="changeColor4() ">Add</button> -->
      <!-- <a class="btn-bt" style="width:200px" href="#">Add</a> -->

                  <!-- <button class="btn-bt" type="button" name="Next">Edit</button> -->
                  <!-- <button class="btn-bt" type="button" name="Next" style="background-color:red">Delete</button> -->
      <input class="btn-bt" type="submit" value="Submit" onclick="changeColor4()">
      <a href="{{url('resume')}}"><button class="btn-1  SeeyourCv" type="button" name="Next">See Your CV</button></a>
    </div>
  </section>
 </form>

  <!--=============== FOOTER ===============-->
 @include('layouts.footer')
</body>

</html>