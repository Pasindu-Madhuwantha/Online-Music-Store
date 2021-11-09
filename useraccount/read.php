<?php
require 'config.php';


$sql="select Name,Email from newuser";

$result=$con->query($sql);

if($result->num_rows>0)
{
         while($row=$result->fetch_assoc())
         {
           echo $row["Name"]." - ".$row["Email"]."<br>";
         }
}

else {
        echo "0 results";
   }

   $con->close();

?>
