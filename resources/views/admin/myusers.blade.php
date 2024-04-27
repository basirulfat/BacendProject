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
            <form action="{{url('/users')}}" method="POST"enctype="multipart/form-data" id="postForm">
              @csrf
              <div>
                <label for="name">Name:</label>
                <input type="text" id="title" name="name" />
              </div>
              <div>
                <label for="author">Email:</label>
                <input type="email" id="author" name="email" />
              </div>
              <div>
                <label for="title">phone:</label>
                <input type="tell" id="title" name="phone" />
              </div>
              <div>
                <label for="author">Address:</label>
                <input type="text" id="author" name="address" />
              </div>
              <div>
                <label for="title">Password:</label>
                <input type="password" id="title" name="password" />
              </div>
              <div>
                <label for="title">Comfirm Password:</label>
                <input type="password" id="title" name="password" />
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
            @if(session()->has('message'))
              <div class="alert  alert-success">
                <button type="button" class="close" data-dismiss="alert" 
                aria-hidden="true">X</button>
                {{session()->get('message')}}
              </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" 
                aria-hidden="true">X</button>
                    {{ session()->get('success') }}
                </div>
            @endif
            <!-- <button onclick="onclick()">&#9776;</button> -->
            <button id="openModalButton">Create New User</button>
          </div>

          <table>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
            @foreach($users as $user)
              <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->address}}</td>
                  <td>{{$user->phone}}</td>
                  <td>
                      <a  class="actionButton editButto  eidetbtn" href="#">Edit</a>
                      <a onclick="return confirm('Are You Sure To Delete This User')" class="actionButton deleteButton" href="{{ url('users', $user->id) }}">Delete</a>
                  </td>
            </tr>
           @endforeach
          </table>
        </div>
      </div>
    </div>
    

    <script src="Admin/js/main.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
  </body>
</html>
