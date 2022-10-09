<style>
    body{
        background:maroon;
        color:white;
        margin:auto 8;
    }
    h1{
        background:blue;
        color:white;
        text-align:center;
    }
</style>



<?php
$studentid=130337;
$student_name="ruweyda ali hassan";
$subject="php webdevelopment";
$activityone=10;
$midterm=25;
$activitytwo=10;
$final_result=50;
$total_marks=$activityone+$midterm+$activitytwo+$final_result;
$semester="5th semester";
echo "<h1> asigmen :student infromation </h1>";
echo "studentid:$studentid<br>";
echo "student name:$student_name<br>";
echo "subject:$subject<br>";
echo "activityone:$activityone<br>";
echo "midterm:$midterm<br>";
echo "activitytwo:$activitytwo<br>";
echo "final result:$final_result<br>";
echo "total marks:$total_marks<br>";
echo "semester:$semester<br>";


?>