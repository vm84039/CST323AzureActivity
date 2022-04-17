<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    private $adminID;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $id;

    protected $table = 'Admin';
    protected $primaryKey = 'adminID';

    /**
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $password
     */
    public function __construct($firstName, $lastName, $email, $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed
     */


    public function getAdminID()
    {
        return $this->adminID;
    }

    /**
     * @param mixed $adminID
     */
    public function setAdminID($adminID): void
    {
        $this->adminID = $adminID;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
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
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


}
