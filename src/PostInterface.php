<?php

namespace App;

Interface PostInterface 
{
    public function setAuthor(Author $author);
    public function setCategory(Category $category);
}