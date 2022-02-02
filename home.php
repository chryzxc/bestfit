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
        FROM  `grades` WHERE idno=" . $_SESSION['IDNO'] . " ORDER BY AVE DESC limit 3");
    global $mydb;
    $cur = $mydb->loadResultList3();

    $arrayGradesId = array();
    $arrayGrades = array();
    $arrayRecommendation = array();

    foreach ($cur as $result) {

      $mydb->setQuery("SELECT * 
      FROM  `subject` WHERE subj_id=" . $result->SUBJ_ID . "");
      global $mydb;
      $newCur = $mydb->loadResultList3();

      array_push($arrayGradesId, $result->SUBJ_ID);
      array_push($arrayGrades, $result->AVE);

      foreach ($newCur as $result1) {


        for ($x = 0; $x < count($arrayStrands); $x++) {

          if (strpos($arraySubjects[$x], $result1->SUBJ_DESCRIPTION) !== false) {

            array_push($arrayRecommendation, $arrayStrands[$x]);
          }
        }
      }
    }
    echo "<script>console.log('" . json_encode($arrayGradesId) . "');</script>";
    echo "<script>console.log('" . json_encode($arrayGrades) . "');</script>";
    echo "<script>console.log('" . json_encode($arrayStrands) . "');</script>";
    echo "<script>console.log('" . json_encode($arraySubjects) . "');</script>";
    echo "<script>console.log('" . json_encode($arrayRecommendation) . "');</script>";


    echo ' <div class="site-section">';
    echo '  <div class="container">';
    echo '   <div class="row">';
    echo '     <div class="col-md-5 pr-md-5 mr-auto">';
    echo '       <!--            <h2 class="line-bottom">Logged In</h2> -->';
    echo '       <h2 class="line-bottom"><b>' . $_SESSION['FNAME'] . '</b><b> ' . $_SESSION['LNAME'] . '</h2></b>';
    echo '       <p style="margin-bottom: 30px;">This page shows recommended strands for the students to choose.</p>';







    echo '     </div>';
    echo '     <div class="col-md-6">';
    echo '       <div class="quick-contact-form bg-white">';
    echo '         <h4><b>Student Login Information</b></h4>';
    echo '         <hr />';


    echo '         <label>You will see here the course that will fit you!</label><br>';
    echo '         <h2 style="margin-bottom: 0px;">1st Course: <h3 style="color: red; padding: 0px 0; margin-top: 0px; margin-bottom: 20px">' . ((count($arrayRecommendation) >= 1) ? $arrayRecommendation[0] : "None") . '</h3></h2>';

    echo '        <h2 style="margin-bottom: 0px;">2nd Course: <h3 style="color: red; padding: 0px 0; margin-top: 0px; margin-bottom: 20px">' . ((count($arrayRecommendation) >= 2) ? $arrayRecommendation[1] : "None") . '</h3></h2>';

    echo '          <h2 style="margin-bottom: 0px;">3rd Course: <h3 style="color: red; padding: 0px 0; margin-top: 0px; margin-bottom: 20px">' . ((count($arrayRecommendation) == 3) ? $arrayRecommendation[2] : "None") . '</h3></h2>';


    echo '          <hr />';

    echo '<p>Not sure on your course? Take an assessment now.</p> ';
    echo '    <a href="evaluation.php" class="btn btn-primary px-5">Take assessment <span class="fa fa-log-out"></span></a>';


    // echo '          <div class="form-group">';
    //  echo '           <a href="logout.php" class="btn btn-primary px-5">Logout <span class="fa fa-log-out"></span></a>';
    //  echo '         </div>';
    echo '       </div>';
    echo '     </div>';
    echo '    </div>';
    echo '  </div>';
    echo ' </div>';
  }




  ?>