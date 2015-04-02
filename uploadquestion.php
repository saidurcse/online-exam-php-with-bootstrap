<?php include("session.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    
    
    
    <!--Form Start-->
    <form method="POST" action="uploadquestion1.php" class="form-horizontal" data-toggle="validator" role="form">
        
    <h2 class="text-center">Upload Question</h2>
        
    <div class="form-group">
        <label class="control-label col-sm-2" for="question_id">Question ID:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="question_id" id="question_id" placeholder="Enter id" required>           
        </div>        
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="question">Question:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="question" id="question" placeholder="Enter Question" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="answer1">Answer1:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="answer1" id="answer1" placeholder="Enter Answer1" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="answer2">Answer2:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="answer2" id="answer2" placeholder="Enter Answer2" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="answer3">Answer3:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="answer3" id="answer3" placeholder="Enter Answer3" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="answer4">Answer4:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="answer4" id="answer4" placeholder="Enter Answer4" required>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="correct_option">CorrectAns:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="correct_option" id="correct_option" placeholder="Enter Correct option" required>
      </div>
    </div>

    <div class="form-actions text-center">        
        <button type="submit" id="button" class="btn btn-success">Submit For Upload</button>
        <button type="submit" id="reset" class="btn btn-info">Reset</button>
    </div>
        
    </form>
    <!--Form End-->
    
    
    
    
    <?php include("sidebar1.php");  ?>

 
</body>
<!--Body End-->
</html>