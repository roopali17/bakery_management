<?php
$conn = mysqli_connect("localhost", "root", "", "bakery management") ;
if($conn)
{
  // echo "connected";
}
else
{
 echo "not connected";
}
?>