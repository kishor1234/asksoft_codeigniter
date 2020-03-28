
<?php
$r = $_REQUEST['v'];
$v = $_REQUEST['r'];
$data = array();
$r = str_replace("-", " ", $r);
$sql = $main->select("menu", $_SESSION["db_1"]) . $main->whereSingle(array("title" => $r));
$result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
if ($row = $result->fetch_assoc()) {
    array_push($data, array("menu" => $row));
}
$postid = $data[0]["menu"]["postid"];
$sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("id" => $postid));
$result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
if ($row = $result->fetch_assoc()) {
    array_push($data, array("post" => $row));
}
// Slider
$main->isLoadView("VCustomSlider", false, array("category" => $data[1]["post"]["title"]));
// Slider
//echo "<br><br>";
?>
<div class="sp_choose_main_wrapper">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                <div class="sp_choose_heading_main_wrapper pst_bottompadder10">
                    <?= $data[1]["post"]["description"] ?>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about_us_sections sp_choose_heading_main_wrapper">
    <div class="sp_abt_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <!-- code here-->
                <div class="video_sec_icon_wrappe"><br>
                    <h2 style="color:#FFFFFF;"><span><?=$r?> Gallery</span></h2>
                    <br>
                    <!--thumbnail fancybox-->
                    <div class="blog_wrapper_catt sidebar_widget" id="aniimated-thumbnials" >

                        <?php
                        $sql = $main->select("events", $_SESSION["db_1"]) . $main->whereSingle(array("title" => $data[1]["post"]["title"]));
                        $r = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                        while ($row = $r->fetch_assoc()) {
                            ?>
                            <a class=" col-lg-3" href="<?php echo $row["url"]; ?>">
                                <img class="img-responsive" alt="Image" src="<?php echo $row["url"]; ?>" />
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
