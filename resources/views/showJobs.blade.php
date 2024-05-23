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
        <div class="search-menu">
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

        <div class="main-container">
        
          <div class="search-type">
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

          <div class="searched-jobs">
            <div class="searched-bar">
              <div class="searched-show">Showing {{ $posts }} Jobs</div>
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
            <div class="job-cards">
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
                  {{$posts->created_at->diffForHumans()}}
                  </button>
                </div>
                <div class="job-card-buttons">
                  <a href="{{url('jobdetail',$posts->id)}}" class="Applybutton">apply</a>
                <!-- <button class="search-buttons card-buttons"></button> -->
                  <!-- <button class="search-buttons card-buttons-msg">
                    Messages
                  </button> -->
                </div>
              </div>
              @endforeach              
            </div>

<!-- ===========================job details page is started here================================ -->
          </div>
          <!-------------------------------pagenation ------------------------------------>

          <!-------------------------------pagenation ------------------------------------>
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

      <!--=============== FOOTER ===============-->
     @include('layouts.footer')
    <script defer src="./assets/js/module/showJobs.js"></script>
  </body>
</html>
