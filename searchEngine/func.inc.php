<?php
include 'db.inc.php';

function search_results($keywords){
    $db = mysqli_connect('localhost', 'root', 'root', 'searchengine');
    $returned_results = array();
    $where = "";
    
    $keywords = preg_split('/[\s]+/', $keywords);
    $total_keywords = count($keywords);
    
    foreach($keywords as $key=>$keyword) {
        $where .= "`keywords` LIKE '%$keyword%'";
        if ($key != ($total_keywords - 1)){
            $where .= " AND ";
        }
    }
    // echo $where;
    $results = "SELECT `title`, LEFT(`description`, 70) as `description`, `url` FROM `articles` WHERE $where";
    $results_num = ($results = mysqli_query($db,$results)) ? mysqli_num_rows($results): 0;
    
    if ($results_num === 0) {
        return false;
    }else{
        while($results_row = mysqli_fetch_assoc($results)){
            $returned_results[] = array(
                'title' => $results_row['title'],
                'description' => $results_row['description'],
                'url' => $results_row['url'],
            );
        }

        return $returned_results;
    }
}
?>