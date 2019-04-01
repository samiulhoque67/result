<?php include('init.php');?> <!--to establish connection with database-->

<!DOCTYPE html>

<html>
    <head>
    <!--Title of the Document-->
        <title>
        	Student Exam Result management | Home
        </title>
        	
        
	<!--Css files link-->
			<link href="style.css" rel="stylesheet" type="text/css">
  			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			
    </head>

    <!--body of the document-->
    <body>

        <div class="heading" align="center">
            <h1>STUDENT RESULT</h1>
		</div>
		
	

			
				<div class="span10">
        			<table class="table table-bordered" id="example">
						<tr>  
						<!--Table Headings-->
                                                        <th rowspan="2">class</th>
							<th rowspan="2"></th>
							<th rowspan="2">Student Name</th>
							<th rowspan="2">Age</th>
							<th style="text-align:center" colspan="9">Course_Title</th>
                                                        
						</tr>
						
						<tr>
							<th>Course Title</th>
                                                        <th>grade</th>
                                                        <th>point</th>
							<th>Course No</th>
                                                        <th>grade</th>
                                                        <th>point</th>
							<th>Obtained Gpa</th>
                                                        <th>grade</th>
                                                         <th>point</th>
                                                        
							<!--<th>Edit</th>-->
						</tr>
				
						<tr>
							<?php
                                                        $name=$_POST['name'];
                                                            $id=$_POST['id'];
                                                                $class=$_POST['class'];
                                                                $password=$_POST['password'];
                                                                $dept=$_POST['dept_name'];
                                                              $user_query3=mysqli_query($con,"select password from stu where 
                                                              roll=$id && dept_name=$dept && level=$level && term=$term")
						or die(mysqli_error($con));
						$result=mysqli_fetch_row($user_query3);
                           
                            <td><?php echo $result['dept_name']; ?></td>
							<td><?php echo $result['stud_name']; ?></td>
							<td><?php echo $result['stud_id']; ?></td>
                            <td><?php echo $result['level']; ?></td>
                            <td><?php echo $result['term']; ?></td>
                                               
				
                                               

                                                        while($row=mysqli_fetch_array($result))
							{			?>
						<!--Display fetched records in table rows-->
                            
							
							<td><?php echo $row['course_title']; ?> </td>
                            <td><?php echo $row['course_no']; ?> </td>
                            <td><?php echo $row['grade'];?> </td>
                            <td><?php echo $row['point']; ?> </td>
                   
							
							<!--<td><a rel="tooltip" href="edit.php" class="btn btn-success">
							<span class="glyphicon glyphicon-pencil"></span></a></td>-->						
						</tr>   
							
                                        
			</div>
		</div>
	</body> 
</html> 