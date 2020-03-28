<?php
//$main->isLoadView("VClientLogo", false, array());
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10">
            <div w3-include-html="/in/<?php echo $obj->encdata("pages") . "/" . $obj->encdata("instafeeds"); ?>.html"></div>
        </div>
    </div>
</div>

<div>

    <?php
//    $tempObj = $obj;
//    $main->isLoadView("demoinsta", false, array());
//    $obj = $tempObj;
    ?>
</div>
<style>
    .btn-custom-black{
        background-color: #000;
        border-color: #000;
        color:#FFF;
    }
</style>
<!--Modal popup-->

<div id="myPopupModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
            <div class="modal-body sp_choose_main_wrapper" style="padding-top:20px; padding-bottom: 0px;">
                <div class="sp_choose_heading_main_wrapper">
                    <h2><span>Book Now</span></h2>
                </div>
                <div class="col-lg-10 col-lg-offset-1">
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
    <style>
        #fc{
            text-transform: capitalize !important;
        }
    </style>
</div>
<!--End popup-->
<div class="footer_wrapper pst_toppadder70 pst_bottompadder60">
    <div class="container">
        <div class="footer_wrapper_first">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-4">
                    <div class="wrapper_first_icon foter_contact_nav">
                        <ul>
                            <li>
                                <i class="fa fa-certificate fa-4x"></i>
                                <a href="javascript:void(0)">
                                    <p id="fc">We have more than <br>
                                        2 decades of experience <br>
                                        in wedding photography.</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-4">
                    <div class="wrapper_first_icon foter_contact_nav">
                        <ul>
                            <li>
                                <i class="fa fa-building"></i>
                                <a href="javascript:void(0)">
                                    <p id="fc">
                                        Treated more than <br>
                                        100+ Happy Clients. <br>
                                        
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-4">
                    <div class="wrapper_first_icon foter_contact_nav">
                        <ul>
                            <li>
                                <i class="fa fa-phone "></i>
                                <a href="javascript:void(0)">
                                    <p id="fc">
                                        <?php
                                        $result = $main->adminDB[$_SESSION["db_1"]]->query($main->select("hf_branch", $_SESSION["db_1"]));
                                        while ($branch = $result->fetch_assoc()) {
                                            echo $branch["blocation"] . " : +91" . $branch["contact"] . "<br>";
                                        }
                                        ?>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                    <div class="wrapper_first_icon foter_contact_nav">
                        <ul>
                            <li>
                                <i class="fa fa-industry"></i>
                                <a href="javascript:void(0)">
                                    <p id="fc">
                                        Serving the <br>
                                        commercial capital <br>
                                        of India since 2015
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer_wrapper_second">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="wrapper_second_about">
                        <h4>Head Office</h4>
                        <!--<div class="wrapper_first_image pst_bottompadder40">
                            <a href="index.html"><img src="images/foter_logo.png" class="img-responsive" alt="logo" /></a>
                        </div>-->
                        <div class="abotus_content">
