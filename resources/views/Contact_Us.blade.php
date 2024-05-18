<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./assets/css/Contact.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!--===============font-awesome ===============-->
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
    <title>@lang('msg.cotact0')</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
   @include('layouts.header')

    <!--=============== Contact Section  ===============-->

    <section id="contact-container">
      <section id="left-container">
        <h2>@lang('msg.cotact1')</h2>
        <section id="contact-form">
          <p>
          @lang('msg.cotact2')( <a href="{{url('FAQ')}}">@lang('msg.cotact3')</a> )
          </p>
          <form action="{{ route('contact.store') }}" method="POST" autocomplete="off">
              @csrf
            <div id="general-container">
              <div class="field-container">

                <label for="username">@lang('msg.cotact4')</label>
                <input type="text" name="name" id="username" /><br />
                @error('name')
                <small style="color:red;">{{$message}}</small>
                @enderror
                
                <label for="email">@lang('msg.cotact5')</label>
                <input type="email" name="email" id="email" /> <br />
                @error('email')
                <small style="color:red;">{{$message}}</small>
                @enderror
              </div>

              <div class="field-container">
                <label for="telephone">@lang('msg.cotact6')</label>
                <input type="tel" name="telephone" id="telephone" /> <br />
                @error('telephone')
                <small style="color:red;">{{$message}}</small>
                @enderror

                <label for="">@lang('msg.cotact7')</label>
                <select name="type">
                  <option value="Problem with site">Problem with site</option>
                  <option value="Feedback & Suggestion">Feedback & Suggestion</option>
                  <option value="Request to Call">Request to Call</option>
                </select>
                
              </div>
            </div>
            <div id="general-container1">
              <div class="field-container1">
                <label for="">@lang('msg.cotact8')</label>
                <input type="text" name="subject" />
                @error('subject')
                <small style="color:red;">{{$message}}</small>
                @enderror
              </div>
              <div class="field-container1">
                <label for="description">@lang('msg.cotact9')</label>
                <textarea name="description" id="description" cols="30" rows="1"></textarea>
                @error('description')
                  <small style="color:red;">{{$message}}</small>
                @enderror
              </div>
            </div>
            <input type="submit" id="submit-btn" value="submit"></input>
          </form>
        </section>
        <div id="contact-company">
          <div class="contact-image">
            <h1>@lang('msg.cotact10')</h1>
            <p>
            @lang('msg.cotact11')
            </p>
            <a href="{{url('post-job')}}" class="com-btn">@lang('msg.cotact12')</a>
          </div>
          <div class="contact-image">
            <h1>@lang('msg.cotact13')</h1>
            <p>
            @lang('msg.cotact14')
            </p>
            <a href="{{url('find-job')}}" class="job-btn">@lang('msg.cotact15')</a>
          </div>
        </div>
      </section>
      <section id="right-container">
        <h2>@lang('msg.cotact16') <br />@lang('msg.cotact17')</h2>
        <address>
          <i class="fa-solid fa-location-dot"></i> @lang('msg.cotact18')<br />
          @lang('msg.cotact19')
        </address>
        <address>
          <i class="fa-solid fa-mobile-screen-button"></i>@lang('msg.cotact20'):0775480806
        </address>
        <i></i
        ><time>
          <i class="fa-solid fa-clock"></i>@lang('msg.cotact21')<br />
          9:00 AM - 4:00 PM
        </time>
        <h2 id="follow">@lang('msg.cotact22')</h2>
        <div class="social-link">
          <a href="#"><i class="fa-solid fa-envelope"></i></a>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <a href="{{url('About')}}" class="about-btn">@lang('msg.cotact23')</a>
      </section>
    </section>

    <!--=============== FOOTER ===============-->
   @include('layouts.footer')

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script defer src="/assets/js/module/contact.js"></script>
  </body>
</html>
