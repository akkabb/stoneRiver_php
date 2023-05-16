<?php
    $title = "Guestbook";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
   <?php require_once('include/head.php'); ?>
</head>
<body>
    <main class="mainGuestbook">
        <div class="code_display">
            &lt?php 

            ?&gt
        </div>
        <!-- <p>
            <?php
                // $mysqli = new mysqli('localhost', 'root', 'root', 'guestbook');
                // if ($mysqli)
                // {
                //     $time = time();
                //     $errors = [];

                //     if (isset($_POST['guestbook_name'], $_POST['guestbook_email'], $_POST['guestbook_msg'])) {
                        
                //         $guestbook_name = mysqli_real_escape_string($mysqli,htmlentities($_POST['guestbook_name']));
                //         $guestbook_email = mysqli_real_escape_string($mysqli,htmlentities($_POST['guestbook_email']));
                //         $guestbook_msg = mysqli_real_escape_string($mysqli,htmlentities($_POST['guestbook_msg']));
                        
                //         if (empty($guestbook_name) || empty($guestbook_email) || empty($guestbook_msg)){
                //             $errors[] = "All fields are required";
                //         }

                //          if (strlen($guestbook_name) > 25 || strlen($guestbook_email) > 255 || strlen($guestbook_msg) > 255)
                //         {
                //             $errors[] = 'One or more fields exceeded the character limit.';
                //         }

                //         if (empty($errors)){
                //             $insert = "INSERT INTO `entries` (`id`, `timestamp`, `name`, `email`, `message`) VALUES ('', '$time', '$guestbook_name', '$guestbook_email', '$guestbook_msg')";
                //             if ($mysqli->query($insert))
                //             {
                //                 header('<Location: '.$_SERVER['PHP_SELF']);
                //             }else{
                //                 $errors[] = 'Something went wrong, please try again soon.';
                //             }
                //         }else {
                //             foreach($errors as $error){
                //                 echo '<p><strong>'.$error.'</strong></p>';
                //             }
                //         }
                //     }
                //     //display entries
                // }else{
                // echo 'Could not connected at that time';
                // }
            ?>
        </p> -->
        <p>
            <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            
            $mysqli = new mysqli('localhost', 'root', 'root', 'guestbook');

            // if ($mysqli)
            // {
            //     echo "yea!";
            // }else{
            //     echo 'Could not connected at that time';
            // }
                if ($mysqli){
                    if (!empty($_POST)){
                        $time = time();
                        $guestbook_name = mysqli_real_escape_string($mysqli,htmlentities($_POST['guestbook_name']));
                        $guestbook_email = mysqli_real_escape_string($mysqli,htmlentities($_POST['guestbook_email']));
                        $guestbook_msg = mysqli_real_escape_string($mysqli,htmlentities($_POST['guestbook_msg']));
                        
                        $sql = "INSERT INTO `entries` (`timestamp`, `name`, `email`, `message`) VALUES ($time ,?,?,?)";
                        
                        $stmt = $mysqli->prepare($sql);
                        var_dump($stmt);
                        $stmt->bind_param("sss" ,$guestbook_name, $guestbook_email, $guestbook_msg);
                        $stmt->execute();
                        
                    }
                    
                    $entries = mysqli_query($mysqli, "SELECT `timestamp`, `name`, `email`, `message` FROM `entries` ORDER BY `timestamp` DESC");
                    if ( mysqli_num_rows($entries) == 0)
                    {
                        echo 'no entries yet';
                    }else{
                        while ($entries_row = mysqli_fetch_assoc($entries)){
                                $entries_timestamp = $entries_row['timestamp'];
                                $entries_name = $entries_row['name'];
                                $entries_email = $entries_row['email'];
                                $entries_message = $entries_row['message'];

                                echo '<p><strong>Posted by '.$entries_name.' ('.$entries_email.') on '.$entries_timestamp.'</strong>:<br>'.$entries_message.'</p>';
                        }
                    }
                }
                else{
                    echo 'Could not connected at that time';
                }
                
                
                
                    

                
          
            ?>

        </p>
        <hr>
            <section class="form">
                <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                    <legend><strong>Post something ...</strong></legend>
                    <div class="form_part">
                        <label for="guestbook_name">Name :</label>
                        <input type="text" name="guestbook_name" maxlength="25">
                    </div>
                    <div class="form_part">
                        <label for="guestbook_email">Email :</label>
                        <input type="email" name="guestbook_email" maxlength="255">
                    </div>
                    <div class="form_part">
                        <label for="guestbook_msg">Message :</label>
                        <textarea name="guestbook_msg" id="" cols="30" rows="10" maxlength="255"></textarea>
                    </div>
                    <input type="submit" name="submit" value="Post" class="submit">
                </form>
            </section>
    </main>
</body>
</html>

<?php


?>