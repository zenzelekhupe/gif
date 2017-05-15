<?php /* Template Name: Gift Cart */ ?>
<?php get_header(); ?>
<style>
.tab-content {
    width: 100%;
    float: left;
    height: 300px;
    overflow-x: hidden;
    overflow-y: scroll;
}
</style>
<div class="main-inner-page">
<div class="container">
<div class="inner-pages-inner">
<?php 
 $wp_session = WP_Session::get_instance();
 // unset($wp_session['gift_data'] );

if ($_POST) {
	$wp_session['gift_data'] =  array('gift_card_id' => $_POST['choose_card'],
									'amount' => $_POST['choose_amount'],
									'gif_img_id' => $_POST['choose_gif'],
								 );
}
?>


	<div class="all-three-choose">
	<h1><span>Your Selection</span></h1>

	<?php if ($wp_session['gift_data']['amount'] && $wp_session['gift_data']['gift_card_id'] && $wp_session['gift_data']['gif_img_id']) { ?>
	<div class="col-lg-4"><label>Gift Card</label><img src="<?php echo  $wp_session['gift_data']['gift_card_id'] ;?> "></div>
	<div class="col-lg-4"><label>Amount</label><span id="gif_amount">$<?php echo $wp_session['gift_data']['amount']; ?></span></div>
	<div class="col-lg-4"><label>Gif</label>
	<img src="<?php echo $wp_session['gift_data']['gif_img_id'] ;?>">
	</div>


	<div class="scroller-div">		


			
			<div class="col-md-12">
					<!--<p><a href="#">Add a second gif, only .99!</a></p>-->
<p><a href="#myModal41" data-toggle="modal" data-target=".bd-example-modal-lg1" value="The Gif">Add a second gif, only .99!</a></p>
					
			<form action="<?php echo site_url();?>/checkout" method="post">	
				<div class="col-lg-12 ">
					<div class="receiver-msg">
					<h3>Type your message</h3>
					<textarea name="rmessage"></textarea>
					</div>
				</div>
				<div class="col-lg-12 ">
					
						<button type="submit" id="dis" >Go to Checkout</button>	
				</div>
			</form>
				</div>
			
	</div>
	<?php }else{
		echo "<h2>Your Selection is empty </h2>";
		} ?>
	</div>
</div>
</div>
</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 opacity">


<div id="myModal41" class="modal fade bd-example-modal-lg1 choose-section" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg1">
    <div class="modal-content">
     <div class="choose-card">
     <button type="button" class="close" data-dismiss="modal">×</button>
      <h2> Choose The Gif</h2>  
      <!-- <form action="<?php echo site_url();?>/gift-cart" method="post">   -->
      <div id="searchform1">  
      <p><input id="search-box1" name="search-box" type="text" placeholder="Search">
      <input name="" value="search" id ="search1" type="submit"><small>|<span>or</span>|</small></p>
      </div> 
          <p id="choose_cat1">choose category</p>
      </div>
       <?php get_template_part('home-parts/choose_gif_cart', 'top'); ?>
    </div>
  </div>
</div>
 </div>	






<!-- <script type="text/javascript">
jQuery( document ).ready(function($) {
  // $('.dis').attr("disabled",false);
});
jQuery(".choose_gif").click(function (e) {
	var gif2_id=$(this).attr('id');
	var gif2_val=$(this).val();
// alert(gif2_id);
 //alert(gif2_val);

	 jQuery('#dis').css('pointer-events',' none');
	 // alert(gif2_id+"---"+gif2_val);

	ajaxurl = "<?php echo admin_url( 'admin-ajax.php' )?>";

	jQuery.post(ajaxurl, 
	    {
	    	'type'    : 'POST',
	        'action': 'add_foobar',
	        'data':   gif2_id+"-"+gif2_val,
	        'data-id': true
	    }, 
	    function(response){
	         console.log( response);
	         // location.reload(true);
	           // sweetAlert("Good job!", "Second GIF Added Procced To Checkout.", "success");


	           $('#choose_gif').val(response.slice(0,-1));
	          jQuery('#dis').css('pointer-events','all');
	    }
	);

});
 </script> -->

<script type="text/javascript">
jQuery(document).ready(function(){
// jQuery("#search-box").on("click", function() {
// jQuery("#search-box").on("click", function() {
   jQuery("#search1").click(function(){
    
    var $form = jQuery('#search-box1');
    var $input = $form.find('input[name="search-box"]');
    var query  = $form.val();
    jQuery.ajax({
            type: "GET",
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
              data : {
            action : 'load_search_results',
            query : query
            },
             success : function( response ) {
            if( response ) {
                jQuery('#whole-gif1').html(response);
                jQuery('#searchform1 p small').remove();
                jQuery('#choose_cat1').remove();
            }else{
              jQuery('.gif-tabs').html('<p> No Results Found </p>');
            }
        }
        });
       return false;
    });
  jQuery('#searchform1').submit(function(){
     if($.trim($('#search1').val()) == '')
     {
       alert("No search Keyword");
       return false;
     }
    else 
    {
     alert($('#search1').val());
     return true;
    }     
  })
});

</script>
<?php get_footer(); ?>