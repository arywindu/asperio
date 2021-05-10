<?php 



/*  header("Location: DOBOT_INDUSTRIAL.pdf");

 die();    */    



if (isset($_POST['submit'])) {
    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];
    $company    = $_POST['company'];
    $phone      = $_POST['phone'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];

    $mailTo = "admin@asperio.id";
    /* $mailTo = "arywindu@gmail.com"; */

    $headers =  "Email: ".$email."\n\n".
                "Nama Depan: ".$fname."\n\n".
                "Nama Belakang: ".$lname."\n\n".
                "Company: ".$company."\n\n".
                "Phone: ".$phone."\n\n".
                "Message: ".$message;

                
    $txt = "Hi Team Asperio Baru Saja Ada Yang Mendownload Katalog Industrial ".' '.$fname." ".$lname;


    mail($mailTo, $txt, $headers);

    
    header("Location: DOBOT_INDUSTRIAL.pdf");

    die();   

    

    

}