<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>  
<!-- <div class="col-sm-2">
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="<?php echo site_url();?>">Home</a></li>
                    <li><a href="<?php echo site_url();?>/my-profile">My Profile</a></li>
                    <li><a href="<?php echo site_url();?>/my-orders">My Orders</a></li>
                    <li><a href="j<?php echo site_url();?>">FAQ</a></li>
                </ul>
            </nav>
    </div> -->