<?php
$title = 'Ajax chat';
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

require_once('core/init.php');

$chat = new Chat();
print_r($chat->fetchMessages());
$chat->throwMessage(1, 'this is a test');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <div class="chat">
        <div class="messages">
            <div class="message">
                
            </div>
        </div>
        <textarea name="" id="" cols="30" rows="10" class="entry" placeholder="Type here and hit Return. Use shif + Return for a new line"></textarea>
    </div>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="js/chat.js"></script>
</body>
</html>