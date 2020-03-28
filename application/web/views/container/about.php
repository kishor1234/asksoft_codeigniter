<?php $main->isLoadview("banner", false, array("title" => "About")); ?>
<!--page content Section Satrt-->
<div class="about_page_wrapper pst_toppadder100">
    <div class="container">
        <div class="row">
            <div class="abt_page_left_wrapper">
                <div class="abt_txt_page_wrapper pst_bottompadder40">
                    <div class="sidebar_widget about_page_heading_wrapper">
                        <h4> about our journey  <span></span></h4>

                        <p style="text-align: justify;">Tahaan Pest Solutions & Fumigations is one of the emerging Pest Control agencies in India.</p>
                        <p style="text-align: justify;">It was found by Mr. Zahid Akbar Shaikh as Managing Director in 1999. We are  <?php echo date("Y") - 1999; ?> years young company with group of high skilled & experienced professionals having deep knowledge on urban pest, hence we proudly say we are one stop solution for you any pest requirement in commercial as well as residential areas
                        </p>

                        <h4>Our Mission <span></span></h4>
                        <p style="text-align: justify;">
                            To Spread Awareness about health risk caused by pest so that one can do precautionary<br> steps to safeguard from harmful disease caused by pest. To Make India Pest Disease free.
                        </p>

                        <h4>Our Vision <span></span></h4>
                        <p style="text-align: justify;">
                            To be World leader in pest control industry.
                        </p>

                        <h4>Our Value <span></span></h4>
                        <p style="text-align: justify;">
                            Customer satisfaction is our main  motto.
                        </p>

                        <h4>Certifications <span></span></h4>
                        <p style="text-align: justify;">
                            We are a government certified agency and a certified member of Pest Management Association (PMA). Also, we are part of the committee of Pest Management Welfare Association Mumbai.
                        </p>  
                        <center>
                        <img src="assets/row/pc1.png" alt=""/>
                        <img src="assets/row/pc2.png" alt=""/>
                        <img src="assets/row/pc3.png" alt=""/>
                        </center>
                        <br><br>
                    </div>
                </div>

            </div>

            <div class="abt_page_img_rght_wrapper">
                <div class="pc_abt_img_wrapper">
                    <img src="assets/html/images/img/ab_right.png" alt="Image"/>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$main->isLoadview("VCertificatList", false, array()); 
$main->isLoadView("VTestimonalis",false,array());
?>