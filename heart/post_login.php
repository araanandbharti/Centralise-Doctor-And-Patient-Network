<?php
            
            $conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");

            $sql = "SELECT * FROM patient WHERE pat_user_id = '$_POST[userid]' AND pat_code = '$_POST[password]' ";
            $result = $conn->query($sql) or die($conn->error);
            echo "$_POST[userid] $_POST[password]";
            while($row=$result -> fetch_assoc())
            {
            echo " $row ";
            }
            $row1=mysqli_num_rows($result);
            if(mysqli_num_rows($result) > 0)
            {
                header("Location: main.php");
            }
            else{
                header("Location: login.php");
               
            }
?>