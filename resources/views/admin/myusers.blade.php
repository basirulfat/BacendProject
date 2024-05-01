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

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/js/bootstrap.bundle.min.js"></script>

  <body>
    <div class="minet">
      <!-- HTML Code -->
      @include('Admin.admin_layout.sidbar')

      <div class="body">
        <!-- Title  Page-->
        @include('Admin.admin_layout.nav')

        <div class="welcome-title">
          <h1>Users</h1>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create a New User</h2>
            <br />
            <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" id="postForm">
              @csrf
              <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value=""/>
              </div>
              <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />
              </div>
              <div>
                <label for="phone">phone:</label>
                <input type="number" id="phone" name="phone" />
              </div>
              <div>
                <label for="address">Address:</label>
                <input type="text" id="addresss" name="address" />
              </div>
              <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" />
              </div>
              <div>
                <label for="password">Comfirm Password:</label>
                <input type="password" id="password" name="password" />
              </div>

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
            <form action="{{ route('user.search') }} " method="get">
          <div class="search-bar">
            <input type="text" name="search" class="search-input" placeholder="Search For" />
            <button type="submit" class="search-button">
              <i class="fas fa-search"></i>
            </button>
          </div>
              </form>
            <!-- add -->
            <!-- @if(session()->has('success'))
             <div class="alert alert-success" id="success-message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="removeSuccessMessage()">X</button>
                {{ session()->get('success') }}
             </div>
            @endif -->
            <!-- <button onclick="onclick()">&#9776;</button> -->
            <button type="submit" id="openModalButton">Create New User</button>
          </div>

          <table>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
            @forelse($users as $user)
              <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->address}}</td>
                  <td>{{$user->phone}}</td>

                  <td>
                <!-- <a class="actionButton editButton" href="#">Edit</a> -->
                <!-- <a class="actionButton deleteButton" href="{{ route('user.destroy', ['user' => $user->id]) }}">Delete</a> -->
                <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST" onsubmit="return confirm('Are you sure delete this user?')">
                  @csrf
                  @method('DELETE')
                  <!-- <button class="actionButton editButton  eidetbtn" href="#"><i class="ri-image-edit-fill"></i></button> -->
                  <button type="submit" class="actionButton deleteButton"><i class="ri-delete-bin-5-fill"></i></button>
                </form>
                 </td>
            </tr>


            @empty
            <tr style="text-align: center;">
              <td style="color:red; font-size:2rem; ">No User Found</td>
            </tr>
           @endforelse
          </table>
        </div>
      </div>
    </div>
    

    <script src="Admin/js/main.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
  </body>
</html>
