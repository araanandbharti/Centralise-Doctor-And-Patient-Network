<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="body1">

        <div class="logo">
            <a href="/heart/main_page.php">
                <img src="image/logo2.jpg" alt="logo " class="logo_img">
            </a>
        </div>
        <div class="login">

            <form action="post_signup.php" method="post">
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    <input type="text" id="user_name" name="user_name" placeholder="Full Name" class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">PASSWORD : </label> -->
                    <input type="number" id="user_no" name="user_no" placeholder="Mobile Number" class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    <input type="email" id="user_email" name="user_email" placeholder="Email Id" class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    <input type="text" id="user_address" name="user_address" placeholder="Address" class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    <input type="password" id="user_password" name="user_password" placeholder="Password"
                        class="login1">
                </div>

                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    <input type="password" id="user_password1" name="user_password1" placeholder="Re-enter Password"
                        class="login1">
                </div>
                <?php
                    // if(isset($_POST['submit']))
                    // {
                    // $value1=$_POST['user_password'];
                    // $value2=$_POST['user_password1'];
                    // if($value1!= $value2) 
                    // {
                    // echo "<h2></h2>Password didn't match </h2>";
                    // }
                    // else
                    // {
                    //     header("Location: post_signup.php");
                    // }}
                ?>
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    <input type="text" id="user_id" name="user_id" placeholder="Your Id" class="login1">
                </div>

                <div class="submit">
                    <input type="submit" name="submit" value="Confirm" class="button">

                </div>
            </form>


        </div>
        
    </div>

</body>
</html>