<?php 
if(isset($_POST['submit'])){
    $to = "info@ehandler.in";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $countryname = $_POST['countryname'];
    $request = $_POST['request'];

    $formcontent = "Name: $name \n   Phone: $number \n  Email: $from \n  Country: $countryname \n   Request: $request";
    $subject = "Quote Form";
    $mailheader = "From: $email \r\n";
    mail($to,$subject,$formcontent,$mailheader) or die("Error!! Try Again.");
    echo '<script language="javascript">';
    echo 'alert("Thank you for Contacting Us.")';
    echo '</script>';
    header("Location: https://ehandler.in/index.html?success=1");
    exit;

}
    
?>