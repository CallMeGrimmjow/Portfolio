<?php ?>

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

    <form action="javascript:void(0);" method="post" id="form-contact">
        <h2>Contact me: </h2>
        <label id="first-name" class="inputs" for="first-name">First name:<br>
            <input type="text" name="first-name" placeholder="John" required>
        </label>


        <label id="last-name" class="inputs" for="last-name">Last name:<br>
            <input type="text" name="last-name" placeholder="Doe" required>
        </label>


        <label id="phone" class="inputs" for="phone">Phone number:<br>
            <input type="tel" name="phone" placeholder="0792943180"
                   pattern="(0041|0)|\B\+41)(\s?\(0\))?(\s)?[1-9]{2}(\s)?[0-9]{3}(\s)?[0-9]{2}(\s)?[0-9]{2}">
        </label>


        <label id="email" class="inputs" for="email">Email:<br>
            <input type="email" name="email" placeholder="racoon@city.com" required>
        </label>


        <label id="textarea" class="inputs" for="textarea">Tell me more:<br>
            <textarea name="textarea" cols="45" rows="3"
                      placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate dolor veniam."></textarea>
        </label>

        <input class="inputs" id="submit" type="submit" name="submit" value="submit">
    </form>
</body>
</html>
