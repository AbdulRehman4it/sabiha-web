@include('home.layout.head')

  <body>
    <!-- ===================  NAVBAR START HERE================== -->
    @include('home.layout.header')
  
    <!-- ===================  NAVBAR END HERE================== -->
   <!-- =================MY CART SECTION START HERE========= -->
   <div class="container-fluid checkout-cart-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12 cart-section">
            <h1>Payment Method</h1>
          </div>
        </div>
        <div class="row">
          <!-- form -->
          <div class="col-md-8">
            <div class="row payment-row pt-3">
              <div class="col-md-6 col-6">
                <div class="road-map">
                  <i class="fa-solid fa-credit-card"></i>
                  <p>Payment Method</p>
                </div>
              </div>
              <div class="col-md-6 col-6">
                <div class="road-map">
                  <i class="fa-solid fa-credit-card review-roadmap"></i>
                  <p>Review</p>
                </div>
              </div>
            </div>
            <div class="payment-method">
              <h3>Select a payment method</h3>
              <form class="row g-3 main-form">
                <div class="mb-0 mb-md-3 pt-3">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label debate-card ms-3" for="exampleRadios1">Debit/Credit Card</label>
                  <!-- <input
                    type="radio"
                    id="html"
                    name="fav_language"
                    value="HTML"
                    class="me-2"
                  
                  />
                  <label for="html" class="debate-card">Debit/Credit Card</label><br /> -->
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label"
                    >Card Number</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress"
                    placeholder="3897 22XX 1900 3890"
                  />
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Card Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress2"
                    placeholder="Robert Fox"
                  />
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label"
                    >Expiry Date
                  </label>
                  <input
                    type="email"
                    class="form-control"
                    id="inputEmail4"
                    placeholder="09/26"
                  />
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">CVV</label>
                  <input
                    type="password"
                    class="form-control"
                    id="inputPassword4"
                    placeholder="....."
                  />
                </div>

                <!-- <div class="col-12 add-card-button">
                  <button type="submit" class="btn ">
                    <a href="">   Add Card</a>
                 
                  </button>
                </div> -->
                <!-- <div class="form-check google-pay-radio">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"   >
  <label class="form-check-label google-pay ms-3" for="exampleRadios1">
  Google Pay
  </label>
</div> -->
                <div class=" google-pay-radio">
                  <input
                    type="radio"
                    id="html"
                    name="fav_language"
                    value="HTML"
                    class="form-check-input"
                  />
                  <label for="html" class="google-pay ms-3">Google Pay</label><br />
                </div>
                <!-- <div class="form-check mb-3 google-pay-radio">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label google-pay ms-3" for="exampleRadios1">
  Paypal
  </label><br />
</div> -->
                <div class="mb-3 google-pay-radio">
                  <input
                    type="radio"
                    id="html"
                    name="fav_language"
                    value="HTML"
                    class="form-check-input"

                    
                  />
                  <label for="html" class="google-pay ms-3">Paypal</label><br />
                </div>

                <div class="col-12 add-card-button">
                  <button type="submit" class="btn "><a href="{{url('./review_your_order_page')}}">Continue</a> </button>
                </div>
              </form>
            </div>
          </div>

          <!-- card -->
          <div class="col-md-4 my-cart-crd">
            <div class="cart-card">
              <div class="cart-cardbody">
                <h3>Subtotal <span class="float-end">$160.00</span></h3>

                <div class="input-section pb-3">
                  <p class="mb-0 pt-3">Enter Discount Code</p>
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="FLAT50"
                      aria-label="Recipient's username"
                      aria-describedby="button-addon2"
                    />
                    <button
                      class="btn btn-outline-secondary"
                      type="button"
                      id="button-addon2"
                    >
                      Apply
                    </button>
                  </div>
                </div>
                <h4>TAX <span class="float-end">$5.00</span></h4>

                <h2>Grand Total <span class="float-end">$165.00</span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =================MY CART SECTION END HERE========= -->

    @include('home.layout.footer')
   