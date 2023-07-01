<?php
class User
{
    private $id;
    private $name;
    private $lastName;
    private $idNumber;

    public function __construct(
        $idp,
        $namep,
        $lastNamep,
        $idNumberp
    ) {
        $this->id = $idp;
        $this->name = $namep;
        $this->lastName = $lastNamep;
        $this->idNumber = $idNumberp;

    }

    public function getid()
    {
        return $this->id;

    }

    public function getname()
    {
        return $this->name;

    }

    public function getlastName()
    {
        return $this->lastName;

    }

    public function getidNumber()
    {
        return $this->idNumber;

    }






}


?>