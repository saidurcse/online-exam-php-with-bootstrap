<?php include("session.php");  ?>
<?php include("header.php");  ?>


<body>
    
    <?php include("navigation1.php");  ?>
    <?php include("sidebar.php");  ?>
    <?php include("config.php"); ?>
    
    
    <!--Data retreival from Database-->
    <?php
    $fsid=$_POST["student_id"];
    $fsname=$_POST["student_name"];
    //$ftid=$_POST["test_id"];
    //$faid=$_POST["admin_id"];
    $fname=$_POST["name"];
    $fage=$_POST["age"];
    $fsadd=$_POST["sadd"];
    $femail=$_POST["e-mail"];
    //$fpassword=$_POST["password"];
    
    /*Random password*/
    $fpassword = rand(1, 10000);

    $sql1 = "insert into student(`student_id`,`student_name`,`name`, `age`,`sadd`, `e-mail`, `password`) values 
                            ('$fsid','$fsname','$fname','$fage','$fsadd','$femail','$fpassword')";
    $result1 = mysqli_query($con,$sql1);


    

    $sql = "select * from student";
    $result = mysqli_query($con,$sql);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    ?>
    
    <!--Div Container Start-->
    <div class="container">
        
        <div class="row test2">
           <div class="col-md-12">
              <div class="well">
                <h2 class="text-center">Student Login Module</h2>
                <hr width="70%">
        
        
        <!--Table Start-->
        <table class="talbe table-bordered table-striped">
            <thead>
                <tr>
                    <th width="6%" align="left">S.ID</th>
                    <th width="7%" align="left">S.NAME</th>
                    <th width="7%" align="left">Name</th>
                    <th width="7%" align="center">Age</th>
                    <th width="7%" align="center">Sh.Address</th>
                    <th width="7%" align="center">E-mail</th>
                    <th width="7%" align="left">Password</th>
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
                echo "</tr>";            
            }           
            

            /*echo "Your record successfully added";*/
            mysqli_close($con);

            ?>
            </tbody>
        </table>
        <!--Table End-->
          </div>
        </div> 
      </div>
    </div>
    <!--Div Container End-->
    
    <?php include("sidebar1.php");  ?>   
    
 
</body>
</html>  
    
