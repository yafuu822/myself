<?php
/**
* Template Name: scf
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
$test = get_the_category(19);
print_r($test);
echo "scf_exe";
$my_post = array(
  'post_title'    => "test_page",
  'post_content'  => "test",
  'post_status'   => 'publish',
  'post_author'   => 1
);
$post_id = wp_insert_post( $my_post );
add_post_meta( $post_id, "testmeta", "testmeta" );
echo $post_id;
?>
<div class="wrap">
</div><!-- .wrap -->

<?php get_footer();
