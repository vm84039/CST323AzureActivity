<?php

namespace App\Services\Data;
use App\Models\AdminModel;
use App\Models\StudentModel;
use Illuminate\Support\Facades\DB;

class SecurityDAO
{
    public function __construct()
    { // A constructor.
    }

//**************************************Student******************************************

    public function getAllStudents(): \Illuminate\Support\Collection
    {
        return DB::table('ms40m54cx59nqpn3.Student')->get();
    }

    public function insertStudent(StudentModel $student)
    {
        // Assigning data from fields to variables
        DB::table('ms40m54cx59nqpn3.Student')->insert([
            'FirstName' => $student->getFirstName(),
            'LastName' => $student->getLastName(),
            'Age' => $student->getAge(),
            'EnrollmentYear' => $student->getEnrollmentYear()
        ]);
    }

    public function updateStudent(StudentModel $student): int
    {
        return DB::update('update ms40m54cx59nqpn3.Student set
            FirstName = ?,
            LastName = ?,
            Age = ?,
            EnrollmentYear = ? WHERE
            StudentID = ?', [$student->getFirstName(), $student->getLastName(), $student->getStringAge(), $student->getEnrollmentYear(), $student->getId()]
        );
    }

    public function deleteStudent(int $id): int
    {
        return DB::table('ms40m54cx59nqpn3.Student')->where('StudentID', '=', $id)->delete();
    }

    public function selectStudent(int $id): StudentModel
    {
        $student = new StudentModel('', '', 1, 1);
        $temps = DB::table('ms40m54cx59nqpn3.Student')
            ->select('StudentID', 'FirstName', 'LastName', 'Age', 'EnrollmentYear')
            ->where('StudentID', '=', $id)
            ->get();
        foreach ($temps as $temp) {
            $student = new StudentModel($temp->FirstName, $temp->LastName, $temp->Age, $temp->EnrollmentYear);
            $student->setId($temp->StudentID);
        }
        return $student;
    }

//**************************************Admin******************************************
    public function emailDuplicate(string $email): bool
    {
        $temps = DB::table('ms40m54cx59nqpn3.Admin')
            ->select('AdminID', 'FirstName', 'LastName', 'Email', 'Password')
            ->where('Email', '=', $email)
            ->get();
        if ($temps == NULL) {
            return false;
        }
            return true;

   }

    public function insertAdmin(AdminModel $admin)
    {
        // Assigning data from fields to variables
        DB::table('ms40m54cx59nqpn3.Admin')->insert([
            'FirstName' => $admin->getFirstName(),
            'LastName' => $admin->getLastName(),
            'Email' => $admin->getEmail(),
            'Password' => $admin->getPassword()
        ]);
    }

    public function selectAdmin(int $id): AdminModel
    {
        $admin = new AdminModel('', '', 1, 1);
        $temps = DB::table('ms40m54cx59nqpn3.Admin')
            ->select('AdminID', 'FirstName', 'LastName', 'Email', 'Password')
            ->where('AdminID', '=', $id)
            ->get();
        foreach ($temps as $temp) {
            $admin = new AdminModel($temp->FirstName, $temp->LastName, $temp->Email, $temp->Password);
            $admin->setId($temp->AdminID);
        }
        return $admin;
    }
    public function login(string $email, string $password): bool
    {
        if (DB::table('ms40m54cx59nqpn3.Admin')
            ->where('Email', $email)
            ->where('Password', $password)->exists()) {
                    return true;
        }
        else {return false;}
    }
}
