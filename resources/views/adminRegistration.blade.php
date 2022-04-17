@extends('layouts.appmaster')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container fw-light">
            <div class="block-heading">
                <h2 class="text-info">Admin Registration</h2>
                <p>Please enter first name, last name, and strong password.&nbsp; You will be given an email address upon registration.&nbsp;<br></p>
                <p><br><br><br></p>
                <p class="fs-6 fw-light text-danger">Password must contain uppercase letter, lowercase letter, number, and special character with at least 6 characters<br></p>
            </div>
            <form action="addAdmin" method="POST">
                @csrf
                <div class="mb-3"><label class="form-label" for="firstName">First Name</label><input class="form-control item" type="text" name="firstName" maxlength="30" required="" minlength="1"></div>
                <div class="mb-3"><label class="form-label" for="lastName">Last Name</label><input class="form-control item" type="text" name="lastName" required="" maxlength="30" minlength="1"></div>
                <div class="mb-3"><label class="form-label" for="password">Password</label><input class="form-control item" type="password" name="password" required="" minlength="6" maxlength="15" autocomplete="off"></div>
                <div class="mb-3"><label class="form-label" for="cpassword">Confirm Password</label><input class="form-control item" type="password" name="cPassword" required="" minlength="6" maxlength="15" autocomplete="off"></div>
                <button class="btn btn-primary" type="submit">Sign Up</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-primary" role="button" href="/adminHome" type="submit">Cancel</a>

            </form>
        </div>
    </section>
@stop
