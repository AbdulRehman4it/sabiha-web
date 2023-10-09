@include('home.layout.head')

  <body>

       @include('home.layout.header')


    <!-- ===================  MAIN HEADER SECTION START HERE================== -->
        @include('home.slider') 
    <!-- ===================  MAIN HEADER SECTION END HERE================== -->



    <!-- ===================  ABOUT US SECTION START HERE================== -->
    @include('home.homepage_about_us')   
    
    <!-- ===================  ABOUT US SECTION END HERE================== -->




    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
      @include('home.feature_courses')   
    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->




    <!-- ===================  FREE COURSES  SECTION START HERE================== -->
    @include('home.free_courses')
    <!-- ===================  FREE COURSES SECTION END HERE================== -->




    <!-- ===================  SABIHA  NEWS SECTION START HERE================== -->
    @include('home.news')
    <!-- ===================  SABIHA  NEWS SECTION END HERE================== -->



    <!-- ===================  GET IN TOUCH SECTION START HERE================== -->
    @include('home.get_in_touch')
   
    <!-- newsletter section -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row news-letter-row p-5">
            <div class="col-md-6">
              <div class="news-letter-sec">
                <h2>Get weekly updates and seasonal free course access.</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="news-letter-sec">
                <div class="input-group mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Email Here"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2"
                  />
                  <span class="input-group-text" id="basic-addon2"
                    >Subscribe</span
                  >
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===================  GET IN TOUCH SECTION END HERE================== -->

    @include('home.layout.footer')
