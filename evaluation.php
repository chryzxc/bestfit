<?php require_once("includes/initialize.php");
?>
<style>
    /* Customize the label (the container) */
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


    button {
        border-radius: 20px;
        background-color: #fb7400;
        color: white;


        text-decoration: none;
        border: none;

    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom radio button */
    .checkmark {

        position: absolute;
        top: 8;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
        border-radius: 50%;

    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a background */
    .container input:checked~.checkmark {
        background-color: #fb7400;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 6px;
        left: 6px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
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
        <h4 style="margin-top: 50px;">1. Learn computer software programs.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q1" value="mathematics">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q1" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>2. Critique art, music, or performances.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q2" value="music">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q2" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>3. Learn statistics and accounting.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q3" value="mathematics">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q3" value=null>
            <span class="checkmark"></span>
        </label>


        <!-- -->
        <h4>4. Cook unique dishes for other people.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q4" value="epp">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q4" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>5. Study ethics or philosophy.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q5" value="ap">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q5" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>6. Conduct experiments and make observations.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q6" value="science">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input id="choice" type="radio" checked="checked" name="q6" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>7. Troubleshoot technology issues.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q7" value="science">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q7" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>8. Learn how the body functions.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q8" value="science">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q8" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>9. Solve world issues using science.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q9" value="science">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q9" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>10. Research other cultures or religions.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q10" value="esp">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q10" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>11. Learn another language.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q11" value="arts">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q11" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>12. Bake or design cakes.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q12" value="epp">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q12" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>13. Write a blog, magazine article, or novel.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q13" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q13" value=null>
            <span class="checkmark"></span>
        </label>


        <!-- -->
        <h4>14. Start or run a business.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q14" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q14" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>15. Solve math problems</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q15" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q15" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>16. Use math, science, and technology.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q16" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q16" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>17. Study courses in law.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q17" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q17" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>18. Act, sing, dance, or work behind the scenes of a play.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q18" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q18" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>19. Study ethics or philosophy</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q19" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q19" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>20. Paint, draw, or make sculptures.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q20" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q20" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>21. Work in a kitchen or bakery.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q21" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q21" value=null>
            <span class="checkmark"></span>
        </label>


        <!-- -->
        <h4>22.Use computer software to design art.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q22" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q22" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>23. Learn how to cook with various ingredients.</h4>


        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q23" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q23" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>24. Innovate and design better products.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q24" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q24" value=null>
            <span class="checkmark"></span>
        </label>

        <!-- -->
        <h4>25. Learn the legal system.</h4>

        <label class="container" style="padding-left: 30px;">Interested
            <input id="choice" type="radio" checked="checked" name="q25" value="">
            <span class="checkmark"></span>
        </label>

        <label class="container" style="padding-left: 30px; margin-bottom: 40px">Not interested
            <input type="radio" checked="checked" name="q25" value=null>
            <span class="checkmark"></span>
        </label>


        <!-- End of questionnaire-->

        <!-- Open hn Modal -->
        <button type="button" id="submitButton" style="border-radius: 5px; margin:4px;">Submit</button>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content" style="width: 50%">
                <span class="close" style="text-align: right;">&times;</span>

                <h4 class="line-bottom" style="margin-top: 20px;"><b>Result</b></h4>
                <p id="result" style="margin-top: 5px; text-align:center; margin-bottom:30px;">You are fit</p>
                <div style="text-align: center">
                    <a href="index.php" class="btn btn-primary px-5" style="padding-top: 15px; width:30% margin-top:20px">Okay<span class="fa fa-log-out"></span></a>
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


                    //   alert("My favourite sports are: " + favorite.join(", "));

                });
            });

            var modal = document.getElementById("myModal");
            var btn = document.getElementById("submitButton");
            var span = document.getElementsByClassName("close")[0];


            btn.onclick = function() {
                modal.style.display = "block";

                var filipino = 0;
                var english = 0;
                var mathematics = 0;
                var science = 0;
                var ap = 0;
                var esp = 0;
                var music = 0;
                var pe = 0;
                var health = 0;
                var epp = 0;


                $.each($("input[id='choice']:checked"), function() {
                    //    favorite.push($(this).val());
                    if ($(this).val() == "filipino") {
                        filipino += 1;
                    }
                    if ($(this).val() == "english") {
                        english += 1;
                    }
                    if ($(this).val() == "mathematics") {
                        mathematics += 1;
                    }
                    if ($(this).val() == "science") {
                        science += 1;
                    }
                    if ($(this).val() == "ap") {
                        ap += 1;
                    }
                    if ($(this).val() == "esp") {
                        esp += 1;
                    }
                    if ($(this).val() == "music") {
                        music += 1;
                    }
                    if ($(this).val() == "pe") {
                        pe += 1;
                    }
                    if ($(this).val() == "health") {
                        health += 1;
                    }
                    if ($(this).val() == "epp") {
                        epp += 1;
                    }


                    document.getElementById("result").textContent = "Filipino: " + filipino + "\n" +
                        "English: " + english + "\n" +
                        "Mathematics: " + mathematics + "\n" +
                        "Science: " + science + "\n" +
                        "Araling Panlipunan: " + ap + "\n" +
                        "Esp: " + esp + "\n" +
                        "Music: " + music + "\n" +
                        "Pe: " + pe + "\n" +
                        "Health: " + health + "\n" +
                        "EPP: " + epp + "\n" ;

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