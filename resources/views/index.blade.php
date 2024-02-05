@extends('layouts.main')

@section('main-container')
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <header class="main_header">
      <div class="page-header">
        <div class="cslider mt-0">
          <div class="header_content">
            <div class="mt-5">
              <img
                src="{{url('images/Slide 1.png')}}"
                alt=""
                class="page_img_012"
              />
            </div>
            </div>
          </div>

          <div class="header_content">
            <div class="mt-5">
              <img
                src="{{url('images/Slide 2.png')}}"
                alt=""
                class="page_img_012"
              />
            </div>
            </div>

            <div class="header_content">
              <div class="mt-5">
                <img
                  src="{{url('images/Slide 3.png')}}"
                  alt=""
                  class="page_img_012"
                />
              </div>
              </div>

          <div class="left_icon">
            <img
              src="{{url('images/icons/left-arrow.svg"')}}
              alt=""
              class="leftsli_icon"
            />
          </div>

          <div class="right_icon">
            <img
              src="{{url('images/icons/right-arrow.svg')}}"
              alt=""
              class="rightsli_icon"
            />
          </div>
        </div>
      </div>
    </header>
    <!------------ second_container start here -------------->

    <div class="second_container">
      <div class="second_left_side">
        <img src="{{url('images/mobile-mockup.svg')}}" alt="" class="page_img_013" />

        <h2 style="font-family: 'Gluten', cursive">
          Keeper is the easy way to Digitally Preserve your Childs Art &
          Achivments
        </h2>
      </div>

      <div class="second_right_side">
        <img src="{{url('images/mobile-mockup.svg')}}" alt="" class="page_img_005" />

        <img src="{{url('images/box-img.svg" alt=')}}" class="page_img_006" />

        <img src="{{url('images/box-left-arrow.sv')}}" alt="" class="page_img_007" />

        <img src="{{url('images/box-up-arrow.svg')}}" alt="" class="page_img_008" />
      </div>
    </div>
      <!------------ third_container start here -------------->
      <div class="third_container">
        <img src="{{url('images/card-section-bg.png')}}" alt="" class="page_img_009" />

        <h2 style="font-family: 'Gluten', cursive">
          How it Works
          <img src="{{url('images/card-header-bg.svg')}}" alt="" />
        </h2>
        <div class="row justify-space-between py-0">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12  mx-auto">
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
                    >For Parents</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="school-tab"
                      data-bs-toggle="pill"
                      href="#school"
                      role="tab"
                      aria-controls="school"
                      aria-selected="false"
                    >For Schools</a>
                  </li>
                </ul>

              </div>
            </div>

          </div>
          <div class="col-lg-12 mt-5 me-auto my-auto text-start">
            <div class="tab-content" id="v-pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="parents"
                role="tabpanel"
                aria-labelledby="parents-tab"
              >
                <div class="third_con_content">


                  <div class="third_con_step">
                    <a href="how_works.html#parents">
                   <div>
                     <div class="text-center">
                       <img src="{{url('images/card-one.svg')}}" alt="" />

                     </div>
                     <a href="how_works.html#parents">
                     <div class="third_step_text">
                       <h1 style="font-family: 'Gluten', cursive">1</h1>

                       <div class="third_step_des">
                         <h3 style="color: #FFF;
                         font-feature-settings: 'clig' off, 'liga' off;
                         font-family: Gluten;
                         font-size: 24px;
                         font-style: normal;
                         font-weight: 600;
                         line-height: 28px; /* 116.667% */">Create & Achieve</h3>

                         <p style="color: #9fa4bb;
                         font-feature-settings: 'clig' off, 'liga' off;
                         font-family: Poppins;
                         font-size: 18px;
                         text-align: left;
                         font-style: normal;
                         font-weight: 400;
                         line-height: normal;">
                         Your child creates ‘Keepers’ that you want to preserve & share
                        </p>
                       </div>
                     </div></a>
                   </div>
                    </a>
                 </div>

                  <div class="third_con_step">
                     <a href="how_works.html#parents">
                    <div>
                      <div class="text-center">
                        <img src="{{url('images/card-two.svg')}}" alt="" />

                      </div>
                      <a href="how_works.html#parents">
                      <div class="third_step_text">
                        <h1 style="font-family: 'Gluten', cursive">2</h1>

                        <div class="third_step_des">
                          <h3 style="color: #FFF;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Gluten;
                          font-size: 24px;
                          font-style: normal;
                          font-weight: 600;
                          line-height: 28px; /* 116.667% */">Collect & Send</h3>

                          <p style="color: #9fa4bb;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Poppins;
                          font-size: 18px;
                          text-align: left;
                          font-style: normal;
                          font-weight: 400;
                          line-height: normal;">
                          Place ‘Keepers’ into your trackable Keeper-Box & send to school
                         </p>
                        </div>
                      </div></a>
                    </div>
                     </a>
                  </div>

                  <div class="third_con_step">
                    <a href="how_works.html#parents">
                    <div>
                      <div class="text-center">
                        <img src="{{url('images/card-three.svg')}}" alt="" />
                      </div>
                      <a href="how_works.html#parents">
                      <div class="third_step_text">
                        <h1 style="font-family: 'Gluten', cursive">3</h1>

                        <div class="third_step_des">
                          <h3 style="font-family: 'Gluten', cursive">Receive  & Share</h3>

                          <p style="color: #9fa4bb;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Poppins;
                          font-size: 18px;
                          text-align: left;
                          font-style: normal;
                          font-weight: 400;
                          line-height: normal;">
  Receive digital copies in your Keeper-App. Keeper-Box is returned with originals                         </p>
                        </div>
                      </div>
                    </a>
                    </div>
                  </a>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="school"
                role="tabpanel"
                aria-labelledby="school-tab"
              >
                <div class="third_con_content">
                  <div class="third_con_step">
                    <a href="how_works.html#school">
                    <div>
                      <div class="text-center">
                        <img src="{{url('images/card-one.svg')}}" alt="" />
                      </div>

                      <a href="how_works.html">
                      <div class="third_step_text">
                        <h1 style="font-family: 'Gluten', cursive">1</h1>

                        <div class="third_step_des">
                          <h3 style="color: #FFF;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Gluten;
                          font-size: 24px;
                          font-style: normal;
                          font-weight: 600;
                          line-height: 28px; /* 116.667% */">Create & Achieve</h3>

                          <p style="color: #9fa4bb;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Poppins;
                          font-size: 18px;
                          text-align: left;
                          font-style: normal;
                          font-weight: 400;
                          line-height: normal;">
                           Your students create ‘Keepers’ that they want to preserve & share
                          </p>
                        </div>
                      </div></a>
                    </div>
                  </a>
                  </div>

                  <div class="third_con_step">
                    <a href="how_works.html#school">
                    <div>
                      <div class="text-center">
                        <img src="{{url('images/card-two.svg')}}" alt="" />
                      </div>
                      <a href="how_works.html#school">
                      <div class="third_step_text">
                        <h1 style="font-family: 'Gluten', cursive">2</h1>

                        <div class="third_step_des">
                          <h3 style="color: #FFF;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Gluten;
                          font-size: 24px;
                          font-style: normal;
                          font-weight: 600;
                          line-height: 28px; /* 116.667% */">Receive & Preserve</h3>

                          <p style="color: #9fa4bb;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Poppins;
                          font-size: 18px;
                          text-align: left;
                          font-style: normal;
                          font-weight: 400;
                          line-height: normal;">
                          Receive trackable Keeper-Boxes. Scan & photograph originals
                          </p>
                        </div>
                      </div></a>
                    </div>
                  </a>
                  </div>

                  <div class="third_con_step">
                    <a href="how_works.html#school">
                    <div>
                      <div class="text-center">
                        <img src="{{url('images/card-three.svg')}}" alt="" />

                      </div>
                      <a href="how_works.html#school">
                      <div class="third_step_text">
                        <h1 style="font-family: 'Gluten', cursive">3</h1>

                        <div class="third_step_des">
                          <h3 style="color: #FFF;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Gluten;
                          font-size: 24px;
                          font-style: normal;
                          font-weight: 600;
                          line-height: 28px; /* 116.667% */">Upload & Return</h3>

                          <p style="color: #9fa4bb;
                          font-feature-settings: 'clig' off, 'liga' off;
                          font-family: Poppins;
                          font-size: 18px;
                          text-align: left;
                          font-style: normal;
                          font-weight: 400;
                          line-height: normal;">
                         Upload Hi-Res images to Keeper-Cloud. Return Keeper-Boxes to students
                          </p>
                        </div>
                      </div></a>
                    </div></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!------------ fourth_container start here -------------->
      <div class="row justify-space-between py-0">
        <h2 class="text-center mt-4" style="font-family: 'Gluten', cursive">
         Features & Benefits

        </h2>
        <div class="row justify-space-between py-0">
          <div class="col-lg-3 col-md-3 col-sm-6 col-12 mx-auto">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">

                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="students-tab"
                    data-bs-toggle="pill"
                    href="#studentss"
                    role="tab"
                    aria-controls="studentss"
                    aria-selected="false"
                    >For Schools</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link "
                    id="parents-tab"
                    data-bs-toggle="pill"
                    href="#parentss"
                    role="tab"
                    aria-controls="parentss"
                    aria-selected="true"
                    >For Parents</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div
              class="tab-pane fade "
              id="parentss"
              role="tabpanel"
              aria-labelledby="parents-tab"
            >
              <div class="fourth_container">
                <div class="forth_left_side">
                  <h2 style="font-family: 'Gluten', cursive">
                   Keeper for parents is the easiest way to preserve
                  childhood memories
                  </h2>


                  <p style="color: #6C6C6D;
                  font-feature-settings: 'clig' off, 'liga' off;
                  font-family: Poppins;
                  font-size: 16px;
                  font-style: normal;
                  text-align: justify;
                  font-weight: 400;
                  line-height: 24px; /* 150% */">
                 Keeper-Box is the easiest way to digitally preserve your child's artwork & achievements. Simply fill the box with your child's originals & send it back to school for processing. You'll receive digital images in your Keeper-App, ready to share with family & friends. Originals are returned to you.
                  </p>
                  <a href="for_parents.html" style="color: #3B4C98;
                  font-feature-settings: 'clig' off, 'liga' off;
                  font-family: Poppins;
                  font-size: 16px;
                  text-align: justify;
                  font-style: normal;
                  font-weight: 500;
                  line-height: 24px; /* 150% */">Learn More</a>
                </div>

                <div class="forth_right_side">
                  <img src="{{url('images/img-parent-both.png')}}" alt="" />
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade show active"
              id="studentss"
              role="tabpanel"
              aria-labelledby="students-tab"
            >
              <div class="fourth_container">
                <div class="forth_left_side">
                  <h2 style="font-family: 'Gluten', cursive">
                    Keeper for schools is the fastest growing fund-raising activity
                  </h2>

                  <p style="color: #6C6C6D;
                  font-feature-settings: 'clig' off, 'liga' off;
                  font-family: Poppins;
                  font-size: 16px;
                  font-style: normal;
                  text-align: justify;
                  font-weight: 400;
                  line-height: 24px; /* 150% */">
