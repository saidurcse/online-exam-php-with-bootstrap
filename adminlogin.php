<?php include("header.php"); ?>

<body>

    
<!-- Container -->
<div class="container"> 
      

    <?php include("navigation.php");  ?>
    
    <!-- Form-->
    <form class="form-horizontal text-center" role="form" action="checklog.php" method="post">

        <!-- Form Name -->
        <div class="jumbotron"><h2 class="text-center">Admin</h></div>

        <div class="form-group test2">
          <label class="control-label col-sm-2" for="id">Username:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id" id="id" placeholder="Name">
          </div>
        </div>

        <div class="form-group test2">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-10">          
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password">
          </div>
        </div>

        <div class="form-group test2">        
          <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-success" name="signin" id="signin">SignIn</button>        
          </div>
        </div>

    </form><!--End of Form-->

    
</div><!--End of container-->      
      
      
      
  </body>
  </html>
</div>
