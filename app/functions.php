<?php

function get_more($offset, $limit) {
    require 'includes/config.php';
    $result = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT $offset,$limit");

    
    while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
    }
   
    return $array;
}

function get_events($month, $year) {
    require 'includes/config.php';
    $date = $year . '-' . $month . '-18';
    $result = mysqli_query($connection, "SELECT * FROM `events` WHERE `month` = '{$month}' AND `year` = '{$year}'");
    
    while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
    }
   
    return $array;
}
 
function more_activities($offset, $limit, $id) {
    require 'includes/config.php';
    $result = mysqli_query($connection, "SELECT * FROM `activities` WHERE `categorie_id` = $id ORDER BY `id`LIMIT $offset,$limit");

    while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
    }
   
    return $array;
}

function tpl_render($tpl, $vars) {
    if (file_exists('includes/'.$tpl)) {
        ob_start();
        extract($vars);
        require ('includes/'.$tpl);
        return ob_get_clean();
    }
    return ob_get_clean();
}