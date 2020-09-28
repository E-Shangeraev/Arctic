<?php

function get_more($offset, $limit) {
    require 'includes/config.php';
    $result = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT $offset,$limit");

    while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
    }
   
    return $array;
}