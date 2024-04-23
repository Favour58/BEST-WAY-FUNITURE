<?php
    include"config.php";
    session_start();
    //rubbish//
if (isset($_POST['submit_info'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if ($name == "" || $email == "" || $phone == "" || $message == "") {
        $error = "These fields cannot be empty!";
    }
    else{
    $arg0 = "INSERT INTO `best_way` (`name`,`email`,`phone`,`message`) 
    VALUES ('$name','$email','$phone','$message')";
    $query0 =  mysqli_query($conn,$arg0 );
    if ($query0) {
        $to = "favourobigba@gmail.com";
        $subject = "NEW CONTACT  INFORMATION";
        $message = "name:$name\nemail:$email\nphone:$phone\nmessage:$message";
        $header = "jasperwright667@gmail.com";
        $header = "From: Dave @ BEST WAY FUNITURE"."\r\n";
        $header .= "MIME-Version: 1.0"."\r\n";
        $header .= "Content-type: text/html;charset=UTF-8"."\r\n";

        mail($to, $subject, $message, $header);
        echo"<script>alert('Contact info submitted successfully')</script>";
    }
    else{
        echo"<script>alert('Something went wrong!')</script>";
    }
}
}

?>