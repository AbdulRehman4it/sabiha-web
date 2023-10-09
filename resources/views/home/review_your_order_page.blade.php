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
            <h1>Review Your Order</h1>
          </div>
        </div>
        <div class="row">
          <!-- form -->
          <div class="col-md-8">
            <div class="row payment-row-2 pt-3">
              <div class="col-md-6 col-6">
                <div class="road-map-2">
                  <i class="fa-solid fa-credit-card"></i>
                  <p>Payment Method</p>
                </div>
              </div>
              <div class="col-md-6 col-6">
                <div class="road-map-2">
                  <i class="fa-solid fa-credit-card"></i>
                  <p>Review</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="review-your-order-div d-flex">
                  <div class="img-div-review">
                    <img src="./imgs/table1.png" alt="" />
                  </div>
                  <div class="content-div-review-your-order">
                    <h6>The Atlantic World</h6>
                    <p>$30.00</p>
                    <p>QTY: 1</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="review-your-order-div d-flex">
                  <div class="img-div-review">
                    <img src="./imgs/table2.png" alt="" />
                  </div>
                  <div class="content-div-review-your-order">
                    <h6>Modern World History</h6>
                    <p>$60.00</p>
                    <p>QTY: 1</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="review-your-order-div d-flex">
                  <div class="img-div-review">
                    <img src="./imgs/table3 .png" alt="" />
                  </div>
                  <div class="content-div-review-your-order">
                    <h6>Things They Carried</h6>
                    <p>$70.00</p>
                    <p>QTY: 1</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="edit-option">
                  <h3>Payment Method</h3>
                  <!-- <i class=""></i> -->
                  <div class="row">
                    <div class="col-md-6 col-8">
                      <p>Debit Card (.... .... .... ..89)</p>
                    </div>
                    <div class="col-md-6 edit-pencil col-4">
                      <span class="fa-solid fa-pen-to-square float-end"></span>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="cart-card-btn">
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                  >
                    Place Order
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =================MY CART SECTION END HERE========= -->


@include('home.layout.footer')
 


<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="model-img">
              <img src="./imgs/logo-popup.png" alt="">
            </div>
            <h2>Your Payment is confirmed</h2>
            <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
          </div>
          <button class="view-order-button"><a href="{{url('checkoutpage')}}">View Order</a></button>
          <button class="back-to-home-button"><a href="{{url('/')}}"  class="back-to-home-button-a">Back to Home</a></button>
        </div>
      </div>
    </div>
  </div>
</div>
