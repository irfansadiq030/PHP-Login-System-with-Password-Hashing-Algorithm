<?php include("header.php"); ?>
<?php include("db_connection.php"); ?>
<div class="nk-block nk-block-middle nk-auth-body">
    <div class="brand-logo pb-5">
        <a href="html/index.html" class="logo-link">
            <img class="logo-light logo-img logo-img-lg" src="PHP-LOGIN-SYSTEM/images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
            <img class="logo-dark logo-img logo-img-lg" src="PHP-LOGIN-SYSTEM/images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
        </a>
    </div>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Sign-In</h5>
            <div class="nk-block-des">
                <p>Access the DashLite panel using your email and passcode.</p>
            </div>
            <?php
            if (isset($_POST['submit'])) 
            {
                $user_email = $_POST['email'];
                $password = $_POST['password'];

                $sql = "Select * from users where email='$user_email'";
                $email_check = mysqli_query($conn, $sql);
                if (mysqli_num_rows($email_check)) 
                {
                    $user_data = mysqli_fetch_assoc($email_check);
                    $hashed_password = $user_data['password'];
                    $password_match = password_verify($password, $hashed_password);
                    if ($password_match) 
                    {
                        // header("Location:google.com");
                        echo "Logged in..";
                        echo $_SESSION['user_name'] =  $user_data['user_name'];
                    } else 
                    {
                        echo "passwords are not matching";
                    }
                } else 
                {
                    echo "Email Invalid";
                }
            }
            ?>
        </div>
    </div><!-- .nk-block-head -->
    <form action="" method="POST" class="form-validate is-alter" autocomplete="off">
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="email-address">Email or Username</label>
                <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
            </div>
            <div class="form-control-wrap">
                <input name="email" autocomplete="off" type="text" class="form-control form-control-lg" required id="email-address" placeholder="Enter your email address or username">
            </div>
        </div><!-- .form-group -->
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="password">Password</label>
                <a class="link link-primary link-sm" tabindex="-1" href="html/pages/auths/auth-reset.html">Forgot Code?</a>
            </div>
            <div class="form-control-wrap">
                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <input name="password" autocomplete="new-password" type="password" class="form-control form-control-lg" required id="password" placeholder="Enter your passcode">
            </div>
        </div><!-- .form-group -->
        <div class="form-group">
            <button name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
        </div>
    </form><!-- form -->
    <div class="form-note-s2 pt-4"> New on our platform? <a href="html/pages/auths/auth-register.html">Create an account</a>
    </div>
    <div class="text-center pt-4 pb-3">
        <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
    </div>
    <ul class="nav justify-center gx-4">
        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
    </ul>
    <div class="text-center mt-5">
        <span class="fw-500">I don't have an account? <a href="#">Try 15 days free</a></span>
    </div>
</div><!-- .nk-block -->
<?php include("footer.php"); ?>