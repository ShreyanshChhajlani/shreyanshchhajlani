<?php

if(isset($_POST['fromEmail']) && ($_POST['fromEmail'] != ""))
{
    if(filter_var($_POST['fromEmail'], FILTER_VALIDATE_EMAIL))
    {
    
        if (isset($_POST['sendMailBtn'])) {
            $fromEmail = $_POST['fromEmail'];
            $toEmail = "shreyanshchhajlani2000@gmail.com";
            $username = $_POST['name'];
            $subjectName = "Feedback through Portfolio";
            $message = $_POST['message'];
        
            $to = $toEmail;
            $subject = $subjectName;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
            $message = '<!doctype html>
        			<html lang="en">
        			<head>
        				<meta charset="UTF-8">
        				<meta name="viewport"
        					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        				<meta http-equiv="X-UA-Compatible" content="ie=edge">
        				<title>Document</title>
        			</head>
        			<body>
        			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>
        				<div class="container">
        			  <b>'.$message.'</b>
        			  <br/><br><br>
                            Regards,<br/>
                          <b>'.$username.'</b>
        				</div>
        			</body>
        			</html>';
            $result = @mail($to, $subject, $message, $headers);
        
            echo '<script>alert("Email sent successfully! Glad to here from you! I will be in touch soon.")</script>';
            echo '<script>window.location.href="contact.html";</script>';
        }
    }
    
}
