<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job details</title>
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
    <link rel="stylesheet" href="./assets/css/jobdetail.css" />

      <style>  
           
            #map {
                width: 100%;
                height: 100%;
            }
        </style>

</head>
<body>
      <!--=============== HEADER ===============-->
      @include('layouts.header')


<!-- ===========================job details page is started here================================ -->


<div id="job-detail">
                <img id="job-bg" src="assets/images/detail.jpg" alt="" />
                <div id="job-logos">
                <img src="{{ asset(str_replace('public/', 'storage/', $posts->logo)) }}" alt="Company Logo"> 

                </div>
                <div class="job-explain-content">
                  <div class="job-title-wrapper">
                    <div class="job-card-title">{{$posts->jobTitle}}</div>
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
                      Job Title:
                      <span class="comp-location">{{$posts->jobTitle}}.</span>
                    </div>
                    <div class="posted">
                    {{$posts->created_at->diffForHumans()}}<span class="app-number"
                        >98 Application</span
                      >
                    </div>
                  </div>
                  <div class="explain-bar">
                    <div class="explain-contents">
                      <div class="explain-title">Experience</div>
                      <div class="explain-subtitle">{{$posts->experience}}</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Work Level</div>
                      <div class="explain-subtitle">{{$posts->seniority}}</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Location</div>
                      <div class="explain-subtitle">{{$posts->location}}</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Job Type</div>
                      <div class="explain-subtitle">{{$posts->jobType}}</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Offer Salary</div>
                      <div class="explain-subtitle">{{$posts->salary}}/ Month</div>
                    </div>
                  </div>
                  <div class="overview-text">
                    <div class="overview-text-header">jobDescription</div>
                    <div class="overview-text-subheader">
                    {{$posts->jobDescription}}
                    </div>
                  </div>
                  <div class="overview-text">
                    <div class="overview-text-header">Apply Link</div>
                    <div class="overview-text-subheader">
                    {{$posts->applyLink}}
                    </div>
                    <div class="map">
                      <div class="map-container">
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
                      </div>
                    </div>
                  </div>
                  <div class="overview-text">
                    
                  </div>
                </div>
              </div>


   <!--=============== FOOTER ===============-->
     @include('layouts.footer')
     <script defer src="./assets/js/module/showJobs.js"></script>
</body>
</html>