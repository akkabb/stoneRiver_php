<?php
$title = 'Website up or down';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
   <h1>How to check if a website is up or down</h1>
    <div class="code_display">
        <pre>
            &lt?php 
            Cet exercice est à répéter pour la semaine!
            ?&gt
        </pre>
    </div>
    <p>
        <?php 
            function upordown($url){
                $cs = curl_init($url);

                curl_setopt($cs, CURLOPT_NOBODY, true);
                curl_setopt($cs, CURLOPT_FOLLOWLOCATION, true);
                
                curl_exec($cs);
                $status_code = curl_getinfo($cs, CURLINFO_HTTP_CODE);

                return ($status_code == 200) ? true : false;
                // return $status_code;
            }

            //echo upordown('http://www.google.com');

           if (isset($_POST['url']) && empty(!$_POST['url']))
           {
                $url = trim($_POST['url']);
                if (filter_var($url, FILTER_VALIDATE_URL) == true){
                        if(upordown($url) == true){
                            echo 'That website is up!';
                        }else{
                            echo 'Sorry, that website is down!';
                        }
                }else{
                    echo 'Non valid URL';
                }
           }
        ?>
    </p>
    <div class="form">
        <form action="" method="post">
            <label for="url">Up, or down</label>
            <input type="text" name="url">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>