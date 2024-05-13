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

 
        <!-- table -->
        <div class="table">
          <div class="head">
            <h2>Users Contact </h2>
            <form action="{{ route('contact.search') }} " method="get" enctype="multipart/form-data">
          <div class="search-bar">
            <input type="text" name="search" class="search-input" placeholder="Search For" />
            <button type="submit" class="search-button">
              <i class="fas fa-search"></i>
            </button>
          </div>
              </form>
            <button id="openModalButton"><i class="ri-notification-off-fill" style="color:black"></i></button>
          </div>

          <table>
            <th>ID</th>
            <th>Add By</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Problem Type</th>
            <th>Subject</th>
            <th>Description</th>
            @forelse($contact as $contact)
              <tr>
                  <td>{{$contact->id}}</td>
                  <td>{{$contact->user_id}}</td>
                  <td>{{$contact->name}}</td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->telephone}}</td>
                  <td>{{$contact->type}}</td>
                  <td>{{$contact->subject}}</td>
                  <td>{{$contact->description}}</td>
                  <td>
                    <!-- <a class="actionButton editButton" href="#"><i class="ri-image-edit-fill"></i></a> -->
                    <!-- <a class="actionButton deleteButton" href="#"><i class="ri-delete-bin-5-fill"></i></a> -->
                    <form action="{{ route('contact.destroy', ['contact' => $contact->id]) }}" method="POST" onsubmit="return confirm('Are you sure delete this user?')">
                      @csrf
                      @method('DELETE')
                      <!-- <button class="actionButton editButton  eidetbtn" href="#"><i class="ri-image-edit-fill"></i></button> -->
                      <button type="submit" class="actionButton deleteButton"><i class="ri-delete-bin-5-fill"></i></button>
                    </form>
                 </td>
            </tr>


            @empty
            <tr style="text-align: center;">
              <td style="color:red; font-size:2rem; ">No Contact Form Data Found</td>
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
