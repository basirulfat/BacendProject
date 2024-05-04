<div class="navbar">
          <div class="title-page">
            <h2>Welcom to AfghanTalent</h2>
            <img src="Admin/sami.JPG" alt="" width="50" height="50" srcset="" />
          </div>
             <form action="{{ route('user.search') }} " method="get">
          <div class="search-bar">
            <input type="text" name="search" class="search-input" placeholder="Search For" />
            <button type="submit" class="search-button">
              <i class="fas fa-search"></i>
            </button>
          </div>
              </form>

          <div class="right-content">
            <div class="user">
              <!-- <img src="Admin/sami.JPG" alt="" width="40" height="40" srcset="" />
              <span>Samiullah</span> -->
              @if (Route::has('login'))
               <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                 <!-- <a href="{{ url('/dashboard') }}"
                       class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"> Dashboard </a> -->
                        <x-app-layout>

                        </x-app-layout>
                           @else
                             <a
                               href="{{ route('login') }}"
                                 class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                 Login
                             </a>

                          @if (Route::has('register'))
                                    
                            <a
                              href="{{ route('register') }}"
                             class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                 Register
                            </a>
                         @endif
                 @endauth
                            </nav>
              @endif   

            </div>

            <!-- Notifications Menu -->
            <div class="menu-bar notifications-menu">
              <button class="menu-button">
                <i class="fas fa-bell"></i>
              </button>
              <div class="menu-content">
                <!-- Add your notifications here -->
                <p>No new notifications</p>
              </div>
            </div>

            <!-- Login/Logout Menu -->
            <!-- <div class="menu-bar login-logout-menu">
              <button class="menu-button">
                <i class="fas fa-user"></i>
              </button>
              <div class="menu-content">
                <a href="#">Login</a><br />
                <a href="#">Logout</a>
              </div>
            </div> -->
          </div>
        </div>