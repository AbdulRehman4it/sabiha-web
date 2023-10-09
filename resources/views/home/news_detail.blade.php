@include('home.layout.head')

  <body>
@include('home.layout.header')

    <!-- ===================  MAIN HEADER SECTION START HERE================== -->
    <div class="container-fluid sabiha-page-bg">
      <div class="row">
        <div class="col-md-12">
          <div class="sabiha-news-page-header-content">
            <h1>Sabiha News</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  MAIN HEADER SECTION END HERE================== -->
    <!-- ===================  SABIHA PAGE ABOUT SECTION START HERE================== -->
    <div class="container">
      <div class="row">

        <div class="col-md-8">
          <div class="sabiha-page-content-body">
            <h2>{{$news->news_title}}</h2>
            <p>  {{$news->news_desc}}
            </p>
              <!-- <p class="pt-2"> With a passion for empowering individuals, I bring a wealth of experience in family and psychological counselling, mental health, Neuro-linguistic programming, business coaching, and female development. My expertise is backed by a professional certified trainer from the esteemed International Academy for Training and Development in the United Kingdom.</p>
              <p class="pt-2">  Currently, I'm working as a sought-after professional trainer at both the ASASCO Center and the Canadian Global Center. And the excitement doesn't stop there. I'm gearing up to take my insights and expertise to even greater heights, with plans to deliver engaging training sessions at the prestigious Dubai Knowledge Authority and The Hague University in Britain.</p>
              <p class="pt-2"> But that is not all! With a hobby-turned-passion, I've completed multiple professional make-up courses and now proudly serve as a professional make-up artist in Dubai.</p>
              <p class="pt-2">     
             
                Whether you're on a quest for personal growth or seeking expert guidance, I'm here to guide you every step of the way. Let's team up and unleash your full potential – your journey to success starts now!</p> -->
          </div>
        </div>
        <div class="col-md-4">
        
          <div class="sabiha-page-img-div">
            <img src="/imgs/{{$news->news_image}}" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  SABIHA PAGE ABOUT SECTION START HERE================== -->
    <!-- ===================  SABIHA PAGE newsletter SECTION START HERE================== -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row sabiha-page-newslatter">
          <div class="col-md-8 col-12">
            <div class="newslatter-heading">
              <h2>Your mental well-being is important! Access consulting and coaching videos here, completely free</h2>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="sabiha-news-latter-btn">
              <button class="btn "><a href="{{url('courses')}}">Courses<i class="fa-solid fa-arrow-right ps-2"></i></a></button>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    <!-- ===================  SABIHA PAGE newsletter SECTION end HERE================== -->

    @include('home.layout.footer')
