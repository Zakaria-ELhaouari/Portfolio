<?php
require_once './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function send_mail_php(){

// require_once 'config.php';

$mail = new PHPMailer();
 
if(isset($_POST['submit'])){
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'zakaria.elhaouarii99@gmail.com';   //username
            $mail->Password = 'zakaria99';   //password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;                    //smtp port
          
            $fullname = $_POST['name']; //  Name 
            $email = $_POST['email']; //  Email 
            $sujet = $_POST['Subject']; //  Subject 
            $msg = $_POST['Message']; //  Message 
            
            $to = "zakaria.elhaouarii99@gmail.com"; // You can change here your Email
            $subject = "'$sujet'"; // This is your subject
             
            // HTML Message Starts here
            $message ="
            <html>
                <body>
                    <table style='width:600px;'>
                        <tbody>
                            <tr>
                                <td style='width:150px'><strong>Name: </strong></td>
                                <td style='width:400px'>$fullname</td>
                            </tr>
                            <tr>
                                <td style='width:150px'><strong>Email ID: </strong></td>
                                <td style='width:400px'>$email</td>
                            </tr>
                            <tr>
                                <td style='width:150px'><strong>Subject: </strong></td>
                                <td style='width:400px'>$sujet</td>
                            </tr>
                            <tr>
                                <td style='width:150px'><strong>Message: </strong></td>
                                <td style='width:400px'>$msg</td>
                            </tr>
                        </tbody>
                    </table>
                </body>
            </html>
            ";
            // HTML Message Ends here

            $mail->setFrom($email, $fullname);
            $mail->addAddress($to, 'Zakaria Haouarii');
         
         
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
         
            
            
            if($mail->send()){
            echo "Message has been sent";
            }else{
                echo "Try again later";       
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
        }

       
}
}
?>