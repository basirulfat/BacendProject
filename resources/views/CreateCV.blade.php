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

   @if($errors->any())
           <ul>
               @foreach ($errors->all() as $error)
                     <li style="color:red;">{{ $error }}</li>
               @endforeach
           </ul>
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
                @error('full_name')
                 <small class="text-danger" style="color:red;">{{ $message }}</small>
                @enderror
                <!-- <small>Error message</small> -->
              </div>

              <div class="form-control-2">
                <label for="username">@lang('msg.creat9')</label>
                <input type="text" id="secondname" name="second_name" placeholder="Enter Second Name" />
                <small>Error message</small>
              </div>
            </div>
            <div class="divid-child">

              <div class="form-control-2">
                <label for="email">@lang('msg.creat10')</label>
                <input type="text" id="email" name="email" placeholder="Enter email" />
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="number">@lang('msg.creat11')</label>
                <input type="number" id="number" name="phone" placeholder="Enter Phone" />
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="Address">@lang('msg.creat12')</label>
                <input type="text" id="address" name="address" placeholder="Enter Address" />
                <small>Error message</small>
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
        <input id="Upload-btn" type="submit" value="Upload" />
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
          <small>Error message</small>
        </div>

        <div>
          <label for="">@lang('msg.creat21')</label>
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
          <label for="country">@lang('msg.creat22')</label>
          <input type="text" id="country" name="country" placeholder="enter yur country"/>
          <small>Error message</small>
        </div>

        <div>
          <label for="City">@lang('msg.creat23')</label>
          <input type="text" id="text" name="city" placeholder="enter your city"/>
          <small>Error message</small>
        </div>

        <div>
          <input id="submit" type="submit" value="Submit">
          <button class="btn-bt" type="button" name="Next" onclick="changeColor()">@lang('msg.creat24')</button>
        </div>
      </div>
    </div>
  </section>
