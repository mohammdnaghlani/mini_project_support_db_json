<?php

function link_url(string $uri) : string
{

    $url  = BASE_URL . $uri ;

    return $url ;

}

function fetch_message(string $file_path , int $situation_assoc = 0)
{

    $file_read = file_get_contents(BASE_PATH.$file_path );

    $messages = json_decode($file_read ,  $situation_assoc);

    return $messages ;

}
function add_message($file_name , array $new_posts):bool
{
    $file_array = json_decode(file_get_contents(BASE_PATH . $file_name) , 1);
    $file_array[] = $new_posts ;
    $result = file_put_contents(BASE_PATH . $file_name , json_encode($file_array));
    if($result){
        return true ;
    }
    else false ;
}
