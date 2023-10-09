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
                  <h2>Teacher Detail</h2>
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
            <div class="col-xl-12">
              <div class="row mb-4">
                <div class="col-md-12">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M9.57 5.93018L3.5 12.0002L9.57 18.0702" stroke="#141522" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                   <path d="M20.4999 12H3.66992" stroke="#141522" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg></span>

                </div>
              </div>    
<div class="row teacher-detail-page-row1 row teacher-detail-page-row2">
<div class="col-md-12">
  <div class="row">
    <div class="col-md-3 col-6">
      <div class="d-flex">
        <div class="teacher-detail-page-row2-img-div">
          <img src="{{url('userpanel./images/my-teacher-img1.png')}}" alt="">
        </div>
          <div class="ms-3">
            <h3>Emerson Levin</h3>
            <p>UI UX . Design</p>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <h6><span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
        <path d="M6.00016 14.6668H10.0002C13.3335 14.6668 14.6668 13.3335 14.6668 10.0002V6.00016C14.6668 2.66683 13.3335 1.3335 10.0002 1.3335H6.00016C2.66683 1.3335 1.3335 2.66683 1.3335 6.00016V10.0002C1.3335 13.3335 2.66683 14.6668 6.00016 14.6668Z" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M10.5 6H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
       <path d="M10.5 10H5.5" stroke="#9C9CA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
         </svg></span>50 Course</h6>
    </div>
    <div class="col-md-3 col-6">
      <h6 class="ms-3"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M10 2.5L12.0279 7.20889L17.1329 7.68237L13.2811 11.0661L14.4084 16.0676L10 13.45L5.59161 16.0676L6.71886 11.0661L2.86708 7.68237L7.97214 7.20889L10 2.5Z" fill="#FFBB54"/>
        </svg></span>4,5 (1.200 Review)</h6>
    </div>
    <div class="col-md-3 col-6">
        <h4>+ Follow  Mentor</h4>
   </div>
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-6 col-12" id="installment-search">
      <div class="search-section">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <i class="fa-solid fa-magnifying-glass"></i>
      </div>
  </div>
  <div class="col-md-2 col-12 mt-3 mt-md-0">
    <div class="dropdown">
      <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="me-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
            <rect y="6.46143" width="2" height="5.53846" rx="1" fill="#9C9CA4"/>
            <rect x="5" y="3.69238" width="2" height="8.30769" rx="1" fill="#9C9CA4"/>
            <rect x="10" width="2" height="12" rx="1" fill="#9C9CA4"/>
          </svg>
        </span>
        Level
      </button>
      <ul class="dropdown-menu">
                <div class="dropdown-category">
                  <h2>By Level</h2>
                  <div class="d-flex mt-3">
                           <div>
                            <button class="btn-category">All</button>
                            <button class="btn-category btn-category-2 mt-2">Intermediate</button>
                           </div>
                           <div class="ms-3">
                             <button class="btn-category btn-category-2">Beginner</button>
                             <button class="btn-category mt-2">Master</button>
                          </div>
                         </div>
                </div>
              </ul>
    </div>
