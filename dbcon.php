<?php
 
        $con= mysqli_connect ('localhost', 'root', '', 'clinical_record');
        
         if ($con)
{
    echo "Rooting correct";
}
        else echo "rooting wrong";
        ?>