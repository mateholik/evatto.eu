<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evatto
 */

?>

</div>
<!-- ======= Footer ======= -->
<?php
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$linkedin = get_field('linkedin', 'option');
?>
<footer id="footer">
    <div class="container">
        <div class="social-links">
            <?php if($facebook['show'][0] == 'Yes'): ?>
                <a href="<?php echo $facebook['link']; ?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <?php endif; ?>
            <?php if($instagram['show'][0] == 'Yes'): ?>
                <a href="<?php echo $instagram['link']; ?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <?php endif; ?>
            <?php if($linkedin['show'][0] == 'Yes'): ?>
                <a href="<?php echo $linkedin['link']; ?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <?php endif; ?>
        </div>
        <div class="copyright">
            evatto.eu <br> <?php echo date("Y"); ?>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


<?php wp_footer(); ?>
<!-- Vendor JS Files -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/venobox/venobox.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>
</html>