</form>
<!-- Educaiton -->
<form action="/education" enctype="multipart/form-data" method="POST" id="form" class="form" autocomplete="off">
  <section id="education-section">
    <h5>
      <i class="fa-solid fa-graduation-cap"></i>@lang('msg.creat25')
    </h5>

    <div id="sub-info">
      <div class="sub-infor-section   sub-1">
          @csrf
          <h2>@lang('msg.creat26')</h2>
          <div id="divide-section">
            <div class="divid-child">
              <div class="form-control">
                <label for="school_name">@lang('msg.creat27')</label>
                <input type="text" id="username" name="school_name" placeholder="Enter School Name" />
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">@lang('msg.creat28')</label>
                <select id="status_prfile" name="field_of_study">
                  <option value="engeenring">engeenring</option>
                  <option value="development">Develpment</option>
                  <option value="Anaylising">Anaylisig</option>
                  <option value="Managment">Managment</option>
                </select>
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">@lang('msg.creat29')</label>
                <select id="status_prfile" name="degree_level">
                  <option value="jonier">jonier</option>
                  <option value="senior">Senior</option>
                  <option value="expert">expert</option>
                  <option value="advance">Advance</option>
                </select>
                <small>Error message</small>
              </div>
              <div class="form-control-2">
                <label for="s-year">@lang('msg.creat30')</label>
                <input type="date" id="start-year" name="start_year" />
                <small>Error message</small>
                <label for="year">@lang('msg.creat31')</label>
                <input type="date" id="end-year" name="end_year"/>
                <small>Error message</small>
              </div>
            </div>

            <div class="divid-child">

              <div class="form-control">
                <label for="university_name">@lang('msg.creat32')</label>
                <input type="text" id="username" name="university_name" placeholder="Enter university" />
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="university_type">@lang('msg.creat33')</label>
                <select id="status_prfile" name="university_type">
                  <option value="public">Public</option>
                  <option value="privite">Privite</option>
                  <option value="none-gevernomental">none-gevernomental</option>
                </select>
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="country">@lang('msg.creat34')</label>
                <input type="text" id="country" name="country"/>
                <small>Error message</small>
                <label for="City">@lang('msg.creat35')</label>
                <input type="text" id="text" name="city"/>
                <small>Error message</small>

              </div>

              <div class="form-control-2">
                <label for="description">@lang('msg.creat36')</label>
                <textarea id="prompt" cols="30" rows="10" name="description" class="textarea-section" onkeyup="generateText()"></textarea>
              </div>

              <div id="buttion-1">
                <a class="btn-bt" style="width:200px" href="{{route('education.create')}}">Add Another Education</a>
                <div>
                  <button class="btn-1" type="submit" name="Save" onclick="validateForm()">Save</button>
                  <input class="btn-bt" type="submit" value="Submit">
                  <button class="btn-1" type="button" name="Next" onclick="changeColor2()">@lang('msg.creat39')</button>
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

    <h5><i class="fa-solid fa-briefcase"></i>@lang('msg.creat40')</h5>
    <h3>@lang('msg.creat41')</h5>
        <div id="divided-section"></div>
        <p class="form-control">@lang('msg.creat42')</p>
        <div class="form-1">
          <input type="text" id="username" placeholder="Job Title" name="job_title" />
          <small></small>
        </div>

        <div class="form-control">
        <label for="optionsInput">@lang('msg.creat43')</label>
          <input type="text" name="seniority" id="optionsInput" class="options-input" placeholder="Seniority">
        </div>
        <div class="form-control">
          <label for="optionsInput">@lang('msg.creat44')</label>
          <input type="text" id="optionsInput" name="location" placeholder="Location" class="options-input">
        </div>
    

      <div id="buttion-1">

        <div>
                 
        
        </div>
        <div>
       
          <input class="btn-bt" type="submit" value="Submit">
          <button class="btn-1" type="button" name="Next" onclick="changeColor3()">@lang('msg.creat48')</button>
        </div>
      </div>
  </section>
  </form>

 <form action="/skill" enctype="multipart/form-data" method="POST">
  @csrf
 <section id="skill-section">
    <div class="form-control">
      <label for="username">@lang('msg.creat49')</label>
      <input type="text" id="username" placeholder="Enter Skill" name="skill"/>
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
      <!-- <button id="btn-of-skill" class="btn-1" type="submit" name="Save" onclick="changeColor4() ">Add</button> -->
      <!-- <a class="btn-bt" style="width:200px" href="#">Add</a> -->

                  <!-- <button class="btn-bt" type="button" name="Next">Edit</button> -->
                  <!-- <button class="btn-bt" type="button" name="Next" style="background-color:red">Delete</button> -->
      <input class="btn-bt" type="submit" value="Submit" onclick="changeColor4()">
      <a href="{{url('resume')}}"><button class="btn-1  SeeyourCv" type="button" name="Next">@lang('msg.creat52')</button></a>
    </div>
  </section>
 </form>

 <!-- <script>
  function generateText(){
    var prompt= document.getElementById('prompt').value;
    fetch('/openai?prompt='+prompt)
    .then(response=>response.text())
    .then(data=>{
      console.log(data);
      document.getElementById('prompt').value=data;
    })
    .catch(error=>console.error(error));
  }
 </script> -->

 <script>
  let typingTimer;
  const doneTypingInterval = 1000; // 1 second

  function generateText() {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(sendToOpenAI, doneTypingInterval);
  }

  async function sendToOpenAI() {
    const prompt = document.getElementById('prompt').value.trim();
    if (prompt) {
      try {
        const response = await fetch('/openai?prompt=' + encodeURIComponent(prompt));
        const data = await response.text();
        document.getElementById('prompt').value = data;
      } catch (error) {
        console.error('Error:', error);
        document.getElementById('prompt').value = 'Error occurred while fetching response.';
      }
    }
  }
</script>

  <!--=============== FOOTER ===============-->
 @include('layouts.footer')
</body>

</html>