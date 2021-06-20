<?php
            $conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");
            //echo "$_POST[user_id]";
               
            if($_POST['user_password']!=$_POST['user_password1'] )
            {
                echo " <h1>Password didnot match </h1> ";
            }
            else{

            $sql = "SELECT * FROM patient WHERE pat_user_id = '$_POST[user_id]' ";
            $result = $conn->query($sql);
            $row=mysqli_num_rows($result);
            if($row==0)
                {
                    $sql_insert="INSERT INTO patient(pat_name,pat_user_id,pat_code,pat_mob,pat_email,pat_address)
                    VALUES('$_POST[user_name]','$_POST[user_id]','$_POST[user_password]','$_POST[user_no]',
                    '$_POST[user_email]','$_POST[user_address]')";

                    $conn->query($sql_insert);
                    header("Location: login.php");
                }
            else
                {
                echo "<h1>User Id already exist <br> Try another User Id</h1>";
                }

            }

?>
