@include('home.layout.head')

  <body>
@include('home.layout.header')


    <!-- ===================  MAIN HEADER SECTION START HERE================== -->
    <div class="container-fluid faq-page-bg">
      <div class="row p-0">
        <div class="col-md-12">
          <div class="faq-page-header-content">
            <h1>FAQs</h1>
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
                    Is it possible for me to use my local currency for payment? 
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
                        Upon selecting the payment icon, the bank will deduct
                        from your account in your local currency an amount that
                        corresponds to the displayed dollar price on the
                        website, using the prevailing exchange rate.
                      </p>
                    </div>
                  </li>     

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-5"
                      class="collapsed"
                    >
                    Is there an option to pay the fees in installments?
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
                        Currently, certificates are not provided for the
                        courses. We may consider introducing certificates for
                        specific courses in the future.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-6"
                      class="collapsed"
                    >
                    . Who provides the courses?<i
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
                        We offer free content across our social media platforms
                        and website. By utilizing the information and exercises
                        from our free resources, you'll have the opportunity to
                        engage in work and access all of our training courses.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-7"
                      class="collapsed"
                      >In which languages are the courses available?
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
                        If the provided information and exercises are diligently
                        applied, progress will gradually become evident.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-8"
                      class="collapsed"
                      >Will I get a certificate after completing the course?
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
                        In our coaching sessions, we explore your thoughts and
                        feelings to find out what's causing the issue. We give
                        you exercises, info, and courses to help you understand
                        yourself better. When you use these tools, you can make
                        your life better.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-9"
                      class="collapsed"
                      >Are discounts available for individuals who are not employed?<i
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
                        Subscribing grants one-person access to view the courses
                        for personal use. If you want your friends to benefit,
                        please suggest the course to them.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-10"
                      class="collapsed"
                      >Why is BRIX Templates the best Webflow agency out there?
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
                        You can view all paid and free courses on the website
                        through your user dashboard at any time. Each paid
                        course comes with a lifetime guarantee of access.
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
   