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
      <!-- HTML Code -->
      @include('Admin.admin_layout.sidbar')

      <div class="body">
        <!-- Title  Page-->
        @include('Admin.admin_layout.nav')

        <div class="welcome-title">
          <h1>Companies</h1>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create a New Company</h2>
            <br />
            <form action="/company" method="POST" enctype="multipart/form-data" id="postForm">
              @csrf
              <div>
              <label for="">Owner Name</label>
               <input type="text" class="btn username"  name="owner" />
              </div>
              <div>
              <label for="">Your Company Name(English)</label>
                <input
                  type="text"
                  class="btn selection username"
                  name="company_name"
                />
              </div>
              <div>
              <label for="">Your Company Name(Pashto)</label>
                <input
                  type="text"
                  class="btn selection username" name="pashto_name"
                />
              </div>
              <div>
              <label for="">Phone</label>
                <input
                  type="text"
                  class="btn selection phone"
                  name="phone"
                />
              </div>
              <div>
              <label for="">Email</label>
              <input
                type="text"
                class="btn selection email" name="email"
              />
              </div>
              <div>
               <label for="company_size">Your Company Size</label>
                  <select name="company_size" id="company_size" class="btn selection">
                  <option value="">select your Company size</option>
                  <option value="500 employees">500 employees</option>
                  <option value="100 - 499 employees">100 - 499 employees</option>
                  <option value="50 - 99 employees">50 - 99 employees</option>
                  <option value="10 - 49 employees">10 - 49 employees</option>
                  <option value="1 - 9 employees">1 - 9 employees</option>
                </select>
              </div>
              <div>
              <label for="">Address</label>
                <input
                  type="text"
                  class="btn selection" name="position"
                />
              </div>
              <!-- <div>
                <label for="author">Img:</label>
                <div class="file-upload">
                  <label for="image-upload" class="file-upload__label">
                    Upload Image
                  </label>
                  <input
                    id="image-upload"
                    class="file-upload__input"
                    type="file"
                    name="image-upload"
                  />
                </div>
              </div> -->
              <br />
              <!-- <button type="button">Submit</button> -->
              <input class="btn-modal" type="submit" value="Submit" />
            </form>
          </div>
        </div>

        <!-- table -->
        <div class="table">
          <div class="head">
            <h2>Table users</h2>
            <form action="{{ route('company.search') }} " method="get">
          <div class="search-bar">
            <input type="text" name="search" class="search-input" placeholder="Search For" />
            <button type="submit" class="search-button">
              <i class="fas fa-search"></i>
            </button>
          </div>
              </form>
            <!-- <button onclick="onclick()">&#9776;</button> -->
            <button id="openModalButton">Create a New Company</button>
          </div>

          <table>
            <th>id</th>
            <th>Owner</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
            @forelse($company as $company)
              <tr>
                  <td>{{$company->id}}</td>
                  <td>{{$company->owner}}</td>
                  <td>{{$company->company_name}}</td>
                  <td>{{$company->email}}</td>
                  <td>{{$company->position}}</td>
                  <td>{{$company->phone}}</td>
                  <td>
                    <!-- <a class="actionButton editButton" href="#"><i class="ri-image-edit-fill"></i></a> -->
                    <!-- <a class="actionButton deleteButton" href="#"><i class="ri-delete-bin-5-fill"></i></a> -->
                    <form action="{{ route('company.destroy', ['company' => $company->id]) }}" method="POST" onsubmit="return confirm('Are you sure delete this user?')">
                      @csrf
                      @method('DELETE')
                      <!-- <button class="actionButton editButton  eidetbtn" href="#"><i class="ri-image-edit-fill"></i></button> -->
                      <button type="submit" class="actionButton deleteButton"><i class="ri-delete-bin-5-fill"></i></button>
                    </form>
                 </td>
            </tr>


            @empty
            <tr style="text-align: center;">
              <td style="color:red; font-size:2rem; ">No company Found</td>
            </tr>
           @endforelse

          </table>
        </div>
      </div>
 
    </div>
        <!-- =============== table ======================== -->



    <!-- ====================for companay================================= -->
    

    <script src="Admin/js/main.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
  </body>
</html>
