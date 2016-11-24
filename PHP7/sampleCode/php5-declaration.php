<?php //in PHP 5

function enroll(Student $student, array $classes) {
    foreach ($classes as $class) {
        echo "Enrolling " . $student->name . " in " . $class;
    }
}

enroll("name",array("class 1", "class 2")); 
// Catchable fatal error: Argument 1 passed to enroll() must be an instance of Student, string given

enroll($student,"class"); 
// Catchable fatal error: Argument 2 passed to enroll() must be of the type array, string given

enroll($student, array("class 1", "class 2"));
