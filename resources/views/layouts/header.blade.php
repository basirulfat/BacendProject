
  <!--=============== HEADER ===============-->
  <header class="header">
    <nav class="nav container">

      <div class="nav__data">
        <a href="{{url('index')}}" class="nav__logo">

          <i class="ri-open-arm-fill logo-icon"></i> @lang('msg.key1')
        </a>


        @if(app()->getLocale() === 'ps' || app()->getLocale() === 'fa' )
     <link href="{{ asset('assets/css/direction.css') }}" rel="stylesheet">
      @endif

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line nav__burger"></i>
          <i class="ri-close-line nav__close"></i>
        </div>
      </div>

      <!--=============== NAV MENU ===============-->
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li><a href="{{url('index')}}" class="nav__link">@lang('msg.key2')</a></li>

          <li><a href="{{url('find-job')}}" class="nav__link">@lang('msg.key3')</a></li>
          <!-- <li><a href="{{url('Dashboarded')}}" class="nav__link">@lang('msg.key4')</a></li> -->
           <li><a href="{{url('Post-job')}}" class="nav__link"> @lang('msg.key7')</a></li>

          <!--=============== DROPDOWN 1 ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
            @lang('msg.key5') <i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="{{url('Companeis_Rate')}}" class="dropdown__link">
                  <i class="ri-community-line"></i> @lang('msg.key6')
                </a>
              </li>

              <li>
                <a href="{{url('companyRegister')}}" class="dropdown__link">

                  <i class="ri-registered-line"></i> @lang('msg.key02')
                </a>
              </li>

              <!--=============== DROPDOWN SUBMENU ===============-->
              <li class="dropdown__subitem">
                <div class="dropdown__link">
                  <a href="{{route('personalInformation.create')}}"><i class="ri-file-edit-line"></i> @lang('msg.key0')</a>
                  <i class="ri-add-line dropdown__add"></i>
                </div>

                <ul class="dropdown__submenu">
                  <li>
                    <a href="#" class="dropdown__sublink">
                      <i class="ri-file-list-line"></i> @lang('msg.key8')
                    </a>
                  </li>

                  <li>
                    <a href="#" class="dropdown__sublink">
                      <i class="ri-cash-line"></i>  @lang('msg.key9')
                    </a>
                  </li>

                  <li>
                    <a href="#" class="dropdown__sublink">
                      <i class="ri-refund-2-line"></i>@lang('msg.key10')
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="{{url('showJobs')}}" class="nav__link">@lang('msg.keyjob1')</a></li>

          <!-- =============== DROPDOWN 2 ===============-->
          <li class="dropdown__item">
            <div class="nav__link   authontecation">
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
                                 @lang('msg.key001')
                             </a>

                          @if (Route::has('register'))
                                    
                            <a
                              href="{{ route('register') }}"
                             class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                             @lang('msg.key11')
                            </a>
                         @endif
                 @endauth
                            </nav>
              @endif   
            </div>
          </li>
          
    
          
          <!--=============== DROPDOWN 3 ===============-->
          <li class="dropdown__item">
            <div class="nav__link" >
            @lang('msg.key12')<i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="locale/en" class="dropdown__link">
                  <i class="ri-global-line"></i> @lang('msg.key13')
                </a>
              </li>

              <li>
                <a href="locale/ps" class="dropdown__link">
                  <i class="ri-exchange-funds-line"></i> @lang('msg.key14')
                </a>
              </li>

              <li>
                <a href="locale/fa" class="dropdown__link">
                  <i class="ri-exchange-funds-line"></i>@lang('msg.key15')
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
