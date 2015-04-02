<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    
    <!--Form Start-->
    <form method="POST" action="registration.php" class="form-horizontal" data-toggle="validator" role="form">
        
    <h2 class="text-center">Student Login Module</h2>
        
    <div class="form-group">
        <label class="control-label col-sm-2" for="student_id">Student ID:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="student_id" id="student_id" placeholder="Enter id" required>
        </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="student_name">StudentName:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="student_name" id="student_name" placeholder="Enter name" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter username" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="age" id="age" placeholder="Enter age" required>
      </div>                  
     </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="sadd">Shipping Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="sadd" id="sadd" placeholder="Enter address" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="e-mail">E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="e-mail" id="e-mail" placeholder="Enter email" data-error="Bruh, that email address is invalid" required>
        <div class="help-block with-errors"></div>
      </div>
    </div>

    <div class="form-actions text-center">        
        <button type="submit" id="submit" class="btn btn-success">Submit For Registration</button>
    </div>
        
    </form>
    <!--Form End-->
        
    <?php include("sidebar1.php");  ?>
    
    
 
</body>
<!--Body End-->
</html>