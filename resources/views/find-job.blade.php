<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Job</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- <script defer src="./assets/js/module/find_job.js"></script> -->
    <!-- <script defer type="module" src="./assets/js/main.js"></script> -->

    <!-- <script defer src="./assets/js/module/find_job.js"></script> -->

    <link rel="stylesheet" href="./assets/css/find_job.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body>
    <!--============================ HEADER =========================-->
   @include('layouts.header')
    <!-- ====================heading section started================== -->
    <section id="heading-section">
      <h5>Employment in the AfghanTalent and national companies</h5>
      <div class="search-container">
        <input
          type="search"
          placeholder="Search For Job Title , Company Name..."
        />
        <button type="submit"><i class="ri-search-line"></i></button>
      </div>
    </section>

    <!--====================== Job catagory section================== -->
    <section id="job-catagories">
      <div class="job-links">
        <ul>
          <li><i class="ri-archive-fill"></i><a href="#">Job Catagory</a></li>
          <li>
            <i class="ri-graduation-cap-fill"></i><a href="#">Education</a>
          </li>
          <li><i class="ri-map-pin-2-fill"></i><a href="#">Location</a></li>
          <li><i class="ri-briefcase-2-fill"></i><a href="#">Industry</a></li>
          <li><i class="ri-building-3-fill"></i><a href="#">Seniority</a></li>
        </ul>
      </div>

      <div id="all-jobs-search-view">
        <div class="A-search">
          <input
            type="search"
            id="search-input"
            class="search-input"
            placeholder="Search Job catagory"
          />
          <button id="searching" type="submit">
            <i class="ri-search-line"></i>
          </button>
        </div>
        <a href="{{url('showJobs')}}" id="view-all-jobs">View all jobs</a>
      </div>

      <div id="all-job-section">
        <div class="A">
        @foreach( $post as $posts)
          <a href="#" class="category-links"><span><i class="ri-megaphone-fill"></i></span>{{$posts->category}}</a>
 
          @endforeach
        </div>

      </div>
    </section>

    <!-- ===============  LAST JOB OPPERTUNITEIES =============== -->
    <section id="last-job">
      <div class="job-linked">
        <ul>
          <li><a href="#">Latest Jobs</a></li>
          <li><a href="#">Recommended Jobs</a></li>
          <li><a href="#">Applied Jobs</a></li>
          <li><a href="#">Saved Jobs</a></li>
        </ul>
      </div>
      <div class="jobcart__wrapper">
        
          @foreach( $post as $posts)
          <div class="index-job-card">
            <div class="job-card-header">
            
            <img src="{{ asset(str_replace('public/', 'storage/', $posts->logo)) }}" alt="Company Logo">
              <div class="job-card-title">{{$posts->jobTitle}} 
              <p>{{$posts->company->company_name}}</p>

              </div>
                              
              <div class="menu-dot"></div>
            </div>
            <div class="job-card-subtitle">
              <!-- jobDescription show less -->
            <?php
                    $description = $posts->jobDescription;
                    $truncated = substr($description, 0, 150);
                    $remaining = strlen($description) > 150;

                    echo nl2br($truncated);
                    if ($remaining) {
                        echo '...';
                    }
                    ?>
              <!-- jobDescription show less -->
            </div>
            <div class="job-detail-buttons">
              <button class="search-buttons detail-button btn">
                {{$posts->jobType}}
              </button>
              <button class="search-buttons detail-button btn">
              {{$posts->experience}}
              </button>
              <button class="search-buttons detail-button btn">
              {{$posts->seniority}}
              </button>
              <button class="search-buttons detail-button btn">
              {{$posts->category}}
              </button>
            </div>
            <div class="job-detail-buttons">
              <button class="search-buttons detail-button btn">
                {{$posts->salary}}
              </button>
              <button class="search-buttons detail-button btn">
              {{$posts->location}}
              </button>
              <button class="search-buttons detail-button btn">
              {{$posts->created_at}}
              </button>
            </div>
            <div class="job-card-buttons">
              <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn">Apply Now</a>
              <button class="search-buttons card-buttons-msg  btn">
                Messages
              </button>
            </div>
          </div>
          @endforeach

      </div>
   <!-------------------------------pagenation ------------------------------------>

  <!-------------------------------pagenation ------------------------------------>
      <div id="view-all-blog-posts">
        <a href="{{url('showJobs')}}">See More Jobs</a>
      </div>
    </section>

    <!-- ====================== GUIDE SECTION ==================== -->

    <section id="giude-section">
      <h1>3 steps to find the job you love!</h1>
      <div id="direction-for-employer">
        <div class="registrition">
          <i class="ri-user-add-line"></i>
          <a href="#">
            <h3>Register</h3>
          </a>
          <p>
            Start Your professional career <br />
            path by registering on AfghanTalent <br />
            website
          </p>
        </div>

        <div class="registrition">
          <i class="ri-arrow-right-line"></i>
        </div>

        <div class="registrition">
          <i class="ri-file-upload-line"></i>
          <a href="#">
            <h3>Upload Your CV</h3>
          </a>
          <p>
            The First step to get hired in your <br />
            dream job is to create a <br />
            professional CV
          </p>
        </div>

        <div class="registrition">
          <i class="ri-arrow-right-line"></i>
        </div>

        <div class="registrition">
          <i class="ri-briefcase-line"></i>
          <a href="#">
            <h3>Apply for jobs</h3>
          </a>
          <p>
            Send your CV to employers and <br />
            let them know you are ready to <br />
            apply for jobs.
          </p>
        </div>
      </div>
    </section>

    <!--======================= top companies===================== -->
    <section id="top-company">
      <div id="level-2">
        <h4>Top Raled Companies in AfghanTalent</h4>
        <hr />
      </div>
      <section>
            <h3 style="font-style:initial;font-variant:small-caps;font-weight:bold;text-align:center">
              Featured Companies
            </h3>


            <script src="assets/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
              jssor_1_slider_init = function() {

                var jssor_1_options = {
                  $AutoPlay: 1,
                  $Idle: 0,
                  $SlideDuration: 1000,
                  $SlideEasing: $Jease$.$Linear,
                  $PauseOnHover: 4,
                  $SlideWidth: 140,
                  $Align: 0
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 1110;

                function ScaleSlider() {
                  var containerElement = jssor_1_slider.$Elmt.parentNode;
                  var containerWidth = containerElement.clientWidth;

                  if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                  } else {
                    window.setTimeout(ScaleSlider, 30);
                  }
                }

                ScaleSlider();

                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
              };
            </script>
            <style>
              /*jssor slider loading skin spin css*/
              .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
              }

              @keyframes jssorl-009-spin {
                from {
                  transform: rotate(0deg);
                }

                to {
                  transform: rotate(360deg);
                }
              }
            </style>
            <div id="jssor_1" style="position:relative;
            margin:0 auto;top:0px;
            left:0px;width:1140px;
            height:130px;
            overflow:hidden;
            visibility:hidden;">
              <!-- Loading Screen -->
              <div data-u="loading" class="jssorl-009-spin"
               style="position:absolute;top:0px;
               left:0px;width:100%;
               height:100%;
               text-align:center;
               background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;
                position:relative;
                top:50%;
                width:38px;
                height:50px;"
                 src="assets/images/company logo/brishna.png" />
              </div>
              <div data-u="slides" style="cursor:default;
              position:relative;
              top:0px;left:0px;
              width:1140px;
              height:130px;
              overflow:hidden;">
               <div>
                  <a href="http://www.ashakirana.in/">
                    <img data-u="image" src="assets/images/company logo/brishna.png" />
                  </a>
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                  <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
                <div>
                <img data-u="image" src="assets/images/company logo/brishna.png" />
                </div>
              </div>

            </div>
            <script type="text/javascript">
              jssor_1_slider_init();
            </script>
          </section>
          <!-- </section> -->
      <div class="view-all-company-btn">
        <a href="{{url('Companeis_Rate')}}" id="view-all-company"
          >View Other Company</a
        >
      </div>
    </section>

    <!-- ======================favrite jobs guides=============== -->

    <section id="find-job-guides">
      <div id="level-3">
        <h4>How to find your favorite</h4>
        <hr />
      </div>

      <div id="cards-guides">
        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-jopwell-2422286.jpg"
            alt=""
          />
          <h5>
            What is a resume and how to 
            write a professional CV?
          </h5>
          <p>
            if you are locking for a job and 
            want to be hired by a reputable 
            company. the first thing you are...
          </p>
          <a href="{{url('guide')}}">Read More</a>
          <button>Candidates</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-lex-photography-1109543.jpg"
            alt=""
          />
          <h5>
            How to write work experience
            on CV?
          </h5>
          <p>
            if you want to write a
            professional resume,it is better 
            to know thar the work that you want to hired there...
          </p>
          <a href="{{url('guideExperience')}}">Read More</a>
          <button>Candidates</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-life-of-pix-7974.jpg"
            alt=""
          />
          <h5>
            Guide to making a resume in 
            AfghanTalent?
          </h5>
          <p>
            During its 17 year of operation, 
            AfghanTalent.com has always tried 
            to change the recruitment...
          </p>
          <a href="{{url('guide-resume-in-afghanjb')}}">Read More</a>
          <button>Candidates</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-serpstat-572056.jpg"
            alt=""
          />
          <h5>
            Interview tips that will help 
            you get hired
          </h5>
          <p>
            Even if you are a professional
            interview and you have been 
            interviewed by different language and can...
          </p>
          <a href="{{url('index')}}">Read More</a>
          <button>Candidates</button>
        </div>
      </div>
      <div id="view-all-blog-posts">
        <a href="{{url('blog')}}">View all blog posts</a>
      </div>
    </section>

    <!--=========================== FOOTER ======================-->
   @include('layouts.footer')

    <!--======================== MAIN JS ========================-->
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="./assets/js/module/find_job.js"></script>
  </body>
</html>
