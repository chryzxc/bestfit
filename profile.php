<div class="container" style="margin-top: 90px"> 
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="wellss">
			<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
			?>		
				 <fieldset>
						<legend><b>Student Information</b></legend>
					<table class="table table-bordered" cellspacing="0">
						<tr><td>ID Number :</td><td width="80%"><?php echo $cur->IDNO; ?></td></tr>	
							<td>Fullname :</td><td><?php echo $cur->LNAME .', '. $cur->FNAME.', '. $cur->MNAME; ?></td>	</tr></tr>
							<td>Gender :</td><td><?php 
								if($cur->SEX== 'F'){
									echo "Female";
								}else{
									echo "Male";
								}	
								 ?></td>	</tr>
							<td>Age :</td><td><?php echo $cur->AGE; ?></td>	</tr>
							<td>Birth Date :</td><td><?php echo $cur->BDAY; ?></td>	</tr>
							<td>Place of Birth :</td><td><?php echo $cur->BPLACE; ?></td>	</tr>
							<td>Civil Status :</td><td><?php echo $cur->STATUS; ?></td>	</tr>
							<td>Nationality :</td><td><?php echo $cur->NATIONALITY; ?></td>	</tr>
							<td>Religion :</td><td><?php echo $cur->RELIGION; ?></td>	</tr>
							<td>Contact No. :</td><td><?php echo $cur->CONTACT_NO; ?></td>	</tr>
							<td>Email Address :</td><td><?php echo $cur->EMAIL; ?></td>	</tr>
							<td>Home Address :</td><td><?php echo $cur->HOME_ADD; ?></td>	</tr>
							

						
						
						</tr>
					</table>	


				</fieldset>


<!-- <fieldset>
<tr>
<legend>Student Information</legend>
<tr>
<tr><td>Offered 1st Course  :</td><td><?php echo $cur->COURSE_ONE; ?></td></tr>
<tr><td>Offered 2nd Course  :</td><td><?php echo $cur->COURSE_TWO; ?></td></tr>
<tr><td>Offered 3rd Course  :</td><td><?php echo $cur->COURSE_THREE; ?></td></tr>
</tr>
</fieldset> -->


				<?php
					$details = new Student_details();
					$det = $details->secondary_details($_SESSION['IDNO']);

					$cur = $student->single_student($_SESSION['IDNO']);


					$mydb->setQuery("SELECT * 
						  FROM  `courseforshs` c,  `department` d
						  WHERE c.`DEPT_ID` = d.`DEPT_ID` ORDER BY COURSE_NAME, COURSE_LEVEL desc limit 6");
loadresult1();

function loadresult1()
  {
    global $mydb;
    $cur = $mydb->loadResultList3();

    $arrayStrands = array();
    $arraySubjects = array();
  
    foreach ($cur as $result) {
      array_push($arrayStrands, $result->COURSE_NAME);
      array_push($arraySubjects, $result->COURSE_DESC);
    
    }

    $mydb->setQuery("SELECT * 
        FROM  `grades` WHERE idno=".$_SESSION['IDNO'] ." ORDER BY AVE DESC limit 3");
    global $mydb;
    $cur = $mydb->loadResultList3();

    $arrayGradesId = array();
    $arrayGrades = array();
    $arrayRecommendation = array();

    foreach ($cur as $result) {

      $mydb->setQuery("SELECT * 
      FROM  `subject` WHERE subj_id=".$result->SUBJ_ID ."");
      global $mydb;
      $newCur = $mydb->loadResultList3();

      array_push($arrayGradesId, $result->SUBJ_ID);
      array_push($arrayGrades, $result->AVE);

      foreach ($newCur as $result1) {

     
        for($x = 0; $x < count($arrayStrands) ; $x ++){

          if(strpos($arraySubjects[$x], $result1->SUBJ_DESCRIPTION) !== false){

			if (!in_array($arrayStrands[$x], $arrayRecommendation))
			{
				array_push($arrayRecommendation,$arrayStrands[$x]);
         
			}
          
        } 

        }

  }
  

    }

	echo ' <fieldset>';
	echo '<legend><b>Recommended courses</b></legend>';
	echo '<table class="table table-bordered" cellspacing="0" width="100%">';
	echo '<tbody>	';
		 
   
   
   
   
	echo ' <tr><td> 1st Course  :</td><td>'.((count($arrayRecommendation) >= 1)? $arrayRecommendation[0] :"None").'</td></tr>';
	echo ' <tr><td> 2nd Course  :</td><td>'.((count($arrayRecommendation) >= 2)? $arrayRecommendation[1] :"None").'</td></tr>';
	echo ' <tr><td> 3rd Course  :</td><td>'.((count($arrayRecommendation) == 3)? $arrayRecommendation[2] :"None").'</td></tr>';
	echo ' </tbody>	';
	echo ' </table>';
	  
   
   
	echo '</fieldset>	';
   
   
   
			   
    
  
  }

			
				?>
			
	 <fieldset>
						<legend><b>Secondary details</b></legend>
						<table class="table table-bordered" cellspacing="0" width="100%">
						<tbody>	
							<tr><td>Father :</td><td width="80%"><?php echo $det->FATHER; ?></td></tr>
							<tr><td>Occupation :</td><td><?php echo $det->FATHER_OCCU; ?></td></tr>
							<tr><td>Mother :</td><td><?php echo $det->MOTHER; ?></td></tr>
							<tr><td>Occupation :</td><td><?php echo $det->MOTHER_OCCU; ?></td></tr>
							<tr><td>Boarding :</td><td><?php echo $det->BOARDING; ?></td></tr>	
							<tr><td>With family :</td><td><?php echo $det->WITH_FAMILY; ?></td></tr>
							<tr><td>Guardian :</td><td><?php echo $det->GUARDIAN; ?></td></tr>
							<tr><td>Address :</td><td><?php echo $det->GUARDIAN_ADDRESS; ?></td></tr>
							<tr><td>Other Person Supporting :</td><td><?php echo $det->OTHER_PERSON_SUPPORT; ?></td></tr>
							<tr><td>Address :</td><td><?php echo $det->ADDRESS; ?></td></tr>
						</tbody>	
						</table>
						 


				</fieldset>	


				<?php
				$req = new Requirements();
				$res = $req->single_result($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend><b>Requirements</b></legend>
						<table class="table table-bordered" cellspacing="0">
							<tr><td>NSO :</td><td width="80%"><?php echo $res->NSO; ?></td></tr>
							<tr><td>Baptismal :</td><td><?php echo $res->BAPTISMAL; ?></td></tr>
							<tr><td>Entrance test Result :</td><td><?php echo $res->ENTRANCE_TEST_RESULT; ?></td></tr>
							<tr><td>Mirriage Contract :</td><td><?php echo $res->MARRIAGE_CONTRACT; ?></td></tr>
							<tr><td>Certificate Of Transfer :</td><td><?php echo $res->CERTIFICATE_OF_TRANSFER; ?></td></tr>

						
						</table>
						
				</fieldset>	
				</div>				
			
	  	</div><!--End of well-->

</div><!--End of container-->