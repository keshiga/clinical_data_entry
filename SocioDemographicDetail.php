<!DOCTYPE html>
<html>
    <?php
    include "header.html";
    ?>
<head>
    <title> Past Medical history </title>
    </head>
    <body>
    <fieldset>
       <legend> Past Medical History </legend>
        <form name="Past_Medical_History" method="post" action="ScocioDemoPHP.php">
        
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="Diagnosed_Date"> Diagnosed Date </label></div>
                <div class = "col-md-3"> <input type="date" name="Diagnosed_Date" id="Diagnosed_Date"> </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="disease"> Disease/Problem </label></div>
                <div class = "col-md-3"> <input type="text" name="Disease" id="Disease"> </div> </div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="treatment_Type"> Treatment type </label></div>
                <div class = "col-md-3"> <input type="text" name="Treatment_Type" id="Treatment_Type"> </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="Treatment"> Treatment </label></div>
                <div class = "col-md-3"> <input type="text" name="Treatment" id="Treatment"> </div></div>
            <!-- Diagonsed date, disease, treatment type, treatment, doses, dose detail, doctor name
-->
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="doses"> Doses </label></div>
                <div class = "col-md-3"> <input type="text" name="doses" id="doses"> </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="dose_detail"> Dose detail </label></div>
                <div class = "col-md-3"> <input type="text" name="dose_detail" id="dose_detail"> </div></div>
            
            <div class= "row form-group">
          <div class = "col-md-3">
                <label for="Name of Doctor"> Name of Doctor </label></div>
                <div class = "col-md-3"> <input type="text" name="name_of_doctor" id="name_of_doctor"> </div>
                    
        </fieldset>
        <fieldset>
        <legend> Family history</legend>
            <div class= "row form-group">
          <div class = "col-md-3">
                <label for="Family_member_relation"> relation of family member </label></div>
                <div class = "col-md-3"> <input type="text" name="Family_member_relation" id="Family_member_relation"> </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
                <label for="Problem"> Problem </label></div>
                <div class = "col-md-3"> <input type="text" name="problem1" id="problem1"> </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="Problem"> Problem </label></div>
                <div class = "col-md-3"> <input type="text" name="problem2" id="problem2"> </div>
                        
            <!-- relation of family member, problem, diagnosed year, -->
        </fieldset>
        <input type="Submit" name="Submit2" id="Submit2" class="btn btn-success btn-sm pull-right" Value="Submit">
</form>
    </body>
    <?php
    include "footer.html";
    ?>
</html>