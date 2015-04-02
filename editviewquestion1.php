<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    <?php include("config.php"); ?>
    
    <?php
	
	//Retrieving data from dtabases
	$qid=$_GET["question_id"];
    $sql = "select * from question where question_id=".$qid;
    $result = mysqli_query($con,$sql);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }

    //$result = mysql_query("select * from question where question_id=".$qid);

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
 ?>
    
    <!--Form Start-->
    <form method="POST" action="editviewquestion2.php" class="form-horizontal" data-toggle="validator" role="form">
        
    <h2 class="text-center">Edit Question</h2>
    
    <input type='text' id='question_id' hidden name='question_id' value="<?php echo $row["question_id"] ?>" />
                
    <div class="form-group">
        <label class="control-label col-sm-2" for="question_id">Question ID:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="question_id" id="question_id" value="<?php echo $row["question_id"] ?>" required>           
        </div>        
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="question">Question:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="question" id="question" value="<?php echo $row["question"] ?>" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="answer1">Answer1:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="answer1" id="answer1" value="<?php echo $row["answer1"] ?>" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="answer2">Answer2:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="answer2" id="answer2" value="<?php echo $row["answer2"] ?>" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="answer3">Answer3:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="answer3" id="answer3" value="<?php echo $row["answer3"] ?>" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="answer4">Answer4:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="answer4" id="answer4" value="<?php echo $row["answer4"] ?>" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="correct_option">CorrectAns:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="correct_option" id="correct_option" value="<?php echo $row["correct_option"] ?>" required>
      </div>
    </div>

    <div class="form-actions text-center">        
        <button type="submit" id="button" class="btn btn-success">Submit For Update</button>
        <!--<button type="submit" id="reset" class="btn btn-info">Reset</button>-->
    </div>
        
    </form>
    <!--Form End-->
    
        
  <?php 
  }
  ?> 
        
            
            
   <?php include("sidebar1.php");  ?> 
</body>
<!--Body End-->
</html>