</div>
  <div class="col-md-2 col-12 mt-3 mt-md-0">
    <div class="dropdown">
      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="me-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M6.2025 17.0625H3.1725C1.665 17.0625 0.9375 16.365 0.9375 14.925V3.075C0.9375 1.635 1.6725 0.9375 3.1725 0.9375H6.2025C7.71 0.9375 8.4375 1.635 8.4375 3.075V14.925C8.4375 16.365 7.7025 17.0625 6.2025 17.0625ZM3.1725 2.0625C2.22 2.0625 2.0625 2.3175 2.0625 3.075V14.925C2.0625 15.6825 2.22 15.9375 3.1725 15.9375H6.2025C7.155 15.9375 7.3125 15.6825 7.3125 14.925V3.075C7.3125 2.3175 7.155 2.0625 6.2025 2.0625H3.1725V2.0625Z" fill="#9C9CA4"/>
            <path d="M14.8275 10.3125H11.7975C10.29 10.3125 9.5625 9.615 9.5625 8.175V3.075C9.5625 1.635 10.2975 0.9375 11.7975 0.9375H14.8275C16.335 0.9375 17.0625 1.635 17.0625 3.075V8.175C17.0625 9.615 16.3275 10.3125 14.8275 10.3125ZM11.7975 2.0625C10.845 2.0625 10.6875 2.3175 10.6875 3.075V8.175C10.6875 8.9325 10.845 9.1875 11.7975 9.1875H14.8275C15.78 9.1875 15.9375 8.9325 15.9375 8.175V3.075C15.9375 2.3175 15.78 2.0625 14.8275 2.0625H11.7975V2.0625Z" fill="#9C9CA4"/>
            <path d="M14.8275 17.0625H11.7975C10.29 17.0625 9.5625 16.365 9.5625 14.925V13.575C9.5625 12.135 10.2975 11.4375 11.7975 11.4375H14.8275C16.335 11.4375 17.0625 12.135 17.0625 13.575V14.925C17.0625 16.365 16.3275 17.0625 14.8275 17.0625ZM11.7975 12.5625C10.845 12.5625 10.6875 12.8175 10.6875 13.575V14.925C10.6875 15.6825 10.845 15.9375 11.7975 15.9375H14.8275C15.78 15.9375 15.9375 15.6825 15.9375 14.925V13.575C15.9375 12.8175 15.78 12.5625 14.8275 12.5625H11.7975Z" fill="#9C9CA4"/>
          </svg>
        </span>
      Category
      </button>
      <ul class="dropdown-menu">
                <div class="dropdown-category">
                  <h2>By Category</h2>
                  <div class="d-flex mt-3">
                           <div>
                            <button class="btn-category">All</button>
                            <button class="btn-category btn-category-2 mt-2">Skill</button>
                           </div>
                           <div class="ms-3">
                             <button class="btn-category btn-category-2">Design</button>
                             <button class="btn-category mt-2 ms-3">Code</button>
                          </div>
                         </div>
                </div>
              </ul>
    </div>
</div>
<div class="col-md-2 col-12 mt-3 mt-md-0">
  <div class="dropdown">
    <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="me-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
          <path d="M15.75 5.8125H2.25C1.9425 5.8125 1.6875 5.5575 1.6875 5.25C1.6875 4.9425 1.9425 4.6875 2.25 4.6875H15.75C16.0575 4.6875 16.3125 4.9425 16.3125 5.25C16.3125 5.5575 16.0575 5.8125 15.75 5.8125Z" fill="#9C9CA4"/>
          <path d="M13.5 9.5625H4.5C4.1925 9.5625 3.9375 9.3075 3.9375 9C3.9375 8.6925 4.1925 8.4375 4.5 8.4375H13.5C13.8075 8.4375 14.0625 8.6925 14.0625 9C14.0625 9.3075 13.8075 9.5625 13.5 9.5625Z" fill="#9C9CA4"/>
          <path d="M10.5 13.3125H7.5C7.1925 13.3125 6.9375 13.0575 6.9375 12.75C6.9375 12.4425 7.1925 12.1875 7.5 12.1875H10.5C10.8075 12.1875 11.0625 12.4425 11.0625 12.75C11.0625 13.0575 10.8075 13.3125 10.5 13.3125Z" fill="#9C9CA4"/>
        </svg>
      </span>
     Sort By :
    </button>
    <ul class="dropdown-menu">
              <div class="dropdown-category">
                <h2>Sort</h2>
                <div class="mt-3">
                          <button class="btn-category">A-Z</button>
                          <button class="btn-category mt-2">Z-A</button>
                           <button class="btn-category btn-category-2 mt-2">Popular</button>
                  </div>
              </div>
            </ul>
  </div>
</div> 
</div>
</div>



<!-- card section -->
  @include('userpanel.teacher_detailcard_sec')
            
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