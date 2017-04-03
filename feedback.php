<?php
include "header.php";
$error_msg='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!$_POST['byear']){
        $_POST['byear']='DEFAULT';
    }
    if(!$_POST['bcgpa']){
        $_POST['bcgpa']='DEFAULT';
    }
    if(!$_POST['bbranch']){
        $bbranch="NULL";
    }else{
        $bbranch="'".$_POST['bbranch']."'";
    }

    if(!$_POST['mbranch']){
        $mbranch="NULL";
    }else{
        $mbranch="'".$_POST['mbranch']."'";
    }

    if(!$_POST['12thcgpa']){
        $_POST['12thcgpa']="NULL";
    }

    if(!$_POST['myear']){
        $_POST['myear']='DEFAULT';
    }

    if(!$_POST['mcgpa']){
        $_POST['mcgpa']='DEFAULT';
    }
    if(empty($_POST['expsalary'])){
        $_POST['expsalary']='DEFAULT';
    }

    $servername = "166.62.8.11";
    $username = "careerguidance";
    $password = "Admin@123";
    $dbname= "careerguidance";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        $error_msg='<br/>Connection failed';
    }

    $last_key_id = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'careerguidance' AND TABLE_NAME = 'users'";
    $last_key_id_query=$conn->query($last_key_id);
    $last_id=0;
    if ($last_key_id_query->num_rows == 1) {
        $row = $last_key_id_query->fetch_assoc();
        $last_id = $row['AUTO_INCREMENT'];
    } else {
        $error_msg='<br/>something is wrong';
    }
    $sql_users = "INSERT INTO users VALUES (NULL,'". $_POST['username']. "','" . $_POST['email']. "','" .$_POST['phnumber'] ."',DEFAULT ,DEFAULT ,DEFAULT ,DEFAULT ,DEFAULT ,".$_POST['12thcgpa'].",".$bbranch.",".$_POST['byear'].",".$_POST['bcgpa'].",'".$_POST['bclgname']."','".$_POST['buniv']."',".$mbranch.",".$_POST['myear'].",".$_POST['mcgpa'].",'".$_POST['mclgname']."','".$_POST['muniv']."','".$_POST['certificates']."','".strtolower($_POST['profile'])."',".$_POST['orgtype'].",".$_POST['experiance'].",'".$_POST['linkedin']."',DEFAULT,'".$_POST['suggestions']."','".$_POST['comment']."',".$_POST['feasibletime'].")";
    if ($conn->query($sql_users) === FALSE ) {
        $error_msg='you have some redundant values (email/phone number)';
    }

    if ($last_id){
        foreach ($_POST['proglang'] as $selectedOption) {
            $sql_proglang = "INSERT INTO user_prog_lang VALUES (" . $last_id . ",'" . $selectedOption . "')";
            if ($conn->query($sql_proglang) === FALSE) {
                $error_msg = $error_msg.'<br/>Cannot save programming languages';
            }
        }

        if(!empty($_POST['registered'])){
            $i=0;
            $sql_course=array();
            foreach ($_POST['registered'] as $courses){
                if ($courses=='gate'){
                    $courses_key='gate';
                    if($_POST['gateyear']){
                        $courses_key = $courses_key.$_POST['gateyear'];
                        if(!empty($_POST['gatesubjects'])){
                            foreach ($_POST['gatesubjects'] as $subjects){
                                if(strtolower($subjects) != 'full') {
                                    $courses_key_sub = $courses_key . '_' . strtolower($subjects);
                                    $sql_course[$i]="INSERT INTO registered_courses VALUES (" . $last_id . ",'" . $courses_key_sub . "',DEFAULT)";
                                }else{
                                    $sql_course[$i] = "INSERT INTO registered_courses VALUES (" . $last_id . ",'" . $courses_key . "',DEFAULT)";
                                }
                                $i=$i+1;
                            }
                        }else{
                            $sql_course[$i]="INSERT INTO registered_courses VALUES (" . $last_id . ",'" . $courses_key . "',DEFAULT)";
                            $i=$i+1;
                        }
                    }else{
                        $sql_course[$i]="INSERT INTO registered_courses VALUES (" . $last_id . ",'" . $courses_key . "',DEFAULT)";
                        $i=$i+1;
                    }
                }else{
                    $sql_course[$i]="INSERT INTO registered_courses VALUES (" . $last_id . ",'" . strtolower($courses) . "',DEFAULT)";
                    $i=$i+1;
                }
            }
            foreach ($sql_course as $sql_courses){
                if ($conn->query($sql_courses) === FALSE) {
                    $error_msg = $error_msg.'<br/>Cannot save your registered courses';
                }
            }
        }
        if(!empty($_POST['willregister'])){
            foreach ($_POST['willregister'] as $willreg){
                $sql_willregister="INSERT INTO interested_courses VALUES (" . $last_id . ",'" . strtolower($willreg) . "')";
                if ($conn->query($sql_willregister) === FALSE) {
                    $error_msg = $error_msg.'<br/>Cannot save your intrested coruses';
                }
            }
        }
    }
    if($error_msg == ''){
        $_SESSION['user_id']=$last_id;
        $URL="./resume.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
    $conn->close();

}
?>

    <meta charset="utf-8"/>


    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="form/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


    <link href="form/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="form/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="form/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="form/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="form/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="form/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="form/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="form/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css"/>
    <!--    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css" type="text/css">-->


    <!-- END THEME LAYOUT STYLES -->
