<?php
require "dbcon.php";

$DiagnosedDate = $_POST['Diagnosed_Date'];
$Disease = $_POST['Disease'];
$Treatment_type = $_POST['Treatment_Type'];
$Treatment = $_POST['Treatment'];
$doses = $_POST['doses'];
$dose_detail = $_POST['dose_detail'];
$name_of_doctor = $_POST['name_of_doctor'];
$Family_member_relation = $_POST['Family_member_relation'];
$problem1 = $_POST['problem1'];
$problem2 = $_POST['problem2'];

if (!$con -> query("INSERT INTO socio_demographic_details(DiagnosedDate,Disease,TreatmentType,Treatment,Doses,DoseDetail,DoctorName,FamiyRelation,Problem1,Problem2)VALUES ('$DiagnosedDate', '$Disease','$Treatment_type','$Treatment','$doses','$dose_detail','$name_of_doctor','$Family_member_relation','$problem1','$problem2')")){
    echo("Error discription: ".$con -> error);
}
?>