<?php


class Human
{
    private $age;
    private $sex;

    public function __construct($age, $sex)
    {
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __destruct()
    {
        // TODO: Implement__destruct() method.
    }

    public function showAge()
    {
        echo "Age: " . $this->age . "<br>";
    }

    public function showSex()
    {
        echo "Sex: " . $this->sex . "<br>";
    }

    public function printObj(){}
}