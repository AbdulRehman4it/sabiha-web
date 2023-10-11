  <!-- ===================  GET IN TOUCH SECTION START HERE================== -->
  <div class="container-fluid">
      <div class="row get-in-touch-row justify-content-center">
        <div class="col-md-5">
          <div class="get-in-touch-body">
            <h2>{{ __('messages.get_in_touch_heading')}}</h2>
            <p>{{ __('messages.get_in_touch_para')}}</p>

            <!-- <p>Join my free courses, and solve problems with expert coaching</p> -->
            <div class="contact-div d-flex contact-div-1">
              <span class="fa-solid fa-phone"></span>
              <div class="contact-number-div ps-3">
                <h5>{{ __('messages.get_in_touch_ph_head')}}</h5>
                <li>(319) 555-0115</li>
              </div>
            </div>
            <div class="contact-div d-flex">
              <span class="fa-solid fa-envelope"></span>
              <div class="contact-number-div ps-3">
                <h5>{{ __('messages.get_in_touch_email_head')}}</h5>
                <a href="http://"><li>Saiha@gmail.com</li></a>
              </div>
            </div>
            <div class="contact-div d-flex">
              <span class="fa-solid fa-share-nodes"></span>
              <div class="contact-number-div ps-3">
                <h5>{{ __('messages.get_in_touch_follow_head')}}</h5>
                <a href=""> <i class="fa-brands fa-facebook"></i></a
                >&nbsp;&nbsp;&nbsp;
                <a href=""> <i class="fa-brands fa-instagram"></i></a
                >&nbsp;&nbsp;
                <a href=""><i class="fa-brands fa-twitter"></i></a
                >&nbsp;&nbsp;&nbsp;
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="email-form">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{ __('messages.get_in_touch_form_name')}}</label>
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="{{ __('messages.get_in_touch_form_name_plac')}}"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >{{ __('messages.get_in_touch_email_head')}}</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="{{ __('messages.get_in_touch_form_email_plac')}}"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >{{ __('messages.get_in_touch_ph_head')}}</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="{{ __('messages.get_in_touch_form_phone_plac')}}"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >{{ __('messages.get_in_touch_form_reason_head')}}</label
                >
                <select
                  class="form-select"
                  aria-label="Default select example"
                  aria-placeholder="{{ __('messages.get_in_touch_form_reason_plac')}}"
                >
                  <option selected>{{ __('messages.get_in_touch_form_reason_plac')}}</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >{{ __('messages.get_in_touch_form_msg')}}</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  placeholder="{{ __('messages.get_in_touch_form_msg_plac')}}"
                ></textarea>
              </div>
              <button type="submit" class="btn">{{ __('messages.get_in_touch_form_enq_btn')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  GET IN TOUCH SECTION END HERE================== -->
