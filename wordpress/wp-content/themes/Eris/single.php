<?php
/**
 * @package WordPress
 * @subpackage White Label
 */
get_template_part('parts/header');

?>

<section class="span8">
    <? loop(); ?>
</section>

<section class="span4">
    Sidebar
</section>
<?
//get_sidebar();
get_template_part('parts/footer');
