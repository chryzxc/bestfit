
		<div class="wells">
				<h3 align="left">List of Student</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th width="10%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID#.</th>
				  		<th>Fullname</th>
				  		<!--	<th>1st Course</th>-->
				  		<!--	<th>2nd Course</th>-->
				  	<!--	<th>3rd Course</th> -->
				  		<th>Email Address</th>
				  		<th>Options</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
					 
				  	  	$mydb->setQuery("SELECT  `IDNO` ,UPPER(CONCAT(  `LNAME` ,  ', ',  `FNAME` ,  ' ',  `MNAME` )) AS  'Name',
				  						  `COURSE_ONE` ,`COURSE_TWO`, `COURSE_THREE` ,  `STATUS` ,  `EMAIL` , `attachment_file`
				  						  FROM  `tblstudent`");
				  	  	loadresult();

				  	
				  		function loadresult(){
							
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr>';
					  		echo '<td width="5%" align="center"></td>';
					  		echo '<td width="10%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$student->IDNO. '"/>
					  				<a href="index.php?view=edit&id='.$student->IDNO.'">' . $student->IDNO.'</a></td>';
					  		echo '<td  >'. $student->Name.'</td>';
					  	//	echo '<td align="center">'. $student->COURSE_ONE.'</td>';
					  	//	echo '<td  align="center">'. $student->COURSE_TWO.'</td>';
					  	//	echo '<td  align="center">'. $student->COURSE_THREE.'</td>';
					  		echo '<td>'. $student->EMAIL.'</td>';
						
						//	$fullpath = "data:attachment_file/jpg;charset=utf8;base64," + $imagepath;
					//	echo "<script>console.log('" . json_encode($imagepath) . "');</script>";
 
					//	<td><a href = "viewimage.php?pic='.$imagepath.'" target="_blank" ><span class="glyphicon glyphicon-list-alt"> </span>  Image</a></td>
							  echo '<div>
							  <td><a href = "index.php?view=view&studentId='.$student->IDNO.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Grades</a></td>
							  <td><a href = "viewimage.php?id='.$student->IDNO.'" target="_blank" ><span class="glyphicon glyphicon-list-alt"> </span>  Image</a></td>
							  </div>';
						//	 echo  '<img src="data:image/jpg;charset=utf8;base64,'.$imagepath.'"/> ';
						//	 <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
					  	//	echo '<td><a href = "index.php?view=view&studentId='.$student->IDNO.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
						//	  echo '<td><a href = "index.php?view=view&studentId='.$student->IDNO.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Image</a></td>';
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>


				  </tbody>
				 
				</table>
			
				
						
						<div class="btn-group">
						  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
						   <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
						</div>
				

				
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
