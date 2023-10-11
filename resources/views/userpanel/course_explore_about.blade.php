@include('userpanel.layout.header')

  <body class="crm_body_bg">
  @include('userpanel.layout.sidebar')


    <section class="main_content dashboard_part large_header_bg">
      <div class="container-fluid g-0">
        <div class="row">
          <div class="col-lg-12 p-0">
            <div
              class="header_iner d-flex justify-content-between align-items-center"
            >
              <div class="d-flex align-items-center">
                <div class="sidebar_icon d-lg-none">
                  <i class="ti-menu"></i>
                </div>
                <label
                  class="form-label switch_toggle d-none d-lg-block"
                  for="checkbox"
                >
                  <input type="checkbox" id="checkbox" />
                  <div class="slider round open_miniSide"></div>
                </label>
                <div class="ps-4 aliza-heading">
                  <h2>Enroll Course</h2>
                  <!-- <p>Let’s learn something new today!</p> -->
                </div>
              </div>

              <div
                class="header_right d-flex justify-content-between align-items-center"
              >
                <div class="header_notification_warp d-flex align-items-center">
                  <li>
                    <a class="bell_notification_clicker" href="#">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="22"
                        viewBox="0 0 20 22"
                        fill="none"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M1.50083 12.7871V12.5681C1.53295 11.9202 1.7406 11.2925 2.10236 10.7496C2.7045 10.0975 3.1167 9.29831 3.29571 8.43598C3.29571 7.7695 3.29571 7.0935 3.35393 6.42703C3.65469 3.21842 6.82728 1 9.96106 1H10.0387C13.1725 1 16.345 3.21842 16.6555 6.42703C16.7137 7.0935 16.6555 7.7695 16.704 8.43598C16.8854 9.3003 17.2972 10.1019 17.8974 10.7591C18.2618 11.2972 18.4698 11.9227 18.4989 12.5681V12.7776C18.5206 13.648 18.2208 14.4968 17.6548 15.1674C16.907 15.9515 15.8921 16.4393 14.8024 16.5384C11.607 16.8812 8.38303 16.8812 5.18762 16.5384C4.09914 16.435 3.08576 15.9479 2.33521 15.1674C1.778 14.4963 1.48224 13.6526 1.50083 12.7871Z"
                          stroke="#141522"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M7.55518 19.8516C8.05445 20.4782 8.78764 20.8838 9.59247 20.9785C10.3973 21.0732 11.2074 20.8493 11.8435 20.3562C12.0391 20.2103 12.2152 20.0408 12.3674 19.8516"
                          stroke="#141522"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                      <span>2</span>
                    </a>

                    <div class="Menu_NOtification_Wrap">
                      <div class="notification_Header">
                        <h4>Notifications</h4>
                      </div>
                      <div class="Notification_body">
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="images/2.png" alt="" /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Cool Marketing</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="images/4.png" alt="" /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Awesome packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="images/3.png" alt="" /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>what a packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="images/2.png" alt="" /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Cool Marketing</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="images/4.png" alt="" /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Awesome packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="images/3.png" alt="" /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>what a packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                      </div>
                      <div class="nofity_footer">
                        <div class="submit_button text-center pt_20">
                          <a href="./aadmin-dashboard-notification-page.html" class="btn_1">See More</a>
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="profile_info">
                  <p>S</p>
                  <div class="profile_info_iner">
                    <div class="profile_author_name">
                      <p>Neurologist</p>
                      <h5>Dr. Robar Smith</h5>
                    </div>
                    <div class="profile_info_details">
                      <a href="#">My Profile </a>
                      <a href="#">Settings</a>
                      <a href="#">Log Out </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main_content_iner overly_inner">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-xl-8">
              <div class="row my-teacher-row mb-3">
                <div class="col-md-12">
               <a href=""><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9.57 5.93018L3.5 12.0002L9.57 18.0702" stroke="#141522" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20.4999 12H3.66992" stroke="#141522" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></span></a>
              </div>
            </div>  
            <div class="row enroll-course-page-row1">
                <div class="col-md-12 p-0">
                  <div class="vedio-tag">
                  <video id="myVideo">
                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"> 
                    Your browser does not support HTML5 video.
                  </video>
                </div>
                </div>
              


                <div class="review-your-order-main-row">
                  <div class="psychology-main-heading">
                    <h2>{{$feature_courses->course_title}}</h2>
                  </div>
                  <div class="justify-content-between d-flex review-your-order-page-userpanel-cotent-div mt-3">
                    <p ><img src="/imgs/{{$feature_courses->profile_image}}" alt="" class="me-2">{{$feature_courses->profile_name}}
                    <span class="ms-3" style="color: var(--neutral-dark-grey, #9C9CA4);">{{$feature_courses->field}}</span>
                  <span class="ms-3" style="color: var(--secondary-blue, #04A4F4);">+ Follow  Mentor</span></p>
                    <h6 class="d-md-block d-none"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M9.60156 3.06934L11.5415 7.57405L16.4252 8.027L12.7404 11.264L13.8188 16.0487L9.60156 13.5445L5.38432 16.0487L6.46268 11.264L2.77792 8.027L7.66162 7.57405L9.60156 3.06934Z" fill="#FFBB54"/>
                    </svg>{{$feature_courses->rating}}</h6> </div>
               
                <div class="mt-3">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M7.99984 8.00016C9.84079 8.00016 11.3332 6.50778 11.3332 4.66683C11.3332 2.82588 9.84079 1.3335 7.99984 1.3335C6.15889 1.3335 4.6665 2.82588 4.6665 4.66683C4.6665 6.50778 6.15889 8.00016 7.99984 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M13.7268 14.6667C13.7268 12.0867 11.1601 10 8.0001 10C4.8401 10 2.27344 12.0867 2.27344 14.6667" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>{{$feature_courses->students}}</span>
                <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M6.00016 14.6668H10.0002C13.3335 14.6668 14.6668 13.3335 14.6668 10.0002V6.00016C14.6668 2.66683 13.3335 1.3335 10.0002 1.3335H6.00016C2.66683 1.3335 1.3335 2.66683 1.3335 6.00016V10.0002C1.3335 13.3335 2.66683 14.6668 6.00016 14.6668Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 6H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 10H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>{{$feature_courses->modules}}</span>
                <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M14.6668 8.00016C14.6668 11.6802 11.6802 14.6668 8.00016 14.6668C4.32016 14.6668 1.3335 11.6802 1.3335 8.00016C1.3335 4.32016 4.32016 1.3335 8.00016 1.3335C11.6802 1.3335 14.6668 4.32016 14.6668 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.4734 10.1202L8.40675 8.88684C8.04675 8.6735 7.75342 8.16017 7.75342 7.74017V5.00684" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>{{$feature_courses->time}}</span>
                <span class="ms-2 float-end">{{$feature_courses->level_of_expertise}} <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                  <rect y="6.46143" width="3" height="5.53846" rx="1.5" fill="#DB5962"/>
                  <rect x="5" y="3.69238" width="3" height="8.30769" rx="1.5" fill="#DB5962"/>
                  <rect x="10" width="3" height="12" rx="1.5" fill="#DB5962"/>
                </svg></span>
              </div>
                  <div class="row overview-link">
                    <div class="col-md-3 col-4">
                      <a href="{{url('userpenal_course_explore_about_page',$feature_courses->id)}}"><h3 class="active">About</h3> </a>
                    </div>
                    <div class="col-md-3 col-4">
                      <a href="{{url('explore_course_page_assingment_page',$feature_courses->id)}}"><h3 >Assignment</h3> </a>
                    </div>
                    <div class="col-md-3 col-4">
                      <a href="{{url('explore_courses_review_page_userpanel',$feature_courses->id)}}"><h3 >Review</h3> </a>
                    </div>
                    <div class="col-md-3 d-none d-md-block"></div>
                  </div>
                 
              <div class="row">
                <div class="about-description-userpenal">
                  <h2>Description</h2>
                  <p>{{$feature_courses->course_desc}}</p><br>
                  <!-- <p>Our expert Mentors will explain how to create a furniture application from the design to code stage using the flagship Google Flutter SDK framework. By using the popular design tool Figma, you will learn the basics of creating interactive mockups as an illustration into an application or commonly known as a prototype. Then you will learn to apply animation between screens to make the prototype come alive. After that, the process will continue to slicing with a variety of ready-to-use Flutter Widgets so that the developer's work can be more efficient, saving time and effort.</p><br>
                  <p>This class is suitable for those of you who want to deepen complete mobile application development on the front-end side. Later the application that is successfully built can become a portfolio for applying for work or your personal business needs. If you encounter difficulties while studying, please ask our Mentor directly through the Telegram group, OK? Register now and we are waiting in class!</p> -->
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-12">
                  <div class="about-description-userpenal">
                    <h2>Key Point</h2>
                    <p>
                      <i class="fa-regular fa-circle-check pe-3"></i>Understand the basics of Prototype & Animation
                    </p>
                    <p>
                      <i class="fa-regular fa-circle-check pe-3"></i>Understand the basics of MicroInteraction
                    </p>
                    <p>
                      <i class="fa-regular fa-circle-check pe-3"></i>Creating Animation (20 case studies) for mobile apps
                    </p>
                    <p>
                      <i class="fa-regular fa-circle-check pe-3"></i>Presenting designs using Animation
                    </p>
                  </div>
                </div>
              </div>
              </div>
           
            </div>
         
          </div>
          <div class="col-xl-4">
            <div class="row mt-5">
              <div class="col-md-12">
                <div class="sidebar-card-2-dashboard-user">
                  <div class="sidebar-card2-inner-card-userpenal enroll-course-page-userpenal">
                    <h3>{{$feature_courses->course_title}}</h3>
                      <div class="justify-content-between d-flex mt-2">
                        <p ><img src="/imgs/{{$feature_courses->profile_image}}" alt="" class="me-2">{{$feature_courses->profile_name}}</p>
                        <h6><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M9.60156 3.06934L11.5415 7.57405L16.4252 8.027L12.7404 11.264L13.8188 16.0487L9.60156 13.5445L5.38432 16.0487L6.46268 11.264L2.77792 8.027L7.66162 7.57405L9.60156 3.06934Z" fill="#FFBB54"/>
                        </svg>{{$feature_courses->rating}}</h6> </div>
                   
                    <div class="mt-3">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path d="M7.99984 8.00016C9.84079 8.00016 11.3332 6.50778 11.3332 4.66683C11.3332 2.82588 9.84079 1.3335 7.99984 1.3335C6.15889 1.3335 4.6665 2.82588 4.6665 4.66683C4.6665 6.50778 6.15889 8.00016 7.99984 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M13.7268 14.6667C13.7268 12.0867 11.1601 10 8.0001 10C4.8401 10 2.27344 12.0867 2.27344 14.6667" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>{{$feature_courses->students}}</span>
                    <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path d="M6.00016 14.6668H10.0002C13.3335 14.6668 14.6668 13.3335 14.6668 10.0002V6.00016C14.6668 2.66683 13.3335 1.3335 10.0002 1.3335H6.00016C2.66683 1.3335 1.3335 2.66683 1.3335 6.00016V10.0002C1.3335 13.3335 2.66683 14.6668 6.00016 14.6668Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10.5 6H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10.5 10H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>{{$feature_courses->modules}}</span>
                    <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path d="M14.6668 8.00016C14.6668 11.6802 11.6802 14.6668 8.00016 14.6668C4.32016 14.6668 1.3335 11.6802 1.3335 8.00016C1.3335 4.32016 4.32016 1.3335 8.00016 1.3335C11.6802 1.3335 14.6668 4.32016 14.6668 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10.4734 10.1202L8.40675 8.88684C8.04675 8.6735 7.75342 8.16017 7.75342 7.74017V5.00684" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>{{$feature_courses->time}}</span>
                  </div>
                  <div class="mt-3">
                    <h5>5 Modul<span class="float-end task-done">0/5 Done</span></h5>
                  </div>
                  <div class="mt-3 detail-sidebar">
                    <p><span class="headings-number me-2">1</span>Introduction<span class="float-end">10:00</span></p>
                  </div>
                  <div class="mt-4 detail-sidebar">
                    <p><span class="headings-number me-2">2</span>What is UX Design<span class="float-end">10:00</span></p>
                  </div>
                  <div class="mt-4 detail-sidebar">
                    <p><span class="headings-number me-2">3</span>Usability Testing<span class="float-end">10:00</span></p>
                  </div>
                  <div class="mt-4 detail-sidebar">
                    <p><span class="headings-number me-2">4</span>Create Usability Test<span class="float-end">30:00</span></p>
                  </div>
                  <div class="mt-4 detail-sidebar">
                    <p><span class="headings-number me-2">5</span>How to Implement<span class="float-end">30:00</span></p>
                  </div>
                  <div class="mt-3">
                    <a href="{{('confirm_enroll_userpanel_page')}}"><button class="go-to-detail-btn">Enroll Now</button></a>

                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card section -->


        <div class="row mt-3 mt-md-5">


          <div class="d-flex justify-content-between mb-3 related-course-heading-userpanel-review-page">
            <h2>Related Course</h2>
            <div class="d-flex align-items-center">
              <button class="carousel-control-prev me-2" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M15.0003 19.9196L8.48033 13.3996C7.71033 12.6296 7.71033 11.3696 8.48033 10.5996L15.0003 4.07959" stroke="#9C9CA4" stroke-width="1.18719" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M8.91016 19.9196L15.4302 13.3996C16.2002 12.6296 16.2002 11.3696 15.4302 10.5996L8.91016 4.07959" stroke="#141522" stroke-width="1.18719" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div> 
          <!-- card1 -->
          <div class="col-md-4">
            <div class="sidebar-card-2-dashboard-user">
              <div class="sidebar-card2-inner-card-userpenal">
                <div class="justify-content-center d-flex align-items-center">
                  <img src="{{url('userpanel./images/my-course-card1.png')}}" alt="" width="100%" >
                </div>
                <h3>Introduction Basic 
                  Programming HTML & CSS</h3>
                <div class="justify-content-between d-flex mt-2">
                  <p ><img src="{{url('userpanel./images/course-card-img1.png')}}" alt="" class="me-2">Alfredo Rhiel Madsen</p>
                  <h6><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M9.60156 3.06934L11.5415 7.57405L16.4252 8.027L12.7404 11.264L13.8188 16.0487L9.60156 13.5445L5.38432 16.0487L6.46268 11.264L2.77792 8.027L7.66162 7.57405L9.60156 3.06934Z" fill="#FFBB54"/>
                  </svg>4.5</h6> </div>
                <div class="mt-3">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M7.99984 8.00016C9.84079 8.00016 11.3332 6.50778 11.3332 4.66683C11.3332 2.82588 9.84079 1.3335 7.99984 1.3335C6.15889 1.3335 4.6665 2.82588 4.6665 4.66683C4.6665 6.50778 6.15889 8.00016 7.99984 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M13.7268 14.6667C13.7268 12.0867 11.1601 10 8.0001 10C4.8401 10 2.27344 12.0867 2.27344 14.6667" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>500 Student</span>
                <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M6.00016 14.6668H10.0002C13.3335 14.6668 14.6668 13.3335 14.6668 10.0002V6.00016C14.6668 2.66683 13.3335 1.3335 10.0002 1.3335H6.00016C2.66683 1.3335 1.3335 2.66683 1.3335 6.00016V10.0002C1.3335 13.3335 2.66683 14.6668 6.00016 14.6668Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 6H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 10H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>5 Modul</span>
                <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M14.6668 8.00016C14.6668 11.6802 11.6802 14.6668 8.00016 14.6668C4.32016 14.6668 1.3335 11.6802 1.3335 8.00016C1.3335 4.32016 4.32016 1.3335 8.00016 1.3335C11.6802 1.3335 14.6668 4.32016 14.6668 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.4734 10.1202L8.40675 8.88684C8.04675 8.6735 7.75342 8.16017 7.75342 7.74017V5.00684" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>1h 30m</span>
              </div>
              </div>
            </div>
          </div>
          <!-- card2 -->
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="sidebar-card-2-dashboard-user">
              <div class="sidebar-card2-inner-card-userpenal">
                <div class="justify-content-center d-flex align-items-center">
                  <img src="{{url('userpanel./images/my-course-card3.png')}}" alt="" width="100%" >
                </div>
                <h3>Creating Beautifull Landing Page in 1 Hour</h3>
                <div class="justify-content-between d-flex mt-2">
                  <p ><img src="{{url('userpanel./images/tchr1.png')}}" alt="" class="me-2">Lincoln George</p>
                  <h6><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M9.60156 3.06934L11.5415 7.57405L16.4252 8.027L12.7404 11.264L13.8188 16.0487L9.60156 13.5445L5.38432 16.0487L6.46268 11.264L2.77792 8.027L7.66162 7.57405L9.60156 3.06934Z" fill="#FFBB54"/>
                  </svg>4.5</h6> </div>
                <div class="mt-3">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M7.99984 8.00016C9.84079 8.00016 11.3332 6.50778 11.3332 4.66683C11.3332 2.82588 9.84079 1.3335 7.99984 1.3335C6.15889 1.3335 4.6665 2.82588 4.6665 4.66683C4.6665 6.50778 6.15889 8.00016 7.99984 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M13.7268 14.6667C13.7268 12.0867 11.1601 10 8.0001 10C4.8401 10 2.27344 12.0867 2.27344 14.6667" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>500 Student</span>
                <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M6.00016 14.6668H10.0002C13.3335 14.6668 14.6668 13.3335 14.6668 10.0002V6.00016C14.6668 2.66683 13.3335 1.3335 10.0002 1.3335H6.00016C2.66683 1.3335 1.3335 2.66683 1.3335 6.00016V10.0002C1.3335 13.3335 2.66683 14.6668 6.00016 14.6668Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 6H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 10H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>5 Modul</span>
                <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M14.6668 8.00016C14.6668 11.6802 11.6802 14.6668 8.00016 14.6668C4.32016 14.6668 1.3335 11.6802 1.3335 8.00016C1.3335 4.32016 4.32016 1.3335 8.00016 1.3335C11.6802 1.3335 14.6668 4.32016 14.6668 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.4734 10.1202L8.40675 8.88684C8.04675 8.6735 7.75342 8.16017 7.75342 7.74017V5.00684" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>1h 30m</span>
              </div>
              </div>
            </div>
          </div>
          <!-- card3 -->
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="sidebar-card-2-dashboard-user">
              <div class="sidebar-card2-inner-card-userpenal">
                <div class="justify-content-center d-flex align-items-center">
                  <img src="{{url('userpanel./images/my-course-card4.png')}}" alt="" width="100%" >
                </div>
                <h3>Animation is the Key of Successfull UI/UX Design</h3>
                <div class="justify-content-between d-flex mt-2">
                  <p ><img src="{{url('userpanel./images/course-card-img1.png')}}" alt="" class="me-2">Emerson Siphron</p>
                  <h6><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M9.60156 3.06934L11.5415 7.57405L16.4252 8.027L12.7404 11.264L13.8188 16.0487L9.60156 13.5445L5.38432 16.0487L6.46268 11.264L2.77792 8.027L7.66162 7.57405L9.60156 3.06934Z" fill="#FFBB54"/>
                  </svg>4.5</h6> </div>
                <div class="mt-3">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M7.99984 8.00016C9.84079 8.00016 11.3332 6.50778 11.3332 4.66683C11.3332 2.82588 9.84079 1.3335 7.99984 1.3335C6.15889 1.3335 4.6665 2.82588 4.6665 4.66683C4.6665 6.50778 6.15889 8.00016 7.99984 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M13.7268 14.6667C13.7268 12.0867 11.1601 10 8.0001 10C4.8401 10 2.27344 12.0867 2.27344 14.6667" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>500 Student</span>
                <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M6.00016 14.6668H10.0002C13.3335 14.6668 14.6668 13.3335 14.6668 10.0002V6.00016C14.6668 2.66683 13.3335 1.3335 10.0002 1.3335H6.00016C2.66683 1.3335 1.3335 2.66683 1.3335 6.00016V10.0002C1.3335 13.3335 2.66683 14.6668 6.00016 14.6668Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 6H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 10H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>5 Modul</span>
                <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M14.6668 8.00016C14.6668 11.6802 11.6802 14.6668 8.00016 14.6668C4.32016 14.6668 1.3335 11.6802 1.3335 8.00016C1.3335 4.32016 4.32016 1.3335 8.00016 1.3335C11.6802 1.3335 14.6668 4.32016 14.6668 8.00016Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.4734 10.1202L8.40675 8.88684C8.04675 8.6735 7.75342 8.16017 7.75342 7.74017V5.00684" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>1h 30m</span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </section>

    <div class="CHAT_MESSAGE_POPUPBOX">
      <div class="CHAT_POPUP_HEADER">
        <div class="MSEESAGE_CHATBOX_CLOSE">
          <svg
            width="12"
            height="12"
            viewBox="0 0 12 12"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z"
              fill="white"
            ></path>
          </svg>
        </div>
        <h3>Chat with us</h3>
        <div class="Chat_Listed_member">
          <ul>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="images/1.png" alt="" />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="images/2.png" alt="" />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="images/3.png" alt="" />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="images/4.png" alt="" />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="images/5.png" alt="" />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <div class="more_member_count">
                    <span>90+</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="CHAT_POPUP_BODY">
        <p class="mesaged_send_date">Sunday, 12 January</p>
        <div class="CHATING_SENDER">
          <div class="SMS_thumb">
            <img src="images/1.png" alt="" />
          </div>
          <div class="SEND_SMS_VIEW">
            <p>Hi! Welcome . How can I help you?</p>
          </div>
        </div>
        <div class="CHATING_SENDER CHATING_RECEIVEr">
          <div class="SEND_SMS_VIEW">
            <p>Hello</p>
          </div>
          <div class="SMS_thumb">
            <img src="images/1.png" alt="" />
          </div>
        </div>
      </div>
      <div class="CHAT_POPUP_BOTTOM">
        <div class="chat_input_box d-flex align-items-center">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="Write your message"
              aria-label="Recipient's username"
              aria-describedby="basic-addon2"
            />
            <div class="input-group-append">
              <button class="btn" type="button">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z"
                    fill="#707DB7"
                  ></path>
                </svg>
              </button>
              <button class="btn" type="button">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z"
                    fill="#707DB7"
                  ></path>
                </svg>

                <input type="file" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="back-top" style="display: none">
      <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
      </a>
    </div>

    @include('userpanel.layout.footer')





