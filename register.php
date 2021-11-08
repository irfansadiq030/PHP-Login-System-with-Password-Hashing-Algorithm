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
        <!-- Display Toaster Messages Function -->
        <?php
        function flash($name,$txt)
        {
            if (isset($_SESSION['$name'])) 
            {
                
            }
        }
        ?>
        <!-- End Display Toaster Messages Function -->
        <!-- *S PHP Registration Proccess -->

        <?php

        if (isset($_POST['submit'])) 
        {
            $user_name = mysqli_real_escape_string($conn, $_POST['name']);
            $user_email = mysqli_real_escape_string($conn, $_POST['email']);
            $user_mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
            $user_password = mysqli_real_escape_string($conn, $_POST['password']);
            $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

            // Hashing Password
            $password_hashed = password_hash($user_password, PASSWORD_BCRYPT);
            $confirm_password_hashed = password_hash($confirm_password, PASSWORD_BCRYPT);

            // Validation of Email(if already exists same email) and Password (if both passwords mathc or not) 
            $query = "SELECT * FROM users where email='$user_email'";
            $email_check = mysqli_query($conn, $query);
            if (mysqli_num_rows($email_check) > 0) 
            {
                echo "Email Already Exists";
            } else 
            {
                if ($user_password === $confirm_password) 
                {
                    $insert_query = "INSERT INTO users(user_name,email,mobile,password,confirm_password) 
                    Values('$user_name','$user_email','$user_mobile','$password_hashed','$confirm_password_hashed')";
                    $i_query = mysqli_query($conn, $insert_query);
                    if ($i_query) 
                    {
                        header("Location:login.php");
                    } 
                    else 
                    { 
                        echo "Something is wrong..";
                    }
                } 
                else 
                {
                    echo "Passwords are not matching";
                }
            }
        }

        ?>

        <!-- *E PHP Registration Proccess -->
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Register</h5>
            <div class="nk-block-des">
                <p>Create New Dashlite Account</p>
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
<!-- <script>
    $("#register_btn").click(function(){
        var name  = $("#name").val()
        var email  = $("#email").val()
        var mobile  = $("#mobile").val()
        var password  = $("#password").val()
        var confirm_password  = $("#password2").val()
        $.ajax({
            url:'PHP-LOGIN-SYSTEM/ajax_register.php',
            type:'POST',
            data:{name:name,email:email,mobile:mobile,password:password,confirm_password:confirm_password},
            success:function(data)
            {
                
            }
        })
    })
</script> -->
<?php include("footer.php") ?>