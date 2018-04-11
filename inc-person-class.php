<?php
class Bowler
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function getfirstName()
    {
        return $this->firstName;
    }

    public function setfirstName($firstName)
    {
        return $this->firstName = $firstName;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function setlastName($lastName)
    {
        return $this->lastName = $lastName;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        return $this->email = $email;
    }

    public function getpassword()
    {
        return $this->password;
    }

    public function setpassword($password)
    {
        return $this->password = $password;
    }
}


?>
