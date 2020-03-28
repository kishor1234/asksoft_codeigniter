<style>
    .item img{
        width:100%;
    }
</style>
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
        $active = "active";
        $slidResult = $main->adminDB[$_SESSION["db_1"]]->query($main->select("slider", $_SESSION["db_1"]));
        while ($row = $slidResult->fetch_assoc()) {
            ?>
            <div class="item  <?php echo $active; ?>">
                <img src="<?php echo $row["img"]; ?>" alt="Los Angeles">
                <div class="carousel-caption d-none d-md-block">
                    <h1>This is Slider Image</h1>
                    <p>This is paregraph image</p>
                </div>
            </div>
            <?php
            $active = "";
        }
        ?>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
