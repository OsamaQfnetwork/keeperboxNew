@extends('layouts.main')

@section('main-container')
    <!-- End Navbar -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header style="background-color: #283570">
      <div class="page-header min-vh-75" style="">
        <span class="mask opacity-6"></span>

      </div>
    </header>

    <div style="margin-top: -430px" class="row justify-space-between py-0">
      <h3 class="text-center"
      style="
        color: #fff;
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Gluten;
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: 36px; /* 112.5% */
      "
    >
   Get Started
    </h3>
      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mx-auto">
          <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="parents-tab"
                  data-bs-toggle="pill"
                  href="#parents"
                  role="tab"
                  aria-controls="parents"
                  aria-selected="true"
                  >For Parents</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link "
                  id="school-tab"
                  data-bs-toggle="pill"
                  href="#school"
                  role="tab"
                  aria-controls="school"
                  aria-selected="false"
                  aria-selected="true"
                  >For Schools</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-12 mt-5  my-auto text-start">
        <div class="tab-content" id="v-pills-tabContent">
          <div
            class="tab-pane fade show active "
            id="parents"
            role="tabpanel"
            aria-labelledby="parents-tab"
          >

              <div class="row container  justify-content-center">

                   <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-4 mt-5">
                    <div class="row">

                       <div class="col-md-12 text-center">
                           <img style="width: 200px; height: 150px;" src="{{url('images/icons/bx.png')}}" alt="">
                           <h1 class="mt-5" style="color: #212C3C;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Gluten;
                           font-size: 32px;
                           font-style: normal;
                           font-weight: 600;
                           line-height: 36px; /* 112.5% */">Order a box</h1>
                        </div>
                    </div>
                    <div class="row mt-0">
                       <div class="col-md-12">
                           <h1 class="text-center" style="color: #6C6C6D;
                           text-align: center;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Poppins;
                           font-size: 20px;
                           font-style: normal;
                           font-weight: 400;
                           line-height: normal;">
                            Your child Creates “Keepers” that you want to preserve
                            </h1>
                            <div class="text-center mt-4">
                              <a href="{{('keeperbox')}}">
                                <button style="border-radius: 32px;
                                background: #283570; display: inline-flex;
                                padding: 14px 35px;
                                font-feature-settings: 'clig' off, 'liga' off;
                                  font-family: Poppins;
                                justify-content: center;
                                align-items: center;
                                gap: 10px;" class="btn text-white">Order a box</button>
                          </a>
                          </div>

                       </div>
                    </div>




                   </div>
              </div>


          </div>
          <div
            class="tab-pane fade "
            id="school"
            role="tabpanel"
            aria-labelledby="school-tab"
          >
          <div class="row container  justify-content-center">
            <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-4 mt-5">
                <div class="row">

                   <div class="col-md-12 text-center">
                       <img style="width: 160px; height: 140px;" class="text-center" src="{{('images/icons/bxx.png')}}" alt="">
                    <h1 class="mt-5" style="color: #212C3C;
                    font-feature-settings: 'clig' off, 'liga' off;
                    font-family: Gluten;
                    font-size: 32px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: 36px; /* 112.5% */">Easy Sign Up</h1>
                    </div>
                </div>
                <div class="row mt-1">
                   <div class="col-md-12">
                       <h1 class="text-center" style="color: #6C6C6D;
                       text-align: center;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Poppins;
                       font-size: 20px;
                       font-style: normal;
                       font-weight: 400;
                       line-height: normal;">
                       Your child Creates “Keepers” that you want to preserve
                        </h1>
                        <div class="text-center mt-4">
                          <a href="{{('signup')}}">
                            <button style="
                            font-feature-settings: 'clig' off, 'liga' off;
                            font-family: Poppins;
                            border-radius: 32px;
                            background: #283570; display: inline-flex;
                            padding: 14px 35px;
                            justify-content: center;
                            align-items: center;
                            gap: 10px;" class="btn text-white">Sign Up Now</button></a>
                        </div>

                   </div>
                </div>




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
@endsection
