<?php 

namespace App;

require("./PostInterface.php");

class Post implements PostInterface 
{
    protected $id;
    protected $title;
    protected $content;
    protected $author;
    protected $category;
    protected $created_at;
    protected $updated_at;

    public function __construct($id, $title, $content,$created_at, $updated_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }
    
}