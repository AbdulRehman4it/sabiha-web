 <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
 <div class="container-fluid most-feature-section-pink" style="background: #FEF5F5;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="most-feature-sction-heading">
              <h1>{{ __('messages.fc_heading')}}</h1>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Imperdiet tempus felis vitae sit est quisque.
              </p> -->
              <p>{{ __('messages.fc_para')}}</p>
</br>


              <div
                class=" d-flex text-align-center justify-content-center align-items-center"
              > 
  	

                <!-- <button class="btn active">Recent Courses</button> 
              <button class="btn ms-md-5 ms-2">Featured Courses</button>
                <button class="btn ms-md-5 ms-2">Popular Courses</button>-->

 

    <nav>
			<div class="nav  mb-3" id="nav-tab" role="tablist">
				<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">{{ __('messages.fc_recent_btn')}}</button>
				<button class="nav-link ms-md-3 ms-2" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">{{ __('messages.fc_featured_btn')}}</button>
				<button class="nav-link ms-md-3 ms-2" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">{{ __('messages.fc_popular_btn')}}</button>
			</div>
		</nav>
       </div>

</br>

            </div>
            



          </div>
        </div>
       
        <div class="row tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <!-- card1 -->

           @foreach ($feature_courses as $feature_courses)
          <div class="col-md-4 pt-4 pt-md-0 col-lg-4">
          <a href="{{url('course_overview_page',$feature_courses->id)}}">
            <div class="most-feature-card most-feature-card2">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="imgs/{{$feature_courses->course_image}}" alt="" />
                </div>
                <div class="rating-stars d-flex">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
                  <span class="review">4.8 (120 Reviews)</span>
                </div>
                <h2>{{$feature_courses->course_title}}</h2>
                <div class="row pt-3">
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-comment pe-2"></span>{{$feature_courses->comment}}
                      </p>
                      <p>
                        <span class="fa-regular fa-calendar-days pe-2"></span
                        >{{$feature_courses->time}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-clock pe-2"></span>{{$feature_courses->date}}
                      </p>
                      <p><span class="fa-regular fa-heart pe-2"></span>{{$feature_courses->save}}</p>
                    </div>
                  </div>
                </div>
                <div class="row tutor-row">
                  <div class="col-md-7 col-8">
                    <div class="tutor-img-sec">
                      <p>
                        <img
                          src="imgs/{{$feature_courses->profile_image}}"
                          alt=""
                          class="pe-2"
                        />{{$feature_courses->profile_name}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>${{$feature_courses->price}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>


      @endforeach


</div>
<div class="tab-pane fade" id="nav-profile">
  <h1>hello</h1>
</div>



</div>
</div>









