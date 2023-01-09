<!DOCTHYPE html>
<html>
    <head>
        <title> reculardata</title>
</head>
<body>
    <?php
$con = mysqli_connect('localhost', 'root', '', 'entry_form');

if ($con)
{
    echo "Rooting correct";
}
        else echo "rooting wrong";

$txtDate = $_POST['Date'];
$txtWt = $_POST['Wt'];
$txtHt = $_POST['Ht'];
$txtBMI = $_POST['BMI'];
$txtBP = $_POST['BP'];
$txtPR = $_POST['PR'];
$txtPEFR = $_POST['PEFR'];
//drug compliance GOOD, Average, Poor optionss in one cell
//$txtDrugcompliance = $_POST['Drugcompliance'];
$txtACTscore = $_POST['ACTscore'];
$txtCVD = $_POST['CVD'];

$sql = "INSERT INTO regulardata (date, weight, height, BMI, BP, PR, PEFR, Dass21Score, DrugCompliance, ACTscore, CVDrisk%) VALUES ($txtDate, $txtWt, $txtHt, $txtBMI, $txtBP, $txtPR, $txtPEFR, $txtACTscore, $txtCVD )";




$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Query performance was success";
}
else echo "Query performance have to check";

echo  $txtDate;
        echo "<br>";
        echo  $txtWt;
        echo "<br>";
        echo  $txtHt;
        echo "<br>";
        echo  $txtBMI;
        echo "<br>";
        echo  $txtBP;
        echo "<br>";
        echo  $txtPR;
        echo "<br>";
        echo  $txtPEFR;
        echo "<br>";
        echo  $txtACTscore;
        echo "<br>";
        echo  $txtCVD;
        echo "<br>";



    ?>
    </body>
    </html>