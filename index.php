<?php
/**
 * Created by PhpStorm.
 * User: pappu
 * Date: 1/19/2017
 * Time: 12:36 PM
 */
include "header.php";
$_SESSION['user_id']='';
?>
<!--header slider start here-->
<div id="wrapper-content" xmlns="http://www.w3.org/1999/html"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content"><!-- SLIDER BANNER-->

                <div class="topbanner">
                    <div class="container">
                        <div class="ravi-intro">

                            <div class="bannertext  hidden-xs">
                                Ravindra has emerged as a leader in the areas of technical and engineering training.
                                He taught, inspired and motivated thousands of students across the globe to achieve
                                great success in life. He has helped many students to get into premier institutes in
                                India like IISc, IIT's, NIT's etc. Many students from India and abroad are able to
                                crack the interviews of big league companies like Google, Microsoft, Amazon, Cisco
                                etc through his coaching.
                            </div>

                        </div>
                        <a href="about.php" class="read-more hidden-sm hidden-xs">Read More</a>
                    </div>
                    <!--<div class="gate-toppers">
                        <p>Congralutions our GATE 2017 Toppers</p>
                        <a href="#" class="hidden-sm hidden-xs">Click Here</a>
                    </div>-->


                </div>
                <div class="strip">
                    <!--                    <div class="img-responsive">-->
                    <!--                        <img src="assets/images/strip.png" alt="">-->
                    <!--                    </div>-->
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6">

                            <a href="interviewpreperation.php"> <img src="assets/images/strip/interview prep1.png"></a>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">

                            <a href="fullstack.php"><img src="assets/images/strip/fullstack1.png"></a>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">

                            <a href="gate-2018.php"><img src="assets/images/strip/gate1.png"></a>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">

                            <a href="btech-projects.php"><img src="assets/images/strip/projects1.png"></a>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">

                            <a href="hadoop.php"><img src="assets/images/strip/hadoop1.png"></a>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">

                            <a href="java.php"><img src="assets/images/strip/java1.png"></a>
                            </a>
                        </div>
                        <!--                        <div class = "col-md-1 col-sm-2 col-xs-3">-->
                        <!--                            -->
                        <!--                                <img src="assets/images/strip/django1.png">-->
                        <!--                            </a>-->
                        <!--                        </div>-->
                        <!--                        <div class = "col-md-1 col-sm-2 col-xs-3">-->
                        <!--                            -->
                        <!--                                <img src="assets/images/strip/java1.png">-->
                        <!--                            </a>-->
                        <!--                        </div>-->
                        <!--                        <div class = "col-md-1 col-sm-2 col-xs-3">-->
                        <!--                            -->
                        <!--                                <img src="assets/images/strip/jsajs1.png">-->
                        <!--                            </a>-->
                        <!--                        </div>-->
                        <!--                        <div class = "col-md-1 col-sm-2 col-xs-3">-->
                        <!--                            -->
                        <!--                                <img src="assets/images/strip/mysql1.png">-->
                        <!--                            </a>-->
                        <!--                        </div>-->
                        <!--                        <div class = "col-md-1 col-sm-2 col-xs-3">-->
                        <!--                            -->
                        <!--                                <img src="assets/images/strip/projects1.png">-->
                        <!--                            </a>-->
                        <!--                        </div>-->
                        <!--                        <div class = "col-md-1 col-sm-2 col-xs-3">-->
                        <!--                            -->
                        <!--                                <img src="assets/images/strip/python1.png">-->
                        <!--                            </a>-->
                        <!--                        </div>-->
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!--header slider ends here-->
<!--gate toppers -->
<div CLASS="section section-padding">
    <div class="container">
        <div class="gate-topper-list">
            <hr>
            <h2>CONGRATULATIONS to our GATE-2017 Toppers</h2>
            <?php
            include "gate-toppers.php";
            include "mobile-2.php";

            ?>
        </div>
    </div>
</div>

<!--gate toppers ends-->

