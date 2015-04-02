<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    <?php include("config.php"); ?>
    
    <?php
    //generates a random number between on and one million
    $randomNumber = rand(1, 1000000);

    //Retrieving data from dtabases
    $sql1 = "insert into examdetails(`examdetails_id`,`admin_id`,`epassword`) values ('1','1','$randomNumber')";
    $result = mysqli_query($con,$sql1);


    $sql = "select epassword from examdetails";
    $result = mysqli_query($con,$sql);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    
    ?>
    
    
<div class="container">
<div class="row test2">
    <div class="col-md-12">
		<div class="well">
			<h2 class="text-center">Set Exam and Password</h2>
			<hr width="70%">
 
 
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="6%" align="left">Today Date</th>
							<th width="7%" align="left">Exam Password</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                              {
                              echo "<tr>";
                              echo "<td>" . date("d/m/Y") . "</td>";
                              echo "<td>" . $row['epassword'] . "</td>";
                              echo "</tr>";
                              }           
                            mysqli_close($con);                                                
                        ?>                        
                        
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Note!</strong> This exam password is successfully added for exam purpose in the main server database and this password will be used in main exam announced by the administrator.
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