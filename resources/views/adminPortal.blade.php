@extends('layouts.appmaster')
@section('content')
    <main class="page landing-page">
        <section class="clean-block clean-form dark" style="height: 800px"; >
            <div style="position: relative; color:rgb(9, 162, 255, 0.85);">
                <img id="background"  src="{{ asset('assets/img/tech/highschool.jpg') }}" alt="High School"
                     style=" opacity: 0.2; position: absolute; height: 800px; width: 100%;" >
                <div style="text-align: center; padding-top:200px; ">
                        <h2 class="text-info">Administration Portal</h2>
                    </div>
                    <div class="row justify-content-center" style="margin-top: 100px">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card text-center clean-card">
                                <div class="card-body info"><a class="btn btn-primary btn-lg" role="button" href="studentRoster"><strong>Current Student Roster</strong><br><br></a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
   @stop
