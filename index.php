<?php

/**
 * Index.php
 * Landing page for comp4711Lab1 project
 * Creates an array of Student objects and displays them in 
 * order of their index. 
 */

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ('student.php');

//init array of student objects called students
$students = array();


echo "hello world, its alive! ";

//create some students

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

$third = new Student();
$third->surname = "Tekenos";
$third->first_name = "Jessica";
$third->add_email('home', 'jessicatekenos@gmail.com');
$third->add_email('school', 'jtekenos@my.bcit.ca');
$third->add_grade(97);
$third->add_grade(88);
$third->add_grade(67);
$students['j514'] = $third;

//sorts students
ksort($students);

//displays each student object in the array 
foreach($students as $student) {
    echo $student->toString();
}


