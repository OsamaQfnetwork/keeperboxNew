{{-- @extends('layouts.main')

@section('main_container') --}}

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('/assets/img/apple-icon.png')}}"
    />
    <link rel="icon" type="image/png" href="{{asset('/assets/img/favicon.png')}}" />
    <title>
      Keeper Box | Parents easiest way to preserve & share their child’s
      artwork. Available at School - Check now. KeeperBox.co
    </title>
    <link rel="stylesheet" href="slider.css" />
    <!--     Fontawesome     -->
    <link href="{{asset('/assets/fontawesome-pro/css/all.min.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"
    />
    <link rel="stylesheet" href="./style.css" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>
    <!-- Material Icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"
      rel="stylesheet"
    />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="{{asset('/assets/css/material-kit-pro.css?v=3.0.4')}}"
      rel="stylesheet"
    />
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script
      defer
      data-site="YOUR_DOMAIN_HERE"
      src="https://api.nepcha.com/js/nepcha-analytics.js"
    ></script>

    <style>
      @media screen and (max-width: 786px) {
        .header_left_side .title {
          font-size: 30px;
          margin-top: 50px;
        }
      }
      @media screen and (max-width: 576px) {
        .header_left_side .title {
          font-size: 30px;
          margin-top: 50px;
        }
      }
    </style>
    <style>
      /* Media query for medium devices */
      @media screen and (max-width: 1920px) {
        .tabS {
          margin-right: 500px; /* Override margin-right for medium devices */
        }
      }

      /* Media query for small devices */
      @media screen and (min-width: 1200px) {
        .tabS {
          margin-right: 600px; /* Override margin-right for small devices */
        }
      }
      /* Media query for small devices */
      @media screen and (max-width: 576px) {
        .tabS {
          margin-right: 0px; /* Override margin-right for small devices */
        }
      }
    </style>
  </head>

  <body class="presentation-page">
    <div class="row justify-space-between py-0">
      <div class="row justify-content-center mt-5">
        <div class="tabS col-lg-3 col-md-3 col-sm-6">
          <div class="nav-wrapper mt-4 position-relative end-0">
            <ul
              style="background-color: #0052cc"
              class="nav nav-pills nav-fill p-1"
              role="tablist"
            >
              <li class="nav-item">
                <a
                  style="font-family: sans-serif"
                  class="nav-link active"
                  id="school-tab"
                  data-bs-toggle="pill"
                  href="#school"
                  role="tab"
                  aria-controls="school"
                  aria-selected="false"
                  >Schools</a
                >
              </li>
              <li class="nav-item">
                <a
                  style="font-family: sans-serif"
                  class="nav-link"
                  id="parents-tab"
                  data-bs-toggle="pill"
                  href="#parents"
                  role="tab"
                  aria-controls="parents"
                  aria-selected="true"
                  >Parents</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-12 mt-5 me-auto my-auto text-start">
        <div class="tab-content" id="v-pills-tabContent">
          <div
            class="tab-pane fade"
            id="parents"
            role="tabpanel"
            aria-labelledby="parents-tab"
          >
            <div>
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                      <div class="row justify-content-center">
                        <div style="margin-right: 70px" class="col-md-4 mt-5">
                          <div class="text-end">
                            <img
                              style="height: 80px; width: 90px"
                              src="{{url('images/icons/box.png')}}"
                              alt=""
                            />
                          </div>
                          <div class="text-center mt-3">
                            <img src="{{url('images/keeper.png')}}" alt="" />
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5 justify-content-center">
                        <div class="col-md-12">
                          <h3
                            style="
                              color: var(--Black-B100, #171717);
                              font-feature-settings: 'clig' off, 'liga' off;
                              font-size: 30px;
                              font-style: normal;
                              font-weight: 700;
                              line-height: 36px; /* 120% */
                              letter-spacing: -0.4px;
                            "
                            class="text-center"
                          >
                            Sign In as a Keeper Service Provider
                          </h3>
                          <p
                            class="text-center"
                            style="
                              color: var(--Gray-G100, #8f92a1);
                              font-size: 16px;
                              font-style: normal;
                              font-weight: 500;
                              font-family: sans-serif;
                              line-height: normal;
                              letter-spacing: -0.246px;
                            "
                          >
                            Don't have an account?
                            <a href="singup.html">
                              <span
                                style="color: blue; font-family: sans-serif"
                                class=""
                                >Sign up
                              </span></a
                            >
                          </p>
                        </div>
                      </div>
                      <div class="card card-plain">
                        <div class="card-body mt-2">
                          <form role="form">
                            <div class="input-group input-group-outline mb-3">
                              <label
                                style="font-family: sans-serif"
                                class="form-label"
                                >User Name</label
                              >
                              <input type="user_name" class="form-control" />
                            </div>
                            <div class="input-group input-group-outline mb-3">
                              <label
                                style="font-family: sans-serif"
                                class="form-label"
                                >Password</label
                              >
                              <input type="password" class="form-control" />
                            </div>
                            <div
                              class="form-check form-switch d-flex align-items-center mb-3"
                            >
                              <input
                                class="form-check-input"
                                type="checkbox"
                                id="rememberMe"
                              />
                              <label
                                style="font-family: sans-serif"
                                class="form-check-label mb-0 ms-3"
                                for="rememberMe"
                                >Remember me</label
                              >
                            </div>
                            <div class="text-center">
                              <a href="userDashboard">
                                <button
                                  style="
                                    font-family: sans-serif;
                                    background-color: #0052cc;
                                  "
                                  type="button"
                                  class="btn text-white btn-lg btn-lg w-100 mt-4 mb-0"
                                >
                                  LOGIN
                                </button></a
                              >
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  style="margin-top: -170px"
                  class="col-md-4 text-end d-none d-md-block"
                >
                  <img
                    class="h-100"
                    style="background-size: cover"
                    src="{{url('images/signinparent.png')}}"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade show active"
            id="school"
            role="tabpanel"
            aria-labelledby="school-tab"
          >
            <div>
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                      <div class="row justify-content-center">
                        <div style="margin-right: 70px" class="col-md-4 mt-5">
                          <div class="text-end">
                            <img
                              style="height: 80px; width: 90px"
                              src="{{url('images/icons/bxx.png')}}"
                              alt=""
                            />
                          </div>
                          <div class="text-center mt-3">
                            <img src="{{url('images/keeper.png')}}" alt="" />
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5 justify-content-center">
                        <div class="col-md-12">
                          <h3
                            style="
                              color: var(--Black-B100, #171717);
                              font-feature-settings: 'clig' off, 'liga' off;
                              font-size: 30px;
                              font-style: normal;
                              font-weight: 700;
                              line-height: 36px; /* 120% */
                              letter-spacing: -0.4px;
                            "
                            class="text-center"
                          >
                            Sign In as a Keeper Service Provider
                          </h3>
                          <p
                            class="text-center"
                            style="
                              color: var(--Gray-G100, #8f92a1);
                              font-size: 16px;
                              font-style: normal;
                              font-weight: 500;
                              font-family: sans-serif;
                              line-height: normal;
                              letter-spacing: -0.246px;
                            "
                          >
                            Don't have an account?
                            <a href="singup.html">
                              <span
                                style="color: blue; font-family: sans-serif"
                                class=""
                                >Sign up
                              </span></a
                            >
                          </p>
                        </div>
                      </div>
                      <div class="card card-plain">
                        <div class="card-body mt-2">
                          <form role="form">
                            <div class="input-group input-group-outline mb-3">
                              <label
                                style="font-family: sans-serif"
                                class="form-label"
                                >User Name</label
                              >
                              <input type="user_name" class="form-control" />
                            </div>
                            <div class="input-group input-group-outline mb-3">
                              <label
                                style="font-family: sans-serif"
                                class="form-label"
                                >Password</label
                              >
                              <input type="password" class="form-control" />
                            </div>
                            <div
                              class="form-check form-switch d-flex align-items-center mb-3"
                            >
                              <input
                                class="form-check-input"
                                type="checkbox"
                                id="rememberMe"
                              />
                              <label
                                style="font-family: sans-serif"
                                class="form-check-label mb-0 ms-3"
                                for="rememberMe"
                                >Remember me</label
                              >
                            </div>
                            <div class="text-center">
                              <a href="userDashboard">
                                <button
                                  style="
                                    font-family: sans-serif;
                                    background-color: #0052cc;
                                  "
                                  type="button"
                                  class="btn text-white btn-lg btn-lg w-100 mt-4 mb-0"
                                >
                                  LOGIN
                                </button></a
                              >
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  style="margin-top: -170px"
                  class="col-md-4 text-end d-none d-md-block"
                >
                  <img
                    class="h-100"
                    style="background-size: cover"
                    src="{{url('images/signin_banner.png')}}"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-md-8">
        <div class="row justify-content-center">
          <div class="col-md-4 mt-5">
            <div class="text-center">
              <img
                style="height: 80px; width: 90px"
                src="images/icons/bxx.png"
                alt=""
              />
            </div>
            <div class="text-center mt-3">
              <img src="images/keeper.png" alt="" />
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <h3
              style="
                color: var(--Black-B100, #171717);
                font-feature-settings: 'clig' off, 'liga' off;
                font-size: 30px;
                font-style: normal;
                font-weight: 700;
                line-height: 36px; /* 120% */
                letter-spacing: -0.4px;
              "
              class="text-center"
            >
              Sign In as a Keeper Service Provider
            </h3>
            <p
              class="text-center"
              style="
                color: var(--Gray-G100, #8f92a1);
                font-size: 16px;
                font-style: normal;
                font-weight: 500;
                font-family: sans-serif;
                line-height: normal;
                letter-spacing: -0.246px;
              "
            >
              Don't have an account?
              <a href="singup.html">
                <span style="color: blue; font-family: sans-serif" class=""
                  >Sign up
                </span></a
              >
            </p>
          </div>
          <div class="row justify-space-between py-0">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
                <div class="nav-wrapper mt-4 position-relative end-0">
                  <ul
                    style="background-color: #0052cc"
                    class="nav nav-pills nav-fill p-1"
                    role="tablist"
                  >
                    <li class="nav-item">
                      <a
                        style="font-family: sans-serif"
                        class="nav-link active"
                        id="school-tab"
                        data-bs-toggle="pill"
                        href="#school"
                        role="tab"
                        aria-controls="school"
                        aria-selected="false"
                        >For Schools</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        style="font-family: sans-serif"
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
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12 mt-5 me-auto my-auto text-start">
              <div class="tab-content" id="v-pills-tabContent">
                <div
                  class="tab-pane fade"
                  id="parents"
                  role="tabpanel"
                  aria-labelledby="parents-tab"
                >
                  <div>
                    <div class="row justify-content-center">
                      <div class="col-md-6">
                        <div class="card card-plain">
                          <div class="card-body mt-2">
                            <form role="form">
                              <div class="input-group input-group-outline mb-3">
                                <label
                                  style="font-family: sans-serif"
                                  class="form-label"
                                  >User Name</label
                                >
                                <input type="user_name" class="form-control" />
                              </div>
                              <div class="input-group input-group-outline mb-3">
                                <label
                                  style="font-family: sans-serif"
                                  class="form-label"
                                  >Password</label
                                >
                                <input type="password" class="form-control" />
                              </div>
                              <div
                                class="form-check form-switch d-flex align-items-center mb-3"
                              >
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="rememberMe"
                                />
                                <label
                                  style="font-family: sans-serif"
                                  class="form-check-label mb-0 ms-3"
                                  for="rememberMe"
                                  >Remember me</label
                                >
                              </div>
                              <div class="text-center">
                                <button
                                  style="
                                    font-family: sans-serif;
                                    background-color: #0052cc;
                                  "
                                  type="button"
                                  class="btn text-white btn-lg btn-lg w-100 mt-4 mb-0"
                                >
                                  LOGIN
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade show active"
                  id="school"
                  role="tabpanel"
                  aria-labelledby="school-tab"
                >
                  <div>
                    <div class="row justify-content-center">
                      <div class="col-md-6">
                        <div class="card card-plain">
                          <div class="card-body mt-2">
                            <form role="form">
                              <div class="input-group input-group-outline mb-3">
                                <label
                                  style="font-family: sans-serif"
                                  class="form-label"
                                  >User Name</label
                                >
                                <input type="user_name" class="form-control" />
                              </div>
                              <div class="input-group input-group-outline mb-3">
                                <label
                                  style="font-family: sans-serif"
                                  class="form-label"
                                  >Password</label
                                >
                                <input type="password" class="form-control" />
                              </div>
                              <div
                                class="form-check form-switch d-flex align-items-center mb-3"
                              >
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="rememberMe"
                                />
                                <label
                                  style="font-family: sans-serif"
                                  class="form-check-label mb-0 ms-3"
                                  for="rememberMe"
                                  >Remember me</label
                                >
                              </div>
                              <div class="text-center">
                                <button
                                  style="
                                    font-family: sans-serif;
                                    background-color: #0052cc;
                                  "
                                  type="button"
                                  class="btn text-white btn-lg btn-lg w-100 mt-4 mb-0"
                                >
                                  LOGIN
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-end">
        <img
          class="h-100"
          style="background-size: cover"
          src="images/signin_banner.png"
          alt=""
        />
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">

      </div>
      <div class="col-md-4">
        <img
          class="h-100"
          style="background-size: cover"
          src="images/signin_banner.png"
          alt=""
        />
      </div>
    </div> -->

  </body>
</html>

{{-- @endsection --}}
