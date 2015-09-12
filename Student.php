<?php

/**
 * Student.php
 * In this case is a victim of a PHP lab :)
 * Student objects consist of first and last name, email array and grade array. 
 * Includes methods to add emails and grades as well as calcultate the grade
 * average of a student object.
 */

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Student {
    
    /** Constructor */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /** Adds an email address and key
    * $which : key for the address, ex: home, work.
    * $address : the email address.     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /** Adds a grade the grades array of a student.*/
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /** Calculates the average of the contents of a students 
    * grade array.
    * $total: running total sum of grades array.
    * $value: next object in the grade array.*/
    function average() {
        
        $total = 0;
        foreach($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * toString method for Student object, displaying contents
     * neatly for reading. 
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= " (".$this->average().")\n";
        
        foreach($this->emails as $which=>$what) {
            $result .= $which . ": " . $what . "\n";
        }
        
        $result .= "\n";
        return '<pre>' . $result . '<pre>';
    }
}