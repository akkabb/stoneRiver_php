<?php
$title = "Template Engine";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <? require_once('include/head.php');?>
    
</head>
<body>
    <?php
    require_once('template.php');
    $template= new Template;

    $template->assign('username', 'Terry', );
    $template->assign('age', 18);
    $template->assign('fav_food', 'pizza');
    $template->render('myTemplate');

    // p rint_r($template);
    ?>
</body>
</html>