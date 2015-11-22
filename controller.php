<?php

function list_action()
{
    $posts = get_all_posts();
    require 'templates/list.html.php';
}

function show_action($id)
{
    $post = get_post_by_id($id);
    require 'templates/show.html.php';
}