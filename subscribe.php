<?php 

    $to = "info@ehandler.in";
    $from = $_POST['email'];

    $formcontent = "Subscribed for NewsLetter \n  Email: $from \n ";
    $subject = "Quote Form";
    $mailheader = "From: $from \r\n";
    mail($to,$subject,$formcontent,$mailheader) or die("Error!! Try Again.");
    header("Location: https://ehandler.in/index.html?success=1");
    echo '<script language="javascript">';
    echo 'alert("Thank you for Contacting Us.")';
    echo '$(".modal-container").hide();';
    echo '</script>';
    exit;



    
?>