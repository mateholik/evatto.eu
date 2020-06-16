<?php
/**
 * The template for displaying the homepage.
 * Template Name: Homepage
 *
 */

get_header(); ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <?php
                if( have_rows('slide', 'option') ):
                    // loop through the rows of data
                    $count = 0;
                    while ( have_rows('slide', 'option') ) : the_row();
                      $image = get_sub_field('image');
                      $title = get_sub_field('title');
                      $text = get_sub_field('text');
                      $button = get_sub_field('button');
                      $active =($count == 0) ? 'active' : '';
                      ?>
                        <div class="carousel-item <?php echo $active; ?>" style="background-image: url('<?php echo $image; ?>')">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown"><?php echo $title; ?></h2>
                                    <p class="animate__animated animate__fadeInUp"><?php echo $text; ?></p>
                                    <a href="<?php echo $button['link']; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo $button['text']; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php
                        $count++;
                    endwhile;
                endif;
                ?>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container">
                <div class="row no-gutters">
                    <?php
                    if( have_rows('above_section', 'option') ):
                        // loop through the rows of data
                        $count = 0;
                        while ( have_rows('above_section', 'option') ) : the_row();
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="icon-box">
                                    <div class="icon"><?php echo $icon; ?></div>
                                    <h4 class="title"><?php echo $title; ?></h4>
                                    <p class="description"><?php echo $text; ?></p>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <?php
                $about_titles = get_field('section_title', 'option');
                ?>
                <div class="section-title">
                    <h2><?php echo $about_titles['main_title']; ?></h2>
                    <p><?php echo $about_titles['sub_title']; ?></p>
                </div>

                <div class="row">
                    <?php
                    $about = get_field('about_us_section', 'option');
                    ?>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="<?php echo $about['image']; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <?php echo $about['text']; ?>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->



        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2><?php echo get_field('section_title_services', 'option'); ?></h2>
                </div>

                <div class="row">

                        <?php
                        if( have_rows('service', 'option') ):
                            // loop through the rows of data
                            $count = 0;
                            while ( have_rows('service', 'option') ) : the_row();
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                ?>
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box iconbox-blue">
                                        <div>
                                            <img src="<?php echo $image; ?>" alt="">
                                        </div>
                                        <div class="content">
                                            <h4><?php echo $title; ?></h4>
                                            <p><?php echo $text; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>


                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><?php echo get_field('section_title_contact', 'option'); ?></h2>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <?php
                            $company = get_field('company', 'option');
                            $location = get_field('location', 'option');
                            $email = get_field('email', 'option');
                            $number = get_field('phone_number', 'option');
                            $emailTitle = get_field('footer_email', 'option');
                            $phoneTitle   = get_field('footer_phone', 'option');
                            $map = get_field('map_iframe', 'option');
                            ?>
                            <div class="address">
                                <i class="icofont-check"></i>
                                <h4><?php echo $company['title']; ?></h4>
                                <p><?php echo $company['text']; ?></p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4><?php echo $emailTitle; ?></h4>
                                <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4><?php echo $phoneTitle; ?></h4>
                                <p><a href="tel:<?php echo str_replace(' ', '', $number); ?>"><?php echo $number; ?></a></p>
                            </div>

                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4><?php echo $location['title']; ?></h4>
                                <p><?php echo $location['text']; ?></p>
                            </div>
                            <div class="map">
                                <?php echo $map; ?>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <?php
                            $contact_form = get_field('contact_form_shortcode', 'option');
                            echo do_shortcode($contact_form)
                        ?>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

<?php
get_footer();
