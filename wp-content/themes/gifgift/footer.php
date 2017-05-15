<div class="footer">
<div class="container">
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => '' ) ); ?>

<span><?php the_field('footer_text', 'option');?></span>
</div>
</div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/sweetalert.min.js"></script>
    <script type="text/javascript">
      jQuery("input").each(
            function(){
                jQuery(this).data('holder',jQuery(this).attr('placeholder'));
                jQuery(this).focusin(function(){
                    jQuery(this).attr('placeholder','');
                });
                jQuery(this).focusout(function(){
                    jQuery(this).attr('placeholder',jQuery(this).data('holder'));
                });
                
        });
    </script>
<?php wp_footer(); ?>
</body>
</html>