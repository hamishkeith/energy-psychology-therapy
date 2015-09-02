<?php


/*
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
*/

<?php
require_once '../libs/swiftmailer/swift_required.php';
require '../libs/sendgrid/SendGrid.php';
$sendgrid = new SendGrid('app38295127@heroku.com', '1y4tljkz7840');
$email
    ->addTo('hamish.keith@operamail.com')
    ->setFrom('me@bar.com')
    ->setSubject('Subject goes here')
    ->setText('Hello World!')
    ->setHtml('<strong>Hello World!</strong>')
;
$sendgrid->send($email);
?>