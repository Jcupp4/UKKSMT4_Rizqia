  @extends('auth.Auth')

  @section('title')
  <title>Login | Aplikasi</title>
  @endsection

  @section('form')
  <div class="row vh-100 d-flex justify-content-center">
      <div class="col-12 align-self-center">
          <div class="card-body">
              <div class="row">
                  <div class="col-lg-4 mx-auto">
                      <div class="card">
                          <div class="card-body p-0">
                              <div class="text-center p-3">
                                  <a href="index.html" class="logo logo-admin">
                                      <img src="{{ asset('assets_dashboard/images/logo-sm.png') }}" height="50" alt="logo" class="auth-logo">
                                  </a>
                                  <h4 class="mt-3 mb-1 fw-semibold font-18">Login</h4>
                                  <p class="text-muted  mb-0">Masukkan Email Dan Password <br>Untuk Membuka Dashboard.</p>
                              </div>
                          </div>
                          <hr class="hr-dashed">
                          <div class="card-body pt-0">
                              <form action="{{ route('login.store') }}" method="POST">
                                  @csrf
                                  <div class="form-group mb-2">
                                      <label class="form-label" for="email">Email</label>
                                      <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                                  </div>
                                  <!--end form-group-->

                                  <div class="form-group">
                                      <label class="form-label" for="userpassword">Password</label>
                                      <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                  </div>
                                  <!--end form-group-->

                                  <div class="form-group row mt-3">
                                      <div class="col-sm-6">
                                          <div class="form-check form-switch form-switch-success">
                                              <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                              <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                          </div>
                                      </div>
                                      <!--end col-->
                                      <div class="col-sm-6 text-end">
                                          <a href="recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                                      </div>
                                      <!--end col-->
                                  </div>
                                  <!--end form-group-->

                                  <div class="form-group mb-0 row">
                                      <div class="col-12">
                                          <div class="d-grid mt-3">
                                              <button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                          </div>
                                      </div>
                                      <!--end col-->
                                  </div>
                                  <!--end form-group-->
                              </form>
                              <!--end form-->
                              <div class="m-3 text-center text-muted">
                                  <p class="mb-0">Don't have an account ? <a href="register.html" class="text-primary ms-2">Free Resister</a></p>
                              </div>
                              <hr class="hr-dashed mt-4">
                              <div class="text-center mt-n5">
                                  <h6 class="card-bg px-3 my-4 d-inline-block">Or Login With</h6>
                              </div>
                              <div class="d-flex justify-content-center mb-1">
                                  <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-primary rounded-circle me-2">
                                      <i class="lab la-facebook align-self-center"></i>
                                  </a>
                                  <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-info rounded-circle me-2">
                                      <i class="lab la-twitter align-self-center"></i>
                                  </a>
                                  <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-danger rounded-circle">
                                      <i class="lab la-google align-self-center"></i>
                                  </a>
                              </div>
                          </div>
                          <!--end card-body-->
                      </div>
                      <!--end card-->
                  </div>
                  <!--end col-->
              </div>
              <!--end row-->
          </div>
          <!--end card-body-->
      </div>
      <!--end col-->
  </div>
  @endsection
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from mannatthemes.com/bullkit/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 02:09:27 GMT -->
<head>
        <!-- <meta charset="utf-8" />
        <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        App favicon
        <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <meta charset="utf-8" />
                <title>Bullkit - Admin & Dashboard Template</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                
    </head>

    @include('include.styledash')

   <body id="body" class="auth-page" style="background-image: url('{{ asset('assets_dashboard/images/p-1.html') }}'); background-size: cover; background-position: center center;">

        <!-- Log In page -->
         <div class="container-md">
             <div class="row vh-100 d-flex justify-content-center">
                 <div class="col-12 align-self-center">
                     <div class="card-body">
                         <div class="row">
                             <div class="col-lg-4 mx-auto">
                                 <div class="card">
                                     <div class="card-body p-0">
                                         <div class="text-center p-3">
                                             <a href="index.html" class="logo logo-admin">
                                                 <img src="{{ asset('assets_dashboard/images/logo-sm.png') }}" height="50" alt="logo" class="auth-logo">
                                             </a>
                                             <h4 class="mt-3 mb-1 fw-semibold font-18">Let's Get Started Bullkit</h4>   
                                             <p class="text-muted  mb-0">Sign in to continue to Bullkit.</p>  
                                         </div>
                                     </div>
                                     <hr class="hr-dashed">
                                     <div class="card-body pt-0">                                    
                                        <form method="post" action="{{route ('auth')}}">
                                                @csrf
                                             <div class="form-group mb-2">
                                                 <label class="form-label" for="username">Username</label>
                                                 <input type="text" class="form-control" name="email" placeholder="Enter email">                               
                                             </div><!--end form-group--> 
                 
                                             <div class="form-group">
                                                 <label class="form-label" for="userpassword">Password</label>                                            
                                                 <input type="password" class="form-control" name="password" placeholder="Enter password">                            
                                             </div><!--end form-group--> 
                 
                                             <div class="form-group row mt-3">
                                                 <div class="col-sm-6">
                                                     <div class="form-check form-switch form-switch-success">
                                                         <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                         <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                                     </div>
                                                 </div><!--end col--> 
                                                 <div class="col-sm-6 text-end">
                                                     <a href="recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                                 </div><!--end col--> 
                                             </div><!--end form-group--> 
                 
                                             <div class="form-group mb-0 row">
                                                 <div class="col-12">
                                                     <div class="d-grid mt-3">
                                                         <button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                     </div>
                                                 </div><!--end col--> 
                                             </div> <!--end form-group-->                           
                                         </form><!--end form-->
                                         <div class="m-3 text-center text-muted">
                                             <p class="mb-0">Don't have an account ?  <a href="register.html" class="text-primary ms-2">Free Resister</a></p>
                                         </div>
                                         <hr class="hr-dashed mt-4">
                                         <div class="text-center mt-n5">
                                             <h6 class="card-bg px-3 my-4 d-inline-block">Or Login With</h6>
                                         </div>
                                         <div class="d-flex justify-content-center mb-1">
                                             <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-primary rounded-circle me-2">
                                                 <i class="lab la-facebook align-self-center"></i>
                                             </a>
                                             <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-info rounded-circle me-2">
                                                 <i class="lab la-twitter align-self-center"></i>
                                             </a>
                                             <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-danger rounded-circle">
                                                 <i class="lab la-google align-self-center"></i>
                                             </a>
                                         </div>
                                     </div><!--end card-body-->
                                 </div><!--end card-->
                             </div><!--end col-->
                         </div><!--end row-->
                     </div><!--end card-body-->
                 </div><!--end col-->
             </div><!--end row-->
         </div><!--end container-->
     

         
     </body>
    <!--end body-->
    @include('include.scriptdash')
<!-- Mirrored from mannatthemes.com/bullkit/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 02:09:27 GMT -->
</html>