<script>
         // Získání aktuálního měsíce a roku
         let currentMonth = new Date().getMonth();
        let currentYear = new Date().getFullYear();

        // Funkce pro zjištění počtu dnů v měsíci
        function getDaysInMonth(month, year) {
            return new Date(year, month + 1, 0).getDate();
        }

        // Funkce pro zjištění prvního dne v měsíci (0 = Neděle, 1 = Pondělí, ...)
        function getFirstDayOfMonth(month, year) {
            const firstDay = new Date(year, month, 1).getDay();
            return firstDay === 0 ? 6 : firstDay - 1; // Převod na indexy pondělí (0) až neděle (6)
        }

        // Generování kalendáře
        function generateCalendar() {
            const table = document.querySelector('table');
            const daysInMonth = getDaysInMonth(currentMonth, currentYear);
            const firstDay = getFirstDayOfMonth(currentMonth, currentYear);
            let dayCounter = 1;

            // Nastavení názvu aktuálního měsíce a roku
            const currentMonthYear = document.getElementById('currentMonthYear');
            currentMonthYear.textContent = `${currentMonth + 1}. ${currentYear}`;

            for (let i = 0; i < 6; i++) {
                const newRow = table.insertRow();
                newRow.id = `week-${i + 1}`;

                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < firstDay) {
                        newRow.insertCell().textContent = '';
                    } else if (dayCounter <= daysInMonth) {
                        const cell = newRow.insertCell();
                        cell.textContent = dayCounter;
                        dayCounter++;

                        if (dayCounter - 1 === new Date().getDate() && currentMonth === new Date().getMonth()) {
                            cell.classList.add('current-day');
                        }
                    }
                }
            }
        }

        // Obsluha tlačítek pro přechod mezi měsíci
        const prevMonthButton = document.getElementById('prevMonth');
        const nextMonthButton = document.getElementById('nextMonth');

        prevMonthButton.addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            clearCalendar();
            generateCalendar();
        });

        nextMonthButton.addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            clearCalendar();
            generateCalendar();
        });

        // Vymazání stávajícího kalendáře
        function clearCalendar() {
            const table = document.querySelector('table');
            while (table.rows.length > 1) {
                table.deleteRow(1);
            }
        }

        generateCalendar();
