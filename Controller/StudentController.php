<?php

include_once("../Model/StudentModel.php");

//1. Declaration

class  Ctrl_Student
{
    public function invoke()
    {
        if (isset($_GET['stid'])) {
            $modelStudent =  new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['stid']);

            include_once("../View/StudentDetail.php");
        } else {
            $modelStudent =  new Model_Student();
            $studentList = $modelStudent->getAllStudent();

            include_once("../View/StudentList.php");
        }
    }
};


//////////////////////////////////////
//2. Process

$C_Student = new Ctrl_Student();
$C_Student->invoke();
