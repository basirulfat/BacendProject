<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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


    <title>available|Jobs</title>
    <style>  
           
            #map {
                width: 100%;
                height: 300px;
            }
        </style>
  </head>

  <body>



  <!--=============== HEADER ===============-->
          @include('layouts.header')

    <div class="job">
      <div class="wrapper">
        <div class="search-menu"  style="border: 1px solid red;">
          <div class="search-bar">
            <input type="text" class="search-box" autofocus />
            <div class="search item">
              Product Designer
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x"
              >
                <path d="M18 6L6 18M6 6l12 12" />
              </svg>
            </div>
            <div class="search item">
              UI Designer
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x"
              >
                <path d="M18 6L6 18M6 6l12 12" />
              </svg>
            </div>
          </div>
          <div class="search-location">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-map-pin"
            >
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <input type="text" placeholder="search location" />
          </div>
          <div class="search-job">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-briefcase"
            >
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
              <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" />
            </svg>
            <input type="text" placeholder="Job Type" />
          </div>
          <div class="search-salary">
            <svg
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              stroke="currentColor"
              fill="currentColor"
              stroke-width=".4"
            >
              <path
                d="M12.6 18H9.8a.8.8 0 010-1.5h2.8a.9.9 0 000-1.8h-1.2a2.4 2.4 0 010-4.7h2.8a.8.8 0 010 1.5h-2.8a.9.9 0 000 1.8h1.2a2.4 2.4 0 010 4.7z"
                stroke="currentColor"
              />
              <path
                d="M12 20a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8zM12 11.5a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8z"
                stroke="currentColor"
              />
              <path
                d="M21.3 23H2.6A2.8 2.8 0 010 20.2V3.9C0 2.1 1.2 1 2.8 1h18.4C22.9 1 24 2.2 24 3.8v16.4c0 1.6-1.2 2.8-2.8 2.8zM2.6 2.5c-.6 0-1.2.6-1.2 1.3v16.4c0 .7.6 1.3 1.3 1.3h18.4c.7 0 1.3-.6 1.3-1.3V3.9c0-.7-.6-1.3-1.3-1.3z"
                stroke="currentColor"
              />
              <path
                d="M23.3 6H.6a.8.8 0 010-1.5h22.6a.8.8 0 010 1.5z"
                stroke="currentColor"
              />
            </svg>
            <input type="text" placeholder="Salary Range" />
          </div>
          <button class="search-button">Find Job</button>
        </div>

        <!-- ==============================  main container is started here ===================== -->

        <div class="main-container"  style="border: 2px solid green;">
        
          <div class="search-type" style="border: 2px solid blue;">
            <div class="alert">
              <div class="alert-title">Create Job Alert</div>
              <div class="alert-subtitle">
                Create a job alert now and never miss a job
              </div>
              <input type="text" placeholder="Enter job keyword" />
              <button class="search-buttons">Create Job Alerts</button>
            </div>
            <div class="job-time">
              <div class="job-time-title">Type of Employment</div>
              <div class="job-wrapper">
                <div class="type-container">
                  <input type="checkbox" id="job1" class="job-style" checked />
                  <label for="job1">Full Time Jobs</label>
                  <span class="job-number">56</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job2" class="job-style" />
                  <label for="job2">Part Time Jobs</label>
                  <span class="job-number">43</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job3" class="job-style" />
                  <label for="job3">Remote Jobs</label>
                  <span class="job-number">24</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job4" class="job-style" />
                  <label for="job4">Internship Jobs</label>
                  <span class="job-number">27</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job5" class="job-style" />
                  <label for="job5">Contract</label>
                  <span class="job-number">76</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job6" class="job-style" />
                  <label for="job6">Training Jobs</label>
                  <span class="job-number">28</span>
                </div>
              </div>
            </div>
            <div class="job-time">
              <div class="job-time-title">Seniority Level</div>
              <div class="job-wrapper">
                <div class="type-container">
                  <input type="checkbox" id="job7" class="job-style" />
                  <label for="job7">Student Level</label>
                  <span class="job-number">98</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job8" class="job-style" />
                  <label for="job8">Entry Level</label>
                  <span class="job-number">44</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job9" class="job-style" checked />
                  <label for="job9">Mid Level</label>
                  <span class="job-number">35</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job10" class="job-style" checked />
                  <label for="job10">Senior Level</label>
                  <span class="job-number">29</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job11" class="job-style" />
                  <label for="job11">Directors</label>
                  <span class="job-number">26</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job12" class="job-style" />
                  <label for="job12">VP or Above</label>
                  <span class="job-number">56</span>
                </div>
              </div>
            </div>
            <div class="job-time">
              <div class="job-time-title">Salary Range</div>
              <div class="job-wrapper">
                <div class="type-container">
                  <input type="checkbox" id="job1" class="job-style" />
                  <label for="job1">$700 - $1000</label>
                  <span class="job-number">49</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job2" class="job-style" />
                  <label for="job2">$1000 - $1200</label>
                  <span class="job-number">67</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job3" class="job-style" />
                  <label for="job3">$1200 - $1400</label>
                  <span class="job-number">24</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job4" class="job-style" />
                  <label for="job4">$1500 - $1800</label>
                  <span class="job-number">27</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job5" class="job-style" checked />
                  <label for="job5">$2000 - $3000</label>
                  <span class="job-number">76</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job6" class="job-style" checked />
                  <label for="job6">$3000 - $4000</label>
                  <span class="job-number">22</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job6" class="job-style" />
                  <label for="job6">$4000 - $5000</label>
                  <span class="job-number">18</span>
                </div>
              </div>
            </div>
          </div>

   <!-- =============== job cart container part is started here ===============--->

          <div class="searched-jobs" style="border: 2px solid pink;">
            <div class="searched-bar">
              <div class="searched-show">Showing 46 Jobs</div>
              <!-- -------------dark mode---------------------- -->
              <div class="dark-light">
                    <svg
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="1.5"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      >
                      <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                    </svg>
                  </div>
              <div class="searched-sort">
                Sort by: <span class="post-time">Newest Post </span
                ><span class="menu-icon">▼</span>
              </div>
            </div>
            <!---------------- cart wordwrap -------------------->
            <div class="job-cards" style="border: 2px solid red;">
            @foreach( $post as $posts)
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    viewBox="0 -13 512 512"
                  >
                  <div class="job_logo">
                    <img src="{{ asset(str_replace('public/', 'storage/', $posts->logo)) }}" alt="Company Logo"> 
                    </div>
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title"> {{$posts->jobTitle}} </div>
                <div class="job-card-subtitle">
                  <!-- jobDescription show less -->
                  <?php
                        $description = $posts->jobDescription;
                        $truncated = substr($description, 0, 100);
                        $remaining = strlen($description) > 100;

                        echo nl2br($truncated);
                        if ($remaining) {
                            echo '...';
                        }
                        ?>
                  <!-- jobDescription show less -->

                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button kharb">
                    {{$posts->jobType}}
                  </button>
                  <button class="search-buttons detail-button">
                  {{$posts->location}}
                  </button>
                  <button class="search-buttons detail-button">
                  {{$posts->category}}
                  </button>
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button kharb">
                    {{$posts->salary}}
                  </button>
                  <button class="search-buttons detail-button">
                  {{$posts->experience}}
                  </button>
                  <button class="search-buttons detail-button">
                  {{$posts->created_at}}
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              @endforeach              
            </div>

      <!-- ------------------sidbar carts is started here ------------------------------->

            <div class="job-overview"     style="border: 2px solid black;">
         
              <div class="job-overview-cards"   style="border: 2px solid black;">
              @foreach( $post as $posts)
                <div class="job-overview-card"   style="border: 2px solid red;">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper" >
                    <svg
                        viewBox="0 -13 512 512"
                      >
                      <div class="job_logo sidbar-logo">
                        <img src="{{ asset(str_replace('public/', 'storage/', $posts->logo)) }}" alt="Company Logo"> 
                        </div>
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">{{$posts->jobTitle}}</div>
                        <div class="job-card-subtitle">
                          2972 Westheimer Rd. Santa Ana.
                        </div>
                      </div>
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
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">{{$posts->jobType}}</div>
                      <div class="search-buttons level-button">
                      {{$posts->seniority}}
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                @endforeach

                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        style="background-color: #f76754"
                      >
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M0 .5h4.2v23H0z"
                          fill="#042b48"
                          data-original="#212121"
                        />
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M15.4.5a8.6 8.6 0 100 17.2 8.6 8.6 0 000-17.2z"
                          fill="#fefefe"
                          data-original="#f4511e"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">Sr. Product Designer</div>
                        <div class="job-card-subtitle">
                          1901 Thornridge Cir.Shiloh, Hawaii.
                        </div>
                      </div>
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
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>

               
    
              </div>


