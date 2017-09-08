<?php

get_header();   //  funtion call for header.php

?>

<div class="row">
    <div id="header-image">
        <!-- header photo -->
        <img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/pexels-photo-441963-2.jpeg" alt="header" class="">
        <!-- / header photo -->

        <!-- Logo -->
        <div class="row">
            <div class="col">
                <p><a href="<?php echo home_url(); ?>/home/"><img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/DonSepe_Logo.png" width="200px" alt="Landing Page Header Photo" class="img-responsive" /></a></p>
            </div>
        </div>
        <!-- / Logo -->

        <!-- Nav Icon -->
        <div class="row">
            <div class="nav-icon">
                <span onclick="openNav()"><img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/threelines.png" width="50px" alt="Landing Page Header Photo" class="img-responsive" /></span>
            </div>
        </div>
        <!-- / Nav Icon -->

        <!-- Scroll down -->
        <div class="row">
            <div class="scroll-nav">
                <p><a href="#about">Scroll Down</a> <span class="glyphicon glyphicon-menu-down"></span></p>
            </div>
        </div>
        <!-- / Scroll down -->
    </div>
    <!-- end header image -->
</div>
<!-- end row -->


<!-- nav -->
<div id="mySidenav" class="sidenav">
<img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/DonSepe_Logo.png" class="" width="130px" style="margin-left:10px;" alt="Landing Page Header Photo" class="img-responsive" />
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#about">About</a>
    <a href="#blog">Blog</a>
    <a href="#contact">Contact</a>
    <a href="#">Subscribe</a>
</div>

<!-- Start of About -->
<section id="about">
    <!-- About White Part -->
    <div class="block">
        <!-- container -->
        <div class="container">
            <div class="row">
                <!-- Entrepreneurship .... -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="align-text-bot">
                        <div class="content">
                            <p style="text-align:right;text-transform: uppercase; letter-spacing: 7px;">About</p>
                            <hr align="right" width="100px">
                                <h1 style="text-align:right;">Well, hello there! <br> My name is Don.</h1>
                            <hr align="right" width="100px">
                        </div>
                    </div>
                </div>
                <!-- / Entrepreneurship .... -->
                
                <!-- Photo -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <div class="thumbnail">
                            <img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/pexels-photo-296115.jpg" alt="..." class="float-left img-thumbnail">
                        </div>
                    </div>
                </div>
                <!-- / Photo -->
            </div>
        </div>
        <!-- / container -->
    </div>
    <!-- / About White Part -->

    <!-- About Gray Part -->
    <div class="">
        <!-- container -->
        <div class="containers">
            <!-- row -->
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <?php
                        if(have_posts()) :

                            while(have_posts()) : the_post();
                        ?>
                                <h2><?php the_content(); ?></h2>
                        <?php
                            endwhile;

                        else :

                            echo '<p> No content found </p>';

                        endif; 
                    ?>
                </div>
                <!-- / title -->

            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact">
    <!-- About Gray Part -->
    <div class="block">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- contact -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <hr align="left" width="100px">
                            <h1>Interested and committed to change?</h1>
                        <hr align="left" width="100px">
                    </div>
                </div>
                <!-- / contact -->
                
                <!-- contact btn -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <center>
                        <a href="<?php echo home_url(); ?>/contact/">
                            <button id="contactBtn-content">Contact Me</button>
                        </a>
                        </center>
                    </div>
                </div>
                <!-- / contact btn -->
            </div>
            <!-- / row -->
        </div>
        <!-- / container -->
    </div>
    <!-- / About Gray Part -->
</section>
<!-- / Contact -->

<?php
get_footer();   //  function call for footer.php
?>


