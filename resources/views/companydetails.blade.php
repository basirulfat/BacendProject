<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company details</title>
    <base href="{{ asset('/') }}">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./assets/css/showJobs.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/companydetails.css" />

</head>
<body>
      <!--=============== HEADER ===============-->
      @include('layouts.header')


<!-- ===========================job details page is started here================================ -->


<div id="job-detail">
                <img id="job-bg" src="assets/images/detail.jpg" alt="" />
                <div id="job-logos">
                <img src="{{ asset('storage/' . $company->image) }}" alt="Company Logo">

                </div>
                <div class="job-explain-content">
                  <div class="job-title-wrapper">
                    <div class="job-card-title">{{$company->company_name}}</div>
                    <div class="job-action">
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                     
                    </div>
                  </div>
                  <div class="job-subtitle-wrapper  comp__details">
                    <div class="company-name">
                      Total Jobs:
                      <span class="comp-location">(12)</span>
                    </div>
                    <div class="posted ">
                    <span class="app-number">     98 Application</span>
                    </div>
                  </div>

                   <h1 id="about">About Company</h1>
             <div class="aboutcompany">
                 <div class="com__details">
                        <h1> <strong><i class="ri-global-line"></i> web site :</strong>  www.google.com</h1>
                        <h1> <strong><i class="ri-phone-fill"></i>  Phone :</strong>{{$company->phone}} </h1>
                        <h1> <strong> <i class="ri-links-fill"></i> Address :</strong>{{$company->position}}</h1>
                        <h1> <strong> <i class="ri-home-office-fill"></i>Company Size :</strong>{{$company->company_size}}</h1>
                    </div>
                 <div class="com__details">
                       map
                 </div>
            </div>
           <h1 id="comp__jobs"> Company Jobs </h1>
           <div class="companydetails_cart_wrrapper">

                
            </div>
       </div>
    </div>


   <!--=============== FOOTER ===============-->
     @include('layouts.footer')
     <script defer src="./assets/js/module/showJobs.js"></script>
</body>
</html>