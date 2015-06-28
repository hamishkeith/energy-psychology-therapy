<?php

if(isset($_POST['c_name'])){
    
    $res['sendstatus'] = 1;
    $res['message'] = 'Form Submission Succesful';

    $to = "hamish.keith@operamail.com";
    $subject = "Energy Psychology Therapy";
    $message "Contact from: ".$_POST['c_email']."\nName given:".$_POST['c_name']."\nWith message:\n".$_POST['c_message'];
    $headers = 'From: website@tanyadurlen.com';
    mail($to, $subject, $message, $headers);

    echo json_encode($res);
}

?>