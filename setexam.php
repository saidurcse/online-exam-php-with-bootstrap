<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>

    <form class="test1" action="setexam1.php" method="post">
        
        <h2 class="text-center">Set Exam and Password</h2>
        <br/>
        <div class="form-actions text-center">        
            <button type="submit" id="submit" class="btn btn-success"> Click button to Generate a Password for Exam </button>
        </div>      

    </form>
    
    <br/>
    
    <form class="test1" action="setexam2.php" method="post">
        
        <div class="form-actions text-center">        
            <button type="submit" id="submit" class="btn btn-success"> Click button to Erase exam main password </button>
        </div>      

    </form>
    
    <?php include("sidebar1.php");  ?>

 
</body>
<!--Body End-->
</html>

