<?php

namespace App\Http\Controllers;
use App\Services\Data\SecurityDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StudentModel;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
class StudentController extends Controller {




    public function addStudent(Request $request): Factory|View|Application
    {
        // Assigning data from fields to variables
        $lastName = $request->input('lastName');

        $firstName = $request->input('firstName');
        $age = strval($request->input('age'));
        $enrollmentYear= strval($request->input('year'));

        $DAO = new SecurityDAO();
        $student = new StudentModel($firstName, $lastName, $age, $enrollmentYear);

        $DAO->insertStudent($student);
        return view("studentRoster");
    }
    public function deleteStudent(Request $request): Factory|View|Application
    {
        $id = $request->input('studentID');
        $DAO = new SecurityDAO();
        $DAO->deleteStudent($id);
        return view("studentRoster");
    }

    public function selectStudent(Request $request)
    {
        $id = $request->input('id');
        $DAO = new SecurityDAO();
        $students = $DAO->selectStudent($id);

        $data = ['id' => $students->getId(), 'firstName'=>$students->getFirstName(), 'lastName'=>$students->getLastName(), 'age'=>$students->getage(), 'year'=>$students->getEnrollmentYear()];
        return view("editStudent")->with($data);

    }


    public function updateStudent(Request $request): Factory|View|Application
    {
        // Assigning data from fields to variables
        $id= intval($request->input('id'));
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $age = strval($request->input('age'));
        $year= strval($request->input('year'));
        $student = new StudentModel($firstName, $lastName, $age, $year);
        $student->setId($id);
        $DAO = new SecurityDAO();

        $DAO->updateStudent($student);
        return view("studentRoster");

    }

}
