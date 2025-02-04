<?php

function send_message($email,$subject,$message){
    global $conn;
    $sqli_query_personal =  "INSERT INTO contact_messages ( email , subject , message ) VALUES('$email' , '$subject' , '$message')";
    header("Location: INC/loader.html");
    $save_query_result = mysqli_query($conn,$sqli_query_personal);
    // script that redirects page on name page
    return $save_query_result;
}

?>