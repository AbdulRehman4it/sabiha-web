 <!-- ===================  SABIHA  NEWS SECTION START HERE================== -->
 <div class="container-fluid new-background-class-clr">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="news-section-main-heading">
              <h1>{{ __('messages.home_news_heading')}}</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- card-1 -->


          @foreach ($news as $news)

          <div class="col-md-4">
            <div class="card">
              <div class="card-img-div">
                <img
                  src="imgs/{{$news->news_image}}"
                  alt="card1-img-here"
                  srcset=""
                />
              </div>
              <div class="card-content-div">
                <h3>{{$news->news_title}}</h3>
                <p>
                {{ \Illuminate\Support\Str::limit($news->news_desc, $limit = 100, $end = '...') }}
                </p>
                <a href="{{url('news_detail',$news->id)}}"><h6>{{ __('messages.home_news_btn')}}</h6></a>
              </div>
            </div>
          </div>
        
          @endforeach
  
        </div>
      </div>
    </div>
    <!-- ===================  SABIHA  NEWS SECTION END HERE================== -->
