<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
     <link rel="stylesheet" href="{{url('home./css/login-form.css')}}" />
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
            
    
              <h2>Sign In </h2>
              <p>New user?<a href="register" class="ps-3">Create an acount </a></p>
    
              <form  action="{{route('login-user')}}" method="post">
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
                  <label for="email">Email Address</label>
                  <input type="email" name="email" :value="{{old('email')}}" id="email" placeholder="pristia@gmail.com">
                  <sapn class="text-danger">@error('name') {{$message}} @enderror</span>

                </div>

                <div class="form-group">
                  <label for="password">Password </label>
              <input type="password"  name="password" :value="{{old('password')}}" id="password" placeholder="Enter Your Password">
              <sapn class="text-danger">@error('password') {{$message}} @enderror</span>

                </div>
                
              </div>
              <div class="row remember-forgot">
                <div class="col-md-6 col-6">
                  <a href="#"><p>Forgot password?</p></a>

                </div>
                <div class="col-md-6 col-6">
                  <a href="">
                    <button class="sign-in-button">Sign In</button>
      
                      </a>
                </div>
              </div>
        </form>
    
    
              <div class="or-divider">or</div>
    
              <div class="google-link-button">
                <a href=""><button class="google-signin">
                  <!-- <i class="fa-brands fa-google"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="96px" height="96px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                  <span>Sign in with Google</span>
                </button></a>
                <a href="" class="mt-5 mt-md-0"><button class="google-signin mt-3">
                  <!-- <i class="fa-brands fa-facebook-f"></i> -->
                  <i class="fa-brands fa-facebook"></i>
                  <span>Sign in with Facebook</span>
                </button></a>
                <p>Protected by reCAPTCHA and subject to the Google <a href="./privacy-police-page.html">Privacy Policy</a> and <a href="./terms-and-condition-page.html">Terms of Service.</a></p>
            
              </div>
             
            
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