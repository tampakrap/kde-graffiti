<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
    </div><!-- #main -->

    <div id="footer" role="contentinfo">

            <div class="plasma-left-top"></div>
            <div class="plasma-top"></div>
            <div class="plasma-right-top"></div>
            <div class="plasma-left"></div>
            <div class="plasma-center" >
                <div id="colophon">
            <div id="site-info">
            KDE Graffiti by <a href="http://blog.tampakrap.gr">tampakrap</a>, fork of <a href="http://kde-look.org/content/show.php?content=129377">KDE Breathe</a> by <a href="http://csslayer.info">csslayer</a> | The content of this blog is licensed under <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a>
            </div><!-- #site-info -->

            <div id="site-generator">
                <?php do_action( 'twentyten_credits' ); ?>
                <a href="<?php echo esc_url( __('http://wordpress.org/', 'twentyten') ); ?>"
                        title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'twentyten'); ?>" rel="generator">
                    <?php printf( __('Powered by %s.', 'twentyten'), 'WordPress' ); ?>
                </a>
            </div><!-- #site-generator -->

        </div><!-- #colophon -->
            </div><!-- plasma-post-center -->
            <div class="plasma-right" ></div>
    </div><!-- #footer -->

</div><!-- #wrapper -->

<?php
    /* Always have wp_footer() just before the closing </body>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to reference JavaScript files.
     */

    wp_footer();
?>
</body>
</html>
