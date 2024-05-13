<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/style.css" />

  <title>AfghanTalent</title>
  <style>  
            .text-center {
                text-align: center;
                color:light;
                font-size:40px;
            }
            #map {
                width: 100%;
                height: 400px;
            }
        </style>
</head>

<body>
  <!--=============== HEADER ===============-->
  @include('layouts.header')
  <!-- =============== HEADING SECTION =============== -->
  <section id="heading-container">
    <div class="heading__part">
      <div class="first__img img"></div>
      <div class="FT__catchword">
        <h1>Find your job here</h1>
        <h2>We provide the best oppertunities for you</h2>
        <div class="registration__btn">



          <a class="btn head__btn" href="{{url('find-job')}}">@lang('msg.Apply for job')</a>
          <a class="btn head__btn" href="{{route('personalInformation.create')}}">Create Your CV</a>

         


        </div>
      </div>
      <div class="second__img img"></div>
    </div>
    <div class="featurs">
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-search-line"></i></a>
        </div>
        <h4>Find jobs</h4>
      </div>
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-hand-heart-line"></i></a>
        </div>
        <h4>Job coaching</h4>
      </div>
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-survey-line"></i></a>
        </div>
        <h4>Career Tests</h4>
      </div>
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-wallet-3-line"></i></a>
        </div>
        <h4>Salary Estimation</h4>
      </div>
      <div class="featurs__item">
        <div class="featurs__icon">
          <a href="#"><i class="ri-message-2-line"></i></a>
        </div>
        <h4>Company Reviews</h4>
      </div>
    </div>
  </section>
  <!-- =============== SLAIDER SECTION =============== -->
  <section id="slider">
    <div class="slider__container">
      <button class="btn slider__btn1">
        <i class="ri-arrow-left-s-line"></i>
      </button>
      <div class="slider__wrapper">
       
            
     
        <div class="company__info">
          <div class="company__logo">
            <img src="./assets/images/company logo/unicif.png" alt="" />
            <h3>Unicif</h3>
            <span>N</span>
            <h4>job oppertunities</h4>
          </div>
        </div>
        <div class="company__info">
          <div class="company__logo">
            <img src="./assets/images/company logo/khan.jpg" alt="" />
            <h3>Khan Steel</h3>
            <span>N</span>
            <h4>job oppertunities</h4>
          </div>
        </div>
        <div class="company__info">
          <div class="company__logo">
            <img src="./assets/images/company logo/cola.png" alt="" />
            <h3>Supper Cola</h3>
            <span>N</span>
            <h4>job oppertunities</h4>
          </div>
        </div>
        <div class="company__info">
          <div class="company__logo">
            <img src="./assets/images/company logo/meli.jpg" alt="" />
            <h3>Meli Steel</h3>
            <span>N</span>
            <h4>job oppertunities</h4>
          </div>
        </div>
        <div class="company__info">
          <div class="company__logo">
            <img src="./assets/images/company logo/brishna.png" alt="" />
            <h3>Brishna</h3>
            <span>N</span>
            <h4>job oppertunities</h4>
          </div>
        </div>


        <div class="company__info">
          <div class="company__logo">
            <img src="./assets/images/company logo/brishna.png" alt="" />
            <h3>Brishna</h3>
            <span>N</span>
            <h4>job oppertunities</h4>
          </div>
        </div>




        <div class="company__info">
          <div class="company__logo">
            <img src="./assets/images/company logo/brishna.png" alt="" />
            <h3>Brishna</h3>
            <span>N</span>
            <h4>job oppertunities</h4>
          </div>
        </div>


      </div>
      <!-- <div class="highlighted-area"></div> -->

      <button class="btn slider__btn2">
        <i class="ri-arrow-right-s-line"></i>
      </button>
    </div>
  </section>
  <!-- =============== job filter =============== -->
  <section id="jobs">
    <h1>Find Jobs</h1>
    <div class="job__filteration__wrapper">
      <div class="category">
        <i class="ri-archive-fill job__icon"></i>
        <h4>Catagories</h4>
      </div>
      <div class="category">
        <i class="ri-map-pin-fill job__icon"></i>
        <h4>Location</h4>
      </div>
      <div class="category">
        <i class="ri-community-line job__icon"></i>
        <h4>Companies</h4>
      </div>
      <div class="category">
        <i class="ri-briefcase-fill job__icon"></i>
        <h4>Industories</h4>
      </div>
      <div class="category">
        <i class="ri-medal-line job__icon"></i>
        <h4>Seniority</h4>
      </div>
    </div>
    <div class="line"></div>

    <div class="job__collection">
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
      <div class="jobs__links">
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
        <a href="#">Companies <span>(N)</span></a>
      </div>
    </div>
    <div class="See_more other">
      <div class="job__collection2 ">
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
        </div>
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
        </div>
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
        </div>
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
        </div>
        <div class="jobs__links">
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>
          <a href="#">Companies <span>(N)</span></a>

        </div>
      </div>
    </div>
    <div class="job__btn">
      <button class="btn More_Jobs">
        See More<i class="ri-arrow-down-s-line"></i>
      </button>
    </div>
  </section>
  <!-- =============== JOB SEARCH =============== -->
  <section id="job-searching">
    <h1>Top Job Searches</h1>
    <div class="job__parts">
      <a href="#">Alokozay</a>
      <a href="#">Software Development</a>
      <a href="#">Supper Cola</a>
      <a href="#">Engineering</a>
      <a href="#">Marketing</a>
      <a href="#">Pharmaceutical</a>
      <a href="#">Sales</a>
      <a href="#">Accounting</a>
    </div>
    <div class="job__parts">
      <a href="#">IT Network</a>
      <a href="#">Graphic Design</a>
      <a href="#">unicif</a>
      <a href="#">Medical Representative</a>
      <a href="#">Manager</a>
      <a href="#">Pharmaceutical</a>
      <a href="#">Sales</a>
    </div>
    <div class="job__parts">
      <a href="#">Administrative Assistant</a>
      <a href="#">Project Management</a>
      <a href="#">W . H . O</a>
    </div>
  </section>
      <!--=======================map============================== -->
  <section>
  <h1 class="text-center">Find Job Location in Maps and See</h1>
        <div id="map"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsvEv3lrJ4A8_M4HofeymlNoqz48NqoQc&callback=initMap" async></script>
        <script>
            let map, activeInfoWindow, markers = [];

            /* ----------------------------- Initialize Map ----------------------------- */
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: {
                        lat: 28.626137,
                        lng: 79.821603,
                    },
                    zoom: 15
                });

                map.addListener("click", function(event) {
                    mapClicked(event);
                });

                initMarkers();
            }

            /* --------------------------- Initialize Markers --------------------------- */
            function initMarkers() {
                const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

                for (let index = 0; index < initialMarkers.length; index++) {

                    const markerData = initialMarkers[index];
                    const marker = new google.maps.Marker({
                        position: markerData.position,
                        label: markerData.label,
                        draggable: markerData.draggable,
                        map
                    });
                    markers.push(marker);

                    const infowindow = new google.maps.InfoWindow({
                        content: `<b>${markerData.position.lat}, ${markerData.position.lng}</b>`,
                    });
                    marker.addListener("click", (event) => {
                        if(activeInfoWindow) {
                            activeInfoWindow.close();
                        }
                        infowindow.open({
                            anchor: marker,
                            shouldFocus: false,
                            map
                        });
                        activeInfoWindow = infowindow;
                        markerClicked(marker, index);
                    });

                    marker.addListener("dragend", (event) => {
                        markerDragEnd(event, index);
                    });
                }
            }

            /* ------------------------- Handle Map Click Event ------------------------- */
            function mapClicked(event) {
                console.log(map);
                console.log(event.latLng.lat(), event.latLng.lng());
            }

            /* ------------------------ Handle Marker Click Event ----------------------- */
            function markerClicked(marker, index) {
                console.log(map);
                console.log(marker.position.lat());
                console.log(marker.position.lng());
            }

            /* ----------------------- Handle Marker DragEnd Event ---------------------- */
            function markerDragEnd(event, index) {
                console.log(map);
                console.log(event.latLng.lat());
                console.log(event.latLng.lng());
            }
        </script>
  </section>
  <!-- ===============  LAST JOB OPPERTUNITEIES =============== -->
  <section id="last-job">
    <h1>Last Job oppertunities</h1>
    <div class="last__job__input">
    <form action="{{ route('postSearch') }} " method="get" enctype="multipart/form-data">
      <input type="text" id="fruits" list="fruit-list" placeholder="Select job category" />

      <datalist id="fruit-list" name="category">
               <option value="">...</option>
               <option value="Admin-Clerical">Admin-Clerical</option>
               <option value="Agriculture">Agriculture</option>
               <option value="Automotive">Automotive</option>
               <option value="Accounting">Accounting</option>
               <option value="Banking">Banking</option>
               <option value="Biotech">Biotech</option>
               <option value="Business Development">Business Development</option>
               <option value="Construction">Construction</option>
               <option value="Consultant">Consultant</option>
               <option value="Customer Service">Customer Service</option>
			         <option value="Capacity Building">Capacity Building</option>			  
               <option value="Communication">Communication</option>
               <option value="Design">Design</option>
               <option value="Distribution-Shipping">Distribution-Shipping</option>
               <option value="Education">Education</option>
               <option value="Engineering">Engineering</option>
               <option value="Entry Level">Entry Level</option>
               <option value="Executive">Executive</option>
               <option value="Facilities">Facilities</option>
               <option value="Finance">Finance</option>
               <option value="Franchise">Franchise</option>
               <option value="General">General</option>
               <option value="General Business">General Business</option>
               <option value="General Labor">General Labor</option>
               <option value="Government">Government</option>
               <option value="Grocery">Grocery</option>
               <option value="Health Care">Health Care</option>
               <option value="Hospitality-Hotel">Hospitality-Hotel</option>
               <option value="Human Resources">Human Resources</option>
				       <option value="IT">IT</option>
               <option value="Information Technology">Information Technology</option>
               <option value="Installation-Maint-Repair">Installation-Maint-Repair</option>
               <option value="Insurance">Insurance</option>
               <option value="Inventory">Inventory</option>
               <option value="Legal">Legal</option>
               <option value="Management">Management</option>
               <option value="Marketing">Marketing</option>
               <option value="Media-Journalism">Media-Journalism</option>
               <option value="Monitoring and Evaluation">Monitoring and Evaluation</option>
               <option value="Nonprofit-Social Services">Nonprofit-Social Services</option>
               <option value="Nurse">Nurse</option>
               <option value="Natural Resources Management">Natural Resources Management</option>
               <option value="Other">Other</option>
               <option value="Pharmaceutical">Pharmaceutical</option>
               <option value="Professional Services">Professional Services</option>
               <option value="Program">Program</option>
               <option value="Purchasing-Procurement">Purchasing-Procurement</option>
               <option value="QA-Quality Control">QA-Quality Control</option>
               <option value="Real Estate">Real Estate</option>
               <option value="Research">Research</option>
               <option value="Restaurant-Food Service">Restaurant-Food Service</option>
               <option value="Retail">Retail</option>
               <option value="Support">Support</option>
               <option value="Sales">Sales</option>
               <option value="Science">Science</option>
               <option value="Security">Security</option>
               <option value="Skilled Labor">Skilled Labor</option>
               <option value="Strategy-Planning">Strategy-Planning</option>
               <option value="Supply Chain">Supply Chain</option>
               <option value="Telecommunications">Telecommunications</option>
               <option value="Training">Training</option>
				       <option value="Telecom">Telecom</option>
               <option value="Translator">Translator</option>
               <option value="Transportation">Transportation</option>
               <option value="Veterinary Services">Veterinary Services</option>
               <option value="Warehouse">Warehouse</option>  
      </datalist>
    </form>
    </div>
     <!--============================== new========================================== -->

    <div class="jobcart__wrapper">

      <!--============================== new========================================== -->
    
  <!-- cartssssssssssssssssssssssssssssss is comemted -->
      <div class="job-card">
        <div class="job-card-header">
        <img src="assets/images/company logo/khan.jpg" alt="">
          <div class="job-card-title">Project Manager</div>
          <div class="menu-dot"></div>
        </div>
        <div class="job-card-subtitle">
          The User Experience Designer position exists to create
          compelling and digital user experience through excellent
          design...
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            Full Time
          </button>
          <button class="search-buttons detail-button btn">
            Min. 1 Year
          </button>
          <button class="search-buttons detail-button btn">
            Senior level
          </button>
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            3000 $
          </button>
          <button class="search-buttons detail-button btn">
            3 hour ago
          </button>
        </div>
        <div class="job-card-buttons">
          <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn">Apply Now</a>
          <button class="search-buttons card-buttons-msg  btn">
            Messages
          </button>
        </div>
      </div>

      <div class="job-card">
        <div class="job-card-header">
        <img src="assets/images/company logo/khan.jpg" alt="">
       <div class="job-card-title">Cleaner</div>
          <div class="menu-dot"></div>
        </div>
        <div class="job-card-subtitle">
          The User Experience Designer position exists to create
          compelling and digital user experience through excellent
          design...
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            Full Time
          </button>
          <button class="search-buttons detail-button btn">
            Min. 1 Year
          </button>
          <button class="search-buttons detail-button btn">
            Senior level
          </button>
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            3000 $
          </button>
          <button class="search-buttons detail-button btn">
            3 hour ago
          </button>
        </div>
        <div class="job-card-buttons">
          <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn">Apply Now</a>
          <button class="search-buttons card-buttons-msg  btn">
            Messages
          </button>
        </div>
      </div>

      <div class="job-card">
        <div class="job-card-header">
          <img src="assets/images/company logo/khan.jpg" alt="">
          <div class="job-card-title">Employes</div>
          <div class="menu-dot"></div>
        </div>
        <div class="job-card-subtitle">
          The User Experience Designer position exists to create
          compelling and digital user experience through excellent
          design...
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            Full Time
          </button>
          <button class="search-buttons detail-button btn">
            Min. 1 Year
          </button>
          <button class="search-buttons detail-button btn">
            Senior level
          </button>
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            3000 $
          </button>
          <button class="search-buttons detail-button btn">
            3 hour ago
          </button>
        </div>
        <div class="job-card-buttons">
          <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn">Apply Now</a>
          <button class="search-buttons card-buttons-msg  btn">
            Messages
          </button>
        </div>
      </div>

      <div class="job-card">
        <div class="job-card-header">
          <img src="assets/images/company logo/unicif.png" alt="">
          <div class="job-card-title">Supper waizer</div>
          <div class="menu-dot"></div>
        </div>
        <div class="job-card-subtitle">
          The User Experience Designer position exists to create
          compelling and digital user experience through excellent
          design...
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            Full Time
          </button>
          <button class="search-buttons detail-button btn">
            Min. 1 Year
          </button>
          <button class="search-buttons detail-button btn">
            Senior level
          </button>
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            3000 $
          </button>
          <button class="search-buttons detail-button btn">
            3 hour ago
          </button>
        </div>
        <div class="job-card-buttons">
          <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn">Apply Now</a>
          <button class="search-buttons card-buttons-msg  btn">
            Messages
          </button>
        </div>
      </div>

      <div class="job-card">
        <div class="job-card-header">
          <img src="assets/images/company logo/meli.jpg" alt="">
          <div class="job-card-title">Cook / Cleaner</div>
          <div class="menu-dot"></div>
        </div>
        <div class="job-card-subtitle">
          The User Experience Designer position exists to create
          compelling and digital user experience through excellent
          design...
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            Full Time
          </button>
          <button class="search-buttons detail-button btn">
            Min. 1 Year
          </button>
          <button class="search-buttons detail-button btn">
            Senior level
          </button>
        </div>
        <div class="job-detail-buttons">
          <button class="search-buttons detail-button btn">
            3000 $
          </button>
          <button class="search-buttons detail-button btn">
            3 hour ago
          </button>
        </div>
        <div class="job-card-buttons">
          <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn">Apply Now</a>
          <button class="search-buttons card-buttons-msg  btn">
            Messages
          </button>
        </div>
      </div>
    </div>
    <div class="job__btn">
      <a href="{{url('showJobs')}}">See More Jobs<i class="ri-arrow-down-s-line"></i></a>

    </div>
  </section>
  <!-- =============== start with you =============== -->
  <section id="start-with-you">
    <h1>Change Start With You</h1>
    <div class="star__wrapper">
      <div class="start__links__wrapper">
        <div class="start__links">
          <a href="{{url('CreateCV')}}">Build your resume</a>
          <a href="{{url('CreateCV')}}"> <i class="ri-arrow-right-s-line"></i></a>
        </div>
        <div class="start__links">
          <a href="#">Apply for jobs</a>
          <a href="#"><i class="ri-arrow-right-s-line"></i></a>
        </div>
        <div class="start__links">
          <a href="#">Test Your skells</a>
          <a href="#"><i class="ri-arrow-right-s-line"></i></a>
        </div>
        <div class="start__links">
          <a href="#">stimate your salary</a>
          <a href="#"><i class="ri-arrow-right-s-line"></i></a>
        </div>
        <div class="start__links">
          <a href="{{url('post-job')}}">Post a Job</a>
          <a href="{{url('post-job')}}"><i class="ri-arrow-right-s-line"></i></a>
        </div>
      </div>
      <div class="start__img img"></div>
    </div>
  </section>
  <!-- =============== GUIDE SECTION =============== -->
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
          <h3>Create Your CV</h3>
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

  <!-- ===============FAQ =============== -->
  <section id="FAQ">
    <h1>FAQ</h1>
    <div class="faq-wrapper">
      <div class="question">
        <h5>What is AfghanTalent?</h5>
        <button class="btn faq">
          <i class="ri-arrow-down-s-line"></i>
        </button>
      </div>
      <div class="answer">
        <p>
          AfghanTalent.com is the leading job site and online recruitment
          service in , Afghanistan a database of over 2,000,000 professionals,
          specialists and managers across all industries and job categories.
          The company specializes in matching top candidates with attractive
          career opportunities through its website. It serves as the primary
          recruitment channel for many leading Afghani companies and virtually
          all the international firms operating in Afghanistan.
        </p>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="question">
        <h5>
          Which companies do you work with and what kind of jobs do you have?
        </h5>
        <button class="btn faq"><i class="ri-arrow-down-s-line"></i></button>
      </div>
      <div class="answer">
        <p>
          Our clients are typically international firms operating in
          Afghanistan and their subsidiaries, or leading Afghans firms. The
          vacancies advertised on our website come from a wide range of
          industries and job categories. Whatever your field of expertise is,
          we encourage you to register and complete your CV, and sooner or
          later you are likely to find job opportunities matching your
          interests. The main functions we cover include (but are not limited
          to):
        <ul>
          <li> • Accounting & finance</li>
          <li> • Sales & marketing </li>
          <li> • Administration and secretarial</li>
          <li> • Commercial & procurement </li>
          <li> • Strategy & business development</li>
          <li> • General management</li>
          <li> • IT & systems </li>
          <li> • Engineering & manufacturing</li>
        </ul>
        </p>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="question">
        <h5>How secure is the personal data I submit to AfghanTalent?</h5>
        <button class="btn faq"><i class="ri-arrow-down-s-line"></i></button>
      </div>
      <div class="answer">
        <p>
          We do not disclose your personal data to any third parties except
          for the purpose of introducing you to an employer.
        </p>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="question">
        <h5>Do I need to pay AfghanTalent for this service?</h5>
        <button class="btn faq"><i class="ri-arrow-down-s-line"></i></button>
      </div>
      <div class="answer">
        <p>
          No! Whether candidates find a job or not, they would not be charged
          for this service.
        </p>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="question">
        <h5>How can I send my feedbacks to AfghanTalent?</h5>
        <button class="btn faq"><i class="ri-arrow-down-s-line"></i></button>
      </div>
      <div class="answer">
        <p>
          Candidates are able to send their feedbacks through following
          routes: * Click on 'Home' and send the feedback from 'contact us'
          section at the bottom of website feedbacks and suggestions will be
          reviewed in our steering committee meetings.
        </p>
      </div>
    </div>
  </section>

  <!--=============== FOOTER ===============-->
  @include('layouts.footer')
  <!--=============== MAIN JS ===============-->

  <script defer type="module" src="./assets/js/main.js"></script>

</body>

</html>