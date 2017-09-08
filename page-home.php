<?php

get_header();   //  funtion call for header.php

?>

<div class="row">
    <div id="header-image">
        <!-- header photo -->
        <img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/header_photo2.jpg" alt="header" class="">
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
                <!-- About Photo -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <div class="thumbnail">
                            <img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/u6Rai6m.jpg" alt="..." class="float-left img-thumbnail">
                        </div>
                    </div>
                </div>
                <!-- / About Photo -->
                
                <!-- About details -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="align-text-bot">
                        <div class="content">
                            <hr align="left" width="100px">
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
                            <hr align="left" width="100px">
                        </div>
                    </div>
                </div>
                <!-- / About details -->
            </div>
        </div>
        <!-- / container -->
    </div>
    <!-- / About White Part -->

    <!-- About Gray Part -->
    <div class="block-gray">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Title -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <hr align="left" width="100px">
                        <h1>I am passionate about entrepreneurship</h1>
                        <hr align="left" width="100px">
                    </div>
                </div>
                <!-- / title -->

                <!-- About short -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <?php
                        $page = get_page_by_title( 'About' );
                        $the_excerpt = $page->post_excerpt;
                        $page_data = get_page( $page );
                        $title = $page_data->post_title;
                    ?>
                    <div class="content">
                        <div class="entry-content">
                            <p><?php echo $page->post_excerpt; ?></p>
                        </div>
                    </div>
                </div>
                <!-- / About short -->
                <center>
                <a href="<?php echo home_url(); ?>/about/">
                    <button id="blogBTN-content">Read More</button>
                </a>
                </center>
            </div>
            <!-- / row -->
        </div>
        <!-- / container -->
    </div>
    <!-- / About Gray Part -->
</section>

<!-- Start of Blog -->
<section id="blog">
    <!-- White block -->
    <div class="block">
        <!-- container -->
        <div class="container">
            <!-- content -->
            <div class="content">
                <!-- row -->
                <div class="row">
                    <?php
                        $args = array(
                            'posts_per_page' => '3',
                            'offset' => 0,
                            'category' => 0,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'include' => '',
                            'exclude' => '',
                            'meta_key' => '',
                            'meta_value' =>'',
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'suppress_filters' => true
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                        $post_id = get_post_thumbnail_id();
                        $post_id_array = wp_get_attachment_image_src($post_id, 'full', true);
                        $post_img = $post_id_array[0];
                    ?>

                    <?php
                        $page = get_page_by_title( 'Sample Post' );
                        $the_excerpt = $page->post_excerpt;
                        $page_data = get_page( $page );
                        $title = $page_data->post_title;
                    ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="blog-img" style="background-image:url('<?php echo $post_img ?>');"></div>
                            <div class="blog-details">
                                </h1>
                                <p class="blog-excerpt">
                                    <?php
                                        $my_excerpt = get_the_excerpt();
                                        if ( '' != $my_excerpt ) {
                                            // Some string manipulation performed
                                        }
                                        echo $my_excerpt; // Outputs the processed value to the page
                                    ?>
                                </p>
                            </div>
                            <br>
                            <div class="box-center">
                                <a href="<?php echo get_permalink(); ?>">
                                    <div class="blog-btn-box">
                                        <div class="blog-box">
                                            <hr align="left" width="100px">
                                                <h3><?php echo get_the_title(); ?> </h3><!-- Displays the blog title -->
                                            <hr align="left" width="100px">
                                        </div>
                                        <button class="btn-blue-small">Read More</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                </div>
                <!-- / row -->
               
                <!-- View All Blog Btn -->
                <center>
                    <a href="<?php echo home_url(); ?>/blog/">
                        <button id="blogBTN-content">View All Blogs</button>
                    </a>
                </center>
                <!-- / View All Blog Btn -->
            </div>
            <!-- / content -->
        </div>
        <!-- / container -->
    </div>
    <!-- / White Block -->
</section>
<!-- / Blog -->


<!-- Contact -->
<section id="contact">
    <!-- About Gray Part -->
    <div class="block-gray">
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

<!-- Subscribe Gray Part -->
<section id="subscribe">
    <!-- About Gray Part -->
    <div class="block">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- subscribe Field -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <div style="margin-top: -150px;">    
                            <?php es_subbox($namefield = "YES", $desc = "", $group = "Public"); ?>
                        </div>
                    </div>
                </div>
                <!-- / subscribe Field -->
                
                <!-- subscribe text -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <hr align="left" width="100px">
                            <h1>Be updated and get on the list</h1>
                        <hr align="left" width="100px">
                    </div>
                </div>
                <!-- / subscribe text -->
            </div>
            <!-- / row -->
        </div>
        <!-- / container -->
    </div>
    <!-- / About Gray Part -->
</section>
<!-- / subscribe -->

<!-- Footer Image -->
<div class="row">
    <!-- <div id="thumbnail">
        <img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/pexels-photo-3739662.jpg" width="1364px" alt="footer" class="">
    </div> -->
    <div class="footer-image">s</div>
</div>
<!-- / Footer Image  -->
<?php
get_footer();   //  function call for footer.php
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    
    function placeholders() {
        document.querySelector("input[type=text][class=es_textbox_class]")
        .setAttribute("placeholder", "your email address");
    }

$(document).ready(placeholders);

</script>


