@include('home.layout.head')

  <body>
@include('home.layout.header')


    <!-- ===================  MAIN HEADER SECTION START HERE================== -->
    <div class="container-fluid faq-page-bg">
      <div class="row p-0">
        <div class="col-md-12">
          <div class="faq-page-header-content">
            <h1>{{ __('messages.FAQ_main_heading')}}</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  MAIN HEADER SECTION END HERE================== -->
    <!-- ======= Frequently Asked Questions Section ======= -->
 
    <div class="container-fluid faq-container">
        <div class="row faq p-0" id="faq">
            <div class="col-md-12 faq-bg">
              <div class="faq-list">
                <ul>
                  <li>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-1"
                    >
                    {{ __('messages.FAQ_Q1_heading')}}
                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i>
                      <i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-1"
                      class="collapse show"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{ __('messages.FAQ_Q1_ans')}}

                      </p>
                    </div>
                  </li>     

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-5"
                      class="collapsed"
                    >
                    {{ __('messages.FAQ_Q2_heading')}}

                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-5"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{ __('messages.FAQ_Q2_ans')}}

                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-6"
                      class="collapsed"
                    >
                    {{ __('messages.FAQ_Q3_heading')}}

                    <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-6"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{ __('messages.FAQ_Q3_ans')}}

                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-7"
                      class="collapsed"
                      >
                      {{ __('messages.FAQ_Q4_heading')}}

                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-7"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{ __('messages.FAQ_Q4_ans')}}

                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-8"
                      class="collapsed"
                      >
                      {{ __('messages.FAQ_Q5_heading')}}

                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-8"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{ __('messages.FAQ_Q5_ans')}}

                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-9"
                      class="collapsed"
                      >                  
                        {{ __('messages.FAQ_Q6_heading')}}
                         <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-9"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{ __('messages.FAQ_Q6_ans')}}

                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-10"
                      class="collapsed"
                      >   {{ __('messages.FAQ_Q7_heading')}}

                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-10"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                      {{ __('messages.FAQ_Q7_ans')}}

                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>

    <!-- ======= Frequently Asked Questions Section ======= -->

@include('home.layout.footer')
   