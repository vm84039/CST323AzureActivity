@extends('layouts.appmaster')
@section('content')
    <main class="page pricing-table-page">
        <section class="clean-block clean-pricing dark">
            <section class="clean-block clean-form dark">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">New Student Registration</h2>
                    </div>
                    <form action="addStudent" method="POST">
                    @csrf
                        <div class="mb-3"><label class="form-label" for="firstName">First Name</label><input class="form-control item" type="text" name="firstName" minlength="1" maxlength="20" required=""></div>
                        <div class="mb-3"><label class="form-label" for="lastName">Last Name</label><input class="form-control item" type="text" name="lastName" minlength="1" maxlength="30" required=""></div>
                        <div class="mb-3"><label class="form-label" for="age">Age             </label></div><input class="form-control item" name="age" required="" type="number"min="1" max="25">
                        <div class="mb-3"><label class="form-label" for="year">Enrollment Year</label></div><input class="form-control item" type="number" name="year" required="" min="1" max="4"><button class="btn btn-primary" style="margin: 25px;" type="submit">ADD</button>
                    </form>
                </div>
            </section>
        </section>
 @stop
