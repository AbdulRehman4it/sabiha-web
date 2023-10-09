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
                  <h2>Notification</h2>
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
            <div class="col-xl-11">
            <div class="white_card mb_30">
             <!-- =========NOTIFICATION ROW START HERE======= -->
             <div class="row notification-row">
              <div class="col-md-12">
                <h3>Today</h3>
                <div class="d-flex justify-content-between notification-content">
                  <div class="d-flex">
                    <div>
                      <img src="{{url('admin./images/card5.png')}}" alt="" class="position-relative">        
                      <span class="position-absolute top-5 start-10 translate-middle badge rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                          <g clip-path="url(#clip0_911_5445)">
                            <path d="M11 5.5V10C11 10.1326 10.9473 10.2598 10.8536 10.3536C10.7598 10.4473 10.6326 10.5 10.5 10.5H1.5C1.36739 10.5 1.24021 10.4473 1.14645 10.3536C1.05268 10.2598 1 10.1326 1 10V5.5H11ZM11 3.5H1V2C1 1.86739 1.05268 1.74021 1.14645 1.64645C1.24021 1.55268 1.36739 1.5 1.5 1.5H10.5C10.6326 1.5 10.7598 1.55268 10.8536 1.64645C10.9473 1.74021 11 1.86739 11 2V3.5Z" fill="#3F3F44"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_911_5445">
                              <rect width="12" height="12" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </div>
                    <div class="d-flex justify-content-center gj-text-align-center align-items-center">
                     <p><span>Nicolas Bekker purchased Designing </span>with User Centered Approach</p>
                    </div>            
                  </div>
                  <div class="justify-content-center text-center d-flex align-items-center">
                    <span>10.12 PM</span>
                  </div>
                </div>
                <!-- row2 -->
                <div class="d-flex justify-content-between notification-content">
                  <div class="d-flex">
                    <div>
                      <img src="{{url('admin./images/card4.png')}}" alt="" class="position-relative">        
                      <span class="position-absolute top-5 start-10 translate-middle badge badge2 rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                          <g clip-path="url(#clip0_911_5469)">
                            <path d="M3.2275 9.5L1 11.25V2C1 1.86739 1.05268 1.74021 1.14645 1.64645C1.24021 1.55268 1.36739 1.5 1.5 1.5H10.5C10.6326 1.5 10.7598 1.55268 10.8536 1.64645C10.9473 1.74021 11 1.86739 11 2V9C11 9.13261 10.9473 9.25979 10.8536 9.35355C10.7598 9.44732 10.6326 9.5 10.5 9.5H3.2275Z" fill="#3F3F44"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_911_5469">
                              <rect width="12" height="12" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </div>
                    <div class="d-flex justify-content-center gj-text-align-center align-items-center">
                     <p><span>Bukayo Saka commented</span> Creating Design System for Easier and Faster Design <span>“thank you so much! 😊”</span></p>
                    </div>            
                  </div>
                  <div class="justify-content-center text-center d-flex align-items-center">
                    <span>07.54 PM</span>
                  </div>
                </div>
                  <!-- row3 -->
                  <div class="d-flex justify-content-between notification-content">
                    <div class="d-flex">
                      <div>
                        <img src="{{url('admin./images/card4.png')}}" alt="" class="position-relative">        
                        <span class="position-absolute top-5 start-10 translate-middle badge badge2 rounded-pill">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <g clip-path="url(#clip0_911_5458)">
                              <path d="M8.25 1.5C9.769 1.5 11 2.75 11 4.5C11 8 7.25 10 6 10.75C4.75 10 1 8 1 4.5C1 2.75 2.25 1.5 3.75 1.5C4.68 1.5 5.5 2 6 2.5C6.5 2 7.32 1.5 8.25 1.5Z" fill="#3F3F44"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_911_5458">
                                <rect width="12" height="12" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                      </div>
                      <div class="d-flex justify-content-center gj-text-align-center align-items-center">
                       <p><span>Leonardi Bernado liked</span> Creating Design System for Easier and Faster Design </p>
                      </div>            
                    </div>
                    <div class="justify-content-center text-center d-flex align-items-center">
                      <span>12.40 AM</span>
                    </div>
                  </div>
                   <!-- row4 -->
                   <div class="d-flex justify-content-between notification-content">
                    <div class="d-flex">
                      <div>
                        <img src="{{url('admin./images/card1.png')}}" alt="" class="position-relative">        
                        <span class="position-absolute top-5 start-10 translate-middle badge badge2 rounded-pill">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <g clip-path="url(#clip0_911_5479)">
                            <path d="M6.00012 8.5L3.06112 10.295L3.86012 6.945L1.24512 4.705L4.67762 4.43L6.00012 1.25L7.32262 4.43L10.7556 4.705L8.14012 6.945L8.93912 10.295L6.00012 8.5Z" fill="#3F3F44"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_911_5479">
                            <rect width="12" height="12" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        </span>
                      </div>
                      <div class="d-flex justify-content-center gj-text-align-center align-items-center">
                       <p><span>Isabelle Octav reviewed</span> UI/UX Prototyping with Proto.io</p>
                      </div>            
                    </div>
                    <div class="justify-content-center text-center d-flex align-items-center">
                      <span>08.30 AM</span>
                    </div>
                  </div>
              </div>
             </div>
             <!-- row-2 -->
             <div class="row notification-row">
              <div class="col-md-12">
                <h3>Yesterday</h3>
                <div class="d-flex justify-content-between notification-content">
                  <div class="d-flex">
                    <div>
                      <img src="{{url('admin./images/card2.png')}}" alt="" class="position-relative">        
                      <span class="position-absolute top-5 start-10 translate-middle badge badge2 rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                          <g clip-path="url(#clip0_911_5422)">
                          <path d="M8.25 1.5C9.769 1.5 11 2.75 11 4.5C11 8 7.25 10 6 10.75C4.75 10 1 8 1 4.5C1 2.75 2.25 1.5 3.75 1.5C4.68 1.5 5.5 2 6 2.5C6.5 2 7.32 1.5 8.25 1.5Z" fill="#3F3F44"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_911_5422">
                          <rect width="12" height="12" fill="white"/>
                          </clipPath>
                          </defs>
                          </svg>
                      </span>
                    </div>
                    <div class="d-flex justify-content-center gj-text-align-center align-items-center">
                     <p><span>Lazzuardi Giamani liked</span> How to Make UX Case Study for Beginner</p>
                    </div>            
                  </div>
                  <div class="justify-content-center text-center d-flex align-items-center">
                    <span>12.40 AM</span>
                  </div>
                </div>
                <!-- row2 -->
                <div class="d-flex justify-content-between notification-content">
                  <div class="d-flex">
                    <div>
                      <img src="{{url('admin./images/card1.png')}}" alt="" class="position-relative">        
                      <span class="position-absolute top-5 start-10 translate-middle badge rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                          <g clip-path="url(#clip0_911_5445)">
                            <path d="M11 5.5V10C11 10.1326 10.9473 10.2598 10.8536 10.3536C10.7598 10.4473 10.6326 10.5 10.5 10.5H1.5C1.36739 10.5 1.24021 10.4473 1.14645 10.3536C1.05268 10.2598 1 10.1326 1 10V5.5H11ZM11 3.5H1V2C1 1.86739 1.05268 1.74021 1.14645 1.64645C1.24021 1.55268 1.36739 1.5 1.5 1.5H10.5C10.6326 1.5 10.7598 1.55268 10.8536 1.64645C10.9473 1.74021 11 1.86739 11 2V3.5Z" fill="#3F3F44"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_911_5445">
                              <rect width="12" height="12" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </div>
                    <div class="d-flex justify-content-center gj-text-align-center align-items-center">
                     <p><span>Alice Brooklyn purchased</span> UI/UX Prototyping with Proto.io</p>
                    </div>            
                  </div>
                  <div class="justify-content-center text-center d-flex align-items-center">
                    <span>07.54 PM</span>
                  </div>
                </div>
                  <!-- row3 -->
                  <div class="d-flex justify-content-between notification-content">
                    <div class="d-flex">
                      <div>
                        <img src="{{url('admin./images/card6.png')}}" alt="" class="position-relative">        
                        <span class="position-absolute top-5 start-10 translate-middle badge rounded-pill">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <g clip-path="url(#clip0_911_5458)">
                              <path d="M8.25 1.5C9.769 1.5 11 2.75 11 4.5C11 8 7.25 10 6 10.75C4.75 10 1 8 1 4.5C1 2.75 2.25 1.5 3.75 1.5C4.68 1.5 5.5 2 6 2.5C6.5 2 7.32 1.5 8.25 1.5Z" fill="#3F3F44"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_911_5458">
                                <rect width="12" height="12" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                      </div>
                      <div class="d-flex justify-content-center gj-text-align-center align-items-center">
                       <p><span>Diego Lopez purchased</span> Intro to UI/UX Design for Graphic Designer</p>
                      </div>            
                    </div>
                    <div class="justify-content-center text-center d-flex align-items-center">
                      <span>12.40 AM</span>
                    </div>
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
