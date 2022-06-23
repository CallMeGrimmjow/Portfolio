<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "../PHPMailer/Exception.php";
require_once "../PHPMailer/PHPMailer.php";
require_once "../PHPMailer/SMTP.php";



if (isset($_POST['submit'])) {

    $mail = new PHPMailer(true);

    // retrieve infos
    $email = $_POST['email'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $message = $_POST['message'];



    try {
        // configuration
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // debug infos

        // smtp config
        $mail->isSMTP();
        $mail->Host = "localhost";
        $mail->Port = 1025;

        //charset
        $mail->CharSet = "utf-8";

        // Receiver(s)
        $mail->addAddress('ezramosimann@gmail.com');

        // Sender
        $mail->setFrom($email);

        // content
        $mail->isHTML(true);

        $mail->Subject = $firstName . " " . $lastName . " sent you a message via your portfolio";
        $mail->Body = $message;

        // send the email
        $mail->send();
        echo "mail sent !";

    } catch (Exception) {
        echo "mail not sent. error:{$mail->ErrorInfo}";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;1,400&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/05fd7434d7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
<?php require '../components/navbar.php' ?>

<form action="contact.php" method="post" id="form-contact">
    <h2>Contact me: </h2>
    <label id="first-name" class="inputs" for="first-name">First name:<br>
        <input type="text" name="first-name" placeholder="John" required>
    </label>


    <label id="last-name" class="inputs" for="last-name">Last name:<br>
        <input type="text" name="last-name" placeholder="Doe" required>
    </label>

    <label id="email" class="inputs" for="email">Email:<br>
        <input type="email" name="email" placeholder="racoon@city.com" required>
    </label>


    <label id="textarea" class="inputs" for="textarea">Tell me more:<br>
        <textarea name="message" cols="35" rows="4"
                  placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate dolor veniam."></textarea>
    </label>

    <input class="inputs" id="submit" type="submit" name="submit" value="submit">
</form>
</body>
</html>
