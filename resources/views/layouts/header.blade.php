
  <!--=============== HEADER ===============-->
  <header class="header">
    <nav class="nav container">
      <div class="nav__data">
        <a href="{{url('index')}}" class="nav__logo">
          <i class="ri-open-arm-fill logo-icon"></i> AfghanTalent
        </a>

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line nav__burger"></i>
          <i class="ri-close-line nav__close"></i>
        </div>
      </div>

      <!--=============== NAV MENU ===============-->
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li><a href='{{URL("index")}}' class="nav__link">Home</a></li>

          <li><a href="{{url('find-job')}}" class="nav__link">Find job</a></li>
          <li><a href="{{url('Dashboarded')}}" class="nav__link">Dashboard</a></li>

          <!--=============== DROPDOWN 1 ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
              Analytics <i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="{{url('Companeis_Rate')}}" class="dropdown__link">
                  <i class="ri-community-line"></i> Companies
                </a>
              </li>

              <li>
                <a href="{{url('post-job')}}" class="dropdown__link">
                  <i class="ri-megaphone-fill"></i> Post aJob
                </a>
              </li>

              <!--=============== DROPDOWN SUBMENU ===============-->
              <li class="dropdown__subitem">
                <div class="dropdown__link">
                  <a href="#"><i class="ri-search-line"></i></a>
                  <input class="btn" type="search" placeholder="Search" />
                  <i class="ri-add-line dropdown__add"></i>
                </div>

                <ul class="dropdown__submenu">
                  <li>
                    <a href="#" class="dropdown__sublink">
                      <i class="ri-file-list-line"></i> Documents
                    </a>
                  </li>

                  <li>
                    <a href="#" class="dropdown__sublink">
                      <i class="ri-cash-line"></i> Payments
                    </a>
                  </li>

                  <li>
                    <a href="#" class="dropdown__sublink">
                      <i class="ri-refund-2-line"></i> Refunds
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="{{url('CreateCV')}}" class="nav__link">Create CV</a></li>

          <!-- =============== DROPDOWN 2 ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
                
            
            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <!-- <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a> -->
                                    <x-app-layout>
   
                                    </x-app-layout>
                                @else
                                   <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Login
                                    </a>

                                    @if (Route::has('register'))
                                    
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
            
                
            </div>

            <!-- <ul class="dropdown__menu">
              <li>
                <a href="{{url('login')}}" class="dropdown__link">
                  <i class="ri-user-line"></i> Profiles
                </a>
              </li>

              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-lock-line"></i> Accounts
                </a>
              </li>

              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-message-3-line"></i> Messages
                </a>
              </li>
            </ul> -->
          </li>
          
    
          
          <!--=============== DROPDOWN 3 ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
              Lang <i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-global-line"></i> English
                </a>
              </li>

              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-exchange-funds-line"></i> Pashto
                </a>
              </li>

              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-exchange-funds-line"></i>Dari
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>