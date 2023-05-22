<?php

require_once('../core/init.php');

if (isset($_POST['method']) === true && empty($_POST['method']) === false) {
    $chat = new Chat();
    $method = trim($_POST['method']);

    if ($method === 'fetch') {
        //fetch messages and output
        $messages = $chat->fetchMessages();

        if (empty( $messages) === true) {
            echo 'There are currently no messsages in the chat';
        } else{
            foreach ($messages as $message){
                ?>
                <div class="message">
                    <a href="#"><?php echo $message['username']; ?></a> says:
                    <p><?php echo nl2br($message['message']);?></p>
                </div>
                <?php
            }
        }
    }else if ($method === 'throw' && isset($_POST['message'])  == true) {
        // throw message into db
        $message = trim($_POST['message']);
        if (empty($message) === false) {
                // throw it
                $chat->throwMessage($_SESSION['user'], $messge);
        }
    }
}