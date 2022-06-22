<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

if (isset($_POST['submit'])) {
    $email = new PHPMailer(true);

    $emailAddress = [$_POST['email']];
    $fullName = [$_POST['first-name'],$_POST['last-name'],];

    $email->From = "ezramosimann@gmail.com";
    $email->FromName = "Ezra Mosimann";

    $email->addAddress('ezra.mosimann@jobtek.ch', $fullName);
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
        <textarea name="textarea" cols="35" rows="4"
                  placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate dolor veniam."></textarea>
    </label>

    <input class="inputs" id="submit" type="submit" name="submit" value="submit">
</form>
</body>
</html>