<!-- ===========================job details page is started here================================ -->


              <div class="job-explain"   style="border: 2px solid red;">
                <img class="job-bg" alt="" />
                <div class="job-logos">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                    style="background-color: #f76754"
                  >
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M0 .5h4.2v23H0z"
                      fill="#042b48"
                      data-original="#212121"
                    ></path>
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M15.4.5a8.6 8.6 0 100 17.2 8.6 8.6 0 000-17.2z"
                      fill="#fefefe"
                      data-original="#f4511e"
                    ></path>
                  </svg>
                </div>
                <div class="job-explain-content">
                  <div class="job-title-wrapper">
                    <div class="job-card-title">UI /UX Designer</div>
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
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-share-2"
                      >
                        <circle cx="18" cy="5" r="3" />
                        <circle cx="6" cy="12" r="3" />
                        <circle cx="18" cy="19" r="3" />
                        <path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4" />
                      </svg>
                    </div>
                  </div>
                  <div class="job-subtitle-wrapper">
                    <div class="company-name">
                      Patreon
                      <span class="comp-location">Londontowne, MD.</span>
                    </div>
                    <div class="posted">
                      Posted 8 days ago<span class="app-number"
                        >98 Application</span
                      >
                    </div>
                  </div>
                  <div class="explain-bar">
                    <div class="explain-contents">
                      <div class="explain-title">Experience</div>
                      <div class="explain-subtitle">Minimum 1 Year</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Work Level</div>
                      <div class="explain-subtitle">Senior level</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Employee Type</div>
                      <div class="explain-subtitle">Full Time Jobs</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Offer Salary</div>
                      <div class="explain-subtitle">$2150.0 / Month</div>
                    </div>
                  </div>
                  <div class="overview-text">
                    <div class="overview-text-header">Overview</div>
                    <div class="overview-text-subheader">
                      We believe that design (and you) will be critical to the
                      company's success. You will work with our founders and our
                      early customers to help define and build our product
                      functionality, while maintaining the quality bar that
                      customers have come to expect from modern SaaS
                      applications. You have a strong background in product
                      design with a quantitavely anf qualitatively analytical
                      mindset. You will also have the opportunity to craft our
                      overall product and visual identity and should be
                      comfortable to flex into working.
                    </div>
                  </div>
                  <div class="overview-text">
                    <div class="overview-text-header">Job Description</div>
                    <div class="overview-text-item">
                      3+ years working as a product designer.
                    </div>
                    <div class="overview-text-item">
                      A portfolio that highlights your approach to problem
                      solving, as well as you skills in UI.
                    </div>
                    <div class="overview-text-item">
                      Experience conducting research and building out smooth
                      flows.
                    </div>
                    <div class="overview-text-item">
                      Excellent communication skills with a well-defined design
                      process.
                    </div>
                    <div class="overview-text-item">
                      Familiarity with design tools like Sketch and Figma
                    </div>
                    <div class="overview-text-item">
                      Up-level our overall design and bring consistency to
                      end-user facing properties
                    </div>
                  </div>
                </div>
              </div>
          <!-- ====================job details page is started here====================== -->



            </div>
          </div>
        </div>
      </div>
    </div>


    <section>
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
  <div class="message_container"><a href="{{ url('/chat') }}"><i class="ri-message-2-fill  message"></i></a></div>

      <!--=============== FOOTER ===============-->
     @include('layouts.footer')
    <script defer src="./assets/js/module/showJobs.js"></script>
  </body>
</html>
