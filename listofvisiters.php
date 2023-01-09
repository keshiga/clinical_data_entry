<?php
include "header.html";
require "dbcon.php";
$sql = "SELECT * FROM clinical_details";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table class = 'table table-hover table-bordered table-striped'>";
    echo "<thead> <tr><th>Individual_No</th><th>Clinical_No</th><th>PersonalTP_No</th><th>Name</th><th>Hospital_Details</th> </tr> </thead><tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row["Individual_No"]."</td> <td>". $row["Clinical_No"]. "</td> <td>" . $row["Name"] ."</td> <td>".$row["PersonalTP_No"]. "</td> <td>" .$row["Hospital_Details"]. "</td> </tr>";
    }
    echo "</tbody></table>";

} else {
    echo "0 results";
}

$con->close();
include "footer.html"
?>
