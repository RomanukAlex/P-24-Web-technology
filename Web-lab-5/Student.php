<?php

require_once "Human.php";

class Student extends Human
{
    private $name;
    private $surname;
    private $faculty;
    private $courseNumber;
    private $groupNumber;

    public function __construct($age, $sex)
    {
        parent::__construct($age, $sex);
    }

    public function __destruct()
    {
        parent::__destruct();
    }

    public function getFaculty()
    {
        return $this->faculty;
    }

    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
    }

    public function getCourseNumber()
    {
        return $this->courseNumber;
    }

    public function setCourseNumber($courseNumber)
    {
        $this->courseNumber = $courseNumber;
    }

    public function getGroupNumber()
    {
        return $this->groupNumber;
    }

    public function setGroupNumber($groupNumber)
    {
        $this->groupNumber = $groupNumber;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function printObj()
    {
        echo "<br><br>";
        echo "Name: " . $this->getName() . "<br>";
        echo "Surname: " . $this->getSurname() . "<br>";
        echo "Faculty: " . $this->getFaculty() . "<br>";
        echo "Course: " . $this->getCourseNumber() . "<br>";
        echo "Group: " . $this->getGroupNumber() . "<br>";
        parent::showAge();
        parent::showSex();
    }

}