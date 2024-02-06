@extends('layouts.main')

@section('main-container')
    <!-- End Navbar -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header style="background-color: #283570">
        <div class="page-header min-vh-75" style="">
          <span class="mask opacity-6"></span>

        </div>
      </header>

      <div style="margin-top: -400px" class="row justify-content-center py-0">
        <div class="row justify-content-center">
          <div class="col-md-4 text-center">
            <img style="width: 125px; height: 100px;" src="./images/icons/bxx.png" alt="">

          </div>
        </div>
             <div class="row justify-content-center">
              <div class="col-md-6 mt-3">
                  <h3 class="text-center"
                  style="
                  color: #FFF;
                   text-align: center;
                   font-feature-settings: 'clig' off, 'liga' off;
                   font-family: Gluten;
                   font-size: 28px;
                   font-style: normal;
                   font-weight: 600;
                   line-height: 36px; /* 112.5% */
                 "
               >
               Signup to Become a keeper provider
               </h3>
              </div>
             </div>

          <div class="row mt-6 mb-5">
          <div class="col-12 col-lg-10 m-auto">
          <div class="card">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <div class="multisteps-form__progress">
          <button class="multisteps-form__progress-btn js-active" type="button" title="organizaztion">
          <span style="color: #fff;
          font-feature-settings: 'clig' off, 'liga' off;
          font-family: Poppins;
          font-size: 12px;
          font-style: normal;
          font-weight: 500;
          line-height: 21px; /* 131.25% */">Organization</span>
          </button>
          <button style=" font-feature-settings: 'clig' off, 'liga' off;
          font-family: Poppins;
          font-size: 12px;" class="multisteps-form__progress-btn" type="button" title="location">Type</button>
          <button style=" font-feature-settings: 'clig' off, 'liga' off;
          font-family: Poppins;
          font-size: 12px;" class="multisteps-form__progress-btn" type="button" title="account">Location</button>
          <button style=" font-feature-settings: 'clig' off, 'liga' off;
          font-family: Poppins;
          font-size: 12px;" class="multisteps-form__progress-btn" type="button" title="complete">Account</button>

          </div>
          </div>
          </div>
          <div class="card-body">
          <form class="multisteps-form__form">
          <div class="multisteps-form__panel border-radius-xl bg-white js-active" data-animation="FadeIn">
          <div class="text-center mt-2">

              <h6 style="color: #6C6C6D;
              font-feature-settings: 'clig' off, 'liga' off;
              font-family: Poppins;
              font-size: 32px;
              font-weight: 400;
              line-height: 32px; /* 150% */" class="mb-0 text-lg">
              What's the name of your Organization?</h6>
          </div>

          <div class="multisteps-form__content">
          <div class="row mt-3 justify-content-center px-5">

              <div class="col-12 col-md-12 col-sm-12 mt-0 mt-sm-0">
                  <div class="input-group input-group-outline my-0">
                    <label style="font-family: sans-serif;" class="form-label">Organization Name</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
          </div>


          <div class="button-row d-flex mt-4">
          <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>

          </div>
          </div>
          </div>

          <div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
              <div class="text-center">

                <h6 style="color: #6C6C6D;
                font-feature-settings: 'clig' off, 'liga' off;
                font-family: Poppins;
                font-size: 32px;
                font-weight: 400;
                line-height: 32px; /* 150% */" class="mb-0 text-lg">What's the type of your organisation</h6>
              </div>
          <div class="multisteps-form__content">
           <div class="row mt-4 px-5">
            <div class="col-12 col-md-12 col-sm-12 dropdown">
              <button  style="width: 100%;
              height: 46px;
              font-family: sans-serif;
              flex-shrink: 0; border-radius: 16px;
              background: #F4F4F6;" class="btn w-full text-left  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
               Organization Type
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Organization-1</a></li>
                <li><a class="dropdown-item" href="#">Organization-2</a></li>
                <li><a class="dropdown-item" href="#">Organization-3</a></li>
              </ul>
      </div>
           </div>

          <div class="button-row d-flex mt-4">
          <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white mb-0 js-btn-prev" type="button" title="Prev">Back</button>
          <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
          </div>
          </div>
          </div>
          <div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
            <div class="text-center">
              <h6 style="color: #6C6C6D;
              font-feature-settings: 'clig' off, 'liga' off;
              font-family: Poppins;
              font-size: 32px;
              font-weight: 400;
              line-height: 32px; /* 150% */" class="mb-0 text-lg">What's the location of your organisation</h6>

            </div>
        <div class="multisteps-form__content">
          <div class="row mt-4 px-5">
            <div class="col-md-12">
             <div class="input-group input-group-outline my-0">
                 <label style="font-family: sans-serif;" class="form-label">Organization Address</label>
                 <input type="text" class="form-control">
               </div>
            </div>

          </div>

        <div class="button-row d-flex mt-4">
        <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white mb-0 js-btn-prev" type="button" title="Prev">Back</button>
        <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
        </div>
        </div>
          </div>
          <div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
            <div class="text-center">
              <h6 style="color: #6C6C6D;
              font-feature-settings: 'clig' off, 'liga' off;
              font-family: Poppins;
              font-size: 32px;
              font-weight: 400;
              line-height: 32px; /* 150% */" class="mb-0 text-lg">Who will be the Manager of your Organisation?</h6>

            </div>
        <div class="multisteps-form__content">
          <div class="row mt-4 px-5">
            <div class="col-md-12">
             <div class="input-group input-group-outline my-0">
                 <label style="font-family: sans-serif;" class="form-label">Manager Full Name</label>
                 <input type="text" class="form-control">
               </div>
            </div>
            <div class="col-md-12 mt-2">
              <div class="input-group input-group-outline my-0">
                  <label style="font-family: sans-serif;" class="form-label">Manager Email</label>
                  <input type="text" class="form-control">
                </div>
             </div>
             <div class="col-md-12 mt-2">
              <div class="input-group input-group-outline my-0">
                  <label style="font-family: sans-serif;" class="form-label">Select a password</label>
                  <input type="password" class="form-control">
                </div>
             </div>

          </div>

        <div class="button-row d-flex mt-4">
        <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white mb-0 js-btn-prev" type="button" title="Prev">Back</button>
        <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
        </div>
        </div>
          </div>






          </form>
          </div>
          </div>
          </div>
          </div>

        </div>
      </div>
      <!-- -------- END HEADER 7 w/ text and video ------- -->
      <div class="mt-5">
        <!-- Section with four info areas left & one card right with image and waves -->
      </div>

      <script src="{{asset('/slider.js')}}"></script>
