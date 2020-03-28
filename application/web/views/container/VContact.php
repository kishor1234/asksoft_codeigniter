<?php $main->isLoadview("banner", false, array("title" => "Contact Us")); ?>
<style>
    .btn-custom-black{
        background-color: #000;
        border-color: #000;
        color:#FFF;
    }
</style>
<div class="sp_choose_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                <div class="sp_choose_heading_main_wrapper pst_bottompadder50">
                    <h2><span>Leave Message Here</span></h2>
                    <p>pcfoto.me is one of the emerging Photographers  in India. We offer professional quality photo, video and design services results since the last 5 years.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="wrapper_second_useful">
                    <div class="abt_txt_page_wrapper pst_bottompadder40">
                        <div class="sidebar_widget about_page_heading_wrapper">
                            <h4>Book a pcfoto.me Service Today <span></span></h4>
                            <p>pcfoto.me is one of the emerging Photographers  in India.</p>
                            <h4>Why choose us? <span></span></h4>
                            <ul class="featurs_list">
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Best Camera we use</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Best Rated Professional</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Quick Response</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> 100% Warranty Good Photo work</li>
                            </ul>
                            <a class="btn btn-custom-black" href="javascript:void(0)" onclick="popup();"> Book now </a> </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="wrapper_second_useful">
                    <form class="form-horizontal" id="contactform" action="javascript:void(0)" method="post" onsubmit="return postData('<?php echo $obj->encdata("C_AdBook"); ?>', '#msgs', '#contactform')">
                        <div class="form-group ">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                <input type="date" min="<?php echo date("Y-m-d"); ?>" class="form-control" style='color: black;' id="date" data-title="Date" placeholder="Date" name="cdate" id="cdate"  required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                <input type="text" class="form-control" style='color: black;' id="exampleName" data-title="Plese Enter Valid Name" placeholder="Name" name="name" id="name" onkeypress="return onlyAlphabetswithspace(event, 1)" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <input type="email" class="form-control" style='color: black;' id="exampleemail" placeholder="Email" name="email" id="email"  required=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                <input type="text" class="form-control" id="examplePhone" style='color: black;' placeholder="Phone" name="mobile" id="mobile" maxlength="10" onkeypress="return isNumber(event, 1)" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-server" aria-hidden="true"></i></div>
                                <select class="form-control"  id="ourservices" name="ourservices" required="" style='color: black;'>
                                    <option value="">Select Services</option>
                                    <?php
                                    $result = $main->adminDB[$_SESSION["db_1"]]->query($main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("category" => "Services")));
                                    while ($services = $result->fetch_assoc()) {
                                        echo "<option value=" . $services["id"] . " >" . $services["title"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-braille" aria-hidden="true"></i></div>
                                <select class="form-control"  id="branch" name="branch" required="" style='color: black;'>
                                    <option value="">Select Branch</option>
                                    <?php
                                    $result = $main->adminDB[$_SESSION["db_1"]]->query($main->select("hf_branch", $_SESSION["db_1"]));
                                    while ($services = $result->fetch_assoc()) {
                                        echo "<option value=" . $services["id"] . " >" . $services["blocation"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-area-chart" aria-hidden="true"></i></div>&nbsp;&nbsp;
                                <input type="radio" name="area" required value="Residential">&nbsp;&nbsp;Residential&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="area" required value="Commercial">&nbsp;&nbsp;Commercial
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></div>
                                <textarea class="form-control" rows="2" style='color: black;' name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="msg"></div>
                            <div class="quick_btn">
                                <button type="submit" id="sendbtn" class="btn btn-custom-black "><i class="fa fa-paper-plane"></i> Send </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$main->isLoadView("VTestimonalis", false, array());
?>

