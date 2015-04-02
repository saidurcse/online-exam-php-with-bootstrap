<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    <?php include("config.php"); ?>
    
    
    <?php 

    $sql = "delete from examdetails";
    $result = mysqli_query($con,$sql);  

    ?>
    
<div class="container">
<div class="row test2">
    <div class="col-md-12">
		<div class="well">
			<h2 class="text-center">Set Exam and Password</h2>
			<hr width="70%">
 
 
				<table class="table table-striped">
					<thead>
						
					</thead>
					<tbody>
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Note! </strong>Exam password has been deleted from main database.
                        </div>
					</tbody>
				</table>
		</div>
	</div> 
</div>    
    
        
    
	<?php include("sidebar1.php");  ?> 
</body>
<!--Body End-->
</html>