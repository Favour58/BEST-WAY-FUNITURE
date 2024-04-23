<?php

$conn = mysqli_connect('localhost','root','','gideon');
if ($conn) {
  echo"<script> connection successful</script>";
}
else{
  echo"<script> connection UNsuccessful</script>";
}

?>