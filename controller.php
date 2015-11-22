<?php

use Symfony\Component\HttpFoundation\Response;

function list_action()
{
    $posts = get_all_posts();
    $html = render_template('templates/list.html.php', array('posts'=>$posts));
    return new Response($html);
    
}

function show_action($id)
{
    $post = get_post_by_id($id);
    $html = render_template('templates/show.html.php', array('post'=> $post));
    return new Response($html);
}

//helper function to render templates
function render_template($path, array $args)
{
    extract($args); // array('post' => array('title' => tytul, 'content' => tresc))
    ob_start();
    require $path; //path to 'templates/show.html.php'
    $html = ob_get_clean();
    
    return $html;
}