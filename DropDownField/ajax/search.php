<?php

    $db = new mysqli('localhost', 'root', 'root', 'autosuggest');

    if (isset($_POST['search_term']) == true && empty($_POST['search_term']) == false) {

        $search_term = mysqli_real_escape_string($db, $_POST['search_term']);

        $query = mysqli_query($db, "SELECT `city` FROM `cities` WHERE `city` LIKE '$search_term%'");
        
        while (($row = mysqli_fetch_assoc($query)) !== false) {
            echo '<li>', $row['city'],'</li>';
        }
    }
?>