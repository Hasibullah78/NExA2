
@include('Header.header')
    @include('Sidebar.sidebar')
        <!-- /# sidebar -->
{{-- <div class="container"> --}}

        <div class="header notprint">
                <div class="row notprint" >
                    <div class="col-lg-12">

                        {{-- <select class="mt-1" style="margin-left:10px">

                            <option value=""><a href="{{ route('setLang',['locale'=>'en']) }}">English</a></option>
                            <option value=""><a href="{{ route('setLang',['locale'=>'ps']) }}">Pashto</a></option>
                            <option value=""><a href="{{ route('setLang',['locale'=>'dr']) }}">Dari</a></option>
                        </select> --}}
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                            <ul>
                            </ul>
                        </div>
                        <li class="header-icon dib mt-0" style="float: left;">

                            {{-- <img src="{{ asset(Auth::user()->image) }}" style="border-radius: 100%;" alt="" height="60" width="60"><br> --}}
                            <span class="user-avatar">{{ 'Language : '.session('locale') }} <i class="ti-angle-down f-s-10"></i> </span>
                            <div class="drop-down  dropdown-profile">

                                <div class="dropdown-content-body">

                                    <ul>
                                        <li>
                                            <x-dropdown-link :href="route('setLang',['locale'=>'en'])">
                                            <i class="fas fa-language float-end"></i>
                                            en  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English

                                            </x-dropdown-link>
                                        </li>
                                        <li>
                                            <x-dropdown-link :href="route('setLang',['locale'=>'ps'])">
                                                <i class="fas fa-language float-end"></i>ps  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pashto
                                                </x-dropdown-link>
                                        </li>
                                        <li>
                                            <x-dropdown-link :href="route('setLang',['locale'=>'fa'])">
                                                <i class="fas fa-language float-end"></i> fa  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Persian
                                                </x-dropdown-link>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>




                                <li class="header-icon dib mt-0" style="float: right;">

                                    <img src="{{ asset(Auth::user()->image) }}" style="border-radius: 100%;" alt="" height="60" width="60"><br>
                                    <span class="user-avatar">{{ Auth::user()->name }} <i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">

                                        <div class="dropdown-content-body">

                                            <ul>
                                                <li>
                                                    <x-dropdown-link :href="route('profile.edit')">
                                                    <i class="ti-user"></i> <span>
                                                    {{('Profile') }}
                                                     </span></x-dropdown-link>

                                                </li>

                                                {{-- <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>

                                                <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li> --}}
                                                <li>
                                                    {{-- <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                     <i class="ti-power-off"><span> {{('LogOut')}}</span>  </i>
                                                    </x-dropdown-link>
                                                </form> --}}
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <a :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                     <i class="ti-power-off"> <span> {{('LogOut')}}</span>  </i>
                                                </a>
                                                </form>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>




                        </div>
                    </div>
                </div>
            </div>
        </div>

            {{-- <li class="" style=" margin-left:5px"> --}}

            {{-- </li> --}}


        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">

                   @yield('main')


            </div>
        </div>
        <div id="search">
            <x-guest-layout style="display: none"></x-guest-layout>

            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <!-- jquery vendor -->
        <script src="{{ asset('backend/assets/js/lib/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
        <!-- nano scroller -->
        <script src="{{ asset('backend/assets/js/lib/menubar/sidebar.js') }}"></script>
        {{-- <script src="{{ asset('backend/assets/js/lib/preloader/pace.min.js') }}"></script> --}}
        <!-- sidebar -->

        <!-- bootstrap -->

        <script src="{{ asset('backend/assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('backend/assets/js/lib/calendar-2/semantic.ui.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('backend/assets/js/lib/calendar-2/prism.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('backend/assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('backend/assets/js/lib/calendar-2/pignose.init.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('jquery.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/weather/weather-init.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/chartist/chartist.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/chartist/chartist-init.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
        <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
          <!-- <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script> -->

            <script src="{{ asset('DATATABLE/vendor/global/global.min.js') }}"></script>
            <script src="{{ asset('DATATABLE/js/custom.min.js') }}"></script>
            <script src="{{ asset('DATATABLE/js/quixnav-init.js') }}"> </script>
            <script src="{{ asset('DATATABLE/vendor/datatables/js/jquery.dataTables.min.js') }}"> </script>
            <script src="{{ asset('DATATABLE/js/plugins-init/datatables.init.js') }}"></script>

        <!-- scripit init-->
    </body>

</html>
