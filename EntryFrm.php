<!DOCTYPE html>
<html>
<head>
    <title> Entry Form PHP</title>
    </head>
    
    <body>
<?php
$con= mysqli_connect('localhost', 'root', '', 'entry_form');

        if ($con)
{
    echo "Rooting correct";
}
        else echo "rooting wrong";
        
$txtID = $_POST['Patient_ID'];
$txtPatient_Name = $_POST['Patient_Name'];
$txtPhoneNum = $_POST['PhoneNum'];
$NIC = $_POST['NIC'];
$Age= $_POST['Age'];

$sql = "INSERT INTO patientdetails(Patient_ID, Patient_Name,PhoneNum,NIC,Age) VALUES ('$txtID', '$txtPatient_Name', '$txtPhoneNum', '$NIC', '$Age')";

          
$rs = mysqli_query($con, $sql);
        
        if ($rs){
            echo "Query performance was success";
        }
        else echo "Query performance have to check";
        
        {  echo  $txtID;
        echo "<br>";
       echo $txtPatient_Name;
        echo "</br>";
           echo $txtPhoneNum;
        echo "</br>";
echo $NIC;
        echo "</br>";
echo $Age;
        echo "</br>";}
        
?>
</body>
</html>