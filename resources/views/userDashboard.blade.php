@extends('layouts.main')

@section('main-container')
    <!-- End Navbar -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header style="background-color: #283570">
      <div class="page-header min-vh-25" style="">
        <span class="mask opacity-6"></span>

      </div>
    </header>

    <div style="margin-top: -125px" class="row justify-space-between py-0">
      <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
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
        Welcome to user Dashboard
        </h3>

    </div>
      </div>


      <div class="row container mt-6 justify-content-center px-10" >
        <div class="col-md-12 shadow-primary bordered">
           <div class="row p-3">
            <div class="col-md-2">
                <div  style="height: 130px;" class="col-md-12 text-center bg-gradient-primary rounded p-3">
                    <h3 class="text-white mt-3">
                        <i style="font-size: 60px; width: 60px;" class="fa-regular fa-id-badge"></i>
                    </h3>

                </div>
            </div>
            <div class="col-md-9">
                    <h5 class="mt-5" style="font-family: sans-serif;">
                        chris.al.marry@gmail.com
                        <br>
                        <span style="font-family: sans-serif; color: #8288a4;" >member since:2023</span>
                    </h5>
            </div>
           </div>
        </div>

      </div>
          <div class="row container mt-3 justify-content-center px-10" >
            <div class="col-md-3 shadow-primary">
                <div class="row justify-content-center mt-3">
                    <div  style="height: 150px;" class="col-md-12 text-center bg-gradient-primary rounded p-5">
                        <h3 class="text-white" >
                            <i class="fa-solid fa-circle-info"></i>
                            </h3>
                            <h5 style="font-family: sans-serif;" class="text-white">BASIC INFO</h5>
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-md-12">
                        <h6 style="font-family: sans-serif;" class="text-dark">
                         Parent ID: <br> <span style="color: #1f2b65; font-family: sans-serif;">233DHFHY</span> </h6>
                         <h6 style="font-family: sans-serif;" class="text-dark">
                           Date Created: <br> <span style="color: #1f2b65; font-family: sans-serif; font-weight: bold;">12/12/2023</span> </h6>
                            <h6 style="font-family: sans-serif;" class="text-dark">
                                Parent Name: <br> <span style="color: #1f2b65; font-family: sans-serif;">Public School 88</span> </h6>

                    </div>

                 </div>
            </div>
            <div class="col-md-3 shadow-primary">
                <div class="row justify-content-center mt-3">
                    <div  style="height: 150px;" class="col-md-12 text-center bg-gradient-primary rounded p-5">
                        <h3 class="text-white" >
                            <i class="fa-solid fa-boxes-stacked"></i>
                            </h3>
                            <h5 style="font-family: sans-serif;"
                            class="text-white">MY BOXES</h5>
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-md-12">
                        <h6 style="font-family: sans-serif; color: #1f2b65;" class="text-dark">
                         Small: <br> <span style="color: #a1a5b5; font-family: sans-serif;">Size: 8*12</span>
                         <br><span style="color: #a1a5b5; font-family: sans-serif;">Provider: Scholl 88</span> </h6>
                         <h6 style="font-family: sans-serif;" class="text-dark">
                           Medium:
                           <br> <span style="color: #a1a5b5; font-family: sans-serif;">Size: 8*12</span>
                           <br><span style="color: #a1a5b5; font-family: sans-serif;">Provider: Scholl 88</span> </h6>


                    </div>

                 </div>
            </div>
            <div class="col-md-3 shadow-primary">
                <div class="row justify-content-center mt-3">
                    <div  style="height: 150px;" class="col-md-12 text-center bg-gradient-primary rounded p-5">
                        <h3 class="text-white" >
                            <i class="fa-solid fa-bag-shopping"></i>
                            </h3>
                            <h5 style="font-family: sans-serif;" class="text-white">ORDER</h5>
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-md-6">
                        <h6 style="font-family: sans-serif;" class="text-dark">
                         Box: 8*12 <br> <span style="color: #8288a4; font-family: sans-serif;">Date: 12/12/2023</span> </h6>

                    </div>
                    <div class="col-md-6 text-end">
                        <h6 style="font-family: sans-serif;" class="text-dark">$24 </h6>

                    </div>
                    <div class="col-md-6">
                        <h6 style="font-family: sans-serif;" class="text-dark">
                         Box: 8*12 <br> <span style="color: #8288a4; font-family: sans-serif;">Date: 12/12/2023</span> </h6>

                    </div>
                    <div class="col-md-6 text-end">
                        <h6 style="font-family: sans-serif;" class="text-dark">$24 </h6>

                    </div>

                 </div>
            </div>
            <div class="col-md-3 shadow-primary">
                <div class="row justify-content-center mt-3">
                    <div  style="height: 150px;" class="col-md-12 text-center bg-gradient-primary rounded p-5">
                        <h3 class="text-white" >
                            <i class="fa-solid fa-lock"></i>
                            </h3>
                            <h5 style="font-family: sans-serif;" class="text-white">PASSWORD</h5>
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-md-12">
                        <h6 style="font-family: sans-serif;" class="text-dark">
                         Last Password Change: <br> <span style="color: #75798d; font-family: sans-serif;">12/12/2024</span> </h6>


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