Becoming a Keeper-Provider is a great way increase fund-raising revenue while providing parents & students with a service they truly enjoy.                  <a href="for_school.html" style="color: #3B4C98;
                  font-feature-settings: 'clig' off, 'liga' off;
                  font-family: Poppins;
                  font-size: 16px;
                  text-align: justify;
                  font-style: normal;
                  font-weight: 500;
                  line-height: 24px; /* 150% */">Learn More</a>
                </div>

                <div class="forth_right_side">
                  <img src="{{url('images/two-images.png')}}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!------------ fifth_container start here -------------->

    <div class="fifth_container">
      <img src="{{url('images/comment-section-bg.png')}}" alt="" class="page_img_010" />

      <img
        src="{{url('images/responsive-comment-section-bg.png')}}"
        alt=""
        class="page_img_014"
      />

      <h2 style="font-family: 'Gluten', cursive">Testimonial</h2>

      <b style="font-family: 'Gluten', cursive">See All Reviews</b>

      <section class="position-relative overflow-hidden py-2">
        <div
          id="carouselExampleIndicators"
          class="carousel slide pt-0 pb-11"
          data-bs-ride="carousel"
        >
          <ol class="carousel-indicators pb-3">
            <a href="javascript:;">
              <img
                src="{{url('images/avatar/student.png')}}"
                alt="..."
                class="avatar avatar-sm avatar-scale-up border-0 active"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
              />
              <span class="text-white mx-2">&#124;</span>
            </a>

            <a href="javascript:;">
              <img
                src="{{url('images/avatar/teacher.png')}}"
                alt="..."
                class="avatar avatar-sm avatar-scale-up border-0"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
              />
              <span class="text-white mx-2">&#124;</span>
            </a>

            <a href="javascript:;">
              <img
                src="{{url('images/avatar/parents.png')}}"
                alt="..."
                class="avatar avatar-sm avatar-scale-up border-0"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
              />
            </a>
            <a href="javascript:;">
              <img
                src="{{url('images/avatar/student1.png')}}"
                alt="..."
                class="avatar avatar-sm avatar-scale-up border-0"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="3"
              />
            </a>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="fifth_con_content justify-content-center">

                <div class="fifth_con_left">

                  <p
                    style="padding: 30px; font-family: 'Gluten', cursive"
                    class="tes_txt_left"
                  >
                    “I like seeing my art on Mommy's phone i feel famous
                    ”
                  </p>

                  <div class="testimonial_review">
                    <img
                      src="{{url('images/avatar/student.png')}}"
                      alt=""
                      class="page_img_011 rounded-pill"
                    />

                    <div class="testimonial_txt">
                      <b style="font-family: 'Gluten', cursive"
                        >Alexandria Caporale</b
                      >

                      <p style="font-family: 'Gluten', cursive">Student</p>

                      <div class="testimonal_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="fifth_con_content justify-content-center">
                <div class="fifth_con_left">
                  <p
                    style="font-family: 'Gluten', cursive"
                    class="tes_txt_left"
                  >
                    “KeeperBox is now our School's Largest & most popular fund raising-stream”
                  </p>

                  <div class="testimonial_review">
                    <img
                      src="{{url('images/avatar/teacher.png')}}"
                      alt=""
                      class="rounded-pill page_img_011"
                    />

                    <div class="testimonial_txt">
                      <b style="font-family: 'Gluten', cursive"
                        >Aurthur Gutman</b
                      >

                      <p style="font-family: 'Gluten', cursive">Teacher</p>

                      <div class="testimonal_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="fifth_con_content justify-content-center">
                <div class="fifth_con_left">
                  <p
                    style="font-family: 'Gluten', cursive"
                    class="tes_txt_left"
                  >
                    “KeeperBox is so worth-it. Now i know I've got a forever-copy
                    of everything he's done”
                  </p>

                  <div class="testimonial_review">
                    <img
                      src="{{url('images/avatar/parents.png')}}"
                      alt=""
                      class="rounded-pill page_img_011"
                    />

                    <div class="testimonial_txt">
                      <b style="font-family: 'Gluten', cursive"
                        >Claire Roetzel</b
                      >

                      <p style="font-family: 'Gluten', cursive">Parent</p>

                      <div class="testimonal_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="fifth_con_content justify-content-center">
                <div class="fifth_con_left">
                  <p
                    style="padding: 30px; font-family: 'Gluten', cursive;"
                    class="tes_txt_left"
                  >
                    “We can send my paintings to Grandma & Grandpa”
                  </p>

                  <div class="testimonial_review">
                    <img
                      src="{{url('images/avatar/student1.png')}}"
                      alt=""
                      class="rounded-pill page_img_011"
                    />

                    <div class="testimonial_txt">
                      <b style="font-family: 'Gluten', cursive"
                        >Marcelo Tabori</b
                      >

                      <p style="font-family: 'Gluten', cursive">Student</p>

                      <div class="testimonal_stars">
                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>

                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!------------ footer start here -------------->



    <!--   Core JS Files   -->

    <!--   Core JS Files   -->

  </body>
</html>
@endsection
