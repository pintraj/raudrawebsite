<?php
/**
 * Created by PhpStorm.
 * User: pappu
 * Date: 12/1/2016
 * Time: 4:02 PM
 */
include "header.php";
?>
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-register rlp">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table"><a href="index.php"><img src="assets/images/logo-color-1.png" alt="" class="login"/></a>

                                <div class="register-title rlp-title">create your account and join with us!</div>
                                <div class="register-form bg-w-form rlp-form">
                                    <div class="row">
                                        <div class="col-md-6"><label for="regname" class="control-label form-label">NAME <span class="highlight">*</span></label><input id="regname" type="text" placeholder="" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="regemail" class="control-label form-label">email <span class="highlight">*</span></label><input id="regemail" type="email" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="regpassword" class="control-label form-label">password <span class="highlight">*</span></label><input id="regpassword" type="password" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="reregpassword" class="control-label form-label">confirm password <span class="highlight">*</span></label><input id="reregpassword" type="password" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                    </div>
                                </div>
                                <div class="register-submit">
                                    <button type="submit" onclick="window.location.href='index.html'" class="btn btn-register btn-green"><span>create account</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