<!--                            <p>Tahaan Pest Solutions & Fumigations is one of the immersing Pest Control agencies in India.
                                We offer professional quality pest management services results since the last <?php //echo date("Y") - 1999;                    ?>  years.</p>-->
                            <div class="about_info">
                                <p><button class="btn btn-custom btn-sm"><i class="fa fa-map-marker" aria-hidden="true"></i></button> Nilsuman Apt Float No. 7, Near Khavate Hospital, Lingali Road Daund Tal: Daund Dist: Pune</p>
                                <p><button class="btn btn-custom btn-sm"><i class="fa fa-envelope" aria-hidden="true"></i></button><a style="color:#FFFFFF;" href="mailto:info@pcfoto.me" data-title="mail"> info@pcfoto.me</a></p>
                                <p><button class="btn btn-custom btn-sm"><i class="fa fa-phone" aria-hidden="true"></i></button><a style="color:#FFFFFF;" href="tel:+918888585884" data-title="call"> +918888585884</a></p>
                            </div>
                        </div>
                        <div class="aboutus_social_icons">
                            <ul>
                                <li><a href="https://www.facebook.com/pcfoto.me"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://twitter.com/pcfoto.me"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/company/pcfoto.me"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li> <a href="https://www.instagram.com/pcfoto.me/"><i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="wrapper_second_useful">
                        <h4>Our Services</h4>
                        <?php
                        $result = $main->adminDB[$_SESSION["db_1"]]->query($main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("category" => "Services")));
                        $flag = true;
                        $right = array();
                        $left = array();
                        while ($row = $result->fetch_assoc()) {
                            array_push($right, $row["title"]);
                        }
                        ?>
                        <ul>
                            <?php
                            foreach ($right as $val) {
                                ?>
                                <li><a href="/in/Services/<?php echo strtolower(str_replace(" ", "-", $val)); ?>"><?php echo $val; ?></a></li>

                                <?php
                            }
                            ?>

                        </ul>

                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12 col-sm-6">
                    <div class="wrapper_second_useful">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="/"> Home</a></li>
                            <li><a href="<?= HOSTURL ?>in/page/aboutus">About us</a></li>
                            <li><a href="<?= HOSTURL ?>in/page/allservices">Services</a></li>
                            <li><a href="<?= HOSTURL ?>in/page/contactus">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="wrapper_second_useful wrapper_second_useful_2">
                        <h4>Singn up Newsletter</h4>
                        <span id="display"></span>
                        <form action="#" method="post" id="newsletters" onsubmit="return postData('<?php echo $obj->encdata("C_Newsletter"); ?>', '#display', '#newsletters')" class="newsletter">
                            <div class="input-group">
                                <input type="email" name="email" id="email" required="" class="form-control" placeholder="Enter Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                </span> </div>
                            <!-- /input-group -->
                        </form>
                        <p style="text-align: justify;">
                            The team at pcfoto.me is best known for its quality of work, on-time service and wedding films.
                            They strive to make their customers happy and deliver satisfactory work every time. The reviews on their profile speak for itself, how much their work is appreciated by real couples.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section3_bottom_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
                <div class="section3_copyright">
                    <p>Copyright <?=date(Y)?> <a href="/">  pcfoto.me </a>. all right reserved - design by <a href="http://aasksoft.co.in/">@askSoft</a></p>
<!--                    <p class="footer">Memory Useage in <strong>{memory_usage}</strong>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>-->
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
                <div class="close_wrapper">

                    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i>top</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+918888585884", // WhatsApp number
            call_to_action: "Message us pcfoto.me", // Call to action
            position: "left", // Position may be 'right' or 'left'
            showPopup: true
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

<!--</div>-->
<!--/Wrapper End--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 


<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!--<script src="assets/html/js/jquery_min.js"></script>
<script src="assets/html/js/bootstrap.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--<script src="assets/html/js/isotope.pkgd.min.js"></script>
<script src="assets/html/venobox/js/venobox.min.js"></script>
<script src="assets/html/js/jquery.easypiechart.min.js"></script>
<script src="assets/html/js/jquery.inview.min.js"></script>
<script src="assets/html/js/jquery.mixitup.min.js"></script>
<script src="assets/html/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="assets/html/js/jquery.countTo.js"></script>
<script src="assets/html/js/wow.min.js"></script>-->
<script src="assets/html/js/owl.carousel.js"></script>
<!--<script src="assets/html/js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.actions.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.migration.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.extension.video.min.js"></script>
<script src="assets/html/js/plugin/rs_slider/revolution.addon.slicey.min.js"></script>-->
<script src="assets/js/lightgallery/lightgallery.js" type="text/javascript"></script>
<script src="assets/js/lightgallery/lg-video.min.js" type="text/javascript"></script>
<script src="assets/js/lightgallery/lg-fullscreen.min.js" type="text/javascript"></script>
<script src="assets/js/lightgallery/lg-hash.min.js" type="text/javascript"></script>
<script src="assets/js/lightgallery/lg-pager.min.js" type="text/javascript"></script>
<script src="assets/js/lightgallery/lg-share.min.js" type="text/javascript"></script>
<script src="assets/js/lightgallery/lg-thumbnail.min.js" type="text/javascript"></script>
<script src="assets/js/lightgallery/lg-video.min.js" type="text/javascript"></script>
<script src="assets/js/lightgallery/lg-zoom.min.js" type="text/javascript"></script>
<script src="assets/html/js/custom.js"></script>
<script>
                            lightGallery(document.getElementById('aniimated-thumbnials'), {
                                thumbnail: true,
                                animateThumb: true,
                                showThumbByDefault: false
                            });
