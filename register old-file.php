<?php include("header.php"); ?>
<?php include("db_connection.php"); ?>
<?php include("sessions.php"); ?>

<div class="nk-block nk-block-middle nk-auth-body">
    <div class="brand-logo pb-5">
        <a href="html/index.html" class="logo-link">
            <img class="logo-light logo-img logo-img-lg" src="PHP-LOGIN-SYSTEM/images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
            <img class="logo-dark logo-img logo-img-lg" src="PHP-LOGIN-SYSTEM/images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
        </a>
    </div>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Register</h5>
            <a class="btn btn-default" onclick="Message.add('Default notification');">Default</a>
        </script>
            <div class="nk-block-des">
                <p id="ttt">Create New Dashlite Account</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <form action="" method="POST">
        <div class="form-group">
            <label class="form-label" for="name">Name</label>
            <div class="form-control-wrap">
                <input name="name" type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <div class="form-control-wrap">
                <input name="email" type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email address">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Phone</label>
            <div class="form-control-wrap">
                <input name="mobile" type="tel" class="form-control form-control-lg" id="mobile" placeholder="Enter Phone">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <div class="form-control-wrap">
                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <input required name="password" type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Confirm Password</label>
            <div class="form-control-wrap">
                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password2">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <input name="confirm_password" type="password" class="form-control form-control-lg" id="password2" placeholder="Confirm your password">
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-control-xs custom-checkbox">
                <input required type="checkbox" class="custom-control-input" id="checkbox">
                <label class="custom-control-label" for="checkbox">I agree to Dashlite <a tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
            </div>
        </div>
        <div class="form-group">
            <button id="register_btn" name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
        </div>
    </form><!-- form -->
    <div class="form-note-s2 pt-4"> Already have an account ? <a href="html/pages/auths/auth-login.html"><strong>Sign in instead</strong></a>
    </div>
    <div class="text-center pt-4 pb-3">
        <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
    </div>
    <ul class="nav justify-center gx-8">
        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
    </ul>
</div><!-- .nk-block -->
<?php include("footer.php") ?>
<script>
    $("#register_btn").click(function(e){
        e.preventDefault();
        var name  = $("#name").val()
        var email  = $("#email").val()
        var mobile  = $("#mobile").val()
        var password  = $("#password").val()
        var confirm_password  = $("#password2").val()
        $.ajax({
            url:'PHP-LOGIN-SYSTEM/ajax_register.php',
            type:'POST',
            dataType:'JSON',
            data:{name:name,email:email,mobile:mobile,password:password,confirm_password:confirm_password},
            success:function(data)
            {
                console.log(data)
            }
        })
    })
</script>
