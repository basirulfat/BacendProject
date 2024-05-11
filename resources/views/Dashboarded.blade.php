<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/Dashboardstyle.css" />
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
    <title>Dashboard</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    @include('layouts.header')

    <section id="Dboard-container">
      <!-- personal info -->
      <div id="account-info">
        <div class="personal-info">
          <div class="img_cv"></div>
          <h2>Nasratullah</h2>
          <a href="#" class="a-link"
            ><i class="ri-download-cloud-2-line"></i>Download CV</a
          >
        </div>
        <div class="cv-btn">
          <input type="range" name="" id="range" />
          <a href="CV.html" class="a-link cv-link">Complete CV</a>

          <label for="PDF-file" class="Upload-pdf"
            ><i class="ri-upload-cloud-2-line"></i>Upload Personal PDF</label
          >
          <input type="file" name="" id="PDF-file" />
        </div>
      </div>

      <div id="job-info">
        <div class="find-job">
          <div class="small-section">
            <a class="job-search search-for" href="#">Continue searching for</a>
            <a class="job-search apply-for" href="#">Applied jobs</a>
          </div>

          <div class="job-wrapper">
            <h2>What kind of job you are looking for?</h2>
            <div id="job-search-info">
              <label for="">Job Title</label>
              <input
                type="search"
                name=""
                id=""
                placeholder="ex:sales expert, resceptionist ..."
              />
              <label for="">Location</label>
              <select class="provinceDropdown">
                <option value="">Select Province</option>
                <option value="Badakhshan">Badakhshan</option>
                <option value="Badghis">Badghis</option>
                <option value="Baghlan">Baghlan</option>
                <option value="Balkh">Balkh</option>
                <option value="Bamyan">Bamyan</option>
                <option value="Daykundi">Daykundi</option>
                <option value="Farah">Farah</option>
                <option value="Faryab">Faryab</option>
                <option value="Ghazni">Ghazni</option>
                <option value="Ghor">Ghor</option>
                <option value="Helmand">Helmand</option>
                <option value="Herat">Herat</option>
                <option value="Jowzjan">Jowzjan</option>
                <option value="Kabul">Kabul</option>
                <option value="Kandahar">Kandahar</option>
                <option value="Kapisa">Kapisa</option>
                <option value="Khost">Khost</option>
                <option value="Kunar">Kunar</option>
                <option value="Kunduz">Kunduz</option>
                <option value="Laghman">Laghman</option>
                <option value="Logar">Logar</option>
                <option value="Nangarhar">Nangarhar</option>
                <option value="Nimruz">Nimruz</option>
                <option value="Nuristan">Nuristan</option>
                <option value="Paktika">Paktika</option>
                <option value="Paktia">Paktia</option>
                <option value="Panjshir">Panjshir</option>
                <option value="Parwan">Parwan</option>
                <option value="Samangan">Samangan</option>
                <option value="Sar-e Pol">Sar-e Pol</option>
                <option value="Takhar">Takhar</option>
                <option value="Uruzgan">Uruzgan</option>
                <option value="Wardak">Wardak</option>
                <option value="Zabul">Zabul</option>
              </select>
            </div>

            <a href="showJobs.html" class="a">Find Job</a>
          </div>

          <!-- applied for -->
          <div class="applied" >
            <div class="job-info-card">
              <div class="card-wrapper" >
                <div class="company-job-info" >
                  <div class="company-card-img"  >
                    <img
                      src="./assets/images/company logo/images (1).png"
                      alt=""
                    />
                  </div>

                  <div class="company-card-details">
                    <h2>Project Maneger</h2>
                    <p>Khan steale mill</p>
                    <span>Lacation</span>
                  </div>
                </div>
                <div class="card-status">
                  <p>2 Month ago</p>
                  <a href="#"><i class="ri-share-box-fill"></i>Show Status</a>
                </div>
              </div>
              <div class="card-wrapper">
                <div class="company-job-info">
                  <div class="company-card-img">
                    <img
                      src="./assets/images/company logo/images (3).jpg"
                      alt=""
                    />
                  </div>

                  <div class="company-card-details">
                    <h2>project Maneger</h2>
                    <p>Khan steale mill</p>
                    <span>Lacation</span>
                  </div>
                </div>
                <div class="card-status">
                  <p>2 Month ago</p>
                  <a href="#"><i class="ri-share-box-fill"></i>Show Status</a>
                </div>
              </div>
            </div>
            <div class="job-info-card">
              <div class="card-wrapper">
                <div class="company-job-info">
                  <div class="company-card-img">
                    <img
                      src="./assets/images/company logo/images (1).png"
                      alt=""
                    />
                  </div>

                  <div class="company-card-details">
                    <h2>Project Maneger</h2>
                    <p>Khan steale mill</p>
                    <span>Lacation</span>
                  </div>
                </div>
                <div class="card-status">
                  <p>2 Month ago</p>
                  <a href="#"><i class="ri-share-box-fill"></i>Show Status</a>
                </div>
              </div>
              <div class="card-wrapper">
                <div class="company-job-info">
                  <div class="company-card-img">
                    <img
                      src="./assets/images/company logo/images (3).jpg"
                      alt=""
                    />
                  </div>

                  <div class="company-card-details">
                    <h2>project Maneger</h2>
                    <p>Khan steale mill</p>
                    <span>Lacation</span>
                  </div>
                </div>
                <div class="card-status">
                  <p>2 Month ago</p>
                  <a href="#"><i class="ri-share-box-fill"></i>Show Status</a>
                </div>
              </div>
            </div>

            <!--  show More  -->
            <div class="show-more">
              <div class="job-info-card">
                <div class="card-wrapper">
                  <div class="company-job-info">
                    <div class="company-card-img">
                      <img
                        src="./assets/images/company logo/images (1).png"
                        alt=""
                      />
                    </div>

                    <div class="company-card-details">
                      <h2>Project Maneger</h2>
                      <p>Khan steale mill</p>
                      <span>Lacation</span>
                    </div>
                  </div>
                  <div class="card-status">
                    <p>2 Month ago</p>
                    <a href="#"><i class="ri-share-box-fill"></i>Show Status</a>
                  </div>
                </div>
                <div class="card-wrapper">
                  <div class="company-job-info">
                    <div class="company-card-img">
                      <img
                        src="./assets/images/company logo/images (3).jpg"
                        alt=""
                      />
                    </div>

                    <div class="company-card-details">
                      <h2>project Maneger</h2>
                      <p>Khan steale mill</p>
                      <span>Lacation</span>
                    </div>
                  </div>
                  <div class="card-status">
                    <p>2 Month ago</p>
                    <a href="#"><i class="ri-share-box-fill"></i>Show Status</a>
                  </div>
                </div>
              </div>
              <div class="job-info-card">
                <div class="card-wrapper">
                  <div class="company-job-info">
                    <div class="company-card-img">
                      <img
                        src="./assets/images/company logo/images (1).png"
                        alt=""
                      />
                    </div>

                    <div class="company-card-details">
                      <h2>Project Maneger</h2>
                      <p>Khan steale mill</p>
                      <span>Lacation</span>
                    </div>
                  </div>
                  <div class="card-status">
                    <p>2 Month ago</p>
                    <a href="#"><i class="ri-share-box-fill"></i>Show Status</a>
                  </div>
                </div>
                <div class="card-wrapper">
                  <div class="company-job-info">
                    <div class="company-card-img">
                      <img
                        src="./assets/images/company logo/images (3).jpg"
                        alt=""
                      />
                    </div>

                    <div class="company-card-details">
                      <h2>project Maneger</h2>
                      <p>Khan steale mill</p>
                      <span>Lacation</span>
                    </div>
                  </div>
                  <div class="card-status">
                    <p>2 Month ago</p>
                    <a href="#"><i class="ri-share-box-fill"></i>Show Status</a>
                  </div>
                </div>
              </div>
            </div>
            <button class="show-job-btn">See All Jobs Status</button>
          </div>
        </div>
      </div>

      <!-- side-bar -->
      <div class="job-sidbar">
        <i class="ri-megaphone-line"></i>
        <h2>Do you want to recive more related recommended jobs?</h2>
        <div id="alert_job">
          <label for="">Job Title</label>
          <input
            type="search"
            name=""
            id=""
            placeholder="ex:sales expert, resceptionist ..."
          />
          <label for="">Location</label>
          <select>
            <option value="">Select Province</option>
            <option value="Badakhshan">Badakhshan</option>
            <option value="Badghis">Badghis</option>
            <option value="Baghlan">Baghlan</option>
            <option value="Balkh">Balkh</option>
            <option value="Bamyan">Bamyan</option>
            <option value="Daykundi">Daykundi</option>
            <option value="Farah">Farah</option>
            <option value="Faryab">Faryab</option>
            <option value="Ghazni">Ghazni</option>
            <option value="Ghor">Ghor</option>
            <option value="Helmand">Helmand</option>
            <option value="Herat">Herat</option>
            <option value="Jowzjan">Jowzjan</option>
            <option value="Kabul">Kabul</option>
            <option value="Kandahar">Kandahar</option>
            <option value="Kapisa">Kapisa</option>
            <option value="Khost">Khost</option>
            <option value="Kunar">Kunar</option>
            <option value="Kunduz">Kunduz</option>
            <option value="Laghman">Laghman</option>
            <option value="Logar">Logar</option>
            <option value="Nangarhar">Nangarhar</option>
            <option value="Nimruz">Nimruz</option>
            <option value="Nuristan">Nuristan</option>
            <option value="Paktika">Paktika</option>
            <option value="Paktia">Paktia</option>
            <option value="Panjshir">Panjshir</option>
            <option value="Parwan">Parwan</option>
            <option value="Samangan">Samangan</option>
            <option value="Sar-e Pol">Sar-e Pol</option>
            <option value="Takhar">Takhar</option>
            <option value="Uruzgan">Uruzgan</option>
            <option value="Wardak">Wardak</option>
            <option value="Zabul">Zabul</option>
          </select>
        </div>
        <a href="{{url('showJobs')}}">Find Jobs</a>
      </div>
    </section>
    <!--=================== FOOTER =====================-->
   @include('layouts.footer')
    <!--=============== MAIN JS ===============-->
    <script src="./assets/js/main.js"></script>
    <script defer src="/assets/js/module/Dashboard.js"></script>
  </body>
</html>
