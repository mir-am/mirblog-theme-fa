<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */
?>

</div><!-- #main .site-main -->

<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
	<div class="site-info">
		<?php echo independent_publisher_footer_credits() . "<br />"; ?>
        <?php echo "Translated and improved by " . "<a href=\"https://github.com/mir-am\" target='_blank' title=\"Mir's GitHub profile\">Mir</a><br />"; ?>
	    <?php echo date("Y") . " &copy;"; ?>
    </div>
	<!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>


