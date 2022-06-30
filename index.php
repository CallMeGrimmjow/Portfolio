<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ezra Mosimann's Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;1,400&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/05fd7434d7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- script should be placed before the end of body but it works fine like that for now -->
    <script src="js/shuffleLetters.js"></script>
</head>
<body>
<nav id="nav-index">
    <ul>
        <!-- <li><a href=""><i class="fa-solid fa-house"></i></a></li> -->
        <li class="transi-underline"><a href="index.php">Home</a></li>
        <li class="transi-underline"><a href="pages/aboutme.php">About me</a></li>
        <li class="transi-underline"><a href="pages/projects.php">Projects</a></li>
        <li class="transi-underline"><a href="pages/contact.php">Contacts</a></li>
    </ul>
</nav>
<div id="shuffleAnim">
    <h1>
        <span id="index-anim"><span id="shuffle"></span></span>
    </h1>
</div>
<!-- <p id="sub-title">1st year apprentice at <a href="https://jobtrek.ch/" target="_blank">@Jobtrek</a> in Switzerland</p> -->
<?php require_once 'components/footer.php'?>
</body>
</html>

