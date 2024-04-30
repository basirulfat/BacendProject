<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!--=============== CSS ===============-->
    <script defer type="module" src="./assets/js/module/companyRegister.js"></script>
    <link rel="stylesheet" href="assets/css/companyRegister.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Register Company</title>
  </head>

  <body>
    <!--=============== HEADER ===============-->
    @include('layouts.header')
    <!--===============POST JOB ===============-->
    <section id="post-job" class="img">
      <div class="details">
        <h1>Hire Top Quality Candidates by Posting Your Job</h1>
        <h2>Please, submit your contract information to request a demo</h2>
        <div class="agent">
          <img src="./assets/images/sami.JPG" alt="agent" />
          <div class="agent_info">
            <span>Your Agent:</span>
            <!-- <hr /> -->
            <h5>Samiullah Shaheen</h5>
            <p>(+93) 798425895</p>
          </div>
        </div>
      </div>
      <form id="post-job-form" action="" onsubmit="return validateForm()">
        <h2>Fill This Form To Get Free Demo:</h2>
        <div class="name_input">
          <label for="">Full Name</label>
          <input type="text" class="btn username" placeholder="Your Name" />
          <small class="error-message"></small>
        </div>
        <div class="comp_input_wrapper">
          <div class="comp_input">
            <label for="">Your Company Name(English)</label>
            <input
              type="text"
              class="btn selection username"
              placeholder="Company Name"
            />
            <small class="error-message"></small>
            <label for="">Mobile</label>
            <input
              type="text"
              class="btn selection phone"
              placeholder="Company Mobile"
            />
            <small class="error-message"></small>
            <label for="">Your Company Size</label>
            <select name="" id="" class="btn selection">
              <option value="">select your Company size</option>
              <option value="">500 employees</option>
              <option value="">100 -499 employees</option>
              <option value="">50 -99 employees</option>
              <option value="">10 -49 employees</option>
              <option value="">1 - 9 employees</option>
            </select>
            <small class="error-message"></small>
          </div>
          <div class="comp_input">
            <label for="">Your Company Name(Pashto)</label>
            <input
              type="text"
              class="btn selection username"
              placeholder="Company Name in Pashto"
            />
            <small class="error-message"></small>
            <label for="">Email</label>
            <input
              type="text"
              class="btn selection email"
              placeholder="Company Email"
            />
            <small class="error-message"></small>
            <label for="">Organization position</label>
            <input
              type="text"
              class="btn selection"
              placeholder="Organization position"
            />
            <small class="error-message"></small>
          </div>
        </div>
        <input type="submit" value="Submit" class="btn submit-form" />
      </form>
    </section>
    <!--===============POST JOB CARTS ===========-->
    <section id="job-post-contianer">
      <div class="first_carts_wrapper">
        <div class="first_cart">
          <div class="icon-and-title">
            <i class="ri-search-line"></i>
            <h5>Requriment</h5>
          </div>
          <ul>
            <li>Publish job post & Search in CV bank</li>
            <li>Recruitment ads to targeted job seekers</li>
          </ul>
          <a href="#">Send Request</a>
        </div>

        <div class="first_cart">
          <div class="icon-and-title">
            <i class="ri-community-line" style="color: blue"></i>
            <h5>Employer Branding</h5>
          </div>
          <ul>
            <li>Publish job post & Search in CV bank</li>
            <li>Recruitment ads to targeted job seekers</li>
          </ul>
          <a href="#">Send Request</a>
        </div>

        <div class="first_cart">
          <div class="icon-and-title">
            <i class="ri-survey-line" style="color: green"></i>
            <h5>Assess Candidates</h5>
          </div>
          <ul>
            <li>Publish job post & Search in CV bank</li>
            <li>Recruitment ads to targeted job seekers</li>
          </ul>
          <a href="#">Send Request</a>
        </div>

        <div class="first_cart">
          <div class="icon-and-title">
            <i class="ri-wallet-3-line" style="color: orange"></i>
            <h5>Salary Benchmarking</h5>
          </div>
          <ul>
            <li>Publish job post & Search in CV bank</li>
            <li>Recruitment ads to targeted job seekers</li>
          </ul>
          <a href="#">Send Request</a>
        </div>

        <div class="first_cart">
          <div class="icon-and-title">
            <i class="ri-font-size-2" style="color: red"></i>
            <h5>Tracking system</h5>
          </div>
          <ul>
            <li>Publish job post & Search in CV bank</li>
            <li>Recruitment ads to targeted job seekers</li>
          </ul>
          <a href="#">Send Request</a>
        </div>
      </div>

      <div class="register_job">
        <div id="text">
          <h1>
            Are you ready to post a Job and pay for the number of application?
          </h1>
        </div>
        <button class="btn register__btn">Register & post a Job</button>
      </div>
    </section>
    <!--===============HIDE FORM =======-->
    <form class="hidden hide__form" action="">
      <button class="btn hide_close"><i class="ri-close-line"></i></button>
      <h2>Fill This Form To Get Free Demo:</h2>
      <div class="hide_name_input">
        <label for="">Full Name</label>
        <input type="text" class="btn username" placeholder="Your Name" />
      </div>
      <div class="comp_input_wrapper">
        <div class="comp_input">
          <label for="">Your Company Name(English)</label>
          <input
            type="text"
            class="btn selection username"
            placeholder="Company Name"
          />
          <label for="">Mobile</label>
          <input
            type="text"
            class="btn selection phone"
            placeholder="Company Mobile"
          />
          <label for="">Your Company Size</label>
          <select name="" id="" class="btn selection">
            <option value="">select your Company size</option>
            <option value="">500 employees</option>
            <option value="">100 -499 employees</option>
            <option value="">50 -99 employees</option>
            <option value="">10 -49 employees</option>
            <option value="">1 - 9 employees</option>
          </select>
        </div>
        <div class="comp_input">
          <label for="">Your Company Name(Pashto)</label>
          <input
            type="text"
            class="btn selection username"
            placeholder="Company Name in Pashto"
          />
          <label for="">Email</label>
          <input
            type="text"
            class="btn selection email"
            placeholder="Company Email"
          />
          <label for="">Organization position</label>
          <input
            type="text"
            class="btn selection"
            placeholder="Organization position"
          />
        </div>
      </div>
      <input
        type="submit"
        value="Send Request for Free"
        class="btn sumit-form"
      />
    </form>
    <div class="overlay hidden"></div>
    <!--=============== CLIENTS ===============-->
    <section id="clients">
      <div class="client__title">
        <h1>Our Clients</h1>
        <h3>More than 16000 Companies hired, using AfghanTalent</h3>
        <div class="client_search_wrapper">
          <input
            type="search"
            class="btn client_search"
            placeholder="Find Your competitors..."
          />
          <a href="{{url('Companeis_Rate')}}" class="btn client__searchbtn">
            <i class="ri-arrow-right-circle-fill"></i>
          </a>
        </div>
      </div>
      <div class="client_cart_wrapper">
        <div class="client_cart">
          <span><i class="ri-building-2-fill"></i></span>
          <h3>Manufacturing</h3>
          <p>Factories and Industrial Centers</p>
        </div>
        <div class="client_cart">
          <span><i class="ri-handbag-line"></i></span>
          <h3>Retail</h3>
          <p>Shop and Supermarker, FMCG</p>
        </div>
        <div class="client_cart">
          <span><i class="ri-flask-fill"></i></span>
          <h3>Pharmaceutical</h3>
          <p>Hospital and Medical Services</p>
        </div>
        <div class="client_cart">
          <span><i class="ri-fire-fill"></i></span>
          <h3>Oil and Gas</h3>
          <p>Petrochemical and related industries</p>
        </div>
        <div class="client_cart">
          <span><i class="ri-code-box-line"></i></span>
          <h3>IT</h3>
          <p>Software and Internet Services</p>
        </div>
        <div class="client_cart">
          <span><i class="ri-signal-tower-line"></i></span>
          <h3>Telecom</h3>
          <p>Mobile Service Providers</p>
        </div>
        <div class="client_cart">
          <span><i class="ri-settings-4-fill"></i></span>
          <h3>Construction</h3>
          <p>Building, site and dam construction companies</p>
        </div>
      </div>
      <div class="client__slider">
        <a href="#">
          <div class="slider_cart">
            <img src="./assets/images/company logo/alokozay (2).jpg" alt="" />
            <h4>alokozay</h4>
          </div>
        </a>
        <a href="#">
          <div class="slider_cart">
            <img src="./assets/images/company logo/brishna.png" alt="" />
            <h4>Brishna</h4>
          </div>
        </a>

        <a href="#">
          <div class="slider_cart">
            <img src="./assets/images/company logo/cola.png" alt="" />
            <h4>Supper Cola</h4>
          </div>
        </a>
        <a href="#">
          <div class="slider_cart">
            <img src="./assets/images/company logo/meli.jpg" alt="" />
            <h4>Meli Steel</h4>
          </div>
        </a>
        <a href="#">
          <div class="slider_cart">
            <img src="./assets/images/company logo/unicif.png" alt="" />
            <h4>Unicif</h4>
          </div>
        </a>
        <a href="#">
          <div class="slider_cart">
            <img src="./assets/images/company logo/khan.jpg" alt="" />
            <h4>khan steel</h4>
          </div>
        </a>
      </div>
      <button class="btn client-join-btn">join us</button>
    </section>
    <!--=============== work with us ==============-->
    <section id="work-with-us">
      <h1>Why Work With Us?</h1>
      <h3>To find the best talents who help you grow your busines</h3>
      <div class="big_cart_wrapper">
        <div class="big_cart">
          <i class="ri-briefcase-4-line"></i>
          <p>
            <span>20</span>Years of <br />
            Experience
          </p>
        </div>
        <div class="big_cart">
          <i class="ri-group-line"></i>
          <p>
            <span>1</span>to<span>1</span> <br />
            support
          </p>
        </div>
        <div class="big_cart">
          <i class="ri-file-list-2-line"></i>
          <p>
            <span>2</span>millions <br />
            CV's
          </p>
        </div>

        <div class="big_cart">
          <i class="ri-global-line"></i>
          <p>
            <span>The Network</span> <br />
            Global talent simplified
          </p>
        </div>
      </div>
      <div id="small_cart_wrapper">
        <div class="small_cart">
          <p>AfghanTalent is the leading job site and recruitment service.</p>
        </div>
        <div class="small_cart">
          <p>AfghanTalent is the leading job site and recruitment service.</p>
        </div>
        <div class="small_cart">
          <p>AfghanTalent is the leading job site and recruitment service.</p>
        </div>
        <div class="small_cart">
          <p>AfghanTalent is the leading job site and recruitment service.</p>
        </div>
      </div>
      <button class="btn workwithusbtm">Request Now</button>
    </section>
    <!--=============== Agent profile ==============-->
    <section id="Agent">
      <div class="agent_pro">
        <img src="./assets/images/sami.JPG" alt="" />
        <div class="agent_pro_inf">
          I'm <strong>Samiullah Shaheen</strong>, <br />
          contact me to help you:
        </div>
        <p><i class="ri-phone-fill"></i>(+93)798425895</p>
      </div>
    </section>
    <!--=============== FOOTER ===============-->
   @include('layouts.footer')
    <!--=============== MAIN JS ===============-->
    <!-- <script defer type="module" src="./assets/js/module/post_job.js"></script> -->
  </body>
</html>
