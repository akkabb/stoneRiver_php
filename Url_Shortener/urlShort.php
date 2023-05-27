<?php
$title = 'Url shortener';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    <script text="text/javascript"></script>
    <link rel="stylesheet" href="../CSS/urlShort.css">
    <title><?php echo $title;?></title>
</head>
<body>
    <main class="main_urlShort">
        <header class="urlheader">
            <h1>It's Simple. It's Short. It's min.bz</h1>
            <p class="urlShort.subtitle">Go ahead, enter a long URL and have it shortened.</p>
        </header>
        <div class="url_field">
            <input type="text" id="url" name="url" onkeydown="if (event.keyCode == 13 || event.which == 13) { }">
            <input type="button" value="shorten" onclick="">
        </div>
        <div class="code_display"></div>
        <div class="footer">
            <p>Brought to you by <a href="#">akkabb</a></p>
        </div>
    </main>
</body>
</html>