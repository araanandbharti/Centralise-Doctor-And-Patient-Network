<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ek_Kadam/Main Page</title>
    <link rel="stylesheet" href="main.css">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <?php
    // echo "$_GET[user_id]";
    $patid=$_GET['user_id'];
    ?>
    <div class="body">
        <div class="history">
            <div class="h_btm">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="h_slide">
                <div class="h_cont">
                    <a href="future_apt.php" class="h_cont_a">Future appointement</a>
                </div>
                <div class="h_cont">
                    <a href="missed_apt.php" class="h_cont_a">Missed appointement</a>
                </div>
                <div class="h_cont">
                    <a href="past_apt.php" class="h_cont_a">Passed appointement</a>
                </div>
                <div class="h_cont">
                    <a href="medici_apt.php" class="h_cont_a">Medicine</a>
                </div>

            </div>
        </div>

        <div class="main_cont">
            <div class="logo">
                <a href="/heart/main.php">
                    <img src="image/logo.jpg" alt="logo " class="logo_img">
                </a>
            </div>
            <div class="search">
                <form action="" method="GET">
                    <div class="search1">
                        <input type="text" name="search" id="search3" placeholder="Search">
                    </div>
<!-- ----------------------------- -->
                    <div class="search2" >
                        <input type="text" name="user_id" id="search3" placeholder="Search" value="<?php 
                        echo "$patid"; ?>">
                    </div>
<!-- ------------------------------ -->
                    <div class="search_cont1">
                        <div class="searchby">
                            <input type="radio" id="search_by_name" name="searchby" value="name">
                            <label for="search_by_name">Search by name</label><br>
                            <input type="radio" id="search_by_address" name="searchby" value="address">
                            <label for="search_by_address">Search by address</label><br>
                        </div>
                        <div class="search_btn">
                            <input type="submit" name="submit" alt="search" class="search_img">
                            <!-- <button type="submit" name="submit">
                                <img src="image/search.png" alt="search" class="search_img">
                            </button> -->

                        </div>
                    </div>


                </form>

            </div>

            <div class="search_table">
                <?php

                if(isset($_GET["submit"]))
                    {$conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");
                        if($_GET["searchby"]=="name")
                        {
           
                            $var= $_GET["search"];

                            // echo "$var <br/>";
                            $sql= "SELECT doc_name,	doc_address,fees FROM doctor where doc_name LIKE '%$var%' ";
                        }
                        else
                        {
            
                            $var= $_GET["search"];

                            // echo "$var <br/>";
                            $sql= "SELECT doc_name,	doc_address,fees FROM doctor where doc_address LIKE '%$var%' ";

                        }
                    $result = $conn->query($sql) or die($conn->error);
                    // $row=$result -> fetch_assoc();
        
                    $row1=mysqli_num_rows($result);
                    // echo " $row1 ";
                    if($row1==0)
                    {
                        echo "<h1>No match found</h1>";
                    }

                ?>
                
                <?php
                    while($row=$result -> fetch_assoc())
                        {
                        $name=$row["doc_name"];
                        $address=$row["doc_address"];
                        $fees=$row["fees"];
                        // echo "$name <br> $address <br> $fees <br>";
                ?>


                    
                    


             
                <div class="doctor">
                    <div class="a">
                        <div class="Basic">
                            <div class="name">
                                <?php echo "$name" ?>
                            </div>

                            <div class="fees">
                                Fees: <?php echo "$fees" ?>
                            </div>
                        </div>
                    </div>

                    <div class="b">

                        <div class="image">
                            <img src="upload_img/2.jpg" alt="doc_img" class="image_cont">
                        </div>

                        <div class="specialist">
                            <div class="specialist_heading">
                                <h4> Specialist:</h4>
                            </div>
                            <div class="specialist_cont">
                                Ear, Nose and throat specilist.
                            </div>

                        </div>
                    </div>

                    <div class="c">
                        <div class="address">
                            <div class="address_heading">
                                <h3 class="h4"> Address</h3><br>
                                <?php echo "$address" ?>
                            </div>
                        </div>
                    </div>

                    <div class="d">
                        <div class="about">
                            <h3 class="h4">About</h3> <br>
                            Done MBBS from AIIMS delhi after that i moved to arrah in 2003 and from that day i have been
                            working
                            in
                            my clinic.
                        </div>
                    </div>

                </div>
                <?php } ?>


                <?php } ?>


            </div>
        </div>

        <div class="profile_complete">
            <div class="profile">
                <img src="upload_img/<?php echo "$patid"; ?>.jpg" alt="logo " class="profile_img">
            </div>
            <div class="profile_cont">

                <div class="profile_cont1">
                    <a href="edit_profile.html" class="profile_cont2">Edit Your Detail</a>
                </div>
                <div class="profile_cont1">
                    <a href="edit_profile-pic.html" class="profile_cont2">Change Your Pic</a>
                </div>
                <div class="profile_cont1">
                    <a href="login.php" class="profile_cont2">Log Out</a>
                </div>

            </div>
        </div>
    </div>



</body>

</html>