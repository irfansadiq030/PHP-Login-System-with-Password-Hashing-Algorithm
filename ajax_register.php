<?php include("db_connection.php"); ?>
<?php include("sessions.php"); ?>
<?php

// if (isset($_POST['submit'])) 
// {
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
       echo "Email already exists";
    } 
    else 
    {
        if ($user_password === $confirm_password) {
            $insert_query = "INSERT INTO users(user_name,email,mobile,password,confirm_password) 
            Values('$user_name','$user_email','$user_mobile','$password_hashed','$confirm_password_hashed')";
            $i_query = mysqli_query($conn, $insert_query);
            if ($i_query) 
            { 
               echo "Registered Successfully";
            } 
            else 
            { 
                echo "Something is wrong";
            }
        } 
        else {
            echo "Passwords are not matching..";
        }
    }
// }

?>