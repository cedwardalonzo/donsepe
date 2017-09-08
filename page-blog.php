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
    <a href="#subscribe">Subscribe</a>
</div>

<!-- Start of Contact-->
<section id="contact">
    <!-- About White Part -->
    <div class="block">
        <!-- container -->
        <div class="container">
            <div class="row">
                <!-- Photo -->
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="content">
                        <div class="thumbnail">
                            <img src="http://localhost:8080/donsepe/wp-content/uploads/2017/08/pexels-photo-442574-3.jpeg" alt="..." class="float-left img-thumbnail">
                        </div>
                    </div>
                </div>
                <!-- / Photo -->

                <!-- Entrepreneurship .... -->
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
                            <a href="#">
                                <button id="blogBTN-content">Read More</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- / Entrepreneurship .... -->
                
            </div>
        </div>
        <!-- / container -->
    </div>
    <!-- / Contact White Part -->
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
                        $outCurrentPage = get_query_var('paged');

                        $blogPosts = new WP_Query(
                            array(
                                'posts_per_page' => '3',
                                'category' => 'blog',
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'paged' => $outCurrentPage
                            )
                        );
                        while ( $blogPosts->have_posts() ) : $blogPosts->the_post(); 
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
                    ?>
                </div>
                <!-- / row -->

                <!-- Pagination -->
                <center>
                <div class="pagination-next" style="margin-top: 100px;">
                    <?php previous_posts_link(); ?>
                </div>
                
                <div class="pagination-next" style="margin-top: 100px;">
                    <?php next_posts_link('Next Page', $blogPosts->max_num_pages); ?>
                </div>
                    </center>
                <!-- / Pagination -->
            </div>
            <!-- / content -->
        </div>
        <!-- / container -->
    </div>
    <!-- / White Block -->
</section>
<!-- / Blog -->

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

<?php
get_footer();   //  function call for footer.php
?>
