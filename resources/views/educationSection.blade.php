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
  <!-- genrel selection ended -->

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
                <span style="color: red; font-size:12px">
                  @error('school_name')
                  {{$message}}
                  @enderror
                 </span>
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
                <span style="color: red; font-size:12px">
                  @error('start_year')
                  {{$message}}
                  @enderror
                 </span>
                 <br>
                <label for="year">@lang('msg.creat31')</label>
                <input type="date" id="end-year" name="end_year"/>
                <span style="color: red; font-size:12px">
                  @error('end_year')
                  {{$message}}
                  @enderror
                 </span>
              </div>
            </div>

            <div class="divid-child">

              <div class="form-control">
                <label for="university_name">@lang('msg.creat32')</label>
                <input type="text" id="username" name="university_name" placeholder="Enter university" />
                <span style="color: red; font-size:12px">
                  @error('university_name')
                  {{$message}}
                  @enderror
                 </span>
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
                <span style="color: red; font-size:12px">
                  @error('country')
                  {{$message}}
                  @enderror
                 </span>
                 <br>
                <label for="City">@lang('msg.creat35')</label>
                <input type="text" id="text" name="city"/>
                <span style="color: red; font-size:12px">
                  @error('city')
                  {{$message}}
                  @enderror
                 </span>

              </div>

              <div class="form-control-2">
                <label for="description">@lang('msg.creat36')</label>
                <textarea id="prompt" cols="30" rows="10" name="description" class="textarea-section" onkeyup="generateText()"></textarea>
              </div>

              <div id="buttion-1">
                
                <div>
                 
                  <input class="btn-bt" type="submit" value="Submit">
                  <button class="btn-1" type="button" onclick="changeColor2(event)" style="width:200px">See CompletedStep</button>
                 <a href="{{url('experienceSection')}}"> <button class="btn-1" type="button" name="Next">@lang('msg.creat39')</button></a>

                 
                </div>
              </div>
            </div>

            <div class="message_container"><a href="{{ url('/chat') }}"><i class="ri-message-2-fill  message"></i></a></div>       
      
    </div>
     
      </section>
   </form>


  @include('layouts.footer')

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
</body>
</html>