<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Les_Embruns
 */

get_header();
?>

    <main id="primary" class="site-main">
        <section class="error-404 not-found container my-4">
            <div class="page-content text-center">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
                <p class="my-4">Il semblerait que vous soyez perdu.</p>
                <a href="<?php bloginfo('url'); ?>" class="button">Retourner à l'accueil</a>
            </div>
        </section>
    </main>

<?php
get_footer();
