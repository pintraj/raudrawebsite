<?php
/**
 * Created by PhpStorm.
 * User: JackSparrow
 * Date: 02/03/2017
 * Time: 13:12
 */
include "header.php";
?>
<div class="section section-padding courses-detail">
    <div class="container">
        <div class="courses-detail-wrapper">
            <div class="row">
                <div class="col-md-9 layout-left">
                    <!--<h1 class="course-title">Get Started with C-Programming</h1>-->
                    <div class="col-md-6 test-series">
                        <a href="gatexcel80.php"> <img src="assets/images/test-series/gatexcel80.png" alt=""></a>
                        <button class="myBtn btn btn-green" style="margin-left: 30px;"><span>Register now</span></a></button>
                    </div>
                    <div class="col-md-6 test-series">
                        <a href="gatexcel25.php"> <img src="assets/images/test-series/gatexcel25.png" alt=""></a>
                        <button class="myBtn btn btn-green" style="margin-left: 30px;"><span>Register now</span></a></button>
                    </div>




                </div>

                <!--course sidebar start here-->
                <div class="col-md-3 sidebar layout-right">
                    <div class="row">


                        <div class="clearfix"></div>
                        <div class="popular-course-widget widget  col-md-12  sd380">
                            <div class="title-widget">Popular Courses</div>
                            <div class="content-widget">
                                <div class="media">
                                    <div class="media-left"><a href="gate-2018.php" class="link"><img
                                                src="assets/images/latestcourse/GATE.png" alt=""
                                                class="media-image"/></a></div>
                                    <div class="media-right vertical-middle-custom">
                                        <a href="gate-2018.php" class="link title">GATE</a>


                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left"><a href="interviewpreperation.php" class="link"><img
                                                src="assets/images/latestcourse/intprep.png" alt=""
                                                class="media-image"/></a></div>
                                    <div class="media-right vertical-middle-custom">
                                        <a href="interviewpreperation.php" class="link title">Interview
                                            Preparation</a>


                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left"><a href="btech-projects.php" class="link"><img
                                                src="assets/images/latestcourse/proj.png" alt=""
                                                class="media-image"/></a></div>
                                    <div class="media-right vertical-middle-custom">
                                        <a href="btech-projects.php" class="link title">Projects</a>


                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left"><a href="java.php" class="link"><img
                                                src="assets/images/latestcourse/java.png" alt=""
                                                class="media-image"/></a></div>
                                    <div class="media-right vertical-middle-custom">
                                        <a href="java.php" class="link title">JAVA</a>


                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--courses sidebar starts from here-->
<?php
include "footer.php";
?>
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div style="color:#000000; text-align: left" >
            <p>If you are interested in registering, you can make the payment in the following account either through net banking or at your nearest HDFC bank and email us the transaction id or scan copy of the pay-in-slip.</p>
            <table>
                <tbody>
                <tr>
                    <td>Account Name</td>
                    <td>:</td>
                    <td>Raudra Eduservices Private Limited</td>
                </tr>
                <tr>
                    <td>Account Number</td>
                    <td>:</td>
                    <td>50200012182576</td>
                </tr>
                <tr>
                    <td>Account type</td>
                    <td>:</td>
                    <td>Current account</td>
                </tr>
                <tr>
                    <td>Bank</td>
                    <td>:</td>
                    <td>HDFC</td>
                </tr>
                <tr>
                    <td>Branch</td>
                    <td>:</td>
                    <td>JAYABHERI ENCLAVE</td>
                </tr>
                <tr>
                    <td>RTGS / NEFT IFSC</td>
                    <td>:</td>
                    <td>HDFC0003947</td>
                </tr>
                <tr>
                    <td>CITY</td>
                    <td>:</td>
                    <td>HYDERABAD</td>
                </tr>
                </tbody>
            </table>

            <P> After the payment is done, you can email us the screen shot or picture of transaction details or the
                pictures of the bank pay in slip at <strong>gate2014.ravindra@gmail.com</strong>with subject line as <strong>"payment done for Test-series".</strong> Once it is done, you will be given access to the test series within 24 hours. Each test can be taken only once from the date of its activation till 30 March, 2018. Please note that the content is not downloadable. Sharing your access or trying to sell or distributing the content is a legally punishable offence.</P>

        </div>

    </div>

</div>





<script type="text/javascript">
    $(document).ready(function () {
        var temp =0;
        $(".myBtn").click(function () {
            $("#myModal").css('display',"block" );
            temp = 1;
        });

        $(".close").click(function () {
            $("#myModal").css('display',"none" );
            temp = 0;
        });
    });
</script>

</div>

