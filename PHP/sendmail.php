<?php
if(isset($_POST['message'])){
    $to      = 'pavan5639kumar@gmail.com';
    $subject = "Rats Technologies"; 
    $message = $_POST['message']."\r\n".$_POST['sender_ema‌​il‌​'].; 
    $headers = "From: ".$_POST['sender_nam‌​e​']." <".$_POST['sender_em‌​ail‌​'].">\r\n"; $headers = "Reply-To: ".$_POST['sender_ema‌​il‌​']."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers)) echo json_encode(['success'=>true]); 
    else echo json_encode(['success'=>false]);
    exit;
 }
?>