</script>
<script type="text/javascript">

    $(document).ready(function () {

        $("#style-switcher").animate({
            left: "-215px"
        });
        var username = getCookie("username");
        if (username.localeCompare("aasksoft") === 0) {
            //$("#myPopupModal").modal('show');
        } else {

            if (username.localeCompare("") === 0) {
                $("#myPopupModal").modal('show');
                setCookie("username", "aasksoft", 365);
            } else {
                // $("#myPopupModal").modal('show');
                console.log("Null " + username);
            }
        }
        $('.colorchange').on('click', function () {

            var color_name = $(this).attr('id');
            var new_style = 'assets/html/css/color/' + color_name + '.css';
            $.post("/?r=C_ChangeTheam", {thm: new_style}, function (da) {
            });
            $('#theme-color').attr('href', new_style);


        });
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ')
                    c = c.substring(1);
                if (c.indexOf(name) == 0)
                    return c.substring(name.length, c.length);
            }
            return "";
        }
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
    });
</script>
<script>
    function onLoading()
    {
        $("#cover").show();
        $("#msg").html("<center><img src='logo.gif' style='width:100px;' /><h4 style='color:#000;'><strong>Please Wait.!</strong></h4></center>");
    }
    function load() {
        $("#cover").show();
        return "<center><img src='logo.gif' style='width:100px;' /><h4 style='color:#000;'><strong>Please Wait.!</strong></h4></center>";

    }

    function offLoading()
    {
        $("#msg").html("");
        $("#cover").hide();
    }
    function popup()
    {
        $("#myPopupModal").modal('show');
    }
    function Load(msg)
    {

        $(msg).html("<center><img src='logo.gif' style='width:100px;' /><h4 style='color:#000;'><strong>Please Wait.!</strong></h4></center>");
    }
    function unLoad(msg)
    {
        $(msg).html("");

    }

    function selectBranch(display, file)
    {
        Load(display);
        $.post("/?r=" + file, {id: $("#ourservices").val()}, function (data) {
            unLoad(display);
            var obj = JSON.parse(data);
            switch (obj.status)
            {
                case 1:
                    $("#branch").val(obj.val);
                    $("#sendbtn").show();
                    break;
                default:
                    alert(obj.msg);
                    $("#sendbtn").hide();
                    break;
            }

        });
        return false;
    }
    function sendAjax(file, display)
    {
        onLoading();
        //$(display).html(file);
        $.post("/?r=" + file, {}, function (data) {
            $(display).html(data);
        });
        offLoading();
    }
    $(function () {
// Multiple images preview in browser
        var imagesPreview = function (input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);

                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallery-photo-add').on('change', function () {
            imagesPreview(this, 'div.gallery');
        });
    });
    function callcalc()
    {
        var location = $("#location").val();
        var area = $("#area").val();
        var pest = $("#pest").val();
        var type = $("#type").val();
        $.post("/?r=<?php echo $obj->encdata("C_CalcPrice"); ?>", {location: location, area: area, pest: pest, type: type}, function (data) {

            $("#price").html(data);
        });
    }
    function uploadEvent(file, display, form)
    {
        var form_data = new FormData($(form)[0]);
        onLoading();
        $.ajax({
            type: "POST",
            url: '/?r=' + file,
            data: form_data, //$("#studetnReg").serialize(), // serializes the form's elements.,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function (data)
            {
                offLoading();
                printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
                $(display).html(data);
                $(form)[0].reset();
                $(".gallery").html("");
            }});


        return false;
    }
    function printMessage(file, display)
    {
        $.post("/?r=" + file, {}, function (data) {
            $(display).html(data);
        });
    }
    function openAjaxURL(file, display)
    {
        onLoading();
        $.post("/?r=" + file, {id: 1}, function (data) {
            offLoading();
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");

            if (typeof (history.pushState) != "undefined") {
                var obj = {Title: "Title", Url: "<?php echo HOSTURL; ?>" + "?r=" + file + "1"};
                history.pushState(obj, obj.Title, obj.Url);
                //$.session.set("historyurl", "<php //echo HOSTURL;                                                            ?>" + "?r=" + file + "1");
            } else {
                alert("Browser does not support HTML5.");
            }
            // history.pushState(obj, obj.Title, obj.Url);
        });
        return false;
    }
    function openAjaxButton(file, display, modal)
    {

        onLoading();
        $.post("/?r=" + file, {id: 1}, function (data) {
            offLoading();
            dissmiss(modal);
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");

            if (typeof (history.pushState) != "undefined") {
                var obj = {Title: "Title", Url: "<?php echo HOSTURL; ?>" + "?r=" + file + "1"};
                history.pushState(obj, obj.Title, obj.Url);
                location.reload();
            } else {
                alert("Browser does not support HTML5.");
            }
            // history.pushState(obj, obj.Title, obj.Url);
        });
        return false;
    }
    function openAjaxRld(file, display, modal, id)
    {

        onLoading();

        $.post("/?r=" + file, {loanaccountno: id}, function (data) {
            offLoading();
            dissmiss(modal);
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");

            if (typeof (history.pushState) != "undefined") {
                var obj = {Title: "Title", Url: "<?php echo HOSTURL; ?>" + "?r=" + file + "1"};
                history.pushState(obj, obj.Title, obj.Url);
                location.reload();
            } else {
                alert("Browser does not support HTML5.");
            }
            // history.pushState(obj, obj.Title, obj.Url);
        });
        return false;
    }
    function openAjaxButton2(file, display, odata, modal)
    {

        onLoading();
        $.post("/?r=" + file, {id: 1}, function (data) {
            offLoading();
            dissmiss(modal);
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");

            if (typeof (history.pushState) != "undefined") {
                var obj = {Title: "Title", Url: "<?php echo HOSTURL; ?>" + "?r=" + file + "1"};
                history.pushState(obj, obj.Title, obj.Url);
                location.reload();
            } else {
                alert("Browser does not support HTML5.");
            }
            // history.pushState(obj, obj.Title, obj.Url);
        });
        return false;
    }
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;

        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            //alert("Only Number Accept");
            return false;
        }
        return true;
    }
    function onlyAlphabets(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                return true;
            else
                return false;
        } catch (err) {
            alert(err.Description);
        }
    }
    function onlyAlphabetswithspace(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32)
                return true;
            else
                return false;
        } catch (err) {
            alert(err.Description);
        }
    }
    function postDataWithValidationform(file, display, form, validation, file2)
    {
        //alert(file);
        if (addValidation(validation))
        {
            var data = new FormData($(form)[0]);
            onLoading();
            $.ajax({
                type: "POST",
                url: '/?r=' + file,
                data: data, //$("#studetnReg").serialize(), // serializes the form's elements.,
                enctype: "multipart/form-data",
                contentType: false,
                processData: false,
                success: function (data)
                {

                    offLoading();
                    openAjaxURL(file2, '#main');
                    $("#msg").show();
                    printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
                    $(display).html(data);
                    $(form)[0].reset();

                }});


        } else {
            alert("Invalid Value insert");
        }
        return false;
    }

    function addValidation(choise)
    {
        switch (choise)
        {
            case 'addBranchValidation':
                if (addBranchValidation())
                    return true;
                else
                    return false;
                // break;
            default:
                return false;
                // break;
        }
        //return false;
    }

    function addBranchValidation()
    {
        return true;
    }
    function SearchByNameBySelect(id, list, file, display)
    {
        var val = $(id).val();

        var opts = $(list).children();//.childNodes;
        for (var i = 0; i < opts.length; i++) {
            if (opts[i].value === val) {
                var s = opts[i].value.split("|");
                $(id).val(s[0]);
                onLoading();
                $.post("/?r=" + file, {empid: s[1]}, function (data) {
                    offLoading();
                    $(display).html(data);
                });
                break;
            }
        }

        return false;
    }
    function postDataCL(file, display, form)
    {
        var data = new FormData($(form)[0]);
        $(display).html(load());
        $.ajax({
            type: "POST",
            url: '/?r=' + file,
            data: data, //$("#studetnReg").serialize(), // serializes the form's elements.,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function (data)
            {
                $(display).html("");
                $(display).show();
                printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', display);
                $(display).html(data);
                $(form)[0].reset();

            }});

        //$(form).hide();
        return false;
    }
    function postData(file, display, form)
    {
        var data = new FormData($(form)[0]);
        onLoading();
        $.ajax({
            type: "POST",
            url: '/?r=' + file,
            data: data, //$("#studetnReg").serialize(), // serializes the form's elements.,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function (data)
            {
                offLoading();
                console.log(data);
                $("#msg").show();
                printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
                $(display).html(data);
                $(form)[0].reset();

            }});

        //$(form).hide();
        return false;
    }
    function postURL(file, display, id)
    {
        onLoading();
        $.post("/?r=" + file, {id: id}, function (data) {
            offLoading();
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
        });
        return false;
    }
    function deleteLogo(file, display, id)
    {
        onLoading();
        $.post("/?r=" + file, {id: id}, function (data) {
            offLoading();
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
            $("#trsk" + id).hide();
        });
        return false;
    }
    function getEvent(file, display)
    {
        onLoading();
        $.post("/?r=" + file, {title: $("#eventName").val()}, function (data) {
            offLoading();
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
        });
        return false;
    }
    function postURL2(file, display, id)
    {
        onLoading();
        $.post("/?r=" + file, {id: id}, function (data) {
            offLoading();
            $(display).html(data);

        });
        return false;
    }

    function postURL3(file, display, id)
    {
        var limit = $("#limit").val();

        onLoading();
        $.post("/?r=" + file, {id: id, limit: limit}, function (data) {
            offLoading();

            $(display).html(data);
            return false;
        });

    }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#select-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    function onInput(id, list, display, file) {
        var val = $(id).val();
        var opts = $(list).children();//.childNodes;
        for (var i = 0; i < opts.length; i++) {
            if (opts[i].value === val) {
                onLoading();
                $.post("/?r=" + file, {master: opts[i].value}, function (data) {
                    offLoading();
                    $(display).html(data);
                });
                break;
            }
        }
    }
    function deletePhoto(file, id, path)
    {
        onLoading();
        $.post('/?r=' + file, {id: id, path: path}, function (data) {
            onLoading();
            $("#img" + id).hide();
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
        });
    }
    function SliderAdd()
    {
        $("#Slider-perview").html($("#data").val());
    }
    $(document).ready(function () {
        $(".Editor-editor").keyup(function (e) {
            var data = $(".Editor-editor").html();
            $("#txtEditor").html(data);
        });
        //setInterval(function(){$("#msg").hide(); }, 10000);
    });


</script>
</body>
</html>