




<?php
$to = "chetan25december@gmail.com";
$sub = "Generic Mail";
$msg = "Hello Geek! This is a generic email.";
if (mail($to, $sub, $msg))
    echo "Your Mail is sent successfully.";
else
    echo "Your Mail is not sent. Try Again.";
?> 