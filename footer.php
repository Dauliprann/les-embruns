<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Les_Embruns
 */

?>
</main>

<footer>
    <div class="container text-center white">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_small_white.png" alt="Logo pied de page">
        <a href="https://www.facebook.com/lesembrunsiledere/"><i class="fa fa-facebook"></i></a>
        <div class="contact-footer">
            <p>Restaurant Les Embruns</p>
            <p>6 Rue Chay Morin 17410 Saint-Martin-de-Ré</p>
            <p>05 46 66 46 31</p>
        </div>
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-footer',
            'menu_class' => 'mentions-footer d-md-flex justify-content-center',
        )); ?>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>
