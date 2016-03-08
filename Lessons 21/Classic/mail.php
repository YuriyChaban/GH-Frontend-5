<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST["sub"];
    $message = $_POST['message'];
    $error = '';
    if(!$name) {$error .= 'Enter your name. ';}
    if(!$email) {$error .= 'Enter the e-mail. ';}
    if(!$sub) {$error .= 'Specify the subject of treatment. ';}
    if(!$message || strlen($message) < 1) {$error .= 'Enter your message. ';}
    if(!$error) {
        $address = "shuterrush@gmail.com";
        $mes = "Name: ".$name."\n\nSubject: " .$sub."\n\nMessage: ".$message."\n\n";
        $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
        if($send) {echo 'OK';}
    }
    else {echo '<div class="err">'.$error.'</div>';}
}
?>