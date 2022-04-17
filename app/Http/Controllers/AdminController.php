<?php

namespace App\Http\Controllers;
use App\Services\Data\SecurityDAO;
use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller {

    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $DAO = new SecurityDAO();
        if ($DAO->login($email, $password)) {
            return view("adminPortal");
        }
        else {
            echo "Login Failed!";
            return view("loginFailed");
        }
    }

    public function addAdmin(Request $request) {
        // Assigning data from fields to variables
        $lastName = $request->input('lastName');
        $firstName = $request->input('firstName');
        $password = $request->input('password');
        $email = $this->generateEmail($firstName, $lastName);

        $DAO = new SecurityDAO();
        $Admin = new AdminModel($firstName, $lastName, $email, $password);

        $DAO->insertAdmin($Admin);
        $data = ['email' => $email];
        return view("registrationSuccess")->with($data);
    }
    public function generateEmail($firstName, $lastName): string
    {
        $i = 0;
        $domain = '@test.edu';
        return $firstName  . '.' . $lastName . $domain;
    }
/*    public function deleteAdmin(Request $request) {
        $id = $request->input('AdminID');
        $DAO = new SecurityDAO();
        $DAO->deleteAdmin($id);
        return view("adminHome");
    }*/

    public function selectAdmin(Request $request)
    {
        $id = $request->input('id');
        $DAO = new SecurityDAO();
        $Admins = $DAO->selectAdmin($id);

        foreach($Admins as $Admin){
            $id = $Admin->AdminID;
            $firstName = $Admin->FirstName;
            $lastName = $Admin->LastName;
            $age = $Admin->Age;
            $year = $Admin->EnrollmentYear;

            $data = ['id' => $id, 'firstName'=>$firstName, 'lastName'=>$lastName, 'age'=>$age, 'year'=>$year];
            return view("editAdmin")->with($data);
        }
    }


}
