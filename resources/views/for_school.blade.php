@extends('layouts.main')

@section('main-container')
    <!-- End Navbar -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header style="background-color: #283570">
      <div class="page-header min-vh-75" style="">
        <span class="mask opacity-6"></span>

      </div>
    </header>

    <div style="margin-top: -460px" class="row justify-space-between py-0">
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
      Features & Benifits
    </h3>
      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mx-auto">
          <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link"
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
                  class="nav-link active"
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
            class="tab-pane fade "
            id="parents"
            role="tabpanel"
            aria-labelledby="parents-tab"
          >
          <div class="row justify-content-center">
            <div class="col-md-6">
              <h2  style="
              color: #fff;
              font-feature-settings: 'clig' off, 'liga' off;
              font-family: Gluten;
              font-size: 24px;
              font-style: normal;
              font-weight: 600;
              line-height: 0px; /* 112.5% */
            "
           class="text-center text-white">The Easiest way to preserve your Child's 'Keepers'</h2>
              <h6 class="text-center mt-3 mb-3" style="color: #C3C8E0;
              font-feature-settings: 'clig' off, 'liga' off;
              font-family: Poppins;
              font-size: 14px;
              text-decoration: justify;
              font-style: normal;
              font-weight: 400;

              /* 150% */">keeper is the easiest way to preserve your Childs artwork a achervemnts store your child's keepers in your keeper box. send your box to school for processing. Receive & Share digital images on the Keeper Apo. ironies are returned to vou.
              </h6>
            </div>
           </div>

              <div class="row container justify-content-center">
                <div class="col-md-6 col-lg-3 col-sm-6 col-6">
                    <img src="{{url('images/icons/parents-1.png')}}" alt="" />
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6  col-6">
                    <img src="{{url('images/icons/parents-2.png')}}" alt="" />
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6  col-6">
                    <img src="{{url('images/icons/parents-3.png')}}" alt="" />
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6  col-6">
                    <img src="{{url('images/icons/parents-4.png')}}" alt="" />
                </div>
              </div>
              <div class="row container d-flex justify-content-center">
                <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 col-md-5 mt-5 mr-5">
                 <h2 style="color: #393D42;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Gluten;
                 font-size: 24px;
                 font-style: normal;
                 font-weight: 500;
                 line-height: 28px; /* 116.667% */">Features:</h2>
                 <li style="color: #000;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 21px; /* 131.25% */">Easy-to-use</li>
                 <li style="color: #6C6C6D;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 26px; /* 162.5% */">Keeper Box: Boxes with Tracking ID's</li>
                 <li style="color: #6C6C6D;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 26px; /* 162.5% */"> Keeper order: Online Box Ordering (Pickup froM School) </li>
                 <li style="color: #6C6C6D;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 26px; /* 162.5% */">KeeperApp: App-Based Image Delivery & Sharing</li>
                 <li class="mt-3" style="color: #6C6C6D;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 26px; /* 162.5% */">Dioralv-eceserve four child's at a achievements</li>
                 <li style="color: #6C6C6D;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 26px; /* 162.5% */">Originals easily store in your Box</li>



                </div>
                <div style="border-radius: 32px;
                background: #F4F6FF;" class="col-md-5 mt-5 container rounded-lg ml-5 p-4">
                 <h2 style="color: #393D42;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Gluten;
                 font-size: 24px;
                 font-style: normal;
                 font-weight: 500;
                 line-height: 28px; /* 116.667% */">Benefits:</h2>
                 <li style="color: #000;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 21px; /* 131.25% */">Easy-to-Use</li>
                 <li style="color: #6C6C6D;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 26px; /* 162.5% */">Preserved forever</li>
                 <li style="color: #6C6C6D;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 26px; /* 162.5% */">App-based Viewing & Sharing</li>
                 <li style="color: #6C6C6D;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 16px;
                 font-style: normal;
                 font-weight: 400;
                 line-height: 26px; /* 162.5% */">

               No ongoing costs</li>
               <li style="color: #6C6C6D;
               font-feature-settings: 'clig' off, 'liga' off;
               font-family: Poppins;
               font-size: 16px;
               font-style: normal;
               font-weight: 400;
               line-height: 26px; /* 162.5% */">
             Affordable, Pay-per-Scan pricing</li>

                </div>
              </div>

               <div class="row justify-content-center mt-5">
                <div class="col-md-3">
                  <a href="">
                 <button style="color: #FFF;
                 font-feature-settings: 'clig' off, 'liga' off;
                 font-family: Poppins;
                 font-size: 14px;
                 font-style: normal;
                 font-weight: 600;
                 line-height: normal;
                 padding: 14px 40px;
                 justify-content: center;
                 align-items: center;
                 gap: 10px; border-radius: 32px;
                 background: #283570; color: #fff; width: 400px;" class="btn">GET STARTED</button>
                 </a>
                <h1 class="text-center" style="color: #6C6C6D;
                font-feature-settings: 'clig' off, 'liga' off;
                font-family: Poppins;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;">
                  start with keeper by ordering your Box
                </h1>
              </div>
               </div>
          </div>
          <div
            class="tab-pane fade show active"
            id="school"
            role="tabpanel"
            aria-labelledby="school-tab"
          >



       <div class="row justify-content-center">
        <div class="col-md-6">
          <h2  style="
          color: #fff;
          font-feature-settings: 'clig' off, 'liga' off;
          font-family: Gluten;
          font-size: 24px;
          font-style: normal;
          font-weight: 600;
          line-height: 0px; /* 112.5% */
        "
       class="text-center text-white">Your schools best rund-canser</h2>
          <h6 class="text-center mt-3 mb-3" style="color: #C3C8E0;
          font-feature-settings: 'clig' off, 'liga' off;
          font-family: Poppins;
          font-size: 16px;
          text-decoration: justify;
          font-style: normal;
          font-weight: 400;

          /* 150% */">keeper is a quickly becoming one of the the most popular ways to raise runes for your school. Parents love knowing their children's art & achievements are digitally preserved forever.
          </h6>
        </div>
       </div>

          <div class="row container justify-content-center justify-space-between">
            <div class="col-md-6 col-lg-3 col-sm-6 col-6">
                <img src="{{url('images/icons/school-1.png')}}" alt="" />
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6">
                <img src="{{url('images/icons/school-2.png')}}" alt="" />
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6">
                <img src="{{url('images/icons/school-3.png')}}" alt="" />
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-6">
                <img src="{{url('images/icons/school-4.png')}}" alt="" />
            </div>
          </div>
          <div class="row container d-flex justify-content-center">
            <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 col-md-5 mt-5 mr-5">
             <h2 style="color: #393D42;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Gluten;
             font-size: 24px;
             font-style: normal;
             font-weight: 500;
             line-height: 28px; /* 116.667% */">Features:</h2>
             <li style="color: #000;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 21px; /* 131.25% */"> Easy-to-Operate system</li>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 26px; /* 162.5% */"> Ongoing fund-raising revenue</li>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 26px; /* 162.5% */"> Flexible schedule - set by the school</li>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 26px; /* 162.5% */">	Volunteer/Admin managed scanning</li>

            <h2 class="mt-2" style="color: #393D42;
            font-feature-settings: 'clig' off, 'liga' off;
            font-family: Gluten;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: 28px; /* 116.667% */">Keeper Includes:</h2>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 26px; /* 162.5% */">Keeper-Box: Boxes with tracking ID's</li>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 26px; /* 162.5% */">Keeper-Order: Online box ordering for parents </li>





            </div>
            <div style="border-radius: 32px;
            background: #F4F6FF;" class="col-md-5 mt-5 container rounded-lg ml-5 p-4">
             <h2 style="color: #393D42;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Gluten;
             font-size: 24px;
             font-style: normal;
             font-weight: 500;
             line-height: 28px; /* 116.667% */">Benefits:</h2>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 21px; /* 131.25% */">Easy-to-operate</li>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 26px; /* 162.5% */">Great revenue stream</li>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 26px; /* 162.5% */">Builds pride among students</li>
             <li style="color: #6C6C6D;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 26px; /* 162.5% */">
           Builds community connections</li>
           <li style="color: #6C6C6D;
           font-feature-settings: 'clig' off, 'liga' off;
           font-family: Poppins;
           font-size: 16px;
           font-style: normal;
           font-weight: 400;
           line-height: 26px; /* 162.5% */">
        Popular service for parents</li>




            </div>
          </div>

           <div class="row justify-content-center mt-5">
            <div class="col-md-3">
              <a href="{{('getStarted')}}">
             <button style="color: #FFF;
             font-feature-settings: 'clig' off, 'liga' off;
             font-family: Poppins;
             font-size: 14px;
             font-style: normal;
             font-weight: 600;
             line-height: normal;
             padding: 14px 40px;
             justify-content: center;
             align-items: center;
             gap: 10px; border-radius: 32px;
             background: #283570; color: #fff; width: 400px;" class="btn">GET STARTED</button></a>
            <h1 class="text-center" style="color: #6C6C6D;
            font-feature-settings: 'clig' off, 'liga' off;
            font-family: Poppins;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;">
              it's free & easy to bring keeper to your school
            </h1>
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
