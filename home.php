  <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/bg_design.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">STUDENT PROFILE</h1>
            </div>
            <div class="col-lg-5 ml-auto"> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 

        $student = new Student();
        $cur = $student->single_student($_SESSION['IDNO']);

    
        $mydb->setQuery("SELECT * 
        FROM  `courseforshs` c,  `department` d
        WHERE c.`DEPT_ID` = d.`DEPT_ID` ORDER BY COURSE_NAME, COURSE_LEVEL desc limit 6");
  
        loadresult1();
  
        function loadresult1(){
        global $mydb; 
        $cur = $mydb->loadResultList1();
  
        foreach ($cur as $result) {
          
      
          echo "<script>console.log('" . json_encode($result->COURSE_NAME) . "');</script>";
  
        } 
        
    


      } 
    
   


      ?>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
 <!--            <h2 class="line-bottom">Logged In</h2> -->
<h2 class="line-bottom"><b><?Php echo $_SESSION['FNAME'];?></b><b> <?Php echo $_SESSION['LNAME'];?></h2></b>
            <p>This page shows recommended strand for the students to choose from.</p>
          </div>
          <div class="col-md-6">
            <div class="quick-contact-form bg-white">
                <h4><b>Student Login Information</b></h4>
                <hr/>

                
             
   
   <label>You will see here the course that will fit you!</label><br>
            <h2>Offered 1st Course: <?php echo $cur->COURSE_ONE; ?></h2>
            <h2>Offered 2nd Course: <?php echo $cur->COURSE_TWO; ?></h2>
            <h2>Offered 3rd Course: <?php echo $cur->COURSE_THREE; ?></h2>

               <hr/>


          








                  <div class="form-group">
                <a href="logout.php" class="btn btn-primary px-5">Logout <span class="fa fa-log-out"></span></a>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>