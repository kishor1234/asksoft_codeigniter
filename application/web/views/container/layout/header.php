<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!-->
<?php
$uri = $_SERVER['REQUEST_URI'];
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url2 = urlencode($url); // Outputs: Full URL
$title = $_SESSION["mData"]["mTitle"];
$cat = "Default";
$img = HOSTURL . "favicon.png";
$desc = $_SESSION["mData"]["meta"];
$keywork = $_SESSION["mData"]["keyword"];
try {
    if (isset($_SESSION["mData"]["postid"])) {
        $sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("id" => $obj->decdata($_SESSION["mData"]["postid"])));
        $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
        $r = $result->fetch_assoc();
        $title = $r["title"];
        $cat = $r["category"];
        $img = $r["img"];
    } else {

        $cat = $_SESSION["collegename"];
        $title = "PCFOTO.ME";
        //$img = $_SESSION["logo"];
        $keywork = "best wedding photography in pune, best wedding photography in daund, best wedding photography in india, wedding photo, couple photo";
        $desc .= "The team at pcfoto.me is best known for its quality of work, on-time service and wedding films. They strive to make their customers happy and deliver satisfactory work every time. The reviews on their profile speak for itself, how much their work is appreciated by real couples.";
    }
} catch (Exception $ex) {
    
}
?>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title> <?php echo $title; ?></title>
        <base href="<?= HOSTURL ?>">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta property="og:url"                content="<?php echo $url; ?>" />
        <meta property="og:type"               content="<?php echo $cat; ?>" />
        <meta property="og:title"              content="<?php echo $title; ?>" />
        <meta property="og:description"        content="<?php echo $desc; ?>" />
        <meta property="og:image"              content="<?php echo $img; ?>" />
        <meta property="og:keywords" content="<?php echo $keywork; ?>"/>
        <meta name="description" content="<?php echo $desc; ?>"/>
        <meta name="keywords" content="<?php echo $keywork; ?>">  
        <link rel="shortcut icon" href="favicon.png"> 
        <meta name="author" content="http://aasksoft.co.in/">
        <link rel="canonical" href="<?php echo $url; ?>">
        <meta name="copyright" content='PCFOTO.ME'>
        <meta name="MobileOptimized" content="320" />
        <!--start theme style -->
        <!--        <link rel="stylesheet" type="text/css" href="assets/html/css/animate.css">-->
        <link rel="stylesheet" type="text/css" href="assets/html/css/bootstrap.min.css">
        <link href="assets/html/lightgallery/lightgallery.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/html/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/html/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/html/css/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="assets/html/css/flaticon.css">
        <link rel="stylesheet" type="text/css" href="assets/html/css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="assets/html/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/html/css/responsive.css" />
        <link rel="stylesheet" type="text/css" href="assets/html/css/custome.css" />

        <!-- favicon link-->
        <link rel="shortcut icon" type="image/icon" href="favicon.ico" />
        <style>
            .logo{
                width: 150px;
                height: 50px;
            }
        </style>
        <!-- Global site tag (gtag.js) - Google Analytics -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NDTYT9E3J2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-NDTYT9E3J2');
        </script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e68e49890947600130947a1&product=inline-share-buttons&cms=sop' async='async'></script>
    </head>

    <body>
        <!--menu_wrapper header-area hidden-menu-bar stick-->
        <div class="menu_wrapper header-area hidden-menu-bar stick menu_fixed "  >
            <div class="container">
                <div class="menu_wrapper_mn">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                            <nav class="navbar hidden-xs">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse nav_response" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-left" id="nav_filter">
                                        <li role="presentation">
                                            <img src="<?php echo $_SESSION["logo"]; ?>" class="logo"  alt="Logo 2" onclick="window.location = '/'">
                                        </li>
                                    </ul>

                                </div>
                                <!-- /.navbar-collapse -->
                            </nav>
                            <div class="rp_mobail_menu_main_wrapper visible-xs">
                                <div class="row">
                                    <div class="col-xs-4 header_nav_div">
                                        <a href="/"><img src="<?php echo $_SESSION["logo"]; ?>" class="logo" alt="logo"></a>
                                    </div>
                                    <div class="col-xs-8">
                                        <div id="toggle">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                            <g>
                                            <g>
                                            <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#000" />
                                            </g>
                                            <g>
                                            <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#000" />
                                            </g>
                                            <g>
                                            <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#000" />
                                            </g>
                                            <g>
                                            <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#000" />
                                            </g>
                                            <g>
                                            <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#000" />
                                            </g>
                                            </g>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div id="sidebar">
                                    <a href="/"><img src="<?php echo $_SESSION["logo"]; ?>" class="logo" alt="logo" ></a>
                                    <div id="toggle_close">&times;</div>
                                    <div id='cssmenu' class="wd_single_index_menu">
                                        <ul>
                                            <li role="presentation"> <a href="/" role="button">  Home </a>
                                            </li>
                                            <li><a href="<?= HOSTURL ?>in/page/aboutus">About</a></li>
                                            <li><a href="<?= HOSTURL ?>in/page/allservices" >Service</a></li>
                                            <li><a href="<?= HOSTURL ?>in/page/blog">Blog</a></li>
                                            <li><a href="<?= HOSTURL ?>in/page/contactus">Contact</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="collapse navbar-collapse nav_response" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right" id="nav_filter">
                                    <li > <a href="/" role="button">  Home </a>
                                    </li>
                                    <?php
                                    $sql = $main->select("menu", $_SESSION["db_1"]) . $main->where(array("active" => 1, "parent" => 0), "AND") . $main->orderby("ASC", "position");
                                    $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $sql2 = $main->select("menu", $_SESSION["db_1"]) . $main->where(array("active" => 1, "parent" => $row["id"]), "AND") . $main->orderby("ASC", "position");
                                        $result2 = $main->adminDB[$_SESSION["db_1"]]->query($sql2);
                                        if ($result2->num_rows > 0) {
                                            echo "<li role=\"presentation\" class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> {$row["mtitle"]} <span class=\"caret\"></span> </a>";
                                            echo "<ul class=\"dropdown-menu\">";
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <li><a href="/in/<?php echo strtolower($row["mtitle"]) . "/" . str_replace(" ", "-", $row2["title"]); ?>"><?php echo $row2["mtitle"]; ?></a></li>
                                                <?php
                                            }
                                            echo "</ul></li>";
                                        } else {
                                            ?>
                                            <li><a href="/in/<?php echo "page/" . $row["title"]; ?>"><?php echo $row["mtitle"]; ?></a></li>
                                            <?php
                                        }
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--top header end-->
        <!--Slider wrapper Start -->
        <div class="get_call_fixed" data-toggle="modal" data-target="#myModal"></div>
        <div id="myModal" class="modal fade" role="dialog" style="background-color:transparent;">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <div class="modal-body sp_choose_main_wrapper" style="padding-top:20px; padding-bottom: 0px;" >
                        <div class="sp_choose_heading_main_wrapper">
                            <h2><span>GET A CALL</span></h2>
                        </div>
                        <div id="msg"></div>
                        <form action="#" id="getCall" method="post" onsubmit="return postData('<?php echo $obj->encdata("C_GetCall"); ?>', '#msg', '#getCall')">
                            <div class="form-group">
                                <label>Name <small class="text-danger">*</small></label>
                                <input type="text" name="name" class="form-control" onkeypress="return onlyAlphabetswithspace(event, 1)" id="name" placeholder="Full Name" required="">
                            </div>
                            <div class="form-group">
                                <label>Phone <small class="text-danger">*</small></label>
                                <input type="tel" maxlength="10" onkeypress="return isNumber(event, 1)" name="phone" id="phone" class="form-control" onkeypress="return isNumber(this)" placeholder="Mobile Number" required="">
                            </div>
                            <div class="form-group">
                                <label>Email <small class="text-danger">*</small></label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label>City <small class="text-danger">*</small></label>
                                <input type="text" name="city" id="city" onkeypress="return onlyAlphabetswithspace(event, 1)" class="form-control" placeholder="City" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-custom-black" value="Get Call">
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <br><br>
