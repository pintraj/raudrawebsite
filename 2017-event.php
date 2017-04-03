<?php
/**
 * Created by PhpStorm.
 * User: pappu
 * Date: 3/4/17
 * Time: 4:57 PM
 */
include "header.php";
?>
<div class="section section-padding">
    <div class="row">
        <div class="container">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <div class="col-md-6">

                            <label for="first-name">First Name</label>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <input type="text" class="form-control" id="first-name">
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="Mobile">Mobile Number</label>
                        <input type="number" class="form-control" id="mobile">
                    </div>
                    <div class="form-group">
                        <label for="address"> Address</label>

                        <textarea rows="4" cols="50" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-green"><span>Submit</span></button>
                </form>
            </div>
        </div>
    </div>

</div>


















<?php
include "footer.php";
?>
