<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    private $firstName;
    private $lastName;
    private $age;
    private $enrollmentYear; 
    private $courseID;
    private $courseGrade;
    private $password;
    private $id;
    
    protected $table = 'Student';
    protected $primaryKey = 'studentID';
    

    public function getId()
    {
        return $this->id;
    }
    public function __construct($firstName, $lastName, $age, $enrollmentYear) { // A constructor.
        $this->firstName = $firstName; 
        $this->lastName = $lastName; 
        $this->age = $age; 
        $this->enrollmentYear = $enrollmentYear;
    }
    public function setId($id)
    {
        $this->id= $id;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getage()
    {
        return $this->age;
    }
    public function getStringAge()
    {
        return strval($this->age);
    }
    

    public function getEnrollmentYear()
    {
        return $this->enrollmentYear;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setage($age)
    {
        $this->age = $age;
    }
    
    public function setEnrollmentYear($enrollmentYear)
    {
        $this->enrollmentYear = $enrollmentYear;
    }
    /**
     * @return mixed
     */
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * @return mixed
     */
    public function getCourseGrade()
    {
        return $this->courseGrade;
    }

    /**
     * @param mixed $courseID
     */
    public function setCourseID($courseID)
    {
        $this->courseID = $courseID;
    }

    /**
     * @param mixed $courseGrade
     */
    public function setCourseGrade($courseGrade)
    {
        $this->courseGrade = $courseGrade;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    

     
}