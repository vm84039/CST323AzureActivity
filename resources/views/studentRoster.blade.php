<?php
use App\Services\Data\SecurityDAO;
use App\Http\Controllers\StudentController;

$DAO = new SecurityDAO();
    $students= $DAO->getAllStudents();
?>
@extends('layouts.appmaster')
@section('content')
       <main class="page landing-page">
            <section class="container" data-bs-toggle="collapse">
            	<a class="btn btn-primary" role="button" style="margin: 25px;padding: 20px;" href="/newStudent"><strong>Add New Student</strong></a>

            	<form action="/selectStudent" method="POST">
            		@csrf
                    <div class="mb-3"><label class="form-label" for="id"><strong>Student ID</strong></label>
                    	<input type="number" name="id" min="1" max="5000" required="">
            			<button class="btn btn-primary" type="submit">EDIT</button></div>
            	</form>
                    	<div class="text">
                        	<h1>Students Roster</h1>
                        	<p></p>
                    	</div>
                <div class="table-responsive" style="padding: 5px;margin: 0px;">
                        <h3>
                    <input type="search" placeholder="Search..." class="form-control search-input" data-table="student-list"/>
                </h3></div>
            </section>
        	<form action="/deleteStudent" method="POST">
                    @csrf
                    <table class="table table-striped mt32 student-list">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Enrollment Year</th><th></th>
                            </tr>
                        </thead>
                        <tbody>
        				<?php
        						foreach($students as $student){
        				?>
                        <tr>
                                <td><?php echo $student->StudentID;?></td>
         						<td><?php echo $student->FirstName;?></td>
         						<td><?php echo $student->LastName;?></td>
         						<td><?php echo $student->Age;?></td>
         						<td><?php echo $student->EnrollmentYear;?></td>
         						<td><button  class="btn btn-primary" type="submit" name="studentID" value="<?php echo $student->StudentID;?>"> Delete</button></td>
                        </tr>
                        </tbody>
                    <?php } ?>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Enrollment Year</th><th></th>
                            </tr>
                        </thead>
                    </table>
            </form>
		</main>
		 @stop
<script>
            (function(document) {
                'use strict';

                var TableFilter = (function(myArray) {
                    var search_input;

                    function _onInputSearch(e) {
                        search_input = e.target;
                        var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                        myArray.forEach.call(tables, function(table) {
                            myArray.forEach.call(table.tBodies, function(tbody) {
                                myArray.forEach.call(tbody.rows, function(row) {
                                    var text_content = row.textContent.toLowerCase();
                                    var search_val = search_input.value.toLowerCase();
                                    row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                                });
                            });
                        });
                    }

                    return {
                        init: function() {
                            var inputs = document.getElementsByClassName('search-input');
                            myArray.forEach.call(inputs, function(input) {
                                input.oninput = _onInputSearch;
                            });
                        }
                    };
                })(Array.prototype);

                document.addEventListener('readystatechange', function() {
                    if (document.readyState === 'complete') {
                        TableFilter.init();
                    }
                });

            })(document);
    </script>

