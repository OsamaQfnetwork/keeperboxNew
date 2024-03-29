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
                    <label for="company" style="font-family: sans-serif;" class="form-label">Organization Name</label>
                    <input name="company" id="company" type="text" class="form-control">
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
              {{--<button  style="width: 100%;
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
              </ul>--}}
                <div class="input-group input-group-outline my-0">
                    <select class="form-control" id="organization_type" name="organization_type">
                    <option value="" selected>Choose...</option>
                    <option value="school">School</option>
                    <option value="organization">Organization</option>
                    <option value="store">Store</option>
                    </select>
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
              line-height: 32px; /* 150% */" class="mb-0 text-lg">What's the location of your organisation</h6>

            </div>
        <div class="multisteps-form__content">
          <div class="row mt-4 px-5">
            <div class="col-md-12">
             <div class="input-group input-group-outline my-0">
                 <label for="location" style="font-family: sans-serif;" class="form-label">Organization Address</label>
                 <input type="text" name="location" id="location" class="form-control">
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
            <div class="col-md-6">
             <div class="input-group input-group-outline my-0">
                 <label for="first_name" style="font-family: sans-serif;" class="form-label">Manager First Name</label>
                 <input type="text" name="first_name" id="first_name" class="form-control">
               </div>
            </div>
              <div class="col-md-6">
             <div class="input-group input-group-outline my-0">
                 <label style="font-family: sans-serif;" for="last_name" class="form-label">Manager Last Name</label>
                 <input type="text" name="last_name" id="last_name" class="form-control">
               </div>
            </div>
            <div class="col-md-12 mt-2">
              <div class="input-group input-group-outline my-0">
                  <label for="email" style="font-family: sans-serif;" class="form-label">Manager Email</label>
                  <input type="email" id="email" name="email" class="form-control">
                </div>
             </div>
             <div class="col-md-12 mt-2">
              <div class="input-group input-group-outline my-0">
                  <label for="password" style="font-family: sans-serif;" class="form-label">Select a password</label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>
             </div>

          </div>

        <div class="button-row d-flex mt-4">
        <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white mb-0 js-btn-prev" type="button" title="Prev">Back</button>
        <button style="background-color: #1f2b65;font-family: sans-serif;" class="btn text-white ms-auto mb-0 " onclick="submitForm()" type="button" title="Submit">Submit</button>
        </div>
        </div>
          </div>

          </form>
          </div>
          </div>
          </div>
          </div>

        </div>
      <!-- -------- END HEADER 7 w/ text and video ------- -->
      <div class="mt-5">
        <!-- Section with four info areas left & one card right with image and waves -->
      </div>


<script type="text/javascript">
    function  submitForm(){
        console.log("clicked");
        var company = $("#company").val();
        var organization_type = $("#organization_type").val();
        var location = $("#location").val();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var data = {
            company: company,
            organization_type: organization_type,
            location: location,
            first_name: first_name,
            last_name: last_name,
            email: email,
            password: password
        }
        console.log(data);
       /* if(company == "" || organization_type == "" || location == "" || first_name == "" || last_name == "" || email == "" || password == ""){
            Swal.fire({
                title: 'Error!',
                text: 'All fields are required!',
                icon: 'error',
                confirmButtonText: 'Close'
            })
            return;
        }
        if(!email.includes("@") || !email.includes(".")){
            Swal.fire({
                title: 'Error!',
                text: 'Invalid email address!',
                icon: 'error',
                confirmButtonText: 'Close'
            })
            return;
        }*/
        $.ajax({
            url: "https://provider.keeperbox.co/api/register",
            type: "POST",
            headers: {
                "Accept": "application/json"
            },
            data: data,
            success: function(response){
                if(response.errors){
                    $.each(response.errors, function(key, value){
                        Swal.fire({
                            title: 'Error!',
                            text: value,
                            icon: 'error',
                            confirmButtonText: 'Close'
                        })
                    })
                }

                if(response.errors_company){
                    Swal.fire({
                        title: 'Error!',
                        text: response.errors_company,
                        icon: 'error',
                        confirmButtonText: 'Close'
                    })
                }
                if(response.success){
                    Swal.fire({
                        title: 'Success!',
                        text: 'User created successfully!',
                        icon: 'success',
                        confirmButtonText: 'Close'
                    })
                    console.log(response.redirect_url);
                    window.open(response.redirect_url, '_blank');
                }
            }
        })
    }
</script>





@endsection