<!-- END HEAD -->


<div class="page-wrapper">

    <div class="page-container">
        <!-- BEGIN SIDEBAR -->

        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <?php
                  echo '<h5 style="color: red">'.$error_msg.'</h5>';
                ?>
                <div class="row">
                    <div class="col-md-12">

                        <div class="portlet light bordered" id="form_wizard_1">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-red"></i>
                                    <span class="caption-subject font-blue bold"> Please provide the following details to guide you better.</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" action=""  id="submit_form" method="POST"">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> 1 </span>
                                                    <span class="desc">
                                                                    <i class="fa fa-check"></i> Personal Details</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> 2 </span>
                                                    <span class="desc">
                                                                    <i class="fa fa-check"></i> Educational Details </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step active">
                                                    <span class="number"> 3 </span>
                                                    <span class="desc">
                                                                    <i class="fa fa-check"></i> Professional Carrer </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
                                                    <span class="number"> 4 </span>
                                                    <span class="desc">
                                                                    <i class="fa fa-check"></i> Miscellaneous </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button>
                                                You have some form errors. Please check below.
                                            </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button>
                                                Your form validation is successful!
                                            </div>
                                            <div class="tab-pane active" id="tab1">
                                                <h3 class="block">Provide your account details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Your Name
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="username" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="email" class="form-control" name="email" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact Number
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="number" class="form-control" name="phnumber" required="required"/>
                                                    </div>
                                                </div>
                                                                                            </div>

                                            <div class="tab-pane" id="tab2">
                                                <h3 class="block">Provide your Education details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Percentage or CGPA in
                                                        Class 12
                                                    </label>
                                                    <div class="col-md-3">
                                                        <input type="number" class="form-control" name="12thcgpa" maxlength="2"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="form-section">B.E./B.Tech./B.Sc.</h5>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">Branch or
                                                                Discipline </label>
                                                            <span class="required" aria-required="true"></span>
                                                            <div class="col-md-6">
                                                                <select class="form-control" name="bbranch">
                                                                    <option value="" selected="">Select your Branch</option>
                                                                    <option value="AE">Aerospace Engineering</option>
                                                                    <option value="AG">Agricultural Engineering</option>
                                                                    <option value="Arch">Architectural Engineering</option>
                                                                    <option value="Bio">Bioengineering and biomedicalEngineering</option>
                                                                    <option value="CH">Chemical Engineering</option>
                                                                    <option value="CE">Civil Engineering</option>
                                                                    <option value="CS">Computer Science or Information Technology</option>
                                                                    <option value="EE">Electrical and Electronics Engineering</option>
                                                                    <option value="EE">Electronics and Communication Engineering</option>
                                                                    <option value="IE">Industrial Engineering</option>
                                                                    <option value="InE">Instrumentation Engineering</option>
                                                                    <option value="ME">Mechanical Engineering</option>
                                                                    <option value="OT">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">Year of Passout</label>
                                                            <div class="col-md-6">
                                                                <select class="form-control" name="byear">
                                                                    <option value="" selected="">Select Year of passout</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">CGPA or % of marks</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="bcgpa" placeholder="CGPA or % of marks until current sem">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">College Name</label>
                                                            <div class="col-md-6"><input type="text"
                                                                                         class="form-control"
                                                                                         name="bclgname"
                                                                                         placeholder="College Name">

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">University Name </label>
                                                            <div class="col-md-6"><input type="text"
                                                                                         class="form-control"
                                                                                         name="buniv"
                                                                                         placeholder="University Name">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5 style="text-align: center;">M.E./M.Tech./M.Sc./MCA</h5>
                                                            <hr>
                                                            <label class="control-label col-md-6">Branch or
                                                                Discipline </label>
                                                            <div class="col-md-6">

                                                                <select class="form-control" name="mbranch">
                                                                    <option value="" selected="">Select your Branch
                                                                    </option>
                                                                    <option value="AE">Aerospace Engineering</option>
                                                                    <option value="AG">Agricultural Engineering</option>
                                                                    <option value="Arch">Architectural Engineering</option>
                                                                    <option value="Bio">Bioengineering and biomedical Engineering</option>
                                                                    <option value="CH">Chemical Engineering</option>
                                                                    <option value="CE">Civil Engineering</option>
                                                                    <option value="CS">Computer Science or Information Technology</option>
                                                                    <option value="EE">Electrical and Electronics Engineering</option>
                                                                    <option value="EC">Electronics and Communication Engineering</option>
                                                                    <option value="IE">Industrial Engineering</option>
                                                                    <option value="InE">Instrumentation Engineering</option>
                                                                    <option value="ME">Mechanical Engineering</option>
                                                                    <option value="OT">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">Year of Passout </label>
                                                            <div class="col-md-6">
                                                                <select class="form-control" name="myear">
                                                                    <option value="" selected="">Select Year of passout</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">CGPA or % of marks</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="mcgpa" placeholder="CGPA or % of marks until current sem">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">College Name </label>
                                                            <div class="col-md-6"><input type="text"
                                                                                         class="form-control"
                                                                                         name="mclgname"
                                                                                         placeholder="College Name">

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-6">University Name</label>
                                                            <div class="col-md-6"><input type="text"
                                                                                         class="form-control"
                                                                                         name="muniv"
                                                                                         placeholder="University Name">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tab3">
                                                <h3 class="block"> Professional Career Details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Certifications you earned</label>
                                                    <div class="col-md-4">
                                                        <textarea class="form-control" rows="3" name="certificates"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Programming languages you are comfortable with:
                                                        <h5>(To Select multiple use 'Ctrl+select')</h5>
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="proglang[]" multiple="multiple" tabindex="-1" aria-hidden="true" aria-invalid="false" required="required">
                                                            <option value="c">C</option>
                                                            <option value="cpp">C++</option>
                                                            <option value="java">Java</option>
                                                            <option value="python">Python</option>
                                                            <option value="php">PHP</option>
                                                            <option value="ruby">Ruby/Rails</option>
                                                            <option value="html">HTML/CSS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Your Profile
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="profile" tabindex="-1" required="required">
                                                            <option value="" disabled="" selected="">Your profile</option>
                                                            <option value="STDNT">Student</option>
                                                            <option value="GRT">Graduated</option>
                                                            <option value="SD">Software Developer</option>
                                                            <option value="ST">Software Trainee</option>
                                                            <option value="QA">Quality Analyst</option>
                                                            <option value="WD">Web Designer</option>
                                                            <option value="NA">Network Admin</option>
                                                            <option value="DBA">Database Administrator</option>
                                                            <option value="QA">Data Analyst</option>
                                                            <option value="TE">Teaching / Faculty </option>
                                                            <option value="OT">Others </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Organization type
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="orgtype" tabindex="-1" required="required">
                                                            <option value="" disabled="" selected="">You are working in</option>
                                                            <option value="1">Student</option>
                                                            <option value="2">Not working</option>
                                                            <option value="3">Product based</option>
                                                            <option value="4">Service based</option>
                                                            <option value="5">Freelancer</option>
                                                            <option value="6">Startup</option>
                                                        </select>                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Experience in Years
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select name="experiance" class="form-control" required="required">
                                                            <option value="" disabled="" selected="">Your experiance</option>
                                                            <option value="0">0 Years</option>
                                                            <option value="1">Less than 1 Year</option>
                                                            <option value="2">1-2 Years</option>
                                                            <option value="3">2-3 Years</option>
                                                            <option value="4">3-4 Years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">LinkedIn Profile</label>
                                                    <div class="col-md-4">
                                                        <input type="URL" placeholder="LinkedIn Profile" class="form-control"
                                                               name="linkedin"/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <h3 class="block">Confirm your account</h3>
                                                <h4 class="form-section">Account</h4>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Courses registered with Ravindrababu Ravula:
                                                        <h5>For selecting one or more courses use 'Ctrl+select' </h5>
                                                    </label>

                                                    <div class="mt-checkbox-list col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label class="mt-checkbox mt-checkbox-outline"> GATE
                                                                    <input type="checkbox" value="gate" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> GATExcel
                                                                    <input type="checkbox" value="gatexcel" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Interview Preparation
                                                                    <input type="checkbox" value="inp" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Front End
                                                                    <input type="checkbox" value="frontend" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Python + Django
                                                                    <input type="checkbox" value="backend" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Full Stack development
                                                                    <input type="checkbox" value="fullstack" name="registered[]">
                                                                    <span></span>
                                                                </label>

                                                            </div>
                                                            <div class="col-md-3" style="margin-top: -15px">
                                                                <label>
                                                                    <select  name="gateyear" tabindex="-1" class="form-control input-sm">
                                                                        <option value=""  selected="">Year</option>
                                                                        <option value="2014">Gate-2014</option>
                                                                        <option value="2015">Gate-2015</option>
                                                                        <option value="2016">Gate-2016</option>
                                                                        <option value="2017">Gate-2017</option>
                                                                        <option value="2018">Gate-2018</option>
                                                                        <option value="2019">Gate-2019</option>
                                                                    </select>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline" style="padding-top: 1.3em"> Projects
                                                                    <input type="checkbox" value="projects" name="registered[]">
                                                                    <span style="margin-top: 1.3em"></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Java
                                                                    <input type="checkbox" value="java" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Python
                                                                    <input type="checkbox" value="python" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> C Programming
                                                                    <input type="checkbox" value="c" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Hadoop and Big Data
                                                                    <input type="checkbox" value="hadoop" name="registered[]">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3" style="margin-top: -15px">
                                                                <label>
                                                                    <select  name="gatesubjects[]" tabindex="-1" class="form-control input-sm" multiple="multiple">
                                                                        <option value="Full" selected="">Complete Course</option>
                                                                        <option value="EM">Mathematics</option>
                                                                        <option value="DL">Digital logic</option>
                                                                        <option value="CO">Computer Organization and Architecture</option>
                                                                        <option value="DS">Programming and DS</option>
                                                                        <option value="Algo">Algorithms</option>
                                                                        <option value="TOC">Theory of Computation</option>
                                                                        <option value="CD">Compiler Design</option>
                                                                        <option value="OS">Operating Systems</option>
                                                                        <option value="DB">Databases</option>
                                                                        <option value="CN">Computer Networks</option>
                                                                    </select>
                                                                </label>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Courses you are interested to join in future
                                                    </label>
                                                    <div class="mt-checkbox-list col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label class="mt-checkbox mt-checkbox-outline"> GATE
                                                                    <input type="checkbox" value="gate" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> GATExcel
                                                                    <input type="checkbox" value="gatexcel" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Interview Preparation
                                                                    <input type="checkbox" value="inp" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Front End Techs
                                                                    <input type="checkbox" value="frontend" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Python + Django
                                                                    <input type="checkbox" value="pydjango" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Full Stack development
                                                                    <input type="checkbox" value="fullstack" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label class="mt-checkbox mt-checkbox-outline"> Projects
                                                                    <input type="checkbox" value="projects" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Java
                                                                    <input type="checkbox" value="java" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Java with Spring
                                                                    <input type="checkbox" value="jspring" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Python
                                                                    <input type="checkbox" value="python" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> C Programming
                                                                    <input type="checkbox" value="c" name="willregister[]">
                                                                    <span></span>
                                                                </label>

                                                                <label class="mt-checkbox mt-checkbox-outline"> Hadoop , Big Data
                                                                    <input type="checkbox" value="hadoop" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label class="mt-checkbox mt-checkbox-outline"> C++ Programming
                                                                    <input type="checkbox" value="cpp" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Java with Play
                                                                    <input type="checkbox" value="jplay" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> NoSQL Databases (Redis, Cassandra, MongoDB)
                                                                    <input type="checkbox" value="nosql" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Machine Learning
                                                                    <input type="checkbox" value="ml" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> Big Data Analysis with Apache Spark
                                                                    <input type="checkbox" value="spark" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-checkbox mt-checkbox-outline"> MEAN Stack
                                                                    <input type="checkbox" value="mean" name="willregister[]">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Which course/technology do you want to learn from Ravindrababu Ravula?
                                                        <h5> Courses other than that are mentioned above.</h5>
                                                    </label>

                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Technologies" class="form-control"
                                                               name="suggestions"/>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Anything you want to say?
                                                    </label>
                                                    <div class="col-md-4">
                                                        <textarea class="" rows="4" cols="50" name="comment"></textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Your preferred time to talk with our mentor
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select name="feasibletime" id="" class="form-control">
                                                            <option value="1">6 AM to 9 AM</option>
                                                            <option value="2">9 AM to 12 AM</option>
                                                            <option value="3">12 PM to 3 PM</option>
                                                            <option value="4">3 PM to 6 PM</option>
                                                            <option value="5" selected="selected">6 PM to 9 PM</option>
                                                            <option value="6">9 PM to 12 PM</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="fa fa-angle-left"></i> Back </a>
                                                <a href="javascript:;" class="btn btn-outline green button-next">
                                                    Continue
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <button class="btn green button-submit" type="submit"> Submit
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->


        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->

    <!-- END FOOTER -->
</div>
<!-- BEGIN QUICK NAV -->


<script src="form/assets/global/plugins/respond.min.js"></script>
<script src="form/assets/global/plugins/excanvas.min.js"></script>
<script src="form/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="form/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>

<script src="form/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="form/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="form/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="form/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="form/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="form/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="form/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="form/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<!-- Google Code for Universal Analytics -->

<!-- End -->

<!-- Google Tag Manager -->


<!-- End -->


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2017 05:44:31 GMT -->
<?php
include "footer.php";
?>
