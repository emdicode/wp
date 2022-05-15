<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emdicode_wp
 */

?>
<?php
do_action( 'emdicode_before_page' );
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php do_action( 'emdicode_page' ); ?>
    </article><!-- #post-<?php the_ID(); ?> -->
<?php do_action( 'emdicode_after_page' );
?>
