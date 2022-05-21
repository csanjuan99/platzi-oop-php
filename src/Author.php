<?php

namespace App;

require("./User.php");

class Author extends User
{
    private $name;
    private $lastname;

    public function __construct($id, $email, $password, $name, $lastname)
    {
        parent::__construct($id, $email, $password);
        $this->name = $name;
        $this->lastname = $lastname;
    }

}