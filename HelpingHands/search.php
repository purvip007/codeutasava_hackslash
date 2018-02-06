<?php include_once './header.php'; ?>

<div  class="myheading">
<h1>Search your Scheme</h1>
</div>
<br>
<form name="form1" action="" method="post">
<div class="row text-justify" style="font-size: 1.2em;">
    <div class="col-sm-6">
        <h1>Enter the Following Details :</h1>
        <br><br>
        <b>Ministry : -</b>
        <br>
        <select class="form-control">
            <?php
            $query="SELECT DISTINCT * FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Ministry"]; ?></option>
            <?php 
            }
            ?>
        </select><br>
        <b>State :- </b>
        <select class="form-control">
            <?php
            $query="SELECT DISTINCT * FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["State"]; ?></option>
            <?php 
            }
            ?>   
        </select><br>
        <b>Gender :- </b>
        <select class="form-control">
            <?php
            $query="SELECT DISTINCT * FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Gender"]; ?></option>
            <?php 
            }
            ?>
            </select><br>
    </div>
    <div class="col-sm-6">
        <br><br><br><br><br>
        <b>Beneficiary :- </b>
        <select class="form-control">
            <?php
            $query="SELECT DISTINCT * FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Beneficiary"]; ?></option>
            <?php 
            }
            ?>            
        </select><br>
        <b>Disability :- </b>
        <select class="form-control">
            <?php
            $query="SELECT DISTINCT * FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Disability"]; ?></option>
            <?php 
            }
            ?>        
        </select><br>
        <b>Salary :-</b>
        <select class="form-control">
            <?php
            $query="SELECT DISTINCT * FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Salary"]; ?></option>
            <?php 
            }
            ?>          
        </select>
        </form>
</div>
</div>
    <div> 
      <button type="submit" class="btn btn-primary" >Submit</button>
  </div>


<?php include_once './footer.php'; ?>