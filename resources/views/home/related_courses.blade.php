  <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
  <div class="container-fluid most-feature-section related-course-detail-page">
      <div class="container">
        <div class="row mb-3 d-md-5">
          <div class="col-md-12">
            <div class="most-feature-sction-heading-2">
              <h1>Related Courses</h1>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <!-- card1 -->
          @foreach ($related_courses as $related_courses)

          <div class="col-md-4 pt-4 pt-md-0">
            <div class="most-feature-card">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="/imgs/{{$related_courses->course_image}}" alt="" />
                </div>
                <div class="rating-stars d-flex">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
                  <span class="review">4.8 (120 Reviews)</span>
                </div>
                <h2>{{$related_courses->course_title}}</h2>
                <div class="row pt-3">
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-comment pe-2"></span>{{$related_courses->comment}}
                      </p>
                      <p>
                        <span class="fa-regular fa-calendar-days pe-2"></span
                        >{{$related_courses->date}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-clock pe-2"></span>{{$related_courses->time}}
                      </p>
                      <p><span class="fa-regular fa-heart pe-2"></span>{{$related_courses->save}}</p>
                    </div>
                  </div>
                </div>
                <div class="row tutor-row">
                  <div class="col-md-7 col-8">
                    <div class="tutor-img-sec">
                      <p>
                        <img
                          src="/imgs/{{$related_courses->profile_image}}"
                          alt=""
                          class="pe-2"
                        />{{$related_courses->profile_name}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>${{$related_courses->price}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
       @endforeach


      
         
        </div>
      </div>
    </div>
    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
