<?php
echo 'success';
include '../core/init.php';

if (isset($_POST['article_id'], $_SESSION['user_id']) && article_exists($_POST['article_id'])) {
    $article_id = $_POST['article_id'];
    if (previously_liked()) {
        echo 
    } else {
        add_like($article_id);
    }
}
?>