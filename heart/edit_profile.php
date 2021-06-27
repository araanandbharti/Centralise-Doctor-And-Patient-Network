<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail-Update</title>
</head>
<body>
    

<!-- ----------------------------------------------------------------------------- -->
<?php
    $userid='anand@123'  ;      
    $conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");
    $sql = "SELECT * FROM patient WHERE pat_user_id = '$userid' ";
    $result = $conn->query($sql) or die($conn->error);
    // echo "$_GET[userid]";
    $row = $result -> fetch_assoc();
    $patname=$row['pat_name'];
    $patcode=$row['pat_code'];
    $patmob=$row['pat_mob'];
    $patemail=$row['pat_email'];
    $pataddress=$row['pat_address'];
    $patuserid=$row['pat_user_id'];
    // echo "$patname";
            
?>




<!-- ----------------------------------------------------------------------------- -->
    <div class="body1">

        <div class="logo">
            <a href="/heart/main_page.php">
                <img src="image/logo2.jpg" alt="logo " class="logo_img">
            </a>
        </div>
        <div class="login">

            <form action="" method="POST" >
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    Full Name:<input type="text" id="user_name" name="user_name" placeholder="<?php echo"$patname" ?>" class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">PASSWORD : </label> -->
                    Mobile No:<input type="number" id="user_no" name="user_no" placeholder="<?php echo"$patmob" ?>" class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    Email Id:<input type="email" id="user_email" name="user_email" placeholder="<?php echo"$patemail" ?>" class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    Address:<input type="text" id="user_address" name="user_address" placeholder="<?php echo"$pataddress" ?>" class="login1">
                </div>

                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    Old Password:<input type="password" id="user_password" name="user_password" placeholder="<?php echo"$patcode" ?>"
                        class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    New Password:<input type="password" id="user_password1" name="user_password1" placeholder="Enter new Password"
                        class="login1">
                </div>
                <div class="login_content">
                    <!-- <label for="userid">USER ID : </label> -->
                    Re-enter New Password:<input type="password" id="user_password1_re" name="user_password1_re" placeholder="Re-enter new Password"
                        class="login1">
                </div>
               

                <div class="submit">
                    <!-- <input type="submit" name="submit" value="Confirm" class="button"> -->
                    <button type="submit" name="submit">submit</button>

                </div>
            </form>


        </div>
        
    </div>

    <?php
        if(isset($_POST['submit']))
        {
            if($_POST['user_password1'] == $_POST['user_password1_re'])
            {

                if(isset($_POST['user_name']))
                {
                    $patname = $_POST['user_name'];
                }
                if(isset($_POST['user_email']))
                {
                    $patemail = $_POST['user_email'];
                }
                if(isset($_POST['user_address']))
                {
                    $pataddress = $_POST['user_address'];
                }
                if(isset($_POST['user_password1']))
                {
                    $patcode = $_POST['user_password1'];
                }if(isset($_POST['user_no']))
                {
                    $patmob = $_POST['user_no'];
                }

                $sql1 = "UPDATE patient SET pat_name = '$patname', pat_email= '$patemail', pat_mob = '$patmob',
                        pat_address = '$pataddress', pat_code = '$patcode' WHERE pat_user_id = '$userid' ";

                $conn->query($sql1) or die($conn->error);


                echo "Update successful.";

            }
            else
            {
                echo "Password did not match.";
            }
        
        }


    ?>

</body>
</html>