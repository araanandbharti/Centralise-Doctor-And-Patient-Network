<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
</head>
<body>
    
    <?php
        $conn = mysqli_connect("localhost","root","","ek_kadam") or die("Connection failed");
        if($_GET["searchby"]=="name")
        {
            echo "22  <br/> ";
            $var= $_GET["search"];

            echo "$var <br/>";
            $sql= "SELECT doc_name,	doc_address,fees FROM doctor where doc_name LIKE '%$var%' ";
        }
        else
        {
            echo "33  <br/> ";
            $var= $_GET["search"];

            echo "$var <br/>";
            $sql= "SELECT doc_name,	doc_address,fees FROM doctor where doc_address LIKE '%$var%' ";

        }
        $result = $conn->query($sql) or die($conn->error);
        // $row=$result -> fetch_assoc();
        
        $row1=mysqli_num_rows($result);
        echo " $row1 ";

    ?>
    <table>
  <tr>
    <th>Doctor Name</th>
    <th>Doctor Address</th>
    <th>Fees</th>
  </tr>
        <?php
             while($row=$result -> fetch_assoc())
             {
                $name=$row["doc_name"];
                $address=$row["doc_address"];
                $fees=$row["fees"];
        ?>


  <tr>
    <td> <?php echo " $name " ;?> </td>
    <td> <?php echo " $address" ;?> </td>
    <td> <?php echo " $fees" ; ?> </td>
  </tr>
        <?php } ?>


</table>

















</body>
</html>