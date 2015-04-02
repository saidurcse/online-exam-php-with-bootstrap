<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    <?php include("config.php"); ?>
    
    <?php    

    //Retrieving data from dtabases
    $sql = "select * from question";
    $result = mysqli_query($con,$sql);
    
    ?>

<div class="container">
<div class="row test2">
    <div class="col-md-12">
		<div class="well">
			<h2 class="text-center">Edit Question</h2>
			<hr width="70%">
 
 
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="6%" align="left">Edit Question</th>
							<th width="7%" align="center">Question ID</th>
							<th width="7%" align="left">Question Title</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                              {
                                  echo "<tr>";
                                
                                  echo "<td>" . $row['question_id'] . "</td>";  
                                
                                  echo "<td>";
                                  echo "<a href='editviewquestion1.php?question_id=".$row['question_id']."'>" . " <input type='button' value='Edit Question'>  </a>";
                                  echo "</td>";
                                  
                                  echo "<td>" . $row['question'] . "</td>";

                                  echo "</tr>";
                              }              
                            mysqli_close($con);

                        ?>
					</tbody>
				</table>
		</div>
	</div>




    <?php include("sidebar1.php");  ?> 
</body>
<!--Body End-->
</html>