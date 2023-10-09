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
                              >Home</a
                            >
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('courses')}}">Courses</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('about_sabiha_page')}}"
                              >Sabiha <p>News</p></a
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
                     
                          <li><a href="{{url('login')}}"><button class="btn btn-login">Log In</button></a></li>
                          <li><a href="{{url('register')}}"><button class="btn btn-register  ms-0 ms-md-3">Register</button></a></li>
                          <!-- <li>
                           <span class="btn btn-translate ms-0 ms-md-4" id="google_translate_element">Translate</span>
                          </li> -->
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