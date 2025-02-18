<?php
$conn=mysqli_connect("localhost","root","","student_database");
if (!$conn){
  die("Connection was unsuccessfull");
}
$sql="UPDATE student_details SET fname = 'niladri2' WHERE Sno = 1";

$result = mysqli_query($conn,$sql);
if ($result){
  echo "Data has been updated";
}
else{
  echo "ERROR: ". mysqli_error($conn);
}
?>