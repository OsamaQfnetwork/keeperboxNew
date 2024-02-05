<footer
style="padding: 100px 13% 0px 13%; background: url(images/fott.svg)"
class="mt-5"
>
<div class="footer_content">
  <div class="footer_left_side">
    <img src="{{url('images/footer-logo.svg')}}" alt="" />

    <p
      style="
        color: #212c3c;
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Gluten;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: 28px; /* 116.667% */
      "
    >
      Don’t want to miss the latest collection
      <br /><span>Keeper App</span>
    </p>

    <div class="app_options">
      <img style="height: 40px" src="images/download apple.svg" alt="" />
      <img style="height: 40px" src="images/download-store.svg" alt="" />
    </div>
  </div>
  <div class="footer_right_side">
    <div class="f_r_left">
      <div class="f_r_content">
        <h3 style="font-family: 'Gluten', cursive">Company</h3>

        <ul>
          <li><a href="#">About Us</a></li>
        </ul>
      </div>
    </div>

    <div class="f_r_right">
      <div class="f_r_content">
        <h3 style="font-family: 'Gluten', cursive">Help & Support</h3>

        <ul>
          <li><a href="#">Contact Us</a></li>

          <li><a href="#">FAQ</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<p class="copyright">
  All rights reserved. Copyright © 2024 Soft UI Design System by
  <a href="#">Keeper Box.</a>
</p>
</footer>


<script src="slider.js"></script>
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
