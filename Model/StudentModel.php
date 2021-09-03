<?php
include_once("StudentEntity.php");

class Model_Student
{
    public function __construct()
    {
    }

    public function getAllStudent()
    {
        // Minh họa load dữ liệu từ CSDL
        return array(
            "1" => new Entity_Student(1, "Le Dang Dung", 22, "University of Infomation Technology"),
            "2" => new Entity_Student(2, "Pham Van Hoang", 23, "University of Infomation Technology"),
            "3" => new Entity_Student(3, "Nguyen Van B", 21, "University of Infomation Technology"),
        );
    }

    public function getStudentDetail($stid)
    {
        // giải sử lấy dữ liệu từ CSDL
        $allStudent = $this->getAllStudent();
        return $allStudent[$stid];
    }
}
