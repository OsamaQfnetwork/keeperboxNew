@extends('layouts.main')

@section('main-container')

    <!-- End Navbar -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header style="background-color: #283570">
      <div class="page-header min-vh-55" style="">
        <span class="mask opacity-6"></span>

      </div>
    </header>

    <div style="margin-top: -250px" class="row justify-space-between py-0">
      <div class="row justify-content-center">
        <div class="col-md-4 text-center">
          <img style="width: 125px; height: 100px;" src="{{asset('/images/icons/box.png')}}" alt="">

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
             Order & Register your keeper Box
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
          line-height: 21px; /* 131.25% */">Box Size</span>
          </button>
          <button style=" font-feature-settings: 'clig' off, 'liga' off;
          font-family: Poppins;
          font-size: 12px;" class="multisteps-form__progress-btn" type="button" title="location">Provider</button>
          <button style=" font-feature-settings: 'clig' off, 'liga' off;
          font-family: Poppins;
          font-size: 12px;" class="multisteps-form__progress-btn" type="button" title="account">Contact info</button>
          <button style=" font-feature-settings: 'clig' off, 'liga' off;
          font-family: Poppins;
          font-size: 12px;" class="multisteps-form__progress-btn" type="button" title="complete">Order</button>

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
              font-size: 36px;
              font-weight: 400;
              line-height: 36px; /* 200% */" class="mb-0 text-lg">
             What size keeper Box do you prefer?</h6>
          </div>

          <div class="multisteps-form__content">
            <div class="row container  justify-content-center">
              <div style="border-radius: 32px; background: #F4F6FF;width: 400px;" class=" p-4 m-1 col-md-4 mt-5">
                  <div class="row justify-content-center">
                     <div  style="height: 160px;" class="col-md-12 text-center bg-white rounded p-5">
                         <img style="height: 80px;" src="{{asset('images/icons/box.png')}}" alt="">
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-md-6">
                         <h1 style="color: #393D42;
                         font-feature-settings: 'clig' off, 'liga' off;
                         font-family: Gluten;
                         font-size: 24px;
                         font-style: normal;
                         font-weight: 600;
                         line-height: 22px; /* 116.667% */">Medium</h1>
                         <h5 class="mt-3" style="color: #6C6C6D;
                         font-feature-settings: 'clig' off, 'liga' off;
                         font-family: Poppins;
                         font-size: 16px;
                         font-style: normal;
                         font-weight: 400;
                         line-height: normal">
                          Size: 10 X 16
                          </h5>
                          <h5 class="mt-3" style="color: #6C6C6D;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Poppins;
                          font-size: 16px;
                          font-style: normal;
                          font-weight: 400;
                          line-height: normal">
                          Free Scanning
                           </h5>
                     </div>
                     <div class="col-md-6 ">
                      <h1 class="text-end" style="color: #393D42;
                      font-feature-settings: 'clig' off, 'liga' off;
                      font-family: Poppins;
                      font-size: 24px;
                      font-style: normal;
                      font-weight: 600;
                      line-height: 22px; /* 116.667% */">10$</h1>

                  </div>

                  </div>

                 </div>
              <div style="border-radius: 32px; background: #F4F6FF;width: 400px;" class=" p-4 m-1 col-md-4 mt-5">
                  <div class="row justify-content-center">
                     <div style="height: 160px;" class="col-md-12 text-center bg-white rounded p-5">
                         <img style="height: 100px;" src="{{asset('images/icons/box.png')}}" alt="">
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col-md-6">
                         <h1 style="color: #393D42;
                         font-feature-settings: 'clig' off, 'liga' off;
                         font-family: Gluten;
                         font-size: 24px;
                         font-style: normal;
                         font-weight: 600;k
                         line-height: 22px; /* 116.667% */">Big</h1>
                         <h5 class="mt-3" style="color: #6C6C6D;
                         font-feature-settings: 'clig' off, 'liga' off;
                         font-family: Poppins;
                         font-size: 16px;
                         font-style: normal;
                         font-weight: 400;
                         line-height: normal">
                          Size: 14 X 21
                          </h5>
                          <h5 class="mt-3" style="color: #6C6C6D;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Poppins;
                          font-size: 16px;
                          font-style: normal;
                          font-weight: 400;
                          line-height: normal">
                          Free Scanning
                           </h5>

                     </div>
                     <div class="col-md-6 ">
                      <h1 class="text-end" style="color: #393D42;
                      font-feature-settings: 'clig' off, 'liga' off;
                      font-family: Poppins;
                      font-size: 24px;
                      font-style: normal;
                      font-weight: 600;
                      line-height: 22px; /* 116.667% */">15$</h1>

                  </div>

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
                line-height: 32px; /* 150% */" class="mb-0 text-lg">What organisation will be the keeperBox provider?</h6>
              </div>
          <div class="multisteps-form__content">
           <div class="row shadow p-2 mt-4 px-5">
              <div class="col-md-3">
                <img style="width: 80px; width: 100px;" src="{{('images/icons/bxx.png')}}" alt="">
              </div>
              <div class="col-md-6 mt-4">
                <h4 style="font-family: sans-serif;">Public School 21</h4>
                 <p>750 Main,st <br>Beacon,NY
                </p>

              </div>

              <div class="col-md-3 mt-5 text-end">
                <h6 style="font-family: sans-serif;">2.1 miles</h6>
                <h6 style="color: #1f2b65; font-family: sans-serif;" class="">
                  Change
                </h6>
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
              font-size: 45px;
              font-weight: 400;
              line-height: 45px; /* 150% */" class="mb-0 text-lg">Who will this keeper Box be for?</h6>
              <p>Your keeperBox ID is: 2Erty34</p>
            </div>
        <div class="multisteps-form__content">
          <div class="row mt-4 px-5">
            <div class="col-md-12">
             <div class="input-group input-group-outline my-0">
                 <label style="font-family: sans-serif;" class="form-label">Child’s full name</label>
                 <input type="text" class="form-control">
               </div>
            </div>

            <div class="col-md-12 mt-2">
              <div class="input-group input-group-outline my-0">
                  <label style="font-family: sans-serif;" class="form-label">Child’s Grade/Class (Optional)</label>
                  <input type="text" class="form-control">
                </div>
             </div>

             <div class="col-md-12 mt-2">
              <div class="input-group input-group-outline my-0">
                  <label style="font-family: sans-serif;" class="form-label">Parent's Phone </label>
                  <input type="text" class="form-control">
                </div>
             </div>
             <div class="text-end mt-2">
              <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white mb-0 w-32" type="button">Add to Cart</button>

             </div>


          </div>

        <!-- <div class="button-row d-flex mt-4">
        <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white mb-0 js-btn-prev" type="button" title="Prev">Back</button>
        <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
        </div> -->
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
    <!--   Core JS Files   -->
    <!--   Core JS Files   -->

    <script src="{{asset('slider.js')}}"></script>
    <script
      src=".{{asset('/assets/js/core/popper.min.js')}}"
      type="text/javascript"
    ></script>
    <script
      src="{{asset('/assets/js/core/bootstrap.min.js')}}"
      type="text/javascript"
    ></script>
    <script src="{{url('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/mattboldt/typed.js/ -->
    <script src="{{url('/assets/js/plugins/typedjs.js')}}"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{('/assets/js/plugins/countup.min.js')}}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="{{('/assets/js/plugins/rellax.min.js')}}"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="{{('/assets/js/plugins/tilt.min.js')}}"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="{{('/assets/js/plugins/choices.min.js')}}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="{{('/assets/js/plugins/parallax.min.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script
      src="{{('/assets/js/plugins/nouislider.min.js')}}"
      type="text/javascript"
    ></script>
    <!--  Plugin for the blob animation -->
    <script
      src="{{('/assets/js/plugins/anime.min.js')}}"
      type="text/javascript"
    ></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script
      src="{{('/assets/js/material-kit-pro.min.js?v=3.0.4')}}"
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
    <script
    src="{{('/assets/js/plugins/multiplestep.js')}}"
    type="text/javascript"
    ></script>
  </body>
</html>
@endsection
