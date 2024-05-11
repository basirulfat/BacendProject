<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashbord</title>
    <link rel="stylesheet" href="Admin/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="minet">
      <!-- ========sidbar===== -->
      @include('Admin.admin_layout.sidbar')

      <div class="body">
        <!-- ======navbar========-->
        @include('Admin.admin_layout.nav')

        <div class="welcome-title">
          <h1>Posts</h1>
        </div>
                <!-- The Modal -->
      <div id="postModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <h2>Create a New Post</h2>
            <form action="/posts" method="POST" enctype="multipart/form-data" id="postForm">
                @csrf
              <div class="postformcontainer">
                  <div class="postform-child">
                    <div class="form-group">
                      <label for="jobTitle">Job Title:</label>
                      <input type="text" id="jobTitle" name="jobTitle" required />
                    </div>

                    <div class="form-group">
                        <label for="jobTitle">company:</label>
                        <input type="text" id="jobTitle" name="company" required />
                    </div>

                    <div class="form-group">
                      <label for="jobDescription">Job Description:</label>
                      <textarea
                        id="jobDescription"
                        name="jobDescription"
                        rows="6"
                        required
                      ></textarea>
                    </div>

                    <div class="form-group">
                    <label for="category">Category:</label>
                        <select class=""  name="category" id="category">
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
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="applyLink">Link to Apply:</label>
                        <input type="url" id="applyLink" name="applyLink" required />
                      </div>
                      <div class="form-group">
                          <label for="jobType">Job Type:</label>
                          <select id="jobType" name="jobType" required>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                            <option value="Contract">Contract</option>
                            <option value="Internship">Internship</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="location">Location:</label>
                          <select  id="location" name="location" required >
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
                  </div>
                  <div class="postform-child">
                      <div class="form-group">
                        <label for="skills">Skills Required:</label>
                        <input type="text" id="skills" name="skills" required />
                      </div>
                      <div class="form-group">
                        <label for="logo">Company Logo:</label>
                        <input type="file" id="logo" name="logo" accept="image/*" required />
                      </div>
                      <div class="form-group">
                        <label for="experience">Experience Required:</label>
                        <input type="text" id="experience" name="experience" required />
                      </div>
                      <div class="form-group">
                        <label for="seniority">Seniority Level:</label>
                        <input type="text" id="seniority" name="seniority" required />
                      </div>
                      <div class="form-group">
                        <label for="salary">Salary Range:</label>
                        <input type="text" id="salary" name="salary" required />
                      </div>
                      <div class="form-group">
                        <label for="postingTime">Posting Time:</label>
                        <input
                          type="datetime-local"
                          id="postingTime"
                          name="postingTime"
                          required
                        />
                      </div>

                      <div class="form-group">
                        <label for="expaireTime">Expaires Time:</label>
                        <input
                          type="datetime-local"
                          id="expaireTime"
                          name="expaireTime"
                          required
                        />
                       </div>

                       <input class="btn-modal" type="submit" value="Submit" />
                  </div>
              </div>
           
            </form>
          </div>
        </div>

      

 <!-- ============================Big Table of posts====================================== -->

        <!-- table -->
        <div id="newTable" class="table new-table ">
          <div class="tablescroll">
          <div class="head">
            <h2>Table Posts</h2>
            <form action=" {{ route('posts.search') }}" method="get" enctype="multipart/form-data">
                <div class="search-bar">
                  <input type="text" name="search" class="search-input" placeholder="Search For" />
                  <button type="submit" class="search-button">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            <!-- <button onclick="onclick()">&#9776;</button> -->
            <button id="openModalButton">Create a New Post</button>
          </div>

          <table>
            <th>id</th>
            <th>Company</th>
            <th>Title</th>
            <th>Location</th>
            <th>Category</th>
            <th>expaireTime</th>
            <th>Action</th>
      @forelse($post as $post)
            <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->company->company_name}}</td>
              <td>{{$post->jobTitle}}</td>
              <td>{{$post->location}}</td>
              <td>{{$post->category}}</td>
              <td>{{$post->expairTime}}</td>
              <td>
              <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" onsubmit="return confirm('Are you sure delete this user?')">
                      @csrf
                      @method('DELETE')
                      <!-- <button class="actionButton editButton  eidetbtn" href="#"><i class="ri-image-edit-fill"></i></button> -->
                      <button type="submit" class="actionButton deleteButton"><i class="ri-delete-bin-5-fill"></i></button>
                    </form>
                 </td>
              </td>
            </tr>

            @empty
            <tr style="text-align: center;">
              <td style=" width:100%;color:red; font-size:2rem;">No Job Found</td>
            </tr>
           @endforelse
            <!-- <tr>
              <td>4</td>
              <td>Island Trading</td>
              <td>Helen Bennett</td>
              <td>UK</td>
              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr> -->
          </table>
          </div>
        </div>

      

    <script src="Admin/js/main.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
  </body>
</html>
