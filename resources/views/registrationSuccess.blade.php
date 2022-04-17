<?php use App\Http\Controllers\StudentController?>
@extends('layouts.appmaster')
@section('content')
<section class="clean-block clean-hero" style=" color:rgba(9, 162, 255, 0.85); background-image:url('{{ asset('assets/img/tech/highschool.jpg') }}');">
    <div class="text">
        <h2>Registration Successful</h2>
            <p><br><br>
            Your new email address is <strong><?php echo $email?></strong>.  Please login with your new email address.
        </p>
        <div class="card-body info"><a class="btn btn-primary btn-lg" role="button" href="/adminLogin" style = "border: 3px groove var(--bs-danger)";><strong>Login</strong></a></div>
    </div>
</section>
@stop
