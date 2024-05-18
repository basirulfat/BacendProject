<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@lang('msg.blog48')</title>
    <link rel="stylesheet" href="./assets/css/blog.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- icon links -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--=============== HEADER ===============-->
    @include('layouts.header')

    <!-- 4 images -->
    <section class="image-section">
      <div class="image-wrapper">
        <div class="left-Site">
          <a href="#"
            ><img
              src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
              alt=""
          /></a>
          <div class="child-warpper">
            <div class="R">
              <a href="#"
                ><img
                  src="./assets/images/pexels-andrea-piacquadio-840996.jpg"
                  alt=""
                />
              </a>
            </div>

            <div class="R">
              <a href="#">
                <img
                  src="./assets/images/pexels-lex-photography-1109543.jpg"
                  alt=""
              /></a>
            </div>
          </div>
        </div>
        <div class="right-img">
          <a href="#"
            ><img
              src="./assets/images/pexels-moose-photos-1586973.jpg"
              alt="right-image"
            />
          </a>
        </div>
      </div>
    </section>

    <!-- 6 cards -->
    <section class="first-C-section">
      <div class="top-bor">
        <a href="#">@lang('msg.blog1') <i class="fa-solid fa-clock"></i></a>
        <hr />
      </div>
      <div class="card-Warpper">
        <div class="sex-cards">
          <a href="#">
            <img
              src="./assets/images/pexels-andrea-piacquadio-927022.jpg"
              alt=""
            />
            <h3>
            @lang('msg.blog2')
            </h3></a
          >

          <p>
          @lang('msg.blog3')
          </p>

          <a id="link-btn" href="#">@lang('msg.blog4') </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-lex-photography-1109543.jpg"
              alt=""
            />
            <h3>@lang('msg.blog5')</h3></a
          >
          <p>
          @lang('msg.blog6')
          </p>

          <a id="link-btn" href="#">@lang('msg.blog4')</a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-roxanne-minnish-4486796.jpg"
              alt=""
            />
            <h3>@lang('msg.blog7')</h3></a
          >
          <p>
          @lang('msg.blog8')
          </p>
          <a id="link-btn" href="#">@lang('msg.blog4') </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-august-de-richelieu-4427431.jpg"
              alt=""
            />
            <h3>@lang('msg.blog9')</h3></a
          >
          <p>
          @lang('msg.blog10')
          </p>
          <a id="link-btn" href="#">@lang('msg.blog4') </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
              alt=""
            />
            <h3>
            @lang('msg.blog11')
            </h3></a
          >
          <p>
          @lang('msg.blog12')
          </p>

          <a id="link-btn" href="#">@lang('msg.blog4')</a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img src="./assets/images/pexels-pixabay-267350.jpg" alt="" />
            <h3>@lang('msg.blog13')</h3></a
          >
          <p>
          @lang('msg.blog14')
          </p>

          <a id="link-btn" href="#">@lang('msg.blog4') </a>
        </div>
      </div>
      <!-- <div id="bouttom-btn">
        <a href="#"
          ><i class="ri-arrow-down-s-line dropdown__arrow"></i> Show More
          content</a
        >
      </div> -->
    </section>

        <!-- new code -->
        <section class="showCard">
      <div class="cards-wrapper">
        <div class="A See_more">
         <a href="#"
            ><img src="./assets/images/pexels-august-de-richelieu-4427431.jpg" alt="" />
            <h3>@lang('msg.blog53')</h3></a>

          <p>
          @lang('msg.blog54')
          </p>
          <a id="link-btn" href="#">@lang('msg.blog4') </a>
        </div>


        <div class="A See_more">
          <!--  -->
          <a href="#"
            ><img src="./assets/images/pexels-tima-miroshnichenko-6693655.jpg" alt="" />
            <h3>@lang('msg.blog55')</h3></a
          >
          <p>
            
          @lang('msg.blog56')…
          </p>
          <a id="link-btn" href="#">@lang('msg.blog4') </a>
        </div>


        <div class="A See_more">
          <a href="#"
          ><img src="./assets/images/pexels-moose-photos-1586973.jpg" alt="" />
          <h3>@lang('msg.blog57')</h3></a>
        <p>
          
        @lang('msg.blog58')…
        </p>
        <a id="link-btn" href="#">@lang('msg.blog4') </a>

        </div>
      </div>
      <div class="LastA">
      <button class="job__btn"><i class="ri-arrow-down-s-line dropdown__arrow"></i>@lang('msg.blog15')</button>
    </div>
    </section>













    <!-- 3 cards -->
    <section class="first-C-section">
      <div class="top-bor">
        <a href="#">@lang('msg.blog16')</a>
        <hr />
      </div>
      <div class="card-Warpper">
        <div class="sex-cards">
          <a href="#">
            <img
              src="./assets/images/pexels-photomix-company-106341.jpg"
              alt=""
            />
            <h3 id="phagraph-id">@lang('msg.blog17')</h3></a
          >
          <p id="phagraph-id">
          @lang('msg.blog18')
          </p>
          <a id="link-btn" href="#">@lang('msg.blog17')</a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-vlad-bagacian-1228396.jpg"
              alt=""
            />
            <h3 id="phagraph-id">@lang('msg.blog19')</h3>
          </a>
          <p id="phagraph-id">
          @lang('msg.blog20')
          </p>
          <a id="link-btn" href="#">@lang('msg.blog19')</a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-lex-photography-1109543.jpg"
              alt=""
            />
            <h3 id="phagraph-id">@lang('msg.blog17')</h3>
          </a>
          <p id="phagraph-id">
          @lang('msg.blog21')
          </p>
          <a id="link-btn" href="#">@lang('msg.blog17') </a>
        </div>
      </div>
    </section>

    <!-- second 3 cards -->
    <section class="first-C-section">
      <div class="top-bor">
        <a href="#">@lang('msg.blog22')</a>
        <hr />
      </div>

      <div class="card-Warpper">
        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-francesco-ungaro-998641.jpg"
              alt=""
            />
            <h3>@lang('msg.blog23')</h3></a
          >

          <p>
          @lang('msg.blog24')
          </p>
          <a id="link-btn" href="#">@lang('msg.blog25') </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-andrea-piacquadio-3779409.jpg"
              alt=""
            />
            <h3>@lang('msg.blog26')</h3></a
          >

          <p>
          @lang('msg.blog27')
          </p>

          <a id="link-btn" href="#">@lang('msg.blog25') </a>
        </div>

        <div class="sex-cards">
          <a href="#"
            ><img src="./assets/images/pexels-fauxels-3184418.jpg" alt="" />
            <h3>
            @lang('msg.blog28')
            </h3></a
          >

          <p>
          @lang('msg.blog29')
          </p>

          <a id="link-btn" href="#">@lang('msg.blog25') </a>
        </div>
      </div>
    </section>

    <section class="last-C-section">
      <div class="last-bor">
        <hr />
        <a href="#">@lang('msg.blog30')</a>
        <hr />
        <a href="#">@lang('msg.blog31')</a>
        <hr />
        <a href="#">@lang('msg.blog32')</a>
      </div>

      <div class="last-card-Warpper">
        <div class="three-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
              alt=""
            />
            <h3>@lang('msg.blog33')</h3></a
          >
          <p>
          @lang('msg.blog34')
          </p>
          <hr />

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
                alt="small-images"
              />@lang('msg.blog35')</a
            >
          </div>

          <div class="small-images">
            <a href="#"
              ><img src="./assets/images/pi1.png" alt="small-images" />@lang('msg.blog36')</a
            >
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-andrea-piacquadio-3779409.jpg"
                alt="small-images"
              />@lang('msg.blog37')
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-tima-miroshnichenko-6693655.jpg"
                alt="small-images"
              />@lang('msg.blog38')
            </a>
          </div>
        </div>

        <div class="three-cards">
          <a href="#"
            ><img
              src="./assets/images/pexels-moose-photos-1586973.jpg"
              alt=""
            />
            <h3>@lang('msg.blog39')</h3></a
          >
          <p>
          @lang('msg.blog41')
          </p>
          <hr />

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-lex-photography-1109543.jpg"
                alt="small-images"
              />@lang('msg.blog42')
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-photomix-company-106341.jpg"
                alt="small-images"
              />@lang('msg.blog43')
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-pixabay-267350.jpg"
                alt="small-images"
              />@lang('msg.blog44')
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-christina-morillo-1181534.jpg"
                alt="small-images"
              />@lang('msg.blog45')
            </a>
          </div>
        </div>

        <div class="three-cards">
          <a href="#"
            ><img src="./assets/images/pexels-pixabay-267350.jpg" alt="" />
            <h3>@lang('msg.blog46')</h3></a
          >
          <p>
          @lang('msg.blog47')
          </p>
          <hr />

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-roxanne-minnish-4486796.jpg"
                alt="small-images"
              />@lang('msg.blog49')
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-andrea-piacquadio-840996.jpg"
                alt="small-images"
              />@lang('msg.blog50')
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-tima-miroshnichenko-5336958.jpg"
                alt="small-images"
              />@lang('msg.blog51')
            </a>
          </div>

          <div class="small-images">
            <a href="#"
              ><img
                src="./assets/images/pexels-vlad-bagacian-1228396.jpg"
                alt="small-images"
              />@lang('msg.blog52')
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--=============== FOOTER ===============-->
   @include('layouts.footer')
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script defer type="module" src="./assets/js/module/blog.js"></script>
  </body>
</html>
