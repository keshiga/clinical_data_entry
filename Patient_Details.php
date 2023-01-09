<!DOCTYPE html>
<html>
    <?php
   include "header.html"
    ?>
<head>
    <title> Patient detail form</title>
    </head>
    <body>
    <fieldset>
       <legend> Clinical details</legend>
        <form name="ClinicalDetails" method="post" action="ClinicalDetails.php">
        
        
            <div class= "row form-group">
          <div class = "col-md-3"> <label for="ClinicalNo"> Clinical No.</label> </div>
        
          <div class = "col-md-3"> <input type="number" name="ClinicalNo" id="ClinicalNo" class="form-control input-sm">  </div></div>
          <div class= "row form-group">
          <div class = "col-md-3">
                <label for="IndividualNo"> Individual No.</label> </div>
        
          <div class = "col-md-3"> 
                <input type="number" name="IndividualNo" id="IndividualNo" class="form-control input-sm">  </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
                <label for="Name"> Name </div>
          <div class = "col-md-3"> 
                <input type="text" name="Name" id="Name"
            class="form-control input-sm">  </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="Sex"> Sex </label> </div>
          <div class = "col-md-3"> 
              <select name="Sex" id="Sex"
            class="form-control input-sm">  
            <option value= ""> -select- </option>
              <option> Male </option>
                  <option> Female </option>

</select></div></div>
            <div class= "row form-group">
          <div class = "col-md-3"> 
            <label for="Address"> Address </label> </div>
          <div class = "col-md-3"> 
                <textarea name="Address" id="Address"
            class="form-control input-sm"> </textarea> </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="TpNo"> Telephone No. </label> </div>
          <div class = "col-md-3"> 
                <input type="number" name="TelephoneNo" id="TelephoneNo"
            class="form-control input-sm">  </div></div>
           <!-- <p>
            <label for="Occupation"> Occupation</label> </div>
          <div class = "col-md-3"> 
                <input type="text" name="Occupation" id="Occupation"> </p>
            <p>
                <label for="MaritalStatus"> Marital Status </label> </div>
          <div class = "col-md-3"> 
                <input type="text" name="MatritalStatus" id="MatritalStatus"> </p> -->
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="hospital"> Hospital </label> </div>
          <div class = "col-md-3"> 
            <input type="text" name="Hospital" id="Hospital"
            class="form-control input-sm">  </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="Emergency_Name"> Emergency contact person Name </label> </div>
          <div class = "col-md-3"> 
                <input type="text" name="EmerName" id="EmerName"
            class="form-control input-sm">  </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
                <label for="Relationship"> Relationship of emergency contact person </label> </div>
          <div class = "col-md-3"> 
            <input type="text" name="Relationship" id="Relationship"
            class="form-control input-sm">  </div></div>
            <div class= "row form-group">
          <div class = "col-md-3">
            <label for="Tp_no"> Telephone number of emergency contact person </label> </div>
          <div class = "col-md-3"> 
                <input type="number" name="Tpno" id="Tpno"
            class="form-control input-sm">  </div></div>
            <input type="Submit" name="Submit" id="Submit" class="btn btn-success btn-sm pull-right" Value="Submit">
        </form>
        </fieldset>
    </body>
    <?php
    include "footer.html"
    ?>
    </html>