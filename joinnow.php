<?php
/**
 * Created by PhpStorm.
 * User: JackSparrow
 * Date: 13/02/2017
 * Time: 17:13
 */
?>
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div style="color:#000000">
            <p>If you are interested in registering, you can make the payment in the following account either through
                net banking or at your nearest HDFC bank and email us the transaction id or scan copy of the
                pay-in-slip.</p>
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
                pictures of the bank pay in slip at gate2014.ravindra@gmail.com. Once it is done, you will be given
                access to private GATE lecture videos with in 24 hours. You can watch the videos online anytime,
                anywhere and any number of times. Please note that the videos are not downloadable. Sharing your access
                or trying to sell or distribute videos is a legally punishable offense. Earlier we caught some people
                doing this and they were punished legally and a huge penalty was imposed on them.</P>

        </div>

    </div>

</div>



<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet"
      type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>


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

