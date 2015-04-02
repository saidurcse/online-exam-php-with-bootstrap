<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>

    <form class="test1" action="generatereport1.php" method="post">
        
        <h2 class="text-center">Generate Report</h2><br/>
        <div class="form-actions text-center">        
            <button type="submit" id="submit" class="btn btn-success"> Click Here to see all Student Result</button>
        </div>      

    </form>
    
    <?php include("sidebar1.php");  ?>

 
</body>
<!--Body End-->
</html>

