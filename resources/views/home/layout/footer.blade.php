 <!-- ===================  FOOTER SECTION START HERE================== -->
 <div class="container-fluid footer">
      <div class="row">
        <div class="col-md-3 col-12">
          <div class="footer-logo-div">
            <img src="/imgs/footer-logo.png" alt="logo image here" />
          </div>
        </div>
        <div class="col-md-1 col-6">
          <div class="footer-links">
            <ul class="mb-0">
              <h5>{{ __('messages.footer_menu_head')}}</h5>
              <a href="./index.html"><li>{{ __('messages.nav_home_btn')}}</li></a>
              <a href="./courses.html">
                <li>{{ __('messages.nav_course_btn')}}</li>
              </a>
            
              <a href="./FAQ-page.html"> <li>{{ __('messages.nav_FAQ_btn')}}</li></a>
              <a href="./contact_us_page.html"><li>{{ __('messages.footer_cntct_nav')}}</li></a>
            </ul>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
        <div class="col-md-2 col-6">
          <div class="footer-links">
            <ul class="mb-0">
              <h5>{{ __('messages.footer_explore_head')}}</h5>
              <a href=""><li>{{ __('messages.footer_abt_sabiha_head')}}</li></a>
              <a href="#"><li>{{ __('messages.footer_create_accounnt_head')}}</li></a>
              <!-- <a href="./courses.html"><li>Courses</li></a> -->
              <a href=""><li>{{ __('messages.footer_blog_head')}}</li></a>
              <a href=""><li>{{ __('messages.home_news_btn')}}</li></a>
            </ul>
          </div>
        </div>
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-md-3 col-12">
          <div class="social-icon">
            <a href=""> <i class="fa-brands fa-facebook-f"></i></a
            >&nbsp;&nbsp;&nbsp;
            <a href=""><i class="fa-brands fa-twitter"></i></a
            >&nbsp;&nbsp;&nbsp;
            <a href=""> <i class="fa-brands fa-instagram"></i></a>&nbsp;&nbsp;
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-12">
          <div class="footer-copyright">
            <p>{{ __('messages.footer_copyright_head')}}</p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="terms">
            <a href="./terms-and-condition-page.html" class="pe-0 pe-md-5"><p>{{ __('messages.footer_terms_head')}}</p></a>
            <a href="./privacy-police-page.html" class="ps-5 ps-md-0"><p>{{ __('messages.footer_privacy_head')}}</p></a>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  FOOTER SECTION END HERE================== -->

    <!-- ===================BOOTSTRAP JS FILE LINK================== -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<!-- ===================JS FILE LINK FOR MULTILANGUAL================== -->
<script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<!--  -->

<script>

  if(1 === 1) {
    function loadGoogleTranslate(){
    new google.translate.TranslateElement("google_translate_element");
  }
}
</script>

<!-- language translator script -->

<script type="text/javascript">
  
    var url = "{{ route('changeLang') }}";
  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
  
</script>
<!--  -->