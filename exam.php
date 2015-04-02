<?php include("session1.php");  ?>
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
                        <th class="span12" style="text-align:center"> Welcome to Exam Main Page </th>
                    </div>                   
				</div>				
			</nav>
            
            
            <br/>
            <br/>
            
            
        
			<table class="table table-bordered table-condensed ">                
				<thead>
					<tr>                     
                       <th class="span12" style="text-align:center">Rules for Exam : </th>
				    </tr>
				</thead>          

				<tbody>
					<tr>
				     <td height="233">
                        <br/>
                        <br/> 
                        <label>
                            <p>1.Exam total time period is 10 minutes.</p>
                            <p>2.Total number of question is 10.</p> 
                            <p>3.If you score more than or equal 50% mark then ur status is Pass.</p>
                            <p>4.Each question correct option mark is 1 and wrong option mark is 0.</p>
                            <p>5.Students are bound to follow the rules and regulations  defined by the authorised exam center and then press start button to continue Exam.</p>
                        </label>
                        <br />
                        <br />                        
                     </td>
                    </tr>
				</tbody>                
			</table>
                
            <div class="span12" style="text-align:center">    
                <button type="submit" name="start" id="start" class="btn btn-default">Start Exam</button>
            </div>
                
            </form>        
		</div>
	</div>
</div>

    
    
    </body>
<!--Body End-->
</html>
