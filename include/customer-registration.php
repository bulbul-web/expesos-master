<!-- main content area start -->
<div class="login-area">
    <div class="container">
        <div class="section-wrapper">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card mb-0 pt-3 pb-2">
                        <div class="card-header p-0 pl-4">
                            <div class="card-title">
                                <h4 class="mb-2 m-0">Register</h4>
                            </div>
                        </div>
                        <p class="px-2 pl-4">Register An Account.</p>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                <form id="upload_form" method="post" action="{{url('/save-cus-registration')}}">
                                    
                                    <div class="input-group mb-4" style="display:none;">
                                        <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Name">
                                        <i class="fa fa-user"></i>
                                        <label for="inputName">Name</label>
                                    </div>
                                    <div class="input-group mb-4">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required onchange="checkEmail(this.value);">
                                        <i class="fa fa-user"></i>
                                        <label for="inputEmail">Email</label>
                                        <div id="errormessageemail" style="text-aling: center; font-size: 18px; color: red;"></div>
                                    </div>

                                    <div class="input-group mb-4" style="display:none;">
                                        <input type="text" id="customer_username" name="customer_username" class="form-control" placeholder="Username" onchange="checkUserName(this.value);">
                                        <i class="fa fa-user"></i>
                                        <label for="inputEmail">Username</label>
                                        <div id="errormessage" style="text-aling: center; font-size: 18px; color: red;"></div>
                                    </div>
                                    <div class="input-group mb-4" style="display:none;">
                                        <input type="password" id="password" name="customer_password" class="form-control" placeholder="Password">
                                        <i class="fa fa-lock"></i>
                                        <i toggle="#password" class="view_pass fa fa-fw fa-eye toggle-password field-icon"></i>
                                        <label for="inputPassword">Password</label>
                                    </div>


                                    <div class="input-btn">
                                        <div class="input-group ml-1 text-left">
                                            <p>A password will be sent to your email address.</p>
                                            <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="{{ url('/privacy-and-policy') }}" class="text-info font-weight-bold">privacy policy</a>.</p>
                                        </div>
                                        <div class="input-btn">
                                            <button type="submit" class="btn mb-3"><i class="fa fa-user-plus mr-1 text-white"></i><span>Register</span></button>
                                                <p><a href="{{ url('/seller-registration') }}">Become a vendor</a></p>
                                            <button type="button" class="btn btn-facebook mb-3"><span class="mr-2"> <a href="https://xpesos.com/Social-Login/auth/redirect/facebook"><i class="fa fa-facebook-official"></i></span><span>Login with Facebook</span></a></button>
                                            <button type="button" class="btn btn-google"><span class="mr-2"><a href="https://xpesos.com/Social-Login/auth/google"> <i class="fa fa-google"></i></span><span>Login with Google</span></a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="creat-xpesos style-one">
                        <h4>Create your xpesos account</h4>
                        <p>Create your xpesos customer account in just a few clicks! You can register either using your e-mail address or through your Facebook account.</p>
                        <img src="{{ url('admin/'.$setting->photo) }}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content area ends  -->
<script src="{{url('fronted/plugins/jquery-1.12.4.min.js')}}"></script>
<script>
    function checkUserName(username) {
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: "user/checkuserName/" + username,
            data: {
                "username": username,
                "_token": _token,
            },
            success: function(result) {

                if (result == 'yes') {
                    $("#continuebtn").hide();
                    $("#errormessage").text("Sorry already username exits. Please try with a different username");
                    $("#customer_username").focus();
                }
                if (result == 'no') {
                    $("#errormessage").text("");
                    $("#continuebtn").show();
                }

            }
        });

    }

    function checkEmail(email) {
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: "user/checkemailId/" + email,
            data: {
                "email": email,
                "_token": _token,
            },
            success: function(result) {

                if (result == 'yes') {
                    $("#continuebtn").hide();
                    $("#errormessageemail").text("Sorry already email Id exits.");
                    $("#email").focus();
                }
                if (result == 'no') {
                    $("#errormessageemail").text("");
                    $("#continuebtn").show();
                }

            }
        });
    }

    function checkMobile(mobile) {
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: "user/checkMobileNumber/" + mobile,
            data: {
                "email": mobile,
                "_token": _token,
            },
            success: function(result) {

                if (result == 'yes') {
                    $("#continuebtn").hide();
                    $("#errormessagemobile").text("Sorry already mobile number exits.");
                    $("#mobile").focus();
                }
                if (result == 'no') {
                    $("#errormessagemobile").text("");
                    $("#continuebtn").show();
                }

            }
        });

    }
    $(".toggle-password").on('click', function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>