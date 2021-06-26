<?php
    $conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");   

    $image = $_FILES['file'];

    $img_name=$image['name'];
    $img_error=$image['error'];
    $img_temp=$image['tmp_name'];
    $img_ext = explode('.',$img_name);
    $img_chk = strtolower(end($img_ext));
    $imgext_stored = array('png','jpg','jpeg');
    if(in_array($img_chk,$imgext_stored))
    {
        $destination_file = 'upload_img/'.$_POST['user_id'].'.jpg';
        move_uploaded_file($img_temp,$destination_file);
    }

            
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
                $sql_insert="INSERT INTO patient(pat_name,pat_user_id,pat_code,pat_mob,pat_email,pat_address,pat_img)
                VALUES('$_POST[user_name]','$_POST[user_id]','$_POST[user_password]','$_POST[user_no]',
                '$_POST[user_email]','$_POST[user_address]','$destination_file')";
                $conn->query($sql_insert);
                echo "<h4>inserted successfuly</h4>";
            }
        else
            {
            echo "<h1>User Id already exist <br> Try another User Id</h1>";
            }
        } 
           
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
    // $conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");   
    // $img_name=$image['name'];
    // $img_error=$image['error'];
    // $img_temp=$image['tmp_name'];
    // $img_ext = explode('.',$img_name);
    // $img_chk = strtolower(end($img_ext));
    // $imgext_stored = array('png','jpg','jpeg');
    // if(in_array($img_chk,$imgext_stored))
    // {
    //     $destination_file = 'upload_img/'.$img_name;
    //     move_uploaded_file($img_temp,$destination_file);
    // }
           
         
            // // if(isset($_POST['file']))
            // // {
            // //     echo "file is set <br>";
            // // }             
            // $image=$_FILES['file'];
            // print_r($image);
               




            // if($_POST['user_password']!=$_POST['user_password1'] )
            // {
            //     echo " <h1>Password didnot match </h1> ";
            // }
            // else{

            // $sql = "SELECT * FROM patient WHERE pat_user_id = '$_POST[user_id]' ";
            // $result = $conn->query($sql);
            // $row=mysqli_num_rows($result);
            // if($row==0)
            //     {
            //         $sql_insert="INSERT INTO patient(pat_name,pat_user_id,pat_code,pat_mob,pat_email,pat_address)
            //         VALUES('$_POST[user_name]','$_POST[user_id]','$_POST[user_password]','$_POST[user_no]',
            //         '$_POST[user_email]','$_POST[user_address]')";

            //         $conn->query($sql_insert);
            //         // header("Location: login.php");
            //         echo "inserted successfuly";
            //     }
            // else
            //     {
            //     echo "<h1>User Id already exist <br> Try another User Id</h1>";
            //     }

            // }

?>