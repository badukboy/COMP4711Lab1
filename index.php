<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ('student.php');
$students = array();


echo "hello world, its alive! ";


$first = new Student();
$first->surname = "Doe";
$first->add_email('home', 'john@doe.com');
$first->add_email('work', 'jdoe@mcdonals.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home', 'albert@brainiacs.com');
$second->add_email('work1', 'a_einstein@bcit.ca');
$second->add_email('work2', 'albert@physics.mit.edu');
$second->add_grade(85);
$second->add_grade(90);
$second->add_grade(50);
$students['a456'] = $second;

foreach($students as $student) {
    echo $student->toString();
}
