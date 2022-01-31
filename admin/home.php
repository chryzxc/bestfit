<?php
require_once("../includes/initialize.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../plugins/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../plugins/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../plugins/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../plugins/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../plugins/assets/demo/demo.css" rel="stylesheet" />
</head>

      <div class="contentstudentcount">
        <div class="row">
          <div class="col-lg-4">
   <div class="card card-chart" style="background-image: linear-gradient( #89f7fe, #66a6ff);">
              <div class="card-header">
     <h4 class="card-title" align="center">Total Students</h4>
     

	<?php
	
	$con = mysqli_connect("localhost", "root", "", "bestfit_recommendation_system"); 
	
	
	if (mysqli_connect_errno()) { 
		echo "Database connection failed."; 
	} 
	
	$query = "SELECT S_ID, IDNO FROM tblstudent"; 
	
	
	$result = mysqli_query($con, $query); 
	
	if ($result) { 
	
		$row = mysqli_num_rows($result); 
		if ($row) { 
			 	printf('<h2 align="center"  style="color: orange;"> <strong>'. $row.' </strong></h2>'); 
			} 
		
		mysqli_free_result($result); 
	} 

?>



              </div>
             
              <div class="card-footer">
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart" style="background-image: linear-gradient( #ffc3a0, #ffafbd);#96deda → #50c9c3">

              <div class="card-header">
              
                <h4 class="card-title" align="center">Total Strand Offered</h4>
              
	<?php
	
	$con = mysqli_connect("localhost", "root", "", "bestfit_recommendation_system"); 
	
	
	if (mysqli_connect_errno()) { 
		echo "Database connection failed."; 
	} 
	
	$query = "SELECT COURSE_ID, COURSE_NAME FROM courseforshs"; 
	
	
	$result = mysqli_query($con, $query); 
	
	if ($result) { 
	
		$row = mysqli_num_rows($result); 
		if ($row) { 
			 	printf('<h2 align="center"  style="color: orange;"> <strong>'. $row.' </strong></h2>'); 
			} 
		
		mysqli_free_result($result); 
	} 

?>
              </div>
            
              <div class="card-footer">
                <div class="stats">
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <div class="card card-chart" style="background-image: linear-gradient( #96deda, #50c9c3);">
              <div class="card-header" align="center">
           <!--      <h5 class="card-category">Test</h5> -->
                <h4 class="card-title">Total Subjects</h4>
         
         	<?php
	
	$con = mysqli_connect("localhost", "root", "", "bestfit_recommendation_system"); 
	
	
	if (mysqli_connect_errno()) { 
		echo "Database connection failed."; 
	} 
	
	$query = "SELECT SUBJ_ID, SUBJ_CODE FROM subject"; 
	
	
	$result = mysqli_query($con, $query); 
	
	if ($result) { 
	
		$row = mysqli_num_rows($result); 
		if ($row) { 
			 	printf('<h2 align="center"  style="color: orange;">  <strong>'. $row.' </strong></h2>'); 
			} 
		
		mysqli_free_result($result); 
	} 

?>

              </div>
          
              <div class="card-footer">
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>
        </div>
          </div>




<!-- 
SECTION PARA SENIOR HIGH NA COURSE -->
   <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks" style="background-image: linear-gradient( #fdfcfb, #e2d1c3);">

              <div class="card-header ">
                <h5 class="card-category">Courses for Upcoming Senior High <i class="now-ui-icons loader_refresh spin"></i> </h5>
                <h4 class="card-title">STRAND</h4>
              </div>
              <div class="card-body ">
             	<div class="table-responsive">
                 <table class="table">

                    <thead class=" text-primary">
					<tr>
					<th>Course</th>
					<th>Description</th>
					</tr>	
					</thead>


                    <tbody>
                     
			<?php
			$mydb->setQuery("SELECT * 
			FROM  `courseforshs` c,  `department` d
			WHERE c.`DEPT_ID` = d.`DEPT_ID` ORDER BY COURSE_NAME, COURSE_LEVEL desc limit 6");

			loadresult1();

			function loadresult1(){
			global $mydb; 
			$cur = $mydb->loadResultList1();

			foreach ($cur as $result) {
			echo '<tr>';	
		
				echo '<td>'. $result->COURSE_NAME.'</td>';
			echo '<td>'. $result->COURSE_DESC.'</td>';
			echo '</tr>';


			} 
			}	
			?>

                    </tbody>
                  </table>
                </div>
              </div>


              <div class="card-footer ">
                <br><br>  <br><br>  <br>
                <div class="stats">
                 
                </div>
              </div>
            </div>
          </div>









<!-- 
          TABLE PARA HA STUDENTS -->

          <div class="col-md-6">
            <div class="card" style="background-image: linear-gradient( #fdfcfb, #e2d1c3);">
              <div class="card-header">
                <h5 class="card-category">Upcoming Senior High Student  <i class="now-ui-icons loader_refresh spin"></i> </h5>
                <h4 class="card-title"> Latest Student List</h4>
              </div>
              <div class="card-body">
              
  				<div class="table-responsive">
                 		 <table class="table">



                    <thead class=" text-primary">
                      <th>  Name </th>
                      <th> 1st  </th>
                      <th> 2nd  </th>
                       <th> 3rd  </th>
                   
                    </thead>

                    <tbody>


                    
<?php

$mydb->setQuery("SELECT  `IDNO` ,UPPER(CONCAT(  `LNAME` ,  ', ',  `FNAME` ,  ' ',  `MNAME` )) AS  'Name',`COURSE_ONE` ,`COURSE_TWO`, `COURSE_THREE` ,  `STATUS` ,  `EMAIL`
FROM  `tblstudent` ORDER BY S_ID desc limit 3");
loadresult();

				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		

					  		echo '<tr>';
					  		echo '<td  >'. $student->Name.'</td>';
					  		echo '<td align="center">'. $student->COURSE_ONE.'</td>';
					  		echo '<td  align="center">'. $student->COURSE_TWO.'</td>';
					  		echo '<td  align="center">'. $student->COURSE_THREE.'</td>';
					  		echo '</tr>';
					  		}
} 
				  	
				  	
				  	?>

                   
                    
                    </tbody>
                  </table>
               
            </div>
          </div>


</div>


    </div>
  </div>

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../plugins/assets/js/core/jquery.min.js"></script>
  <script src="../plugins/assets/js/core/popper.min.js"></script>
  <script src="../plugins/assets/js/core/bootstrap.min.js"></script>
  <script src="../plugins/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../plugins/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../plugins/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../plugins/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../plugins/assets/demo/demo.js"></script>
  <script>
  
    $(document).ready(function(){    

      $('#navbarDropdownMenuLink').on('click', function(e) {  
          if( $(this).attr('aria-expanded') == 'false' ){
            $(this).parent().addClass('show');     
            $(this).attr('aria-expanded','true');     
            $(this).next('.dropdown-menu-right').addClass('show'); 
          }else{
            $(this).parent().removeClass('show');     
            $(this).attr('aria-expanded','false');     
            $(this).next('.dropdown-menu-right').removeClass('show'); 
          }

      });    

    });

    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>