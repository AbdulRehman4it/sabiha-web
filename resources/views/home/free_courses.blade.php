 <!-- ===================  FREE COURSES  SECTION START HERE================== -->

 <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="most-feature-sction-heading free-courses-main-heading">
            <h1>{{ __('messages.free_course_heading')}}</h1>
            <!-- <p>
              Explore free courses! Elevate your mind and liberate your
              emotional burden.
            </p> -->
            <p>{{ __('messages.free_course_para')}}</p>
           
          </div>
        </div>
      </div>
      <div class="row">
        <!-- card1 -->


        @foreach ($free_courses as $free_courses)
        <div class="col-md-6">
          <div class="main-card-body free-courses">
            <div class="most-feature-card-img-div">
              <img src="imgs/{{$free_courses->image}}" alt="" />
            </div>
            <div class="rating-stars d-flex">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
              <span class="review">4.8 (120 Reviews)</span>
            </div>
            <div class="row pt-3">
              <div class="col-md-6 col-6">
                <div class="comments-sec">
                  <p>
                    <span class="fa-regular fa-clock pe-2"></span>{{$free_courses->time}}
                  </p>
                  <p>
                    <span class="fa-regular fa-thumbs-up pe-2"></span>{{$free_courses->likes}}
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-6">
                <div class="comments-sec">
                  <p><span class="fa-regular fa-heart pe-2"></span>{{$free_courses->save}}</p>
                  <p>
                    <span class="fa-regular fa-comments pe-2"></span>{{$free_courses->comment}}
                  </p>
                </div>
              </div>
            </div>
            <h2>{{$free_courses->title}}</h2>
            <p>
            {{$free_courses->desc}}
            </p>
            <a href="{{url('free-courses-page',$free_courses->id)}}"
              ><button class="btn">{{ __('messages.free_course_btn')}}</button></a
            >
          </div>
        </div>

        @endforeach

      </div>
      </div>
    