</script>





<!-- script for video -->

<script>
  var plugin_url = "https://plugins.svn.wordpress.org/play-pause-button-for-video/trunk";
  jQuery(document).ready(function() {
                if (jQuery("video").length > 0) {
                  jQuery("video").wrap("<div class='video-parent-class'></div>");
                  /*Add image just before to vedio  */
                    jQuery("<img class='pause-play-img' src='" + plugin_url + "/img/img01.png' >").insertBefore("video");
    jQuery("video").each(function(index) {
        /*vedio parent div height width code*/
                        var vedio_width = jQuery(this).width();
                        var vedio_height = jQuery(this).height();
                        jQuery(".video-parent-class").css({
                            "width": vedio_width + "px",
                            "height": vedio_height + "px"
                        });

                        /*Pause Play image, middle width in vedio code*/
                        var half_width_vedio = vedio_width / 2;
                        var middle_object_width = half_width_vedio - 32;
                        jQuery(".pause-play-img").css({
                            "left": middle_object_width + "px"
                        });

                        /*Pause Play image middle height in vedio code*/
                        var half_height_vedio = vedio_height / 2;
                        var middle_object_heigh = half_height_vedio - 32;
                        jQuery(".pause-play-img").css({
                            "top": middle_object_heigh + "px"
                        });

                        /*Pause play and image src change code*/
                        jQuery(this).on("click", function() {
                            if (this.paused) {
                                this.play();
                                jQuery(this).prev().attr("src", plugin_url + "/img/img02.png");
                            } else {
                                this.pause();
                                jQuery(this).prev().attr("src", plugin_url + "/img/img01.png");
                            }


                        });


                        /*pause play image click vedio on off functionlity code*/
                        jQuery(this).prev().on("click", function() {
                            var myVideo = jQuery(this).next()[0];
                            if (myVideo.paused) {

                                myVideo.play();
                                jQuery(this).attr("src", plugin_url + "/img/img02.png");
                            } else {

                                myVideo.pause();
                                jQuery(this).attr("src", plugin_url + "/img/img01.png");
                            }

                        });
                        /*Floating js for HTML Video Start*/
        var windows = jQuery(window);
                        var videoWrap = jQuery(this).parent();
                        var video = jQuery(this);
                        var videoHeight = video.outerHeight();
                        var videoElement = video.get(0);
                        windows.on('scroll', function() {
                            var windowScrollTop = windows.scrollTop();
                            var videoBottom = videoHeight + videoWrap.offset().top;
                            //alert(videoBottom);
                            
                                if ((windowScrollTop > videoBottom)) {
                                  if (!videoElement.paused) {
                                      videoWrap.height(videoHeight);
                                      video.addClass('stuck');
                                      if (video.hasClass('stuck')) {
                                        video.attr("controls","1");
                                      }
                                      video.prev().attr("src", plugin_url + "/img/img02.png");
                          jQuery(".scrolldown").css({"display": "none"});          
                                  }
                                  else {
                                      videoWrap.height('auto');
                                      video.removeClass('stuck');
                                      video.removeAttr('controls');
                                      if (videoElement.paused) {
                                        video.prev().attr("src", plugin_url + "/img/img01.png");
                                      }
                                  }

                                } 
                                else {
                                    videoWrap.height('auto');
                                    video.removeClass('stuck');
                                    video.removeAttr('controls');
                                }
                            
                        });
                         /*Floating js for HTML Video End*/
    });
    /*After end vedio change image*/
//                     var video = document.getElementsByTagName('video')[0];

//                     video.onended = function(e) {
//                         jQuery(".pause-play-img").attr("src", plugin_url + "/img/img01.png");
//                     };
  }
  });
</script>


