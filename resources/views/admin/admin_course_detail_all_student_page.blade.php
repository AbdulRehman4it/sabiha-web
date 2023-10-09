@include('admin.layout.header')

<body class="crm_body_bg">
@include('admin.layout.sidebar')


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
                <div class="ps-4 top-heading">
                  <h2>Course Details/All Student</h2>
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
                          <a href="#" class="btn_1">See More</a>
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
              <div class="row mb-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center gap-4 dashboard-card justify-content-between">
                      <div class="finance-card1">
                        <img src="{{url('admin./images/course-detail-admin-card1.png')}}" class="img-fluid" alt="">
                          <h4>Total Student</h4>
                      </div>
                        <div>
                            <h3 style="font-size: 22.489px; color: #FDCB9E;">5,622</h3>
                            <span style="float: right; padding-top: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="22" viewBox="0 0 41 22" fill="none">
                              <path d="M1.5918 1.51063L7.03297 6.74776L11.4848 3.89114L20.9574 13.4132L27.8084 7.69997L38.7278 19.6025" stroke="url(#paint0_linear_911_6169)" stroke-width="2.85662" stroke-linecap="round"/>
                              <defs>
                                <linearGradient id="paint0_linear_911_6169" x1="40.1561" y1="19.1264" x2="-10.3108" y2="-5.15481" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#FDCB9E"/>
                                  <stop offset="1" stop-color="#FDCB9E" stop-opacity="0"/>
                                </linearGradient>
                              </defs>
                            </svg></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                  <div class="d-flex align-items-center gap-4 dashboard-card justify-content-between">
                    <div class="finance-card1">
                      <img src="{{url('admin./images/course-detail-admin-card2.png')}}" class="img-fluid" alt="">
                        <h4>Avg. Progress</h4>
                    </div>
                      <div>
                          <h3 style="font-size: 22.489px; color: #DF5C62;">34%</h3>
                          <span style="float: right; padding-top: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="22" viewBox="0 0 41 22" fill="none">
                            <path d="M2.4082 19.6027L7.84938 14.3655L12.3013 17.2221L21.7738 7.70008L28.6248 13.4133L39.5442 1.51074" stroke="url(#paint0_linear_911_6175)" stroke-width="2.85662" stroke-linecap="round"/>
                            <defs>
                              <linearGradient id="paint0_linear_911_6175" x1="40.9725" y1="1.98685" x2="-9.49437" y2="26.2681" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#CCEABB"/>
                                <stop offset="1" stop-color="#CCEABB" stop-opacity="0"/>
                              </linearGradient>
                            </defs>
                          </svg></span>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-3 mt-md-0">
                <div class="d-flex align-items-center gap-4 dashboard-card justify-content-between ">
                  <div class="finance-card1">
                    <img src="{{url('admin./images/course-detail-admin-card3.png')}}" class="img-fluid" alt="">
                      <h4>Task Completed</h4>
                  </div>
                    <div>
                        <h3 style="font-size: 22.489px; color: #DF5C62;">152</h3>
                        <span style="float: right; padding-top: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="22" viewBox="0 0 41 22" fill="none">
                          <path d="M2.22461 19.6027L7.66579 14.3655L12.1177 17.2221L21.5902 7.70008L28.4412 13.4133L39.3606 1.51074" stroke="url(#paint0_linear_911_6184)" stroke-width="2.85662" stroke-linecap="round"/>
                          <defs>
                            <linearGradient id="paint0_linear_911_6184" x1="40.7889" y1="1.98685" x2="-9.67796" y2="26.2681" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#CCEABB"/>
                              <stop offset="1" stop-color="#CCEABB" stop-opacity="0"/>
                            </linearGradient>
                          </defs>
                        </svg></span>
                    </div>
                </div>
            </div>
          
            </div>
            <div class="white_card mb_30 finance_card">
              <div class="white_card_header">
                <div class="box_header m-0">
                  <div class="main-title">
                    <h3 class="m-0">All Students</h3>
                  </div>
                  <div class="float-lg-right float-none common_tab_btn2 justify-content-between d-flex">
                    <div class="justify-content-center gj-text-align-center align-items-center d-flex me-0 me-md-4">
                      <p class="m-0" style="font-size: 11px; color: black; font-weight: 400;">Select Course:</p>
                    </div>
                    <div class="dropdown">
                      <button class="btn course-detail-admin-page dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{url('admin./images/course-img-in-select.png')}}" alt="" class="me-0 me-md-3"/>How to Make UX Case Study for Beginner
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="white_card_body">

    <!-- BEGIN: INSTALLMENT TABLE SECTION -->
    <div class="row installment-table">
      <div class="col-md-12 p-0">
          <div class="table-responsive">
              <div class="hack1">
                  <div class="hack2">
                      <table class="table">
                          <thead>
                              <tr class="text-nowrap">
                                <th scope="col">Student</th>
                                <th scope="col">Nationality</th>
                                <th scope="col">Tasks Completed</th>
                                <th scope="col">Progress</th>
                                <th scope="col">Test Score</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><img src="{{url('admin./images/studen1.png')}}" alt="">Daniel Berraldi</td>
                              <td><img src="{{url('admin./images/italy.png')}}" alt="" class="me-2">Italy</td>
                              <td>
                                <div>
                               <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                <g clip-path="url(#clip0_911_6252)">
                                  <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_911_6252">
                                    <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                  </clipPath>
                                </defs>
                              </svg>Chapter 3.pdf</span>
                              </div>
                              <div>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                  <g clip-path="url(#clip0_911_6252)">
                                    <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_911_6252">
                                      <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                    </clipPath>
                                  </defs>
                                </svg>Case Study Final Fix.ppt</span>
                              </div>
                            </td>
                            <td>
                            <div>
                              <p>60%</p>
                              <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td>86</td>
                          </tr>  
                       
                           <tr>
                            <td><img src="{{url('admin./images/student2.png')}}" alt="">Olivia James</td>
                            <td><img src="{{url('admin./images/us.png')}}" alt="" class="me-2">USA</td>
                            <td>
                              <div>
                             <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                              <g clip-path="url(#clip0_911_6252)">
                                <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_911_6252">
                                  <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                </clipPath>
                              </defs>
                            </svg>Chapter 3.pdf</span>
                            </div>
                            <div>
                              <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                <g clip-path="url(#clip0_911_6252)">
                                  <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_911_6252">
                                    <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                  </clipPath>
                                </defs>
                              </svg>Chapter 5.pdf</span>
                            </div>
                          </td>
                          <td>
                          <div>
                            <p>55%</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                        <td>84</td>
                        </tr> 

                        <tr>
                          <td><img src="{{url('admin./images/student3.png')}}" alt="">Michael Trippier</td>
                          <td><img src="{{url('admin./images/be.png')}}" alt="" class="me-2">Belgium</td>
                          <td>
                            <div>
                           <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                            <g clip-path="url(#clip0_911_6252)">
                              <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_911_6252">
                                <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                              </clipPath>
                            </defs>
                          </svg>Case Study Final Fix.ppt</span>
                          </div>
                        </td>
                        <td>
                        <div>
                          <p>40%</p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td>80%</td>
                        </tr> 
                       
                         <tr>
                          <td><img src="{{url('admin./images/student4.png')}}" alt="">Justinus Bieber</td>
                          <td><img src="{{url('admin./images/nl.png')}}" alt="" class="me-2">Netherland</td>
                          <td>
                            <div>
                           <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                            <g clip-path="url(#clip0_911_6252)">
                              <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_911_6252">
                                <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                              </clipPath>
                            </defs>
                          </svg>Chapter 3.pdf</span>
                          </div>
                        </td>
                        <td>
                        <div>
                          <p>50%</p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                      <td>80</td>
                        </tr> 
                        
                          <tr>
                            <td><img src="{{url('admin./images/student5.png')}}" alt="">Jessica Joe</td>
                            <td><img src="{{url('admin./images/sg.png')}}" alt="" class="me-2">Singapore</td>
                            <td>
                              <div>
                             <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                              <g clip-path="url(#clip0_911_6252)">
                                <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_911_6252">
                                  <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                </clipPath>
                              </defs>
                            </svg>Chapter 3.pdf</span>
                            </div>
                          </td>
                          <td>
                          <div>
                            <p>40%</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                        <td>78</td>
                          </tr> 
                       
                            <tr>
                              <td><img src="{{url('admin./images/student6.png')}}" alt="">David Alaba</td>
                              <td><img src="{{url('admin./images/indoneshia.png')}}" alt="" class="me-2">Indonesia</td>
                              <td><span>No Tasks Completed</span></td>
                            <td>
                            <div>
                              <p>40%</p>
                              <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td>77</td>
                            </tr> 
                           
                             <tr>
                              <td><img src="{{url('admin./images/student7.png')}}" alt="">Rodrigo Muller</td>
                              <td><img src="{{url('admin./images/de.png')}}" alt="" class="me-2">Germany</td>
                              <td><span>No Tasks Completedd </span></td>
                            <td>
                            <div>
                              <p>32%</p>
                              <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </td>
                          <td>76</td>
                            </tr> 
                              <!-- <tr>
                                  <td>
                                      <div>
                                          <input class="form-check-input m-0" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                  </td>
                                  <td>2</td>
                                  <td>Bukhari_529</td>
                                  <td>bukhari529@gmail.com</td>
                                  <td>0xfebea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td>2568</td>
                                  <td>WMT</td>
                                  <td>7efbXea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td class="Accepted">
                                      <span>Accepted</span></td>
                                  <td>
                                      <i class="fa fa-pencil"></i>
                                      <i class="fa fa-trash"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div>
                                          <input class="form-check-input m-0" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                  </td>
                                  <td>3</td>
                                  <td>Bukhari_529</td>
                                  <td>bukhari529@gmail.com</td>
                                  <td>0xfebea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td>2568</td>
                                  <td>WML</td>
                                  <td>7efbXea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td class="Accepted">
                                      <span>Accepted</span></td>
                                  <td>
                                      <i class="fa fa-pencil"></i>
                                      <i class="fa fa-trash"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div>
                                          <input class="form-check-input m-0" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                  </td>
                                  <td>4</td>
                                  <td>Bukhari_529</td>
                                  <td>bukhari529@gmail.com</td>
                                  <td>0xfebea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td>2568</td>
                                  <td>WML</td>
                                  <td>7efbXea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td class="Accepted">
                                      <span>Accepted</span></td>
                                  <td>
                                      <i class="fa fa-pencil"></i>
                                      <i class="fa fa-trash"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div>
                                          <input class="form-check-input m-0" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                  </td>
                                  <td>5</td>
                                  <td>Bukhari_529</td>
                                  <td>bukhari529@gmail.com</td>
                                  <td>0xfebea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td>2568</td>
                                  <td>WWZ</td>
                                  <td>7efbXea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td class="Accepted">
                                      <span>Accepted</span></td>
                                  <td>
                                      <i class="fa fa-pencil"></i>
                                      <i class="fa fa-trash"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div>
                                          <input class="form-check-input m-0" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                  </td>
                                  <td>6</td>
                                  <td>Bukhari_529</td>
                                  <td>bukhari529@gmail.com</td>
                                  <td>0xfebea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td>2568</td>
                                  <td>WMT</td>
                                  <td>7efbXea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td class="Accepted">
                                      <span>Accepted</span></td>
                                  <td>
                                      <i class="fa fa-pencil"></i>
                                      <i class="fa fa-trash"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div>
                                          <input class="form-check-input m-0" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                  </td>
                                  <td>7</td>
                                  <td>Bukhari_529</td>
                                  <td>bukhari529@gmail.com</td>
                                  <td>0xfebea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td>2568</td>
                                  <td>WMT</td>
                                  <td>7efbXea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td class="Accepted">
                                      <span>Accepted</span></td>
                                  <td>
                                      <i class="fa fa-pencil"></i>
                                      <i class="fa fa-trash"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div>
                                          <input class="form-check-input m-0" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                  </td>
                                  <td>8</td>
                                  <td>Bukhari_529</td>
                                  <td>bukhari529@gmail.com</td>
                                  <td>0xfebea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td>2568</td>
                                  <td>WWZ</td>
                                  <td>7efbXea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td class="Accepted">
                                      <span>Accepted</span></td>
                                  <td>
                                      <i class="fa fa-pencil"></i>
                                      <i class="fa fa-trash"></i>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div>
                                          <input class="form-check-input m-0" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                      </div>
                                  </td>
                                  <td>9</td>
                                  <td>Bukhari_529</td>
                                  <td>bukhari529@gmail.com</td>
                                  <td>0xfebea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td>2568</td>
                                  <td>WMZ</td>
                                  <td>7efbXea9ddd8ce8663f0725cecc4b2cf777fbb12f3</td>
                                  <td class="Accepted">
                                      <span>Accepted</span></td>
                                  <td>
                                      <i class="fa fa-pencil"></i>
                                      <i class="fa fa-trash"></i>
                                  </td>
                              </tr> -->
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- END: INSTALLMENT TABLE SECTION -->

                <!-- <div class="row">
                  <div class="col-md-12 p-0">
                    <div class="table-responsive">
                      <table class="table payout-table">
                          <thead class="thead-dark active">
                              <tr>
                                  <th scope="col">Student</th>
                                  <th scope="col">Nationality</th>
                                  <th scope="col">Tasks Completed</th>
                                  <th scope="col">Progress</th>
                                  <th scope="col">Test Score</th>
                              </tr>
                          </thead>
                          <tbody class="table-tbody">
                      
                              <tr>
                                  <td><img src="./images/studen1.png" alt="">Daniel Berraldi</td>
                                  <td><img src="./images/italy.png" alt="" class="me-2">Italy</td>
                                  <td>
                                    <div>
                                   <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                    <g clip-path="url(#clip0_911_6252)">
                                      <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_911_6252">
                                        <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                      </clipPath>
                                    </defs>
                                  </svg>Chapter 3.pdf</span>
                                  </div>
                                  <div>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                      <g clip-path="url(#clip0_911_6252)">
                                        <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_911_6252">
                                          <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                        </clipPath>
                                      </defs>
                                    </svg>Case Study Final Fix.ppt</span>
                                  </div>
                                </td>
                                <td>
                                <div>
                                  <p>60%</p>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </td>
                              <td>86</td>
                              </tr>  
                           
                               <tr>
                                <td><img src="./images/student2.png" alt="">Olivia James</td>
                                <td><img src="./images/🇺🇸.png" alt="" class="me-2">USA</td>
                                <td>
                                  <div>
                                 <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                  <g clip-path="url(#clip0_911_6252)">
                                    <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_911_6252">
                                      <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                    </clipPath>
                                  </defs>
                                </svg>Chapter 3.pdf</span>
                                </div>
                                <div>
                                  <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                    <g clip-path="url(#clip0_911_6252)">
                                      <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_911_6252">
                                        <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                      </clipPath>
                                    </defs>
                                  </svg>Chapter 5.pdf</span>
                                </div>
                              </td>
                              <td>
                              <div>
                                <p>55%</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td>84</td>
                            </tr> 
                           
                              <tr>
                                <td><img src="./images/student3.png" alt="">Michael Trippier</td>
                                <td><img src="./images/🇧🇪.png" alt="" class="me-2">Belgium</td>
                                <td>
                                  <div>
                                 <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                  <g clip-path="url(#clip0_911_6252)">
                                    <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_911_6252">
                                      <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                    </clipPath>
                                  </defs>
                                </svg>Case Study Final Fix.ppt</span>
                                </div>
                              </td>
                              <td>
                              <div>
                                <p>40%</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td>80%</td>
                              </tr> 
                             
                               <tr>
                                <td><img src="./images/student4.png" alt="">Justinus Bieber</td>
                                <td><img src="./images/🇳🇱.png" alt="" class="me-2">Netherland</td>
                                <td>
                                  <div>
                                 <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                  <g clip-path="url(#clip0_911_6252)">
                                    <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_911_6252">
                                      <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                    </clipPath>
                                  </defs>
                                </svg>Chapter 3.pdf</span>
                                </div>
                              </td>
                              <td>
                              <div>
                                <p>50%</p>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td>80</td>
                              </tr> 
                              
                                <tr>
                                  <td><img src="./images/student5.png" alt="">Jessica Joe</td>
                                  <td><img src="./images/🇸🇬.png" alt="" class="me-2">Singapore</td>
                                  <td>
                                    <div>
                                   <span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                    <g clip-path="url(#clip0_911_6252)">
                                      <path d="M6.615 7.78165H4.71059V3.97283H6.615C7.12009 3.97283 7.60448 4.17347 7.96163 4.53062C8.31877 4.88776 8.51942 5.37216 8.51942 5.87724C8.51942 6.38232 8.31877 6.86672 7.96163 7.22386C7.60448 7.58101 7.12009 7.78165 6.615 7.78165ZM5.6628 4.92503V6.82945H6.615C6.86755 6.82945 7.10974 6.72912 7.28832 6.55055C7.46689 6.37198 7.56721 6.12978 7.56721 5.87724C7.56721 5.6247 7.46689 5.3825 7.28832 5.20393C7.10974 5.02536 6.86755 4.92503 6.615 4.92503H5.6628ZM8.04331 2.06842H3.28228V9.68606H9.94772V3.97283H8.04331V2.06842ZM2.33008 1.58851C2.33008 1.3276 2.5429 1.11621 2.8057 1.11621H8.51942L10.8999 3.49673V10.1588C10.9004 10.2214 10.8885 10.2834 10.865 10.3413C10.8414 10.3992 10.8067 10.4519 10.7628 10.4965C10.7189 10.541 10.6667 10.5764 10.6091 10.6008C10.5515 10.6251 10.4897 10.6378 10.4272 10.6383H2.80285C2.67781 10.6374 2.55814 10.5874 2.46968 10.499C2.38122 10.4106 2.33108 10.291 2.33008 10.166V1.58851Z" fill="#DF5C62"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_911_6252">
                                        <rect width="11.4265" height="11.4265" fill="white" transform="translate(0.901367 0.164062)"/>
                                      </clipPath>
                                    </defs>
                                  </svg>Chapter 3.pdf</span>
                                  </div>
                                </td>
                                <td>
                                <div>
                                  <p>40%</p>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </td>
                              <td>78</td>
                                </tr> 
                             
                                  <tr>
                                    <td><img src="./images/student6.png" alt="">David Alaba</td>
                                    <td><img src="./images/indoneshia.png" alt="" class="me-2">Indonesia</td>
                                    <td><span>No Tasks Completed</span></td>
                                  <td>
                                  <div>
                                    <p>40%</p>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </td>
                                <td>77</td>
                                  </tr> 
                                 
                                   <tr>
                                    <td><img src="./images/student7.png" alt="">Rodrigo Muller</td>
                                    <td><img src="./images/🇩🇪.png" alt="" class="me-2">Germany</td>
                                    <td><span>No Tasks Completedd </span></td>
                                  <td>
                                  <div>
                                    <p>32%</p>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </td>
                                <td>76</td>
                                  </tr> 
                          </tbody>
                      </table>
                    </div>
                  </div>
              </div> -->
              
              </div>            
            </div>
            </div>


              <!-- card-4-column -->
            <div class="col-xl-4">
                  <!-- row-1 -->
                 <div class="row card-bg m-0">
                  <div class="col-md-12">
                    <div class="main-card">
                        <div class="card-inner-content ">
                          <div class="d-flex justify-content-between">
                          <h5 class="card-inner-content-head5">Your Earnings</h5>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="33" height="18" viewBox="0 0 33 18" fill="none">
                              <path d="M1.5459 16.4812L5.93942 12.1411L9.53413 14.5084L17.1829 6.61743L22.7147 11.352L31.5317 1.48828" stroke="url(#paint0_linear_989_4608)" stroke-width="2.81117" stroke-linecap="round"/>
                              <defs>
                                <linearGradient id="paint0_linear_989_4608" x1="32.685" y1="1.88283" x2="-8.45645" y2="21.1698" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#3F3F44"/>
                                  <stop offset="1" stop-color="#3F3F44" stop-opacity="0"/>
                                </linearGradient>
                              </defs>
                            </svg></span>
                          </div>
                          <div class="row pt-4 yr-earning-card">                      
                            <div class="col-md-4 col-4">
                              <div class="course-side-content">
                                <p>Today Earning</p>
                                <h5>$15,010</h5>
                              </div>
                            </div>
                            <div class="col-md-4 col-4">
                              <div class="course-side-content">
                                <p > Pending</p>
                                <h5 style="color: #FDCB9E;">$58</h5>
                              </div>
                            </div>
                            <div class="col-md-4 col-4">
                              <div class="course-side-content">
                                <p>In Review</p>
                                <h5>$70</h5>
                              </div>
                            </div>                   
                          </div>
                        </div>
                      
                        <div class="row withdrawl-row">
                          <div class="col-md-6 col-6">
                            <div class="course-side-content">
                              <p style="color: white;">Available</p>
                              <h5 style="color: #DF5C62;">$167</h5>
                            </div>
                          </div>
                          <div class="col-md-6 col-6">
                            <div class="withdrawl-button">
                              <button class="btn"><a href="">Withdraw</a></button>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                 </div>
                <!-- row3 -->
                 <div class="row">
                  <div class="col-md-12">
                    <div class="student-location">
                      <h1>Top Student Location</h1>
                      <!-- Progress bar green -->
                       <div class="progress-bar--wrap progress-bar--green">
                        <div class="progress-bar">
                           Progress
                         <div class="progress-bar--inner" style="width: 20%;">
                      </div>
                        </div>
                            <span class="progress-bar--counter">20%</span>
                          </div>

<!-- Progress bar blue -->
<div class="progress-bar--wrap progress-bar--blue">
  <div class="progress-bar">
    Progress
    <div class="progress-bar--inner" style="width: 40%;"></div>
  </div>
  <span class="progress-bar--counter">40%</span>
</div>

<!-- Progress bar red -->
<div class="progress-bar--wrap progress-bar--red">
  <div class="progress-bar">
    Progress
    <div class="progress-bar--inner" style="width: 60%;"></div>
  </div>
  <span class="progress-bar--counter">60%</span>
</div>

<!-- Progress bar yellow -->
<div class="progress-bar--wrap progress-bar--yellow">
  <div class="progress-bar">
    Progress
    <div class="progress-bar--inner" style="width: 80%;"></div>
  </div>
  <span class="progress-bar--counter">80%</span>
</div>
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
    @include('admin.layout.js')
