<?php

get_header();   //  funtion call for header.php

?>

<div class="row">
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

<!-- Start of Contact-->
<section id="contact">
    <!-- Blog White Part -->
    <div class="block">
        <!-- container -->
        <div class="container">
            <div class="row">
                <!-- Photo -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <div class="thumbnail">
                            <div class="image-style">
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php preg_match("#<img(.+?)src=(.+?)\/>#", $post->post_content, $matches);
                                    /* $matches is an array, $matches[0] holds the img code */
                                echo $matches[0]; ?>
                                <?php endwhile; // end of the loop. ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Photo -->

                <!-- Blog Title .... -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="align-text-bjot">
                        <div class="content">
                            <hr align="left" width="100px">
                            <?php
                                if(have_posts()) :

                                    while(have_posts()) : the_post();
                            ?>
                                        <h2><?php the_title(); ?></h2>
                            <?php
                                    endwhile;

                                else :

                                    echo '<p> No content found </p>';

                                endif; 
                            ?>
                            <hr align="left" width="100px">
                        </div>
                    </div>
                </div>
                <!-- / Blog Title .... -->
            </div>
        </div>
        <!-- / container -->
    </div>
    <!-- / Contact White Part -->

    <!-- Blog Gray Part -->
    <div class="block">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="contsent">
                <div class="row">
                    <!-- Content -->
                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                        <div class="text-justify">
                            <?php 
                                $content = get_the_content();
                                $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
                                $content = apply_filters('the_content', $content);
                                $content = str_replace(']]>', ']]>', $content);
                                echo $content;
                            ?>
                        </div>
                    </div>
                    <!-- / Content -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();   //  function call for footer.php
?>
