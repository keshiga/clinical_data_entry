<!DOCTYPE html>
<html>
 
    <?php
 require "dbcon.php";
        
$IndividualNo = $_POST['IndividualNo'];
$ClinicalNo = $_POST['ClinicalNo'];
$Name = $_POST['Name'];
$Sex = $_POST['Sex'];
$Address = $_POST['Address'];
$TPNo = $_POST['TelephoneNo'];
$HospitalDetails = $_POST['Hospital'];
$EmerName = $_POST['EmerName']; 
$Relationship = $_POST['Relationship'];
$Tpno = $_POST['Tpno'];


//$sqlu = "INSERT INTO clinical_details (Individual_No,Clinical_No,Name,Sex,Address,T.P_No, Hospital_Details,Emer_Name,Relationship,Tp_no) VALUES ('$IndividualNo', '$ClinicalNo', '$Name', '$Sex', '$Address', '$TPNo','$HospitalDetails','$EmerName','$Relationship','$Tpno')";
        
if (!$con -> query("INSERT INTO clinical_details (Individual_No,Clinical_No,Name,Sex,Address,PersonalTP_No, Hospital_Details,Emer_Name,Relationship,Tp_no) VALUES ('$IndividualNo', '$ClinicalNo', '$Name', '$Sex', '$Address', '$TPNo','$HospitalDetails','$EmerName','$Relationship','$Tpno')")) {
    echo("Error description: " . $con -> error);
  }          
/*$rs = mysqli_query($con, $sqlu);
        if ($rs){
            echo "Query performance was success";
        }
        else echo "Query performance have to check";*/
        
        
       /* echo "<br>";
        echo  $IndividualNo;
        echo "<br>";
        echo  $ClinicalNo;
        echo "<br>";
        echo  $Name;
        echo "<br>";
        echo  $Sex;
        echo "<br>";
        echo  $Address;
        echo "<br>";
        echo  $TPNo;
        echo "<br>";
        echo  $HospitalDetails;
        echo "<br>";
        echo  $EmerName;
        echo "<br>";
        echo  $Relationship;
        echo "<br>";
        echo  $Tpno;
        echo "<br>";*/
  
       ?> 
    </body>
</html>