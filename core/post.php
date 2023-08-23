<?php

class Post {
    // db stuff
    private $connection;
    private $table = 'post';


    // post properties
    public $id;
    public $category_id;
    public $catrgory_name;
    public $title;
    public $body;
    public $author;
    public $created_at;



    //constructorr with db connection
    public function __construct($db){
        $this->connection = $db;
    }

    public function read() {
        $query = 'SELECT c.name as category_name,
        p.id,
        p.category_id,
        p.title,
        p.body,
        p.author,
        p.created_at 
        FROM 
        ' .$this->table . ' p
        LEFT JOIN 
        categories c ON p.category_id = c.id 
        ORDER BY p.created_at DESC';

    

    // prepare statement
    $stmt = $this->connection->prepare($query);
    $stmt->execute();

    return $stmt;







}
}


?>