<?php 

namespace App;

class User 
{
    protected $id;
    protected $email;
    protected $password;

    public function __construct($id, $email, $password)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }
    
}