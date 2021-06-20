<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log In</title>
</head>
<!-- --------------------------------------------------------------------- -->
<!-- 
//    $conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");

//    $sql = "SELECT * FROM studentclass";
//    $result = mysqli_query($conn,$sql) or die("Query unsuccessful");
//   while($row=mysqli_fetch_assoc($result)){ -->


<!-- --------------------------------------------------------------------------- -->
<body>
    <div class="body1">

        <div class="logo">
            <a href="/heart/main_page.php">
            <img src="image/logo2.jpg" alt="logo " class="logo_img">
            </a>
        </div>
        <div class="login">
            
            <form action="post_login.php" method="post">
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    <input type="text" id="userid" name="userid" placeholder="User Id" class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">PASSWORD : </label> -->
                    <input type="password" id="password" name="password" placeholder="Password" class="login1">
                </div>
                <div class="submit">
                    <input type="submit" value="Log In" class="button">
                    
                </div>
            </form>
                <hr>
                <div class="creat_new_account">
                <a href="signup.php" class="creat">Creat New Account</a>                    
                
                </div>

            
        <!-- 
            // $sql = "SELECT * FROM patient WHERE pat_user_id = $_POST[userid] AND pat_code = $_POST[password]";
            // $result = mysqli_query($conn,$sql);
            // echo "$_POST[userid] $_POST[password] "
            // $row1=mysqli_num_rows($result);
            // if(mysqli_num_rows($result) > 0){
            //     header("Location: main.php");
            // }
            // else{
            //     echo "Wrong Password";
            // }
        ?> -->

        </div>


    </div>

</body>
</html>