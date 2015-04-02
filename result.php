<?php include("session2.php");  ?>
<?php include("header.php");  ?>

<!--Body Start-->
<body>
    
    <?php include("navigation2.php");  ?>
    <?php include("config.php");  ?>
    
    
    

<div class="container test1">
	<div class="row clearfix">
		<div class="col-md-12 column">
            
            <form role="form" method="post" action="exam2.php" role="form">
                
            
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span><span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         </button> <a class="navbar-brand" href="#"></a>
				</div>
				
				<div class="collapse navbar-collapse test3" id="bs-example-navbar-collapse-5">
                    <div class="span12" style="text-align:center">    
                        <th class="span12" style="text-align:center"> Welcome to Exam Result Page </th>
                    </div>                   
				</div>				
			</nav>
            
            
            <br/>
            <br/>
            
            
        
			<table class="table table-bordered table-condensed ">                
				<thead>
					<tr>                     
                       <th class="span12" style="text-align:center"> Your Result Details: </th>
				    </tr>
				</thead>          

				<tbody>
					<tr>
				     <td height="233">
                        <br/>
                        <br/> 
                        <div class="span12" style="text-align:center">
                            <?php  
                                                           
                                                          
                              $sql = "select result from student where student_id='$student_id' ";     
                              $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                                     {        
                                        echo "<br/>";
                                        echo "<label>";
                                        echo "<p>Your Total Score : </p>";
                                        echo "</label>";
                                        echo " " . $row['result'];
                                    
                                        echo "<br/>";
                                        echo "<br/>";
                                    
                                    
                                        echo "<label>";
                                        // Pass Score is 5
                                        if($row['result'] >= 5)
                                        {
                                            echo "<p>Status : Pass</p> ";                  
                                        } 
                                        else
                                        {                                        
                                            echo "<p>Status : Fail</p> ";                                         
                                        }
                                        echo "</label>";

                                     }
                                $sql1 = "update student set appeared=1 where student_id='$student_id'";
                                $result1 = mysqli_query($con,$sql1);

                                mysqli_close($con);

                             ?>
                        </div>
                        <br />
                        <br />                        
                     </td>
                    </tr>
				</tbody>                
			</table>
                
            </form>        
		</div>
	</div>
</div>

    
    
    </body>
<!--Body End-->
</html>
