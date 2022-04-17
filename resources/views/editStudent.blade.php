<?php
use App\Http\Controllers\StudentController?>

@extends('layouts.appmaster')
@section('content')
    <main class="page pricing-table-page">
        <section class="clean-block clean-pricing dark">
            <section class="clean-block clean-form dark">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Update Student Registration</h2>
                    </div>
                    <form action="updateStudent" method="POST"> @csrf
                    
                 	
                    	<div class="mb-3"><label class="form-label" for="id">Student ID</label><input class="form-control item" type="text" name="id" value="<?php echo $id?>" readonly></div>
                        <div class="mb-3"><label class="form-label" for="firstName">First Name</label><input class="form-control item" type="text" name="firstName" value="<?php echo $firstName?>" minlength="1" maxlength="20" required=""></div>
                        <div class="mb-3"><label class="form-label" for="lastName">Last Name</label><input class="form-control item" type="text" name="lastName" minlength="1" maxlength="30" value="<?php echo $lastName?>" required=""></div>
                        <div class="mb-3"><label class="form-label" for="age">Age             </label><input class="form-control item" name="age" required="" type="text" minlength="1" maxlength="6" value="<?php echo $age?>"></div>
                        <div class="mb-3"><label class="form-label" for="year">Enrollment Year</label><input class="form-control item" type="text" name="year" required="" minlength="1" maxlength="2" value="<?php echo $year?>"> </div><button class="btn btn-primary" type="submit">SAVE</button>
                    </form>
                </div>
            </section>
        </section>
    </main>
    @stop
</html>         


