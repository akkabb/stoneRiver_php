<?php
    $title = 'Find and replace text';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <main class="find_replace">
        <div class="code_display"></div>
        <p>
            <?php

                function addDelimiters(&$in){
                    $in = '/' . trim($in) . '/'; 
                }

                if (isset($_POST['find'], $_POST['replace'], $_POST['text']) === true){
                    // $string = 'Alex went to the cinema';    
                    // preg_replace('/Alex/', '/Billy/', $string);
                    if (empty($_POST['find']) === false) {
                        $find = explode(',', $_POST['find']);
                        array_walk($find, 'addDelimiters');
                        print_r($find);
                    }

                    $replace = (empty($_POST['replace']) === false) ? preg_split('/,\s+/', $_POST['replace']) : '';
                      
                    $text = (empty($find) === false && empty($replace) === false) ? preg_replace($find, $replace, $_POST['text']) : $_POST['text'];
                }
            ?>
        </p>
        <section class="form">
            <form action="" method="post">
                <input type="text" name="find" id="" placeholder="words, to ,find">
                <input type="text" name="replace" id="" placeholder="Replacement, text, here">
                <div class="textarea">
                    <textarea name="text" id="" cols="45" rows="10">
                        <?php echo (empty($text) === false) ? $text : '';?>
                    </textarea>
                </div>
                <input type="submit" value="submit">
            </form>
        </section>
    </main>
</body>
</html>