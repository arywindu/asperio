<?php 



/*  header("Location: DOBOT_INDUSTRIAL.pdf");

 die();    */    



if (isset($_POST['submit'])) {
    $interest   = $_POST['interest'];
    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];
    $company    = $_POST['company'];
    $phone      = $_POST['phone'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];

    $mailTo = "admin@asperio.id";
    /* $mailTo = "arywindu@gmail.com"; */

    $headers =  "Interest: ".$interest."\n\n".
                "Email: ".$email."\n\n".
                "Nama Depan: ".$fname."\n\n".
                "Nama Belakang: ".$lname."\n\n".
                "Company: ".$company."\n\n".
                "Phone: ".$phone."\n\n".
                "Message: ".$message;

                
    $txt = "Hi Team Asperio Ada Pesan Masuk ".' '.$fname." ".$lname;


    mail($mailTo, $txt, $headers);

    
    header("Location: index.html");

    die();   

    

    

}