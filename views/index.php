<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Abel|Fjalla+One|Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
    <?php

        include("../views/header.php");

        $sectionModel->printSection($section);

        include("../views/footer.php"); 
    ?>
    <noscript>We're sorry, you don't allow javascript, the page don't work correctly</noscript>
</body>
</html>