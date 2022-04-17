@extends('layouts.appmaster')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container fw-light">
            <div class="block-heading">
                <h2 class="text-info">Admin Login</h2>
            </div>
            <form action="loginAdmin" method="POST">
                @csrf
                <div class="mb-3"><label class="form-label" for="email">Email Address</label><input class="form-control item" type="email" name="email" maxlength="30" required="" minlength="1"></div>
                <div class="mb-3"><label class="form-label" for="password">Password</label><input class="form-control item" type="password" name="password" required="" minlength="6" maxlength="15" autocomplete="off"></div>
                <button class="btn btn-primary" type="submit">Login</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-primary" role="button" href="/adminHome" type="submit">Cancel</a>
            </form>
        </div>
    </section>

@stop
