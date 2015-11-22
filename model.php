<?php

function open_database_connection()
{
    $link = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($link, 'Blog');
    return $link;
}

function close_database_connection($link)
{
    mysqli_close($link);
}

function get_all_posts()
{
    $link = open_database_connection();
    
    $result = mysqli_query($link, 'SELECT id, title FROM post');
    $posts = array();
    
    while ($row = mysqli_fetch_assoc($result))
    {
        $posts[] = $row;
    }
    
    close_database_connection($link);
    
    return $posts;
}

function get_post_by_id($id)
{
    $link = open_database_connection();
    
    $idi = intval($id); //get the integer value of a varaible
    $query = 'SELECT title, content FROM post WHERE id = '.$idi;
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    
    close_database_connection($link);
    
    return $row;
}


