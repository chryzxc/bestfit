<?php require_once("includes/initialize.php");
if (studlogged_in()) {
?>
  <script type="text/javascript">
    window.location = "index.php";
  </script>
  <?php
}

if (isset($_POST['btnlogin'])) {
  //form has been submitted1

  $uname = trim($_POST['uname']);
  $upass = trim($_POST['pass']);

  $h_upass = $upass;
  //check if the email and password is equal to nothing or null then it will show message box
  if ($uname == '') {
  ?> <script type="text/javascript">
      alert("Invalid Username and Password!");
    </script>
    <?php

  } else {

    $user = new Student();

    $res = $user::Authenticatestudent($uname);

    if ($res == true) {
    ?> <script type="text/javascript">
        //then it will be redirected to home.php
        window.location = "index.php";
      </script>
    <?php


    } else {
    ?> <script type="text/javascript">
        alert("Username or Password Not Registered! Contact Your administrator.");
        window.location = "index.php";
      </script>
<?php
    }
  }
} else {

  $email = "";
  $upass = "";
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>BESTFITS: Career-Path Recommendation System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div class="site-wrap" id="home-section">





    <header class="site-navbar site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">

          <div class="col-3 ">
            <div class="site-logo">
              <a href="<?php echo WEB_ROOT; ?>"></a>
            </div>
          </div>

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>




          </div>


        </div>
      </div>

    </header>
    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/banner.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">BESTFITS: <br>Career-Path Recommendation System</h1>
            </div>

          </div>
        </div>
      </div>
    </div>




    <div class="site-section">
      <div class="container">

        <h5 class="line-bottom">Student Profile</h5>
        <label style="color: #fb7400;">Please make sure to keep your ID Number. This will serve as your default log-in account to the system!</label>

        <div class="card-body">
          <form action="student/controller.php?action=add" class="form-horizontal  span9" method="post" autocomplete="off" enctype="multipart/form-data">


            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="idno">ID Number*</label>
                  <input class="form-control input-sm" id="idno" name="idno" placeholder="ID Number" type="number" value="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="lName">LastName:*</label>
                  <input class="form-control input-sm" id="lName" name="lName" placeholder="Last Name" type="text">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="fName">Firstname:*</label>
                  <input class="form-control input-sm" id="fName" name="fName" placeholder="First Name" type="text">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="mName">Middlename:*</label>
                  <input class="form-control input-sm" id="mName" name="mName" placeholder="Middle Name" type="text">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control input-sm" id="gender" name="gender">
                    <option value="M">
                      Male
                    </option>

                    <option value="F">
                      Female
                    </option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="bday">Birth Date</label>
                  <input class="form-control input-sm" id="bday" name="bday" placeholder="Year-Month-Day" type="text">


                </div>
              </div>



              <div class="col-md-4">
                <div class="form-group">
                  <label for="bplace">Birth place</label>
                  <input class="form-control input-sm" id="bplace" name="bplace" placeholder="Birth Place" type="text">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="status">Civil Status</label>
                  <select class="form-control  " id="status" name="status">
                    <option value="Single">
                      Single
                    </option>

                    <option value="Married">
                      Married
                    </option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="age">Age</label>
                  <input class="form-control input-sm" id="age" name="age" placeholder="age" type="number">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="nationality">Nationality</label>
                  <input class="form-control input-sm" id="nationality" name="nationality" placeholder="Nationality" type="text">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="religion">Religion</label>
                  <input class="form-control input-sm" id="religion" name="religion" placeholder="Religion" type="text">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="contact">Contact</label>
                  <input class="form-control input-sm" id="contact" name="contact" placeholder="Contact Number" type="text">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">Email*</label>
                  <input class="form-control input-sm" id="email" name="email" placeholder="Email address" type="email">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="home">Home</label>
                  <input class="form-control input-sm" id="home" name="home" placeholder="Home Address" type="text">
                </div>
              </div>
            </div>


            <!-- upload image hit student-->
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label>Attachment Image:</label>
                </div>
                <input type="file" name="personImage" value="" id="personImage" />

              </div>
            </div>

            </fieldset>




            <br>




            <!-- 

            <fieldset>
              <legend>Secondary Details</legend>
              <label style="color: #fb7400;">This section is not required</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="father">Father</label>
                    <input class="form-control input-sm" id="father" name="father" placeholder="Father" type="text">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fOccu">Occupation</label>
                    <input class="form-control input-sm" id="fOccu" name="fOccu" placeholder="Occupation" type="text">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mother">Mother</label>
                      <input class="form-control input-sm" id="mother" name="mother" placeholder="Mother" type="text">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mOccu">Occupation</label>
                      <input class="form-control input-sm" id="mOccu" name="mOccu" placeholder="Occupation" type="text">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="boarding">Are you
                      Boarding?</label>
                    <div class="">
                      <label><input checked id="boarding" name="boarding" type="radio" value="Yes">Yes</label>
                    </div>

                    <div class="">
                      <label><input checked id="boarding" name="boarding" type="radio" value="No">No</label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="withfamily">With Family?</label>
                    <div class="">
                      <label><input checked id="withfamily" name="withfamily" type="radio" value="Yes">Yes</label>
                    </div>

                    <div class="">
                      <label><input checked id="withfamily" name="withfamily" type="radio" value="No">No</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="guardian">Guardian</label>
                    <input class="form-control input-sm" id="guardian" name="guardian" placeholder="Guardian" type="text">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="guardianAdd">Address</label>
                    <input class="form-control input-sm" id="guardianAdd" name="guardianAdd" placeholder="Guardian Address" type="text">

                  </div>
                </div>
              </div>



              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="" for="otherperson">Other person
                      Supporting</label>
                    <input class="form-control input-sm" id="otherperson" name="otherperson" placeholder="Other Person Supporting" type="text">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="otherAddress">Address</label>
                    <input class="form-control input-sm" id="otherAddress" name="otherAddress" placeholder="Address" type="text">
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend>Other Details</legend>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label for="boarding">Requirements</label>

                    <div class="col-md-8">
                      <div class="checkbox">
                        <label><input name="nso" type="checkbox" value="yes"> NSO</label>
                      </div>

                      <div class="checkbox">
                        <label><input name="baptismal" type="checkbox" value="yes">
                          Baptismal</label>
                      </div>

                      <div class="checkbox">
                        <label hidden><input name="entrance" type="checkbox" value="yes" hidden> Entrance
                          Test Result</label>
                      </div>



                      <div class="checkbox">
                        <label><input name="certifcateOfTransfer" type="checkbox" value="yes"> Certificate of Transfer</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <input class="form-control input-sm" id="course_one" name="course_one" placeholder="" type="text" hidden>
            <input class="form-control input-sm" id="course_two" name="course_two" placeholder="" type="text" hidden>
            <input class="form-control input-sm" id="course_three" name="course_three" placeholder="" type="text" hidden>
            <br> -->

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-6"></div>
                </div>

                <div class="col-md-6" style="text-align: right">

                  <button class="btn btn-primary px-5" name="submit" type="submit">Save</button>
                </div>
              </div>
            </div>


          </form>
          <div class="col-md-6" style="text-align: left">
            <a href="login.php"><button class="btn btn-primary px-5" type="submit">Login</button></a>
          </div>

        </div>
        <!--End of container-->

      </div>
      <!--End of container-->
    </div>






  </div>
  </div>

















  <!-- <BR>  <BR>  <BR>  

  <div class="site-section">
      <div class="container">

        
        
            <div class="quick-contact-form bg-white">
                <h2>Create Account Here</h2>
                <form action="login.php" method="POST">
                  <div class="form-group">
                    <input type="number" class="form-control" name="uname" placeholder="Student Id Number">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                  </div> 
                  <div class="form-group">
                    <input type="submit" value="Login" name="btnlogin" class="btn btn-primary px-5">
                  </div>
                </form>
              </div> -->



  <!--   
      </div>
    </div> -->






  <!-- THIS IS THE FOOTER -->
  <footer>
    <div class="container">

      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">

          </div>
        </div>

      </div>
    </div>
  </footer>

  </div>

  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/popper.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/bootstrap.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/owl.carousel.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.sticky.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.fancybox.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/aos.js"></script>

  <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/main.js"></script>

</body>

</html>