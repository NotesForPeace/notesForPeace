<?php
/**
 * The template for displaying the sidebar and widgets
 *
 *
 * @package Notes for Peace
 * @since 1.0
 * @version 1.o
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1') ) : ?>
    <aside id="secondary" class="sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
<?php endif; ?>
