<?php /* Template Name: Gift Cart */ ?>
<?php get_header(); ?>
<?php
$platformName = 'GifGiftCard_Test'; // RaaS v2 API Platform Name
$platformKey = 'CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR'; 

$client = new RaaSV2Lib\RaaSV2Client($platformName, $platformKey);

$catalog = $client->getCatalog();
$result = $catalog->getCatalog();

foreach ($result as $key => $value) {

				foreach ($value as $key1 => $value1) {							
					if (strpos($value1->brandKey, $_POST['choose_card']) !== false) {
						$new = $value1->imageUrls;		
          	$card_disclaimer = $value1->disclaimer;
          	$card_disclaimers = $value1->brandKey;
        if($value1->items){
        foreach ($value1->items as $items) {         
         $reward_name = $items->rewardName;
         $check = explode("$", $reward_name);
        $reward_name = $check[0] .' $' .$_POST['choose_amount'];
        }
      }
        }
      }
}
?>
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
	$wp_session['gift_data'] =  array('gift_card_id' => $new['200w-326ppi'],
                  'amount' => $_POST['choose_amount'],
									'reward_name' => $reward_name,
									'gif_img_id' => $_POST['choose_gif'],
									'card_disclaimer' => $card_disclaimer,
									'card_disclaimers' => $card_disclaimers,
								 );
}
?>

<form action="<?php echo site_url();?>/checkout" method="post">	
	<div class="all-three-choose">
	<h1><span>Your Selection</span></h1>

	<?php if ($wp_session['gift_data']['amount'] && $wp_session['gift_data']['gift_card_id'] && $wp_session['gift_data']['gif_img_id']) { ?>
	<div class="col-lg-4"><label>Gift Card</label>

<!-- 	<img src="<?php //echo  $wp_session['gift_data']['gift_card_id'] ;?> "> -->


<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $new['200w-326ppi'];?>">


	</div>
	<div class="col-lg-4"><label>Amount</label><span id="gif_amount">$<?php echo $wp_session['gift_data']['amount']; ?></span></div>
	<div class="col-lg-4"><label>Gif</label>
	<img src="<?php echo $wp_session['gift_data']['gif_img_id'] ;?>">
  
    <div  id ="second_gif_img">
    <!-- 2nd gif -->
  </div>
  
	</div>



	<div class="scroller-div">		


			
			<div class="col-md-12">
					<!--<p><a href="#">Add a second gif, only .99!</a></p>-->
<p><a href="#myModal41" data-toggle="modal" data-target=".bd-example-modal-lg1" value="The Gif">Add a second gif, only .99!</a></p>
					
			
				<div class="col-lg-12 ">
					<div class="receiver-msg">
					<h3>Type your message</h3>
					<textarea name="rmessage"></textarea>
					</div>
				</div>
				<div class="">
					
						<button type="submit" id="dis" >Go to Checkout</button>	
				</div>
				</div>
<?php //echo $card_disclaimers; ?>	

		<?php if($card_disclaimers != 'B852711'){ ?>	
		<div class="card-disclaimer"><?php echo $card_disclaimer;?></div>
		<?php } else { ?>
	<div class="card-disclaimer"><a href="https://www.apple.com/legal/internet-services/itunes/us/terms.html" target="_blank">iTunes®</a> is  a registered trademark of Apple Inc.  All right reserved.  Apple is not a participant in or sponsor of this promotion.</div>
		<?php } ?>
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

</form>


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