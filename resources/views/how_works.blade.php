@extends('layouts.main')

@section('main-container')
    <!-- End Navbar -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header style="background-color: #283570">
      <div class="page-header min-vh-75" style="">
        <span class="mask opacity-6"></span>

      </div>
    </header>

 <!-- <div style="margin-top: -430px" class="row justify-space-between py-0">
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
    How it Works
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
            class="tab-pane tab-content fade show active "
            id="parents"
            role="tabpanel"
            aria-labelledby="parents-tab"
          >

              <div  class="row container   justify-content-center">
                <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                 <div class="row">
                    <div class="col-md-2">
                       <h1 style="color: #393D42;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Gluten;
                       font-size: 64px;
                       font-style: normal;
                       font-weight: 500;
                       line-height: normal;">1</h1>
                    </div>
                    <div class="col-md-10">
                        <img src="images/icons/hparent1.png" alt="">
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-md-12">
                        <h1 style="color: #393D42;
                        font-feature-settings: 'clig' off, 'liga' off;
                        font-family: Gluten;
                        font-size: 24px;
                        font-style: normal;
                        font-weight: 600;
                        line-height: 28px; /* 116.667% */">Create & Achieve</h1>
                        <h1 class="mt-3" style="color: #6C6C6D;
                        font-feature-settings: 'clig' off, 'liga' off;
                        font-family: Poppins;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: normal;">
                            Your child Creates “Keepers” that you want to preserve
                        </h1>
                    </div>
                 </div>




                </div>
                <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                    <div class="row">
                       <div class="col-md-2">
                          <h1 style="color: #393D42;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Gluten;
                          font-size: 64px;
                          font-style: normal;
                          font-weight: 500;
                          line-height: normal;">2</h1>
                       </div>
                       <div class="col-md-10">
                           <img src="images/icons/hparent2.png" alt="">
                       </div>
                    </div>
                    <div class="row mt-3">
                       <div class="col-md-12">
                           <h1 style="color: #393D42;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Gluten;
                           font-size: 24px;
                           font-style: normal;
                           font-weight: 600;
                           line-height: 28px; /* 116.667% */">Collect & Send</h1>
                           <h1 class="mt-3" style="color: #6C6C6D;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Poppins;
                           font-size: 18px;
                           font-style: normal;
                           font-weight: 400;
                           line-height: normal;">
                             Place “Keepers” into your trackable KeeperBox and send to school (Provider)
                           </h1>
                       </div>
                    </div>




                   </div>
                   <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                    <div class="row">
                       <div class="col-md-2">
                          <h1 style="color: #393D42;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Gluten;
                          font-size: 64px;
                          font-style: normal;
                          font-weight: 500;
                          line-height: normal;">3</h1>
                       </div>
                       <div class="col-md-10">
                           <img src="images/icons/hparent3.png" alt="">
                       </div>
                    </div>
                    <div class="row mt-3">
                       <div class="col-md-12">
                           <h1 style="color: #393D42;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Gluten;
                           font-size: 24px;
                           font-style: normal;
                           font-weight: 600;
                           line-height: 28px; /* 116.667% */">Receive  & Share</h1>
                           <h1 class="mt-3" style="color: #6C6C6D;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Poppins;
                           font-size: 18px;
                           font-style: normal;
                           font-weight: 400;
                           line-height: normal;">
                            Receive digital copies in your Keeper App. Your KeeperBox is returned with originals
                           </h1>
                       </div>
                    </div>




                   </div>
              </div>

               <div class="row justify-content-center  mt-5">
                <div class="col-md-3">
                  <a href="getStarted.html">
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
                it's free & easy to bring keeper to your schoo
                </h1>
              </div>
               </div>
          </div>
          <div
            class="tab-pane tab-content fade "
            id="school"
            role="tabpanel"
            aria-labelledby="school-tab"
          >



          <div id="school" class="row container    justify-content-center">
            <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
             <div class="row">
                <div class="col-md-2">
                   <h1 style="color: #393D42;
                   font-feature-settings: 'clig' off, 'liga' off;
                   font-family: Gluten;
                   font-size: 64px;
                   font-style: normal;
                   font-weight: 500;
                   line-height: normal;">1</h1>
                </div>
                <div class="col-md-10">
                    <img src="images/icons/hparent1.png" alt="">
                </div>
             </div>
             <div class="row mt-3">
                <div class="col-md-12">
                    <h1 style="color: #393D42;
                    font-feature-settings: 'clig' off, 'liga' off;
                    font-family: Gluten;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: 28px; /* 116.667% */">Create & Achieve</h1>
                    <h1 class="mt-3" style="color: #6C6C6D;
                    font-feature-settings: 'clig' off, 'liga' off;
                    font-family: Poppins;
                    font-size: 18px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;">
                      Your students Creates “Keepers” & achievements that you want to preserve
                    </h1>
                </div>
             </div>




            </div>
            <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                <div class="row">
                   <div class="col-md-2">
                      <h1 style="color: #393D42;
                      font-feature-settings: 'clig' off, 'liga' off;
                      font-family: Gluten;
                      font-size: 64px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;">2</h1>
                   </div>
                   <div class="col-md-10">
                       <img src="images/icons/hparent2.png" alt="">
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-md-12">
                       <h1 style="color: #393D42;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Gluten;
                       font-size: 24px;
                       font-style: normal;
                       font-weight: 600;
                       line-height: 28px; /* 116.667% */">Receive & Digitally Preserve</h1>
                       <h1 class="mt-3" style="color: #6C6C6D;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Poppins;
                       font-size: 18px;
                       font-style: normal;
                       font-weight: 400;
                       line-height: normal;">
                            Receive trackable KeeperBoxes. Skan and Photograph Originals
                                    </h1>
                   </div>
                </div>




               </div>
               <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                <div class="row">
                   <div class="col-md-2">
                      <h1 style="color: #393D42;
                      font-feature-settings: 'clig' off, 'liga' off;
                      font-family: Gluten;
                      font-size: 64px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;">3</h1>
                   </div>
                   <div class="col-md-10">
                       <img src="images/icons/hparent3.png" alt="">
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-md-12">
                       <h1 style="color: #393D42;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Gluten;
                       font-size: 24px;
                       font-style: normal;
                       font-weight: 600;
                       line-height: 28px; /* 116.667% */">Upload & Return</h1>
                       <h1 class="mt-3" style="color: #6C6C6D;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Poppins;
                       font-size: 18px;
                       font-style: normal;
                       font-weight: 400;
                       line-height: normal;">
                            Upload Hi-Res Images to KeeperCloude. Return KeeperBoxes to Students                       </h1>
                   </div>
                </div>




               </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-md-3">
              <a href="getStarted.html#school">
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
            it's free & easy to bring keeper to your schoo
            </h1>
          </div>
           </div>

            </div>
          </div>
        </div>
      </div>   -->

      <div id="parents" class="tab-content">
        <!-- Content related to Parents goes here -->
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
    How it Works
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
           <div class="" id="v-pills-tabContent">
          <div
            class="tab-pane fade show active "
            role="tabpanel"
            aria-labelledby="parents-tab"
          >

              <div  class="row    justify-content-center">
                <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                 <div class="row">
                    <div class="col-md-2">
                       <h1 style="color: #393D42;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Gluten;
                       font-size: 64px;
                       font-style: normal;
                       font-weight: 500;
                       line-height: normal;">1</h1>
                    </div>
                    <div class="col-md-10">
                        <img src="images/icons/hparent1.png" alt="">
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-md-12">
                        <h1 style="color: #393D42;
                        font-feature-settings: 'clig' off, 'liga' off;
                        font-family: Gluten;
                        font-size: 24px;
                        font-style: normal;
                        font-weight: 600;
                        line-height: 28px; /* 116.667% */">Create & Achieve</h1>
                        <h1 class="mt-3" style="color: #6C6C6D;
                        font-feature-settings: 'clig' off, 'liga' off;
                        font-family: Poppins;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: normal;">
                            Your child Creates “Keepers” that you want to preserve
                        </h1>
                    </div>
                 </div>




                </div>
                <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                    <div class="row">
                       <div class="col-md-2">
                          <h1 style="color: #393D42;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Gluten;
                          font-size: 64px;
                          font-style: normal;
                          font-weight: 500;
                          line-height: normal;">2</h1>
                       </div>
                       <div class="col-md-10">
                           <img src="images/icons/hparent2.png" alt="">
                       </div>
                    </div>
                    <div class="row mt-3">
                       <div class="col-md-12">
                           <h1 style="color: #393D42;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Gluten;
                           font-size: 24px;
                           font-style: normal;
                           font-weight: 600;
                           line-height: 28px; /* 116.667% */">Collect & Send</h1>
                           <h1 class="mt-3" style="color: #6C6C6D;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Poppins;
                           font-size: 18px;
                           font-style: normal;
                           font-weight: 400;
                           line-height: normal;">
                             Place “Keepers” into your trackable KeeperBox and send to school (Provider)
                           </h1>
                       </div>
                    </div>




                   </div>
                   <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                    <div class="row">
                       <div class="col-md-2">
                          <h1 style="color: #393D42;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Gluten;
                          font-size: 64px;
                          font-style: normal;
                          font-weight: 500;
                          line-height: normal;">3</h1>
                       </div>
                       <div class="col-md-10">
                           <img src="images/icons/hparent3.png" alt="">
                       </div>
                    </div>
                    <div class="row mt-3">
                       <div class="col-md-12">
                           <h1 style="color: #393D42;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Gluten;
                           font-size: 24px;
                           font-style: normal;
                           font-weight: 600;
                           line-height: 28px; /* 116.667% */">Receive  & Share</h1>
                           <h1 class="mt-3" style="color: #6C6C6D;
                           font-feature-settings: 'clig' off, 'liga' off;
                           font-family: Poppins;
                           font-size: 18px;
                           font-style: normal;
                           font-weight: 400;
                           line-height: normal;">
                            Receive digital copies in your Keeper App. Your KeeperBox is returned with originals
                           </h1>
                       </div>
                    </div>




                   </div>
              </div>

               <div class="row justify-content-center  mt-5">
                <div class="col-md-3">
                  <a href="getStarted.html">
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
                it's free & easy to bring keeper to your school
                </h1>
              </div>
               </div>
          </div>

          </div>

        </div>
      </div>

      </div>

      <div id="school" class="tab-content">
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
        How it Works
        </h3>

          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mx-auto">
              <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link "
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
            <div class="" id="v-pills-tabContent">
              <div
                class="tab-pane fade show active "
                role="tabpanel"
                aria-labelledby="parents-tab"
              >
          <div  class="row      justify-content-center">
            <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
             <div class="row ">
                <div class="col-md-2">
                   <h1 style="color: #393D42;
                   font-feature-settings: 'clig' off, 'liga' off;
                   font-family: Gluten;
                   font-size: 64px;
                   font-style: normal;
                   font-weight: 500;
                   line-height: normal;">1</h1>
                </div>
                <div class="col-md-10">
                    <img src="images/icons/hparent1.png" alt="">
                </div>
             </div>
             <div class="row mt-3">
                <div class="col-md-12">
                    <h1 style="color: #393D42;
                    font-feature-settings: 'clig' off, 'liga' off;
                    font-family: Gluten;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: 28px; /* 116.667% */">Create & Achieve</h1>
                    <h1 class="mt-3" style="color: #6C6C6D;
                    font-feature-settings: 'clig' off, 'liga' off;
                    font-family: Poppins;
                    font-size: 18px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;">
                      Your students Creates “Keepers” & achievements that you want to preserve
                    </h1>
                </div>
             </div>




            </div>
            <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                <div class="row">
                   <div class="col-md-2">
                      <h1 style="color: #393D42;
                      font-feature-settings: 'clig' off, 'liga' off;
                      font-family: Gluten;
                      font-size: 64px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;">2</h1>
                   </div>
                   <div class="col-md-10">
                       <img src="images/icons/hparent2.png" alt="">
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-md-12">
                       <h1 style="color: #393D42;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Gluten;
                       font-size: 24px;
                       font-style: normal;
                       font-weight: 600;
                       line-height: 28px; /* 116.667% */">Receive & Digitally Preserve</h1>
                       <h1 class="mt-3" style="color: #6C6C6D;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Poppins;
                       font-size: 18px;
                       font-style: normal;
                       font-weight: 400;
                       line-height: normal;">
                            Receive trackable KeeperBoxes. Skan and Photograph Originals
                                    </h1>
                   </div>
                </div>




               </div>
               <div style="border-radius: 32px; background: #F4F6FF;" class=" p-4 m-4 col-md-3 mt-5">
                <div class="row">
                   <div class="col-md-2">
                      <h1 style="color: #393D42;
                      font-feature-settings: 'clig' off, 'liga' off;
                      font-family: Gluten;
                      font-size: 64px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;">3</h1>
                   </div>
                   <div class="col-md-10">
                       <img src="images/icons/hparent3.png" alt="">
                   </div>
                </div>
                <div class="row mt-3">
                   <div class="col-md-12">
                       <h1 style="color: #393D42;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Gluten;
                       font-size: 24px;
                       font-style: normal;
                       font-weight: 600;
                       line-height: 28px; /* 116.667% */">Upload & Return</h1>
                       <h1 class="mt-3" style="color: #6C6C6D;
                       font-feature-settings: 'clig' off, 'liga' off;
                       font-family: Poppins;
                       font-size: 18px;
                       font-style: normal;
                       font-weight: 400;
                       line-height: normal;">
                            Upload Hi-Res Images to KeeperCloude. Return KeeperBoxes to Students                       </h1>
                   </div>
                </div>




               </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-md-3">
              <a href="getStarted.html#school">
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
      </div>
    </div>





    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="mt-5">
      <!-- Section with four info areas left & one card right with image and waves -->
    </div>
    <!--   Core JS Files   -->
    <!--   Core JS Files   -->



  </body>
</html>
@endsection
