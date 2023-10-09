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
                <div class="ps-4">
                  <h2>Finance</h2>
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
            <!-- <div class="row mb-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center gap-4 dashboard-card">
                        <img src="./images/hat.png" class="img-fluid" alt="">
                        <div>
                            <h3>Complete Course</h3>
                            <h2>4732</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="d-flex align-items-center gap-4 dashboard-card">
                        <img src="./images/student.png" class="img-fluid" alt="">
                        <div>
                            <h3>Students</h3>
                            <h2>1627</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="d-flex align-items-center gap-4 dashboard-card">
                        <img src="./images/course.png" class="img-fluid" alt="">
                        <div>
                            <h3>Ongoing Course</h3>
                            <h2>3275</h2>
                        </div>
                    </div>
                </div>
            </div> -->
          <div class="row">
            <div class="col-xl-8">
              <div class="row mb-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center gap-4 dashboard-card">
                      <div class="finance-card1">
                        <img src="{{url('admin./images/finance-card-1.png')}}" class="img-fluid" alt="">
                          <h4>Number of Sales</h4>
                      </div>
                        <div>
                            <h3 style="font-size: 22.489px; color: #DF5C62;">2,714</h3>
                            <span style="float: right; padding-top: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="22" viewBox="0 0 41 22" fill="none">
                              <path d="M2.24414 2.40393L7.59875 7.55774L11.9798 4.74657L21.3017 14.1171L28.0436 8.4948L38.7894 20.208" stroke="url(#paint0_linear_989_4700)" stroke-width="2.81117" stroke-linecap="round"/>
                              <defs>
                                <linearGradient id="paint0_linear_989_4700" x1="40.1949" y1="19.7395" x2="-9.46907" y2="-4.15547" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#FDCB9E"/>
                                  <stop offset="1" stop-color="#FDCB9E" stop-opacity="0"/>
                                </linearGradient>
                              </defs>
                            </svg></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                  <div class="d-flex align-items-center gap-4 dashboard-card">
                    <div class="finance-card1">
                      <img src="{{url('admin./images/finance-card2.png')}}" class="img-fluid" alt="">
                        <h4>Sales Revenue</h4>
                    </div>
                      <div>
                          <h3 style="font-size: 22.489px; color: #DF5C62;">$32,821</h3>
                          <span style="float: right; padding-top: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                            <path d="M1.51465 20.2079L6.86926 15.0541L11.2503 17.8652L20.5722 8.49468L27.3141 14.117L38.0599 2.40381" stroke="url(#paint0_linear_989_4709)" stroke-width="2.81117" stroke-linecap="round"/>
                            <defs>
                              <linearGradient id="paint0_linear_989_4709" x1="39.4654" y1="2.87234" x2="-10.1986" y2="26.7673" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#DF5C62"/>
                                <stop offset="1" stop-color="#CCEABB" stop-opacity="0"/>
                              </linearGradient>
                            </defs>
                          </svg></span>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-3 mt-md-0">
                <div class="d-flex align-items-center gap-4 dashboard-card ">
                  <div class="finance-card1">
                    <img src="{{url('admin./images/finance-card-3.png')}}" class="img-fluid" alt="">
                      <h4>Average Price</h4>
                  </div>
                    <div>
                        <h3 style="font-size: 22.489px; color: #DF5C62;">75%</h3>
                        <span style="float: right; padding-top: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                          <path d="M1.78711 20.2084L7.14172 15.0546L11.5228 17.8657L20.8447 8.49517L27.5866 14.1175L38.3323 2.4043" stroke="url(#paint0_linear_989_4718)" stroke-width="2.81117" stroke-linecap="round"/>
                          <defs>
                            <linearGradient id="paint0_linear_989_4718" x1="39.7379" y1="2.87283" x2="-9.9261" y2="26.7678" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#DF5C62"/>
                              <stop offset="1" stop-color="#CCEABB" stop-opacity="0"/>
                            </linearGradient>
                          </defs>
                        </svg></span>
                    </div>
                </div>
            </div>
            
              







            </div>
            <div class="white_card white_card-bg-clr-sec mb_30 finance_card">
              <div class="white_card_header">
                <div class="box_header m-0">
                  <div class="main-title">
                    <h3 class="m-0">Profile Visitor</h3>
                  </div>
                  <div class="float-lg-right float-none common_tab_btn2 justify-content-end">
                  <select>
                      <option>2001</option>
                      <option>2002</option>
                      <option>2003</option>
                      <option>2004</option>
                      <option>2005</option>
                      <option>2006</option>
                      <option>2007</option>
                      <option>2008</option>
                      <option>2009</option>
                      <option>2010</option>
                      <option>2011</option>
                      <option>2012</option>
                      <option>2013</option>
                      <option>2014</option>
                      <option>2015</option>
                      <option>2016</option>
                      <option>2017</option>
                      <option>2018</option>
                      <option>2019</option>
                      <option>2020</option>
                      <option>2021</option>
                      <option>2022</option>
                      <option>2023</option>
                      <option>2024</option>
                      <option>2025</option>
                      <option>2026</option>
                      <option>2027</option>
                      <option>2028</option>
                      <option>2029</option>
                      <option>2030</option>
                      <option>2031</option>
                      <option>2032</option>
                      <option>2033</option>
                      <option>2034</option>
                      <option>2035</option>
                      <option>2036</option>
                      <option>2037</option>
                      <option>2038</option>
                      <option>2039</option>
                      <option>2040</option>
                      <option>2041</option>
                      <option>2042</option>
                      <option>2043</option>
                      <option>2044</option>
                      <option>2045</option>
                      <option>2046</option>
                      <option>2047</option>
                      <option>2048</option>
                      <option>2049</option>
                      <option>2050</option>
                      <option>2051</option>
                      <option>2052</option>
                      <option>2053</option>
                      <option>2054</option>
                      <option>2055</option>
                      <option>2056</option>
                      <option>2057</option>
                      <option>2058</option>
                      <option>2059</option>
                      <option>2060</option>
                      <option>2061</option>
                      <option>2062</option>
                      <option>2063</option>
                      <option>2064</option>
                      <option>2065</option>
                      <option>2066</option>
                      <option>2067</option>
                      <option>2068</option>
                      <option>2069</option>
                      <option>2070</option>
                      <option>2071</option>
                      <option>2072</option>
                      <option>2073</option>
                      <option>2074</option>
                      <option>2075</option>
                      <option>2076</option>
                      <option>2077</option>
                      <option>2078</option>
                      <option>2079</option>
                      <option>2080</option>
                      <option>2081</option>
                      <option>2082</option>
                      <option>2083</option>
                      <option>2084</option>
                      <option>2085</option>
                      <option>2086</option>
                      <option>2087</option>
                      <option>2088</option>
                      <option>2089</option>
                      <option>2090</option>
                      <option>2091</option>
                      <option>2092</option>
                      <option>2093</option>
                      <option>2094</option>
                      <option>2095</option>
                      <option>2096</option>
                      <option>2097</option>
                      <option>2098</option>
                      <option>2099</option>
                      <option>2100</option>
                   </select>
                  </div>
                </div>
              </div>
              <div class="white_card_body">
                <div id="marketchart"></div>
                <!-- row1 -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="finance-card-weekly">
                      <div class="d-flex justify-content-between">
                        <h3>Weekly Statistic</h3>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_989_4726)">
                              <path d="M12.1243 3.65332C11.3513 3.65332 10.7188 4.28583 10.7188 5.05891C10.7188 5.83198 11.3513 6.46449 12.1243 6.46449C12.8974 6.46449 13.5299 5.83198 13.5299 5.05891C13.5299 4.28583 12.8974 3.65332 12.1243 3.65332ZM12.1243 17.7092C11.3513 17.7092 10.7188 18.3417 10.7188 19.1148C10.7188 19.8878 11.3513 20.5203 12.1243 20.5203C12.8974 20.5203 13.5299 19.8878 13.5299 19.1148C13.5299 18.3417 12.8974 17.7092 12.1243 17.7092ZM12.1243 10.6812C11.3513 10.6812 10.7188 11.3138 10.7188 12.0868C10.7188 12.8599 11.3513 13.4924 12.1243 13.4924C12.8974 13.4924 13.5299 12.8599 13.5299 12.0868C13.5299 11.3138 12.8974 10.6812 12.1243 10.6812Z" fill="#3F3F44" fill-opacity="0.3"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_989_4726">
                                <rect width="22.4894" height="22.4894" fill="white" transform="translate(0.879883 0.841797)"/>
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                       
                      </div>
                      <div class="finance-card-weekly-content d-flex">
                        <div>
                          <span>59%</span>
                        </div>
                        <div class="ps-3">
                          <h2>UI/UX Design</h2>
                          <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <!-- row2 -->
                      <div class="finance-card-weekly-content d-flex">
                        <div>
                          <span>87%</span>
                        </div>
                        <div class="ps-3">
                          <h2>Design Tips</h2>
                          <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <!-- row3 -->
                      <div class="finance-card-weekly-content d-flex">
                        <div>
                          <span>71%</span>
                        </div>
                        <div class="ps-3">
                          <h2>Productivity</h2>
                          <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- row-2 -->
                  <div class="col-md-6 mt-3 mt-md-0">
                    <div class="finance-earning-history ">
                      <h2>Earning History</h2>
                      <div class="d-flex finance-main-row">
                        <div class="d-flex">
                          <div class="performance-img-div">
                            <img src="{{url('admin./images/card1.png')}}" alt="">
                          </div>
                          <div class="ps-3">
                            <h1>UI/UX Prototyping with Proto.io</h1>
                          </div>
                        </div>
                        <div class="">
                          <span>$150.5</span>
                        </div>
                      </div>
                      <!--  -->
                      <div class="d-flex finance-main-row">
                        <div class="d-flex">
                          <div class="performance-img-div">
                            <img src="{{url('admin./images/card2.png')}}" alt="">
                          </div>
                          <div class="ps-3">
                            <h1>How to Make UX Case Study for Beginner</h1>
                          </div>
                        </div>
                        <div class="float-end">
                          <span>$285</span>
                        </div>
                      </div>
                        <!--  -->
                        <div class="d-flex finance-main-row">
                          <div class="d-flex">
                            <div class="performance-img-div">
                              <img src="{{url('admin./images/card3.png')}}" alt="">
                            </div>
                            <div class="ps-3">
                              <h1>How to Conduct User Research from Scratch</h1>
                            </div>
                          </div>
                          <div class="float-end">
                            <span>$109</span>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            </div>


              <!-- card-4-column -->
            <div class="col-xl-4">
                  <!-- row-1 -->
                 <div class="row card-bg m-0">
                  <div class="col-md-12">
                    <div class="main-card">
                        <div class="card-inner-content">
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
                                <h5 style="color: #DF5C62;">$58</h5>
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
                              <h6>Available</h6>
                              <h5 style="color: #CCEABB;">$167</h5>
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
                 <!-- row2 -->
                 <div class="row">
                  <div class="col-md-12">
                    <div class="performance-row">
                      <h2>Payout Withdrawal</h2>
                      <!-- <div class="d-flex performance-main-row">
                        <div class="d-flex">
                          <div class="performance-img-div">
                            <img src="{{url('admin./images/performnce-figma.png')}}" alt="">
                          </div>
                          <div class="performance-content">
                            <h1>Get Started with Figjam</h1>
                            <p>2 months ago</p>
                          </div>
                        </div>
                        <div class="">
                          <span> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <g clip-path="url(#clip0_558_2571)">
                              <path d="M7.69078 2.19775C10.7976 2.19775 13.3823 4.43335 13.9245 7.38342C13.3829 10.3335 10.7976 12.5691 7.69078 12.5691C4.58399 12.5691 1.99922 10.3335 1.45703 7.38342C1.99865 4.43335 4.58399 2.19775 7.69078 2.19775ZM7.69078 11.4167C8.8659 11.4165 10.0061 11.0173 10.9248 10.2846C11.8435 9.55191 12.4863 8.52904 12.748 7.38342C12.4854 6.23872 11.8422 5.21697 10.9235 4.48523C10.0049 3.75348 8.86523 3.35504 7.69078 3.35504C6.51634 3.35504 5.37664 3.75348 4.45802 4.48523C3.5394 5.21697 2.89621 6.23872 2.6336 7.38342C2.89525 8.52904 3.53803 9.55191 4.45674 10.2846C5.37545 11.0173 6.51567 11.4165 7.69078 11.4167ZM7.69078 9.97626C7.00312 9.97626 6.34362 9.70309 5.85737 9.21684C5.37112 8.73059 5.09795 8.07109 5.09795 7.38342C5.09795 6.69576 5.37112 6.03626 5.85737 5.55001C6.34362 5.06376 7.00312 4.79059 7.69078 4.79059C8.37845 4.79059 9.03794 5.06376 9.52419 5.55001C10.0104 6.03626 10.2836 6.69576 10.2836 7.38342C10.2836 8.07109 10.0104 8.73059 9.52419 9.21684C9.03794 9.70309 8.37845 9.97626 7.69078 9.97626ZM7.69078 8.82389C8.07282 8.82389 8.43921 8.67213 8.70935 8.40199C8.97949 8.13185 9.13125 7.76546 9.13125 7.38342C9.13125 7.00139 8.97949 6.635 8.70935 6.36486C8.43921 6.09472 8.07282 5.94296 7.69078 5.94296C7.30875 5.94296 6.94236 6.09472 6.67222 6.36486C6.40208 6.635 6.25032 7.00139 6.25032 7.38342C6.25032 7.76546 6.40208 8.13185 6.67222 8.40199C6.94236 8.67213 7.30875 8.82389 7.69078 8.82389Z" fill="#3F3F44" fill-opacity="0.25"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_558_2571">
                                <rect width="13.8285" height="13.8285" fill="white" transform="translate(0.776367 0.469238)"/>
                              </clipPath>
                            </defs>
                          </svg>2440</span>
                        </div>
                      </div>
                      
                      <div class="d-flex performance-main-row">
                        <div class="d-flex">
                          <div class="performance-img-div">
                            <img src="./images/performance-p.png" alt="">
                          </div>
                          <div class="performance-content">
                            <h1>Principle Advanced Prototyping</h1>
                            <p>3 months ago</p>
                          </div>
                        </div>
                        <div class="float-end">
                          <span> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <g clip-path="url(#clip0_558_2571)">
                              <path d="M7.69078 2.19775C10.7976 2.19775 13.3823 4.43335 13.9245 7.38342C13.3829 10.3335 10.7976 12.5691 7.69078 12.5691C4.58399 12.5691 1.99922 10.3335 1.45703 7.38342C1.99865 4.43335 4.58399 2.19775 7.69078 2.19775ZM7.69078 11.4167C8.8659 11.4165 10.0061 11.0173 10.9248 10.2846C11.8435 9.55191 12.4863 8.52904 12.748 7.38342C12.4854 6.23872 11.8422 5.21697 10.9235 4.48523C10.0049 3.75348 8.86523 3.35504 7.69078 3.35504C6.51634 3.35504 5.37664 3.75348 4.45802 4.48523C3.5394 5.21697 2.89621 6.23872 2.6336 7.38342C2.89525 8.52904 3.53803 9.55191 4.45674 10.2846C5.37545 11.0173 6.51567 11.4165 7.69078 11.4167ZM7.69078 9.97626C7.00312 9.97626 6.34362 9.70309 5.85737 9.21684C5.37112 8.73059 5.09795 8.07109 5.09795 7.38342C5.09795 6.69576 5.37112 6.03626 5.85737 5.55001C6.34362 5.06376 7.00312 4.79059 7.69078 4.79059C8.37845 4.79059 9.03794 5.06376 9.52419 5.55001C10.0104 6.03626 10.2836 6.69576 10.2836 7.38342C10.2836 8.07109 10.0104 8.73059 9.52419 9.21684C9.03794 9.70309 8.37845 9.97626 7.69078 9.97626ZM7.69078 8.82389C8.07282 8.82389 8.43921 8.67213 8.70935 8.40199C8.97949 8.13185 9.13125 7.76546 9.13125 7.38342C9.13125 7.00139 8.97949 6.635 8.70935 6.36486C8.43921 6.09472 8.07282 5.94296 7.69078 5.94296C7.30875 5.94296 6.94236 6.09472 6.67222 6.36486C6.40208 6.635 6.25032 7.00139 6.25032 7.38342C6.25032 7.76546 6.40208 8.13185 6.67222 8.40199C6.94236 8.67213 7.30875 8.82389 7.69078 8.82389Z" fill="#3F3F44" fill-opacity="0.25"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_558_2571">
                                <rect width="13.8285" height="13.8285" fill="white" transform="translate(0.776367 0.469238)"/>
                              </clipPath>
                            </defs>
                          </svg>1,947</span>
                        </div>
                      </div>
                       
                        <div class="d-flex performance-main-row">
                          <div class="d-flex">
                            <div class="performance-img-div">
                              <img src="./images/performance-diamond.png" alt="">
                            </div>
                            <div class="performance-content">
                              <h1>Sketch 101 - UI Design</h1>
                              <p>2 months ago</p>
                            </div>
                          </div>
                          <div class="">
                            <span> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                              <g clip-path="url(#clip0_558_2571)">
                                <path d="M7.69078 2.19775C10.7976 2.19775 13.3823 4.43335 13.9245 7.38342C13.3829 10.3335 10.7976 12.5691 7.69078 12.5691C4.58399 12.5691 1.99922 10.3335 1.45703 7.38342C1.99865 4.43335 4.58399 2.19775 7.69078 2.19775ZM7.69078 11.4167C8.8659 11.4165 10.0061 11.0173 10.9248 10.2846C11.8435 9.55191 12.4863 8.52904 12.748 7.38342C12.4854 6.23872 11.8422 5.21697 10.9235 4.48523C10.0049 3.75348 8.86523 3.35504 7.69078 3.35504C6.51634 3.35504 5.37664 3.75348 4.45802 4.48523C3.5394 5.21697 2.89621 6.23872 2.6336 7.38342C2.89525 8.52904 3.53803 9.55191 4.45674 10.2846C5.37545 11.0173 6.51567 11.4165 7.69078 11.4167ZM7.69078 9.97626C7.00312 9.97626 6.34362 9.70309 5.85737 9.21684C5.37112 8.73059 5.09795 8.07109 5.09795 7.38342C5.09795 6.69576 5.37112 6.03626 5.85737 5.55001C6.34362 5.06376 7.00312 4.79059 7.69078 4.79059C8.37845 4.79059 9.03794 5.06376 9.52419 5.55001C10.0104 6.03626 10.2836 6.69576 10.2836 7.38342C10.2836 8.07109 10.0104 8.73059 9.52419 9.21684C9.03794 9.70309 8.37845 9.97626 7.69078 9.97626ZM7.69078 8.82389C8.07282 8.82389 8.43921 8.67213 8.70935 8.40199C8.97949 8.13185 9.13125 7.76546 9.13125 7.38342C9.13125 7.00139 8.97949 6.635 8.70935 6.36486C8.43921 6.09472 8.07282 5.94296 7.69078 5.94296C7.30875 5.94296 6.94236 6.09472 6.67222 6.36486C6.40208 6.635 6.25032 7.00139 6.25032 7.38342C6.25032 7.76546 6.40208 8.13185 6.67222 8.40199C6.94236 8.67213 7.30875 8.82389 7.69078 8.82389Z" fill="#3F3F44" fill-opacity="0.25"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_558_2571">
                                  <rect width="13.8285" height="13.8285" fill="white" transform="translate(0.776367 0.469238)"/>
                                </clipPath>
                              </defs>
                            </svg>1,731</span>
                          </div>
                        </div> -->
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
