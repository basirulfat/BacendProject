<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@Lang('msg.find0')</title>
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
      <h5>@lang('msg.find1')</h5>
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
          <li><i class="ri-archive-fill"></i><a href="#">@lang('msg.find2')</a></li>
          <li>
            <i class="ri-graduation-cap-fill"></i><a href="#">@lang('msg.find3')</a>
          </li>
          <li><i class="ri-map-pin-2-fill"></i><a href="#">@lang('msg.find4')</a></li>
          <li><i class="ri-briefcase-2-fill"></i><a href="#">@lang('msg.find5')</a></li>
          <li><i class="ri-building-3-fill"></i><a href="#">@lang('msg.find6')</a></li>
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
        <a href="{{url('showJobs')}}" id="view-all-jobs">@lang('msg.find7')</a>
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
          <li><a href="#">@lang('msg.find8')</a></li>
          <li><a href="#">@lang('msg.find9')</a></li>
          <li><a href="#">@lang('msg.find10')</a></li>
          <li><a href="#">@lang('msg.find11')</a></li>
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
              <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn">@lang('msg.find12')</a>
              <button class="search-buttons card-buttons-msg  btn">
              @lang('msg.find13')
              </button>
            </div>
          </div>
          @endforeach

      </div>
   <!-------------------------------pagenation ------------------------------------>

  <!-------------------------------pagenation ------------------------------------>
      <div id="view-all-blog-posts">
        <a href="{{url('showJobs')}}">@lang('msg.find14')</a>
      </div>
    </section>

    <!-- ====================== GUIDE SECTION ==================== -->

    <section id="giude-section">
      <h1>@lang('msg.key43')</h1>
      <div id="direction-for-employer">
        <div class="registrition">
          <i class="ri-user-add-line"></i>
          <a href="#">
            <h3>@lang('msg.key44')</h3>
          </a>
          <p>
          @lang('msg.key45') <br />
          @lang('msg.key46') <br />
          @lang('msg.key47')
          </p>
        </div>

        <div class="registrition">
          <i class="ri-arrow-right-line"></i>
        </div>

        <div class="registrition">
          <i class="ri-file-upload-line"></i>
          <a href="#">
            <h3>@lang('msg.key48')</h3>
          </a>
          <p>
          @lang('msg.key49') <br />
          @lang('msg.key50') <br />
          @lang('msg.key51')
          </p>
        </div>

        <div class="registrition">
          <i class="ri-arrow-right-line"></i>
        </div>

        <div class="registrition">
          <i class="ri-briefcase-line"></i>
          <a href="#">
            <h3>@lang('msg.key52')</h3>
          </a>
          <p>
          @lang('msg.key53') <br />
          @lang('msg.key54') <br />
          @lang('msg.key55')
          </p>
        </div>
      </div>
    </section>

    <!--======================= top companies===================== -->
    <section id="top-company">
      <div id="level-2">
        <h4>@lang('msg.find15')</h4>
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
          >@lang('msg.find16')</a
        >
      </div>
    </section>

    <!-- ======================favrite jobs guides=============== -->

    <section id="find-job-guides">
      <div id="level-3">
        <h4>@lang('msg.find17')</h4>
        <hr />
      </div>

      <div id="cards-guides">
        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-jopwell-2422286.jpg"
            alt=""
          />
          <h5>
          @lang('msg.find18') <br />
          @lang('msg.find19')
          </h5>
          <p>
          @lang('msg.find20') <br />
          @lang('msg.find21') <br />
          @lang('msg.find22')
          </p>
          <a href="{{url('guide')}}">@lang('msg.find23')</a>
          <button>@lang('msg.find24')</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-lex-photography-1109543.jpg"
            alt=""
          />
          <h5>
          @lang('msg.find25')<br />
          @lang('msg.find26')
          </h5>
          <p>
          @lang('msg.find27')<br />
          @lang('msg.find28') <br />
          @lang('msg.find29')
          </p>
          <a href="{{url('guideExperience')}}">@lang('msg.find23')</a>
          <button>@lang('msg.find24')</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-life-of-pix-7974.jpg"
            alt=""
          />
          <h5>
          @lang('msg.find30') <br />
          @lang('msg.find31')
          </h5>
          <p>
          @lang('msg.find32') <br />
          @lang('msg.find33') <br />
          @lang('msg.find34')
          </p>
          <a href="{{url('guide-resume-in-afghanjb')}}">@lang('msg.find23')</a>
          <button>@lang('msg.find24')</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-serpstat-572056.jpg"
            alt=""
          />
          <h5>
          @lang('msg.find35') <br />
          @lang('msg.find36')
          </h5>
          <p>
          @lang('msg.find37')<br />
          @lang('msg.find38') <br />
          @lang('msg.find39')
          </p>
          <a href="{{url('index')}}">@lang('msg.find23')</a>
          <button>@lang('msg.find24')</button>
        </div>
      </div>
      <div id="view-all-blog-posts">
        <a href="{{url('blog')}}">@lang('msg.find40')</a>
      </div>
    </section>

    <!--=========================== FOOTER ======================-->
   @include('layouts.footer')

    <!--======================== MAIN JS ========================-->
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="./assets/js/module/find_job.js"></script>
  </body>
</html>
