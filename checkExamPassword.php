<?php include("session1.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation2.php");  ?>
    
    <form class="test1 form-inline" action="checklog2.php" method="post">
        
        <h2 class="text-center">Enter Exam Password</h2>
        <br/>
        <br/>
        <br/>
        <div class="form-actions text-center"> 
            <div class="form-group">
                <label for="exam_password">Password: </label>
                <input type="password" class="form-control" name="exam_password" id="exam_password" placeholder="Enter password"/>
            </div>            
            
            <button type="submit" name="enter_exam" id="enter_exam" class="btn btn-success">  Submit </button>
        </div>    
    </form>

</body>
<!--Body End-->
</html>

