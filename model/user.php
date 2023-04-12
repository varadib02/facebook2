<?php

require_once('Userlevel.php');

class User{

    private string $email;
    private string $password;
    private string $firstname;
    private string $lastname;
    private int $age;

    private UserLevel $level;

    public function __construct(string $email,
                                string $password,
                                string $firstname,
                                string $lastname,
                                int $age
    )
    {
        $this->email=$email;
        $this->password=sha1($password);
        $this->firstname=ucfirst(strtolower($firstname));
        $this->lastname=ucfirst(strtolower($lastname));
        $this->age=1;
        if(is_int($age) && $age>0 && $age<101)
        {
            $this->age=$age;
        }
        $this->level=UserLevel::USER;
    }

}


?>