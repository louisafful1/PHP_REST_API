<?php
// headers
header('Access-Control-Allow-Origin: *'); // Allowing anyone to access without any authentication (OAuth)
header('Cont-Type: application/json');

// initializing our api
include_once('../core/initialize.php');



// instantiate the post class
$post = new Post($db);


// blog post query
$result = $post->read();

// get the row count
$num = $result->rowCount();

if($num > 0) {
    $post_array = array();

    $post_array['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_item = array(
            'id' => $id,
            'title' => $title,
            'body' => html_entity_decode($body),
            'author' => $author,
            'category_id' =>  $category_id,
            'category_name'  => $category_name          

        );
        //push to "data"
        array_push($post_array['data'], $post_item);
    }

    // convert to json and output
    echo json_encode($post_array); 



    }else{

    echo json_encode(array('message' => "No posts found."));

    }
?>