<script
  src="{{asset('/assets/js/core/popper.min.js')}}"
  type="text/javascript"
></script>
<script
  src="{{asset('/assets/js/core/bootstrap.min.js')}}"
  type="text/javascript"
></script>
<script src="{{asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/mattboldt/typed.js/ -->
<script src="{{asset('/assets/js/plugins/typedjs.js')}}"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{asset('/assets/js/plugins/countup.min.js')}}"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{asset('/assets/js/plugins/rellax.min.js')}}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{asset('/assets/js/plugins/tilt.min.js')}}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{asset('/assets/js/plugins/choices.min.js')}}"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="{{asset('/assets/js/plugins/parallax.min.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script
  src="{{asset('/assets/js/plugins/nouislider.min.js')}}"
  type="text/javascript"
></script>
<!--  Plugin for the blob animation -->
<script
  src="{{asset('/assets/js/plugins/anime.min.js')}}"
  type="text/javascript"
></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script
  src="{{asset('/assets/js/material-kit-pro.min.js?v=3.0.4')}}"
  type="text/javascript"
></script>
<script type="text/javascript">
  if (document.getElementById("state1")) {
    const countUp = new CountUp(
      "state1",
      document.getElementById("state1").getAttribute("countTo")
    );
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById("state2")) {
    const countUp1 = new CountUp(
      "state2",
      document.getElementById("state2").getAttribute("countTo")
    );
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById("state3")) {
    const countUp2 = new CountUp(
      "state3",
      document.getElementById("state3").getAttribute("countTo")
    );
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    }
  }
</script>





@endsection
