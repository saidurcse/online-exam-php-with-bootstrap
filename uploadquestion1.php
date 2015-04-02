<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    <?php include("config.php"); ?>
    
    
    <?php
    $fqid=$_POST["question_id"];
    $fques=$_POST["question"];
    $fans1=$_POST["answer1"];
    $fans2=$_POST["answer2"];
    $fans3=$_POST["answer3"];
    $fans4=$_POST["answer4"];
    $fcoption=$_POST["correct_option"];

    $sql = "insert into question(`question_id`,`question`,`answer1`, `answer2`,`answer3`,`answer4`,`correct_option`) values ('$fqid','$fques','$fans1','$fans2','$fans3','$fans4','$fcoption')";
    $result = mysqli_query($con,$sql);


    //Retrieving data from dtabases
    $sql1 = "select * from question";
    $result1 = mysqli_query($con,$sql1);


    if (!$result1) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    ?>
    
<div class="container">
<div class="row test2">
    <div class="col-md-12">
		<div class="well">
			<h2 class="text-center">Student Generate Report</h2>
			<hr width="70%">
 
 
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="6%" align="left">Q.ID</th>
							<th width="7%" align="left">Ques</th>
							<th width="7%" align="left">Ans1</th>
							<th width="7%" align="center">Ans2</th>
							<th width="7%" align="center">Ans3</th>
							<th width="7%" align="left">Ans4</th>
                            <th width="7%" align="left">Coption</th> 
						</tr>
					</thead>
					<tbody>
						<?php
							while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC))
                              {
                              echo "<tr>";
                              echo "<td>" . $row['question_id'] . "</td>";

                              echo "<td>" . $row['question'] . "</td>";
                              echo "<td>" . $row['answer1'] . "</td>";
                              echo "<td>" . $row['answer2'] . "</td>";
                              echo "<td>" . $row['answer3'] . "</td>";
                              echo "<td>" . $row['answer4'] . "</td>";
                              echo "<td>" . $row['correct_option'] . "</td>";
                              echo "</tr>";
                              }           
                            mysqli_close($con);                                                     

                        ?>                        
                        
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Success!</strong> Question has successfully uploaded in the server.
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