<?php require_once("includes/initialize.php");
?>
<style>
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    #result {
        white-space: pre;
    }



    button {
        border-radius: 20px;
        background-color: #fb7400;
        color: white;


        text-decoration: none;
        border: none;

    }


    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }


    .checkmark {

        position: absolute;
        top: 8;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
        border-radius: 50%;

    }


    .container:hover input~.checkmark {
        background-color: #ccc;
    }


    .container input:checked~.checkmark {
        background-color: #fb7400;
    }


    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }


    .container input:checked~.checkmark:after {
        display: block;
    }


    .container .checkmark:after {
        top: 6px;
        left: 6px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }


    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);

    }

    
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 100%;
    }

    
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>





<!doctype html>
<html lang="en">

<head>
    <title>Assessment</title>
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">




    <div class="container" style="margin-top: 10px">
        <caption>
            <h2 class="line-bottom"><b>Student Evaluation</b></h2>

        </caption>
        <!--  <form> -->

        <!--Questionnaire-->


        <!-- -->
        <h3 style="margin-top: 50px; ">1. What subject interests you?</h3>

        <label class="container" style="padding-left: 30px;">Music, Arts, Physical Education, and Health
            <input id="choice" type="checkbox" name="q1" value="SportsArts">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; ">Mathematics (Business)
            <input id="choice" type="checkbox" name="q1" value="Business">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; ">Contemporary Issues
            <input id="choice" type="checkbox" name="q1" value="HUMMS">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; ">Biology
            <input id="choice" type="checkbox" name="q1" value="Science">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">ICT
            <input id="choice" type="checkbox" name="q1" value="Technical-Vocational-Livelihood">
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h3>2. An activity that you like the most</h3>

        <label class="container" style="padding-left: 30px;">Solving Math Problems
            <input id="choice" type="checkbox" name="q2" value="STEM">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Composing Music
            <input id="choice" type="checkbox" name="q2" value="Arts">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Reading about Philosophy
            <input id="choice" type="checkbox" name="q2" value="HumanitiesAndSocialSciences">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Making Crafts
            <input id="choice" type="checkbox" name="q2" value="Arts">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Studying financial management, business management, corporate operations
            <input id="choice" type="checkbox" name="q2" value="ABM">
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h3>3. A working environment that you dream of</h3>

        <label class="container" style="padding-left: 30px;">Data -Driven Environment
            <input id="choice" type="checkbox" name="q3" value="STEM">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Creative Environment
            <input id="choice" type="checkbox" name="q3" value="Arts">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">An Environment of Different Cultures
            <input id="choice" type="checkbox" name="q3" value="HUMMS">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">An Environment With a Mix of Everything
            <input id="choice" type="checkbox" name="q3" value="Technical-Vocational-Livelihood">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Investigative Environment
            <input id="choice" type="checkbox" name="q3" value="Technical-Vocational-Livelihood">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Crafty Environment
            <input id="choice" type="checkbox" name="q3" value="Arts">
            <span class="checkmark"></span>
        </label>


        <!-- -->
        <h3>4. What's your mantra?</h3>

        <label class="container" style="padding-left: 30px;">"Every problem will be healed with the touch of a melody"
            <input id="choice" type="checkbox" name="q4" value="Arts">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">"Of course we can fix it"
            <input id="choice" type="checkbox" name="q4" value="Technology">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">"The biggest risk is not taking any"
            <input id="choice" type="checkbox" name="q4" value="Management">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">"Live with a system, calculate your actions"
            <input id="choice" type="checkbox" name="q4" value="Engineering">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">"There is always a wide range of options to choose from"
            <input id="choice" type="checkbox" name="q4" value="STEM">
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h3>5. Things you do during your free time</h3>

        <label class="container" style="padding-left: 30px;">Solving puzzles
            <input id="choice" type="checkbox" name="q5" value="EngineeringMathematics">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Selling Things Online
            <input id="choice" type="checkbox" name="q5" value="Business">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Playing Musical Instruments
            <input id="choice" type="checkbox" name="q5" value="Arts">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Fixing Things and Organizing My Stuff
            <input id="choice" type="checkbox" name="q5" value="TechnologyEngineering">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; ">Trying Cool Science Experiments
            <input id="choice" type="checkbox" name="q5" value="Science">
            <span class="checkmark"></span>
        </label>


        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Reading Books about human behaviour
            <input id="choice" type="checkbox" name="q5" value="SocialSciences">
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h3>6. When you encounter a problem, you usually</h3>

        <label class="container" style="padding-left: 30px;">Analyze informations before making a move
            <input id="choice" type="checkbox" name="q6" value="STEM">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Consider various opinions from other people
            <input id="choice" type="checkbox" name="q6" value="HUMMS">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Stick to proven ways to solve the problem
            <input id="choice" type="checkbox" name="q6" value="STEM">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Worry about how a certain action affects another person
            <input id="choice" type="checkbox" name="q6" value="Humanities">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Think outside the box
            <input id="choice" type="checkbox" name="q6" value="STEM">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Plan logically
            <input id="choice" type="checkbox" name="q6" value="STEM">
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h3>7. People usually describe you as...</h3>


        <label class="container" style="padding-left: 30px;">Creative
            <input id="choice" type="checkbox" name="q7" value="Arts">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Resourceful
            <input id="choice" type="checkbox" name="q7" value="HUMMS">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Analytical
            <input id="choice" type="checkbox" name="q7" value="STEM">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Philosophical
            <input id="choice" type="checkbox" name="q7" value="HUMMS">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px;">Collaborative
            <input id="choice" type="checkbox" name="q7" value="STEM">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Practical
            <input id="choice" type="checkbox" name="q7" value="ABM">
            <span class="checkmark"></span>
        </label>




        <!-- End of questionnaire-->

        <!-- Open hn Modal -->
        <button type="button" id="submitButton" style="border-radius: 5px; margin:4px;">Submit</button>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content" style="width: 50%">
                <span class="close" style="text-align: right; visibility: hidden">&times;</span>

                <h3 class="line-bottom" style="margin-top: 20px; "><b>Result</b></h3>
                <label id="result" style="margin-top: 5px; text-align:center; margin-bottom:20px; font-weight: bold;">Empty</label>
                <p id="resultDescription" style="text-align:center; margin-bottom:30px;">Please fill your desired choice</p>
                <div style="text-align: center">
                    <a href="index.php" class="btn btn-primary px-5" style="padding-top: 15px; width:30% ;margin-top:20px">OKAY<span class="fa fa-log-out"></span></a>
                </div>

            </div>

        </div>


        <!--  <button type="button" style="border-radius: 8px;"><p>Submit</p></button> -->

        <!-- <a href="index.php" class="btn btn-primary px-5" style="padding-top: 15px;">Submit<span class="fa fa-log-out"></span></a>-->



        <!--  </form> -->

        <script>
            $(document).ready(function() {
                $("button").click(function() {
                    //var favorite = [];

                    //  alert("Science: " + science);




                });
            });

            var modal = document.getElementById("myModal");
            var btn = document.getElementById("submitButton");
            var span = document.getElementsByClassName("close")[0];


            btn.onclick = function() {
                modal.style.display = "block";

                var AcademicBusiness = 0;
                var AcademicAccountancy = 0;
                var AcademicManagement = 0;

                var AcademicHumanities = 0;
                var AcademicSocialSciences = 0;

                var AcademicScience = 0;
                var AcademicTechnology = 0;
                var AcademicEngineering = 0;
                var AcademicMathematics = 0;

                var TechnicalVocationalLivelihood = 0;

                var Sports = 0;
                var ArtsandDesign = 0;


                $.each($("input[id='choice']:checked"), function() {

                    if ($(this).val() == "SportsArts") {
                        Sports += 1;
                        ArtsandDesign += 1;

                    }
                    if ($(this).val() == "Business") {
                        AcademicBusiness += 1;
                    }
                    if ($(this).val() == "HUMMS") {

                        AcademicHumanities += 1;

                        AcademicSocialSciences += 1;


                    }
                    if ($(this).val() == "Science") {
                        AcademicScience += 1;
                    }
                    if ($(this).val() == "STEM") {

                        AcademicScience += 1;
                        AcademicTechnology += 1;
                        AcademicEngineering += 1;
                        AcademicMathematics += 1;

                    }
                    if ($(this).val() == "SportsAndArts") {

                        Sports += 1;
                        ArtsandDesign += 1;

                    }
                    if ($(this).val() == "HumanitiesAndSocialSciences") {

                        AcademicHumanities += 1;
                        AcademicSocialSciences += 1;

                    }
                    if ($(this).val() == "Arts") {

                        ArtsandDesign += 1;

                    }
                    if ($(this).val() == "ABM") {

                        AcademicBusiness += 1
                        AcademicAccountancy += 1
                        AcademicManagement += 1

                    }
                    if ($(this).val() == "Technical-Vocational-Livelihood") {
                        TechnicalVocationalLivelihood += 1;
                    }

                    if ($(this).val() == "Technology") {
                        AcademicTechnology += 1;
                    }

                    if ($(this).val() == "Engineering") {
                        AcademicEngineering += 1;
                    }

                    if ($(this).val() == "Management") {
                        AcademicManagement += 1;
                    }

                    if ($(this).val() == "EngineeringMathematics") {
                        AcademicEngineering += 1;
                        AcademicMathematics += 1;
                    }

                    if ($(this).val() == "TechnologyEngineering") {
                        AcademicTechnology += 1;
                        AcademicEngineering += 1;
                    }

                    if ($(this).val() == "SocialSciences") {
                        AcademicSocialSciences += 1;
                    }


                    var list = {
                        AcademicBusiness,
                        AcademicAccountancy,
                        AcademicManagement,
                        AcademicHumanities,
                        AcademicSocialSciences,
                        AcademicScience,
                        AcademicTechnology,
                        AcademicEngineering,
                        AcademicMathematics,
                        TechnicalVocationalLivelihood,
                        Sports,
                        ArtsandDesign
                    }


                    const maxVal = Math.max(...Object.values(list))
                    const key = Object.keys(list).find(key => list[key] === maxVal)


                    var selected = "Empty";
                    var selectedDescription = "Please fill your desired choice";

                    if (key, maxVal == AcademicBusiness) {

                        selected = "Academic-Business (ABM)";
                        selectedDescription = "The Accountancy, Business and Management (ABM) strand would focus on the basic concepts of financial management, business management, corporate operations, and all things that are accounted for.";

                    } else if (key, maxVal == AcademicAccountancy) {
                        selected = "Academic-Accountancy (ABM)";
                        selectedDescription = "The Accountancy, Business and Management (ABM) strand would focus on the basic concepts of financial management, business management, corporate operations, and all things that are accounted for.";

                    } else if (key, maxVal == AcademicManagement) {
                        selected = "Academic-Management (ABM)";
                        selectedDescription = "The Accountancy, Business and Management (ABM) strand would focus on the basic concepts of financial management, business management, corporate operations, and all things that are accounted for.";

                    } else if (key, maxVal == AcademicHumanities) {
                        selected = "Academic-Humanities (HUMMS)";
                        selectedDescription = "The HUMMS strand is designed for those who wonder what is on the other side of the wall. In other words, you are ready to take on the world and talk to a lot of people. This is for those who are considering taking up journalism, communication arts, liberal arts, education, and other social science-related courses in college.";

                    } else if (key, maxVal == AcademicSocialSciences) {
                        selected = "Academic-SocialSciences (HUMMS)";
                        selectedDescription = "The HUMMS strand is designed for those who wonder what is on the other side of the wall. In other words, you are ready to take on the world and talk to a lot of people. This is for those who are considering taking up journalism, communication arts, liberal arts, education, and other social science-related courses in college.";

                    } else if (key, maxVal == AcademicScience) {
                        selected = "Academic-Science (STEM)";
                        selectedDescription = "The STEM Strand is for students who are inclined toward or have the aptitude for Math or Science or Engineering studies. Science, Technology, Engineering, and Mathematics are intertwining disciplines when applied in the real world.";

                    } else if (key, maxVal == AcademicTechnology) {
                        selected = "Academic-Technology (STEM)";
                        selectedDescription = "The STEM Strand is for students who are inclined toward or have the aptitude for Math or Science or Engineering studies. Science, Technology, Engineering, and Mathematics are intertwining disciplines when applied in the real world.";

                    } else if (key, maxVal == AcademicEngineering) {
                        selected = "Academic-Engineering (STEM)";
                        selectedDescription = "The STEM Strand is for students who are inclined toward or have the aptitude for Math or Science or Engineering studies. Science, Technology, Engineering, and Mathematics are intertwining disciplines when applied in the real world.";

                    } else if (key, maxVal == AcademicMathematics) {
                        selected = "Academic-Mathematics (STEM)";
                        selectedDescription = "The STEM Strand is for students who are inclined toward or have the aptitude for Math or Science or Engineering studies. Science, Technology, Engineering, and Mathematics are intertwining disciplines when applied in the real world.";

                    } else if (key, maxVal == TechnicalVocationalLivelihood) {
                        selected = "Technical-Vocational-Livelihood";
                        selectedDescription = "The TVL track gives senior high school students access to vocational courses, as not all students want to or can afford to go to college after senior high school. The TVL strand courses gives students: Good preparation for a career, as graduates of vocation courses have a higher employment as compared to other courses.";

                    } else if (key, maxVal == Sports) {
                        selected = "Sports";
                        selectedDescription = "Sports Track aims to give students an understanding of the basic techniques and principles related to physical education and recreation.";

                    } else if (key, maxVal == ArtsandDesign) {
                        selected = "Arts and Design";
                        selectedDescription = "The Arts & Design track will prepare you as you wander around the design, performative, and creative industry. What this track aims is to get you a career in the creative field after you graduate. Breaking the stereotype that is there no careers in this industry, you’ll be surprised how fun the Arts and Design world can be.";

                    }

                    var newline = "\r\n";
                    var nbsp = "\u00a0";

                    document.getElementById("result").textContent = "You are perfectly fit in " + selected;
                    document.getElementById("resultDescription").textContent = selectedDescription;


                    console.log(key, maxVal);

                });






            }


            span.onclick = function() {
                modal.style.display = "none";
                window.location.href = "index.php";
            }


            window.onclick = function(event) {
                if (event.target == modal) {
                    // modal.style.display = "none";
                }
            }
        </script>

    </div>







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