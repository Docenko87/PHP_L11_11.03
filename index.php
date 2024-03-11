<?php

class Person
{
    public $firstName;
    public $lastName;
    protected $age;

    function __construct(
        string $firstName,
        string $lastName,
        int $age
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->setAge($age);
    }

    function getAge(): int
    {
        return $this->age;
    }

    function setAge(int $newAge)
    {
        if ($newAge >= 0 && $newAge < 150) {
            $this->age = $newAge;
        } else {
            $this->age = 0;
        }
    }

    function __toString(): string
    {
        return $this->firstName[0] .
            ". $this->lastName, $this->age\n";
    }
}

class Student extends Person
{
    public $subjects;

    function __construct(
        string $firstName,
        string $lastName,
        int $age,
        array $subjects
    ) {
        //конструирование человека
        parent::__construct($firstName, $lastName, $age);
        $this->subjects = $subjects;
    }
    function __toString(): string
    {
        $tmp = 'Subjects: ';
        foreach ($this->subjects as $subject) {
            $tmp .= "$subject ";
        }
        return parent::__toString() . $tmp;
    }
}

// $ivan = new Person('Ivan', 'Ivanov', -30);
// echo $ivan->getAge() . "\n";
// $ivan->setAge(31);
// echo $ivan->getAge();


$student = new Student(
    'Ivan',
    'Ivanov',
    30,
    ['PHP', 'JS', 'React']
);
// echo $student;
print_r($student->subjects);

class Point2D
{
    public $x;
    public $y;
    function __construct(int|float $x, int|float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function __toString(): string
    {
        return "($this->x, $this->y)\n";
    }
}

class Point3D extends Point2D
{
    public $z;

    function __construct(
        int|float $x,
        int|float $y,
        int|float $z
    ) {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    function __toString(): string
    {
        return "($this->x, $this->y, $this->z)\n";
    }
}

$p1 = new Point2D(1, 3);
echo $p1;

$p2 = new Point3D(1, 2, 3);
echo $p2;
