<!-- ===================  NAVBAR START HERE================== -->
<div class="container-fluid navbar-bg-clr">
      <div class="row">
          <div class="col-md-12 p-0 main-navbar">
              <nav class="navbar navbar-expand-lg navbar-light ">
                  <div class="container">
                    <div class="img-div">
                      <a href="{{url('/')}}">
                        <img src="../imgs/navbar_logo.png" alt="navbar logo here" />
                      </a>
                    </div>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span><i class="fa-solid fa-bars"></i></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}"
                              >{{ __('messages.nav_home_btn')}}</a
                            >
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('courses')}}">{{ __('messages.nav_course_btn')}}</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('about_sabiha_page')}}"
                              >
                              {{ __('messages.nav_sabiha_news_btn')}}
                              </a
                            >
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('FAQ_page')}}">{{ __('messages.nav_FAQ_btn')}}</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('contact_us_page')}}"
                              >{{ __('messages.nav_contact_btn')}}</a
                            >
                          </li>
                          <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">{{ __('messages.nav_cart_btn')}}</a>
                        </li>
                     
                          <li><a href="{{url('login')}}"><button class="btn btn-login">{{ __('messages.nav_login_btn')}}</button></a></li>
                          <li><a href="{{url('register')}}"><button class="btn btn-register  ms-0 ms-md-3">{{ __('messages.nav_reg_btn')}}</button></a></li>
                          
                         
                          <!-- <li>
                           <span class="btn btn-translate ms-0 ms-md-4" id="google_translate_element">Translate</span>
                          </li> -->

                            <!-- language translator button code -->
                            <div class="row lang_trans  ms-4">
                            <div class="col-md-2 col-md-offset-6 text-right">
                                <strong>Language:</strong>
                            </div>
                            <div class="col-md-4 ms-4">
                                <select class="form-control changeLang">
                                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                                   
                                </select>
                            </div>
                        </div>
                         <!--  -->
                        </ul>

                      
                      </div>
                  </div>
              </nav>
          </div>
      </div>
  </div>
    <!-- ===================  NAVBAR END HERE================== -->




















    <!-- <div class="container">
      <div class="row">
        <div class="col-md-12 p-0 main-navbar">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container m-0">
              <div class="img-div">
                <a href="{{url('/')}}">
                  <img src="../imgs/navbar_logo.png" alt="navbar logo here" />
                </a>
              </div>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span><i class="fa-solid fa-bars"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('courses')}}">Courses</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('about_sabiha_page')}}"
                      >About Sabiha</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('FAQ_page')}}">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('contact_us_page')}}"
                      >Contact</a
                    >
                  </li>
                  <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                        </li>
                 
                </ul>
                
                <ul class="dropdown d-flex">
                  <li><a href="{{url('login')}}"><button class="btn btn-secondary dropdown-toggle">Log In</button></a></li>
                  <li><a href="{{url('register')}}"><button class="btn btn-secondary dropdown-toggle ms-3">Register</button></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div> -->