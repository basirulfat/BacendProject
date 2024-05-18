<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/About.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <title>@lang('msg.About1')</title>
  </head>

  <body>
    <!--=============== HEADER ===============-->
   @include('layouts.header')

    <!-- about start -->

    <section class="about">
      <div class="about_contaent">
        <h1> @lang('msg.About1')</h1>
        <p>
        @lang('msg.About2')
        </p>
      </div>
    </section>

    <section class="our_mission">
      <div class="wrapper">
        <h2> @lang('msg.About3')</h2>
        <p>
        @lang('msg.About4')
        </p>

        <h2> @lang('msg.About5')</h2>
        <p>
        @lang('msg.About6')
        </p>
      </div>
    </section>

    <section class="cantainer">
      <div class="wrapper_happ">
        <div class="happiness">
          <img src="./assets/images/company logo/f1.png" alt="happiness" />
          <h3> @lang('msg.About7')</h3>
          <p>
          @lang('msg.About8')
          </p>
        </div>

        <div class="happiness">
          <img src="./assets/images/company logo/f2.png" alt="happiness" />
          <h3> @lang('msg.About9')</h3>
          <p>
          @lang('msg.About10')
          </p>
        </div>

        <div class="happiness">
          <img src="./assets/images/company logo/f3.png" alt="happiness" />
          <h3> @lang('msg.About11')</h3>
          <p>
          @lang('msg.About12')
          </p>
        </div>

        <div class="happiness">
          <img src="./assets/images/company logo/f4.png" alt="happiness" />
          <h3> @lang('msg.About13')</h3>
          <p>
          @lang('msg.About14')
          </p>
        </div>
      </div>
    </section>

    <section class="right">
      <h4> @lang('msg.About15')</h4>
      <div class="image-wrapper">
        <div class="imge-conteant">
          <h5> @lang('msg.About16')</h5>
          <p>
          @lang('msg.About17')
          </p>
        </div>

        <div class="imge-conteant">
          <h5> @lang('msg.About18')</h5>
          <p>
          @lang('msg.About19')
          </p>
        </div>

        <div class="imge-conteant">
          <h5> @lang('msg.About20')</h5>
          <p>
          @lang('msg.About21')
          </p>
        </div>
      </div>
      <h6> @lang('msg.About22')</h6>

      <div class="text-wrapper">
        <div class="text-conteant">
          <h5>1,000,000 CVs</h5>
          <p>
          @lang('msg.About23')
          </p>
        </div>

        <div class="text-conteant">
          <h5> @lang('msg.About24')</h5>
          <p>
          @lang('msg.About25')
          </p>
        </div>

        <div class="text-conteant">
          <h5> @lang('msg.About26')</h5>
          <p>
          @lang('msg.About27')
          </p>
        </div>
      </div>
    </section>

    <section class="end-section">
      <h1> @lang('msg.About28')</h1>
      <div class="big-wrapper">
        <div class="text-class">
          <h2> @lang('msg.About29')</h2>
          <p>
          @lang('msg.About30')
          </p>
          <h2>@lang('msg.About31')</h2>
          <p>
          @lang('msg.About32')
          </p>
          <h2>@lang('msg.About33')</h2>
          <p>
          @lang('msg.About34')
          </p>
        </div>
        <div class="big-img">
          <img src="./assets/images/greeting.jpg" alt="greeting-imge" />
        </div>
      </div>

      <div class="under-class">
        <div class="under-wapper">
          <h3>@lang('msg.About35')</h3>
          <p>
          @lang('msg.About36')
          </p>
          <h3>@lang('msg.About37')</h3>
          <p>@lang('msg.About38')</p>
          <h3>@lang('msg.About39')</h3>
          <p>
          @lang('msg.About40')
          </p>
        </div>
      </div>
    </section>

    <!-- footer is stated here -->

    <!--=============== FOOTER ===============-->
   @include('layouts.footer')

    <script src="assets/js/main.js"></script>
  </body>
</html>
