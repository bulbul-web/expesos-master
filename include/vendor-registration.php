<section class="page-header">
    <div class="container">
        <div class="page-linker border-0">
            <ul class="p-0">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li><a href="#" class="active">Registration</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- page header ends  -->

<!-- bayer area start -->
<section class="bayer-area">
    <div class="container">
        <div class="section-wrapper">
            <div class="section-header">
                <h6 class="pb-0">Register An Account</h6>
            </div>
            <div class="form-content">
                <form id="form" method="post" action="#">
                    
                    
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">User Name</p>
                        <input type="text" name="username" class="form-control pl-2" placeholder="User name" id="username" required onchange="checkUserName(this.value);" />
                        <span id="errormessage" style="color: red;  font-size: 20px;"></span>
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">User Email</p>
                        <input type="email" id="email" name="email" class="form-control pl-2" placeholder="Email" required onchange="checkEmail(this.value);" />
                        <span id="errormessageemail" style="color: red;  font-size: 20px;"></span>
                        <span id="sucssemailmsg" style="color: green;  font-size: 20px;"></span>
                    </div>
                    <div class="input-btn d-sm-flex">
                        <div class="input-group mb-4 w-50 mr-2">
                            <input type="text" name="code" id="code" class="form-control" maxlength="6" minlength="2" placeholder="Verification" onkeyup="verficationCode(this.value);" onchange="twoStepMailCheck(this.value)" />
                            <span id="codeerrrmesg" style="color: red;  font-size: 20px;"></span>

                        </div>
                       <div class="input-btn mb-4">
                            <button type="submit" class="btn w-100 rounded-0"><span>Re-send Code</span></button>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Frist Name</p>
                        <input type="text" name="f_name" class="form-control pl-2" placeholder="Frist name" />
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Last Name</p>
                        <input type="text" name="l_name" class="form-control pl-2" placeholder="Last name" />
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Store name</p>
                        <input type="text" required name="company" id="company" class="form-control pl-2" placeholder="Store Name" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" />
                        <input type="hidden" name="company_slug" id="slug">
                        <span id="cerrmesg" style="color: red;  font-size: 20px;"></span>

                    </div>

                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Address One</p>
                        <input type="text" name="address1" class="form-control pl-2" placeholder="Address1" />
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Address Two</p>
                        <input type="text" name="address2" class="form-control pl-2" placeholder="Address2" />
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Country</p>
                        <input type="text" name="country" class="form-control pl-2" placeholder="Country" />
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">City / twon</p>
                        <input type="text" name="city_town" class="form-control pl-2" placeholder="City /  twon" />
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">State/county</p>
                        <input type="text" name="state_country" class="form-control pl-2" placeholder="Country" />
                    </div>

                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Postalcode / zip</p>
                        <input type="text" name="postCodeZip" class="form-control pl-2" placeholder="Postalcode" />
                    </div>

                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Store / Phone</p>
                        <input type="text" name="storePhone" class="form-control pl-2" placeholder="Store / Phone" onchange="checkMobile(this.value);" />
                        <span id="errormessagemobile" style="color: red;  font-size: 20px;"></span>
                    </div>
                    <div class="input-group mb-4">
                        <p class="m-0 small mb-1">Password</p>
                        <input type="password" name="password" id="password" class="form-control pl-2" placeholder="Password" />
                    </div>
                    <div class="input-group">
                        <p class="m-0 small mb-1">Retype - Password</p>
                        <input type="password" class="form-control pl-2" placeholder="New password" required onkeyup="passwordMateching(this.value)" />
                        <span id="pass_msg" style="color: red; font-size: 20px;"></span>
                    </div>
                    <div class="input-btn mt-4">
                        <button type="submit" id="submitbtn" class="btn rounded-0"><span>Registration</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- bayer area ends -->

<script>
    function passwordMateching(confirm_password) {
        console.log(confirm_password);
        var password = $("#password").val();

        if (password !== confirm_password) {
            $("#submitbtn").hide();
            $("#pass_msg").text("Password are not mateching.");
        } else {
            $("#submitbtn").show();
            $("#pass_msg").text("");
        }


    }

    function convertToSlug(str) {
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
        str = str.replace(/^\s+|\s+$/gm, '');
        str = str.replace(/\s+/g, '-');
        company(str);
        $("#slug").val(str);
    }


    function verficationCode(code) {
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: "user/checkCode/" + code,
            data: {
                "code": code,
                "_token": _token,
            },
            success: function(result) {
                if (result == 'yes') {
                    $("#submitbtn").hide();
                    $("#codeerrrmesg").text("Sorry this code no longer valid.");
                }
                if (result == 'no') {
                    $("#codeerrrmesg").text("");
                    $("#submitbtn").show();
                }

            }
        });
    }

    function company(str) {
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: "user/checkSellerCompany/" + str,
            data: {
                "str": str,
                "_token": _token,
            },
            success: function(result) {

                if (result == 'yes') {
                    $("#submitbtn").hide();
                    $("#company").focus();
                    $("#cerrmesg").text("Sorry already company exits.");
                    $("#company").focus();
                }
                if (result == 'no') {
                    $("#cerrmesg").text("");
                    $("#submitbtn").show();
                }

            }
        });
    }

    function checkUserName(username) {
        // console.log(username);
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: "user/checkSelleruserName/" + username,
            data: {
                "username": username,
                "_token": _token,
            },
            success: function(result) {

                if (result == 'yes') {
                    $("#submitbtn").hide();
                    $("#errormessage").text("Sorry already username exits.");

                    $("#customer_username").focus();
                }
                if (result == 'no') {
                    $("#errormessage").text("");
                    $("#submitbtn").show();
                }

            }
        });
    }

    function checkEmail(email) {
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: "user/checkSelleremailId/",
            data: {
                "email": email,
                "_token": _token,
            },
            success: function(result) {
                if (result == 'yes') {
                    $("#submitbtn").hide();
                    $("#errormessageemail").text("Sorry already email Id exits.");
                    $("#email").focus();
                }
                if (result == 'no') {
                    $("#sucssemailmsg").text("Verification code sent to your email Inbox/Spam:" + email);
                    $("#errormessageemail").text("");
                    $("#submitbtn").show();
                }
            }
        });
    }


    function twoStepMailCheck(code) {
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: "user/twoStepMailCheck/" + code,
            data: {
                "code": code,
                "_token": _token,
            },
            success: function(result) {
                if (result == 'no') {
                    $("#codeerrrmesg").text("Sorry this code is not applicable");
                    $("#errormessageemail").text("");
                    $("#submitbtn").show();
                }
            }
        });

    }

    function checkMobile(mobile) {
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: "user/checkSellerMobileNumber/" + mobile,
            data: {
                "email": mobile,
                "_token": _token,
            },
            success: function(result) {

                if (result == 'yes') {
                    $("#submitbtn").hide();
                    $("#errormessagemobile").text("Sorry already mobile number exits.");
                    $("#mobile").focus();
                }
                if (result == 'no') {
                    $("#errormessagemobile").text("");
                    $("#submitbtn").show();
                }

            }
        });

    }
</script>