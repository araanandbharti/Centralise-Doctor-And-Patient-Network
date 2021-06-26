<?php
            
            $conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");

            $sql = "SELECT * FROM patient WHERE pat_user_id = '$_GET[userid]' AND pat_code = '$_GET[password]' ";
            $result = $conn->query($sql) or die($conn->error);
            echo "$_GET[userid]  $_GET[password]";
            // while($row=$result -> fetch_assoc())
            // {
            // echo " $row ";
            // }
            $userid = "$_GET[userid]";
            $row1=mysqli_num_rows($result);
            if(mysqli_num_rows($result) > 0)
            {
                //header("Location: main.php");
                echo " Correct password and userid";
                header("Location: main.php?user_id=$userid");
            }
            else{
                
                echo " Incorrect password and userid"; 
               
            }
?>