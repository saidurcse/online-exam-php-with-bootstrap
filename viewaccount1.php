<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    <?php include("config.php"); ?>
    
    <?php
        $sql = "select * from student";
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
			<h2 class="text-center">Student View Account</h2>
			<hr width="70%">
 
 
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="6%" align="left">Std. ID</th>
							<th width="7%" align="left">Std. Name</th>
							<th width="7%" align="left">Name</th>
							<th width="7%" align="center">Age</th>
							<th width="7%" align="center">Sh.Address</th>
							<th width="7%" align="left">E-mail</th>
                            <th width="7%" align="left">Password</th>
                            <th width="7%" align="left">Result</th>
 						</tr>
					</thead>
					<tbody>
						<?php
							while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                              {
                              echo "<tr>";
                              echo "<td>" . $row['student_id'] . "</td>";
                              echo "<td>" . $row['student_name'] . "</td>";
                              echo "<td>" . $row['name'] . "</td>";
                              echo "<td>" . $row['age'] . "</td>";
                              echo "<td>" . $row['sadd'] . "</td>";
                              echo "<td>" . $row['e-mail'] . "</td>";
                              echo "<td>" . $row['password'] . "</td>";
                              echo "<td>" . $row['result'] . "</td>";
                              echo "</tr>";
                              }              
                            mysqli_close($con);

                        ?>
					</tbody>
				</table>
		</div>
	</div> 
</div>
<?php include("sidebar1.php");  ?>
</body>
<!--Body End-->
</html>