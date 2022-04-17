@extends('layouts.appmaster')
@section('content')
    <section class="clean-block clean-form dark">
        <section class="clean-block clean-hero" style=" color:rgba(9, 162, 255, 0.85); height: 800px">
            <div style="position: relative; color:rgb(9, 162, 255, 0.85);">
                <img id="background"  src="{{ asset('assets/img/tech/highschool.jpg') }}" alt="High School"
                     style=" opacity: 0.2; position: absolute; height: 800px; width: 100%;" >
                <div style="text-align: center; padding-top:200px">
                    <h2><strong>Administration Portal</strong></h2>
            </div>
            <div class="container" style="margin-top: 100px;">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                            <div class="card text-center clean-card" style="z-index:9999; " >
                                <br><br>
                                <div class="card-body info"><a class="btn btn-primary btn-lg" role="button" href="/adminLogin"><strong>Admin Login</strong><br><br></a></div>
                            </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                            <div class="card text-center clean-card" style="z-index:9999" >
                                <div class="card-body info"><a class="btn btn-primary btn-lg" role="button" href="/adminRegistration"><strong>Admin Registration</strong><br><br></a></div>
                            </div>
                    </div>

                </div>

            </div>
        </section>
    </section>
    @stop
