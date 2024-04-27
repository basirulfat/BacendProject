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
  <section id="personal-information-section">
    <h5><i class="fa-solid fa-user"></i>Enter your Personal Information</h5>

    <div id="sub-info">
      <div class="sub-infor-section">
        <form action="" id="form" class="form" autocomplete="off">
          <h2>Enter Your Full Infromation</h2>
          <div id="divide-section">
            <div class="divid-child">
              <div class="form-control-2">
                <label for="username">Full Name</label>
                <input type="text" id="username" placeholder="Enter FullName" />
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="username">Secound Name</label>
                <input type="text" id="secondname" placeholder="Enter Secound Name" />
                <small>Error message</small>
              </div>
            </div>
            <div class="divid-child">

              <div class="form-control-2">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter email" />
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="number">Phone</label>
                <input type="number" id="number" placeholder="Enter Phone" />
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="Address">Address</label>
                <input type="text" id="address" placeholder="Enter Address" />
                <small>Error message</small>
              </div>
            </div>
          </div>

        </form>
      </div>


      <div id="image-section">
        <h4>Please Upload Your Image</h4>
        <form>
          <label for="input-file" id="drop-area">
            <input type="file" accept="image/*" id="input-file" hidden>
            <div id="img-view" >
                <img src="assets/images/icon.png" alt="">
                <p>Drag and drop or click here <br> to upload image</p>
                <span>Upload any image from desktop</span>
            </div>
           </label>
          <input id="Upload-btn" type="submit" value="Upload" />
        </form>
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
          <input type="date" id="date" />
          <small>Error message</small>
        </div>

        <div>
          <label for="">Militry Service Status</label>
          <select id="status_prfile" name="country">
            <option></option>
            <option value="usa">Desiging</option>
            <option value="canada">Develpment</option>
            <option value="uk">Anaylisig</option>
            <option value="australia">Managment</option>
          </select>
          <small>Error message</small>
        </div>
      </div>

      <div class="form-control-2">
        <div>
          <label for="country">Country</label>
          <input type="text" id="country" />
          <small>Error message</small>
        </div>

        <div>
          <label for="City">City</label>
          <input type="text" id="text" />
          <small>Error message</small>
        </div>

        <div>
          <button class="btn-bt" type="button" name="Next" onclick="changeColor()">Next</button>
        </div>
      </div>
    </div>

  </section>

  <section id="education-section">
    <h5>
      <i class="fa-solid fa-graduation-cap"></i>Enter Your Education
      Carefully!
    </h5>

    <div id="sub-info">
      <div class="sub-infor-section">
        <form id="form" class="form" autocomplete="off">
          <h2>Enter Your Full Education Career</h2>
          <div id="divide-section">
            <div class="divid-child">
              <div class="form-control">
                <label for="username">School Name</label>
                <input type="text" id="username" placeholder="Enter School Name" />
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">Field of Study</label>
                <select id="status_prfile" name="field of Study">
                  <option value="engeenring">engeenring</option>
                  <option value="development">Develpment</option>
                  <option value="Anaylising">Anaylisig</option>
                  <option value="australia">Managment</option>
                </select>
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">Degree Level</label>
                <select id="status_prfile" name="degree level">
                  <option value="jonier">jonier</option>
                  <option value="senior">Senior</option>
                  <option value="expert">expert</option>
                  <option value="advance">Advance</option>
                </select>
                <small>Error message</small>
              </div>
              <div class="form-control-2">
                <label for="s-year">Start-Year</label>
                <input type="date" id="start-year" />
                <small>Error message</small>
                <label for="year">End-Year</label>
                <input type="date" id="end-year" />
                <small>Error message</small>
              </div>
            </div>

            <div class="divid-child">

              <div class="form-control">
                <label for="username">University Name</label>
                <input type="text" id="username" placeholder="Enter university" />
                <small>Error message</small>
              </div>

              <div class="form-control">
                <label for="">University Type</label>
                <select id="status_prfile" name="university Type">
                  <option value="public">Public</option>
                  <option value="privite">Privite</option>
                  <option value="none-gevernomental">none-gevernomental</option>
                </select>
                <small>Error message</small>
              </div>

              <div class="form-control-2">
                <label for="country">Country</label>
                <input type="text" id="country" />
                <small>Error message</small>
                <label for="City">City</label>
                <input type="text" id="text" />
                <small>Error message</small>

              </div>

              <div class="form-control-2">
                <label for="Desciption">Desciption (Optional)</label>
                <textarea id="textarea-section" name="" id="" cols="30" rows="10"></textarea>
              </div>

              <div id="buttion-1">
                <button class="btn-1" type="submit" name="Back">Back</button>
                <div>
                  <button class="btn-1" type="submit" name="Save" onclick="validateForm()">Save</button>
                  <button class="btn-1" type="button" name="Next" onclick="changeColor2()">Next</button>
                </div>
              </div>
            </div>
        </form>
  </section>

  <!-- Education section ended -->


  <!-- Experence section started -->
  <section id="expereince">

    <h5><i class="fa-solid fa-briefcase"></i>Enter Your Work Experience</h5>
    <h3>What jobs do you like to work in?</h5>



      <form action="">
        <div id="divided-section"></div>
        <p class="form-control">Please enter at least 1 job title.</p>
        <div class="form-1">
          <input type="text" id="username" placeholder="Job Title" />
          <small></small>
        </div>

        <div class="form-control">
        <label for="optionsInput">Seniority Level</label>

          <input type="text" id="optionsInput" class="options-input" placeholder="Seniority">
        </div>
        <div class="form-control">
          <label for="optionsInput">Location</label>
          <input type="text" id="optionsInput" class="options-input">
        </div>
      </form>

      <div id="buttion-1">

        <div>
          <button class="btn-1" type="submit" name="back">Back</button>
          <button class="btn-1" type="submit" name="add">Add</button>
        </div>
        <div>
          <button class="btn-1" type="button" name="Save">Save</button>
          <button class="btn-1" type="button" name="Next" onclick="changeColor3()">Next</button>
        </div>
      </div>
  </section>

  <section id="skill-section">
    <div class="form-control">
      <label for="username">Skill</label>
      <input type="text" id="username" placeholder="Enter Skill" />
    </div>

    <div class="form-control">
      <label for="">Skill Level</label>
      <select id="status_prfile" name="Skill-level" placeholder="Skill Level">
        <option value="bisic">Basic</option>
        <option value="intermidate">Intermidite</option>
        <option value="advance">Advance</option>
        <option value="expert">Expert</option>
      </select>

    </div>
    <div>
      <button id="btn-of-skill" class="btn-1" type="submit" name="Save" onclick="changeColor4() ">Add</button>
      <a href="{{url('resume')}}"><button class="btn-1  SeeyourCv" type="button" name="Next">See Your CV</button></a>
    </div>
  </section>

  <!--=============== FOOTER ===============-->
 @include('layouts.footer')
</body>

</html>