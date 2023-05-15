<?php
    $title = "mailing list";
    require_once'connect.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once'include/head.php'?>
</head>
<body>
    <main class="main_mianingList">
        <?php
        echo "<h1>Mailing list</h1>Send to<p>";
        
        //setup variables
        $mailcount = 0;
        $namecount = 0;
        
        $get = mysqli_query($connect, "SELECT * FROM mailinglist WHERE send='1'");
        echo "<form action='send.php' method='GET'>";
        while ($getrow = mysqli_fetch_assoc($get))
        {
            echo "<input type='checkbox' name='mail_'".$mailcount++."' value='".$getrow['email']."'checked>".$getrow['fname']. " ".$getrow['lname']." ("."".$getrow['email'].")
            <input type='hidden' name='name_".$namecount++."' value='".$getrow['fname']."'>
            <br>";
        }
        echo "<p>
        Message :<br>
        <textarea name='message' cols='30' rows='10'></textarea>
        </p>
        <input type='submit' name='submit' value='Send'>";
        echo "</form>";
        ?>
    </main>
    
</body>
</html>