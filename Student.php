<?php

class studentList
{

    public function createStudentList($outList){
        $students = [];
        $listLimit = 1;
        $partList = 0;
        while ($student = $outList->fetch()){
            for($row=0;$row<$listLimit;$row++){

                $students[$partList][$row]=[
                    'firstName'  =>  $student['firstName'],
                    'lastName'  =>  $student['lastName'],
                    'groupName' =>  $student['groupName'],
                    'score' =>  $student['score']
                ];
            }
            $partList++;
        }
        return $students;
    }
}