<div class="section section-padding choose-course-2">
    <div class="container">

        <div class="section  choose-course-2">
            <div class="container">
                <hr>
                <div class="group-title-index"><h4 class="coursetitle">GATE</h4>

                </div>

                <div class="choose-course-wrapper row">
                </div>
            </div>
        </div>
        <!--gate image comes here-->
        <div class="row">
            <div class="maingate">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #ff9e9e;">
                        <div class="img-responsive courseimage"><img src="assets/images/latestcourse/book2.png"
                                                                     style="width: 85%; margin-left: 10px;"> </a>

                            <div class="overlay">
                                <a class="info" href="gate-2018.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename3" style="color: #000000">
                            GATE-2018
                        </div>
                    </div>
                </div>
            </div>
            <div class="maingate">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: rgba(205, 85, 255, 0.69);">
                        <div class="img-responsive courseimage"><img src="assets/images/latestcourse/GATE.png"
                                                                     style="width: 85%; margin-left: 10px;"> </a>

                            <div class="overlay">
                                <a class="info" href="gate-2019.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename3" style="color: #000000">
                            GATE-2019
                        </div>
                    </div>
                </div>
            </div>
            <div class="maingate">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: rgba(27, 127, 204, 0.61);">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/Singlesub.png" style="width: 85%; margin-left: 30px;"> </a>

                            <div class="overlay">
                                <a class="info" href="single-subject.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename3" style="color: #FFFFFF">
                            GATE Single Subject
                        </div>
                    </div>
                </div>
            </div>
            <div class="maingate">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: rgba(27, 127, 204, 0.61);">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/testseries.png" style="width: 85%; margin-left: 30px;"> </a>

                            <div class="overlay">
                                <a class="info" href="test-series.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename3" style="color: #FFFFFF">
                            GATExcel Test-Series
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--technologies comes here-->
        <div class="technologies col-sm-12">
            <hr>
            <h4 class="coursetitle"> Technologies</h4>


        </div>
        <div class="row">
            <div class="technologies">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #46f1c4;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/intprep.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="interviewpreperation.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #000000">
                            Job Interview Preparation
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #efdd29;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/java.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="java.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: red">
                            Java
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #8f73d8;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/c.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="cprogramming.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #000000">
                            C-Programming
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #74c043;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/proj.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="btech-projects.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #000000">
                            B.Tech Projects
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #f3785c;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/raudraHadoop.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="hadoop.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #000000">
                            Hadoop
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #52ecb2;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/javahadoop.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="hadoop_java.php">Read More</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #000000">
                            Hadoop & Java

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #4b342b;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/raPY.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="">Coming Soon</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #FFFFFF">
                            Python
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #498dcb;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/JS-AJS.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info">Coming Soon</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #FFFFFF">
                            Javascript & AngularJS
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #f1f990;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/Fullstack.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="">Coming Soon</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #000000">
                            Full-Stack Development
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #eb4d99;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/backend123.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="">Coming soon</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #FFFFFF">
                            Back-End Development
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #f26721;">
                        <div class="img-responsive courseimage">
                            <img src="assets/images/latestcourse/hcb.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a class="info" href="">Coming Soon</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #FFFFFF">
                            HTML, CSS & Bootstrap
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-course hovereffect" style="background-color: #626363;">
                        <div class="img-responsive courseimage"><img
                                    src="assets/images/latestcourse/frntendtech.png" style="width: 100%"> </a>

                            <div class="overlay">
                                <a href="" class="info">Coming Soon</a>
                            </div>
                        </div>
                        <div class="coursename" style="color: #FFFFFF">
                            Front-End Development
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--complete course till here -->


    </div>
</div>

<!--second clolumn starts from here-->

<!--3rd column starts here-->


<?php
include "featuredvideos.php";
?>
<h2 style="text-align: center;" class="hidden-xs hidden-sm"> Testimonials </h2>
<?php
include "testimonials.php";
?>
<h2 style="text-align: center">Video Testimonials</h2>
<?php
include "video-testimonials.php";
?>
<h2 class="hidden-lg hidden-md" style="text-align: center;">Testimonials</h2>
<?php
include "mobile-testimonials.php";
include "footer.php";
?>

