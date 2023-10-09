<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     <!-- ===================BOOTSTRAP CSS FILE LINK================== -->
     <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
     crossorigin="anonymous"
   />
       <!-- ===================FONTAWSOME  FILE LINK================== -->
       <link
       rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
       integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
       crossorigin="anonymous"
       referrerpolicy="no-referrer"
     />
     <!-- ===================  CUSTOME FILE LINK START HERE================== -->
     <link rel="stylesheet" href="{{url('home./css/create-an-account-page.css')}}" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 form-bg">
          <div class="image-section">
              <img src="./imgs/sign-in-logo.png" alt="">
          </div>
          <div class="img-section-content">
            <h2>Improve your skill with Sabhia!</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-section">
            <div class="form-wrapper">
            
    
              <h2>Create An Account</h2>
              <p>Already have an account?<a href="login" class="ps-3">LogIn</a></p>
    
              <form action="{{ route('register-user')}}" method="post">
               @csrf

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}

                </div>
                @endif

                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{session()->get('error')}}

                </div>
                @endif

              <div class="input-container">

              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name"  :value="old('name')" id="name" placeholder="Enter Name" >
                  <sapn class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" name="email" :value="old('email')" id="email" placeholder="pristia@gmail.com" >
                  <sapn class="text-danger">@error('email') {{$message}} @enderror</span>

                </div>

                <div class="form-group">
                  <label for="password">Password </label>
              <input type="password"  name="password" id="password" placeholder="Enter Your Password">
              <sapn class="text-danger">@error('password') {{$message}} @enderror</span>

                </div>

              
                
                <div class="form-group">
                  <label for="number">Phone Number </label>
              <input type="number" id="number" name="phone" :value="old('phone')" placeholder="Enter your Number here" >
              <sapn class="text-danger">@error('phone') {{$message}} @enderror</span>

        
                </div>
                <div class="div mt-3">

                  <h5>Verify By</h5>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                    Email
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                      Number
                    </label>
                  </div>
                </div>
               
              </div>
    
              <div class="google-link-button">
                <a href="./verify-identity-login-page.html"><button class="google-signin">
                  <span>Create</span>
                </button></a>
                <p>
                  <input type="checkbox" name="" id="" class="me-3">
                   By clicking Create account, I agree that I have read and accepted the<a href="./terms-and-condition-page.html">Terms of Use</a> and <a href="./privacy-police-page.html">Privacy Policy.</a></p>
            
              </div>
</form>
             
            
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- ===================BOOTSTRAP JS FILE LINK================== -->
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>