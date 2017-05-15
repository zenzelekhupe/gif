<?php /* Template Name: Home */ ?>
<?php get_header();?>
<div class="banner">
<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="  data-src="<?php the_field('home_banner', 'option');?>">
	<div><h3><?php the_field('banner_caption', 'option');?><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo site_url();?>/wp-content/themes/gifgift/img/emojis.gif"></h3></div>
</div>
<div class="choose-section">
  <div class="container">
     <form method="post" action="<?php echo site_url();?>/gift-cart">
    <div class="row">
 
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 opacity disabled">
    <div class="choose-section-inner">
      <div class="step-one">
      <div class="step"><span>1</span></div>
      <p>Choose <br><span>Gift Card</span></p>
      </div>
    </div>
     <!-- Small modal -->
<input type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm" value="The Card" data-step="1"></input>
<!--<a href="#myModal" role="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bd-example-modal-sm">The Card</a>-->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <div class="choose-card">
<h2>Choose One Card</h2>
<p class="chhose-ext">
The best way to send a gift card, attach a gif, and make someone happy.</p>
<!-- <strong>On the email we also need to put the copy on how to redeem the card.</strong> --> 
<!-- <a href="http://www.gifgiftcard.com/general-disclaimer/">General Disclaimer</a> &nbsp;&nbsp;<a href="http://www.gifgiftcard.com/starbucks-disclaimer/">Starbucks Disclaimer</a> -->

</div>
<!-- start -->

<div id="exTab2" class=""> 
 <?php get_template_part('home-parts/choose_card', 'top'); ?>
 <!-- <p class="popup-disclaimer">The merchants represented are not sponsors of the rewards or otherwise affiliated with Gifgiftcard.com. The logos and other identifying marks attached are trademarks of and owned by each represented company and/or its affiliates. Please visit each company's website for additional terms and conditions. 
</p>
  <p class="popup-disclaimer"> The Starbucks word mark and the Starbucks Logo are trademarks of Starbucks Corporation. Starbucks is also the owner of the Copyrights in the Starbucks Logo and the Starbucks Card designs. All rights reserved. Starbucks is not a participating partner or sponsor in this offer.</p> -->


  </div>
    </div>
  </div>
</div>
    </div>

<!-- Large modal -->



    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 opacity">
      <div class="choose-section-inner">
      <div class="step-one step2">
      <div class="step"><span>2</span></div>
      <p>Add the <br><span>Amount</span></p>
      </div>
    </div>


<input type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" value="The amount" data-step="2"></button>

 <div id="myModal21" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <?php get_template_part('home-parts/choose_amount'); ?>
    </div>
  </div>
</div>
 </div>


<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 opacity">
      <div class="choose-section-inner">
      <div class="step-one step3">
      <div class="step"><span>3</span></div>
      <p>Attach  <br><span>a Gif</span></p>
      </div>
    </div>


<input type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg1" value="The Gif" data-step="3"></button>

 <div id="myModal31" class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

     <div class="choose-card">
     <button type="button" class="close" data-dismiss="modal">×</button>
      <h2> Choose The Gif</h2>


      <!-- <form action="<?php echo site_url();?>/gift-cart" method="post">   -->
      <div id="searchform">  
      <p><input id="search-box" name="search-box" type="text" placeholder="Search">
      <input name="" value="search" id ="search" type="submit"><small>|<span>or</span>|</small></p>
      </div> 

      <!-- <p><input name="" type="text"><input name="" value="search" type="submit"> <small>|<span>or</span>|</small></p> -->
      <!-- <input name="" type="text" placeholder="choose category"> -->
      <p id="choose_cat">choose category</p>
      </div>
       <?php get_template_part('home-parts/choose_gif', 'top'); ?>
    </div>
  </div>
</div>
 </div>



    </div>
  </div>

</div>
</div>
  </form>

<!--- home-content start -->

<div class="home-content">
<div class="container">
<div class="home-content-inner">
    <div class="row">
    <div class="col-lg-12 "><input  type="button" class="btn btn-info btn-lg problem" data-toggle="modal" data-target="#myModal" value="Not ready to send? No problem"></div>
    <div class="home-forget collapse modal fade" id="myModal" class="" role="dialog">
      <form method="post" id="reminder_form">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h2>Reminder<i class="fa fa-bell" aria-hidden="true"></i>
      </h2>
      <input type="text" id="reminder_me" name="reminder_me" placeholder="Who do you want to remember?"><br/>
      <input type="text" id="reminder_occan" name="reminder_occan" placeholder="What’s the occasion?"><br/>
      <input type="date" id="remember_day" name="remember_day" placeholder="Date you want to remember (Month and day)"><br/>
      <input type="text" id="reminder_email" name="reminder_email" placeholder="Your email address"><br/>
      <input type="hidden" id="reminder-errors" value="">
      <input type="submit" id="reminder_btn" name="submit" value="We'll remind you so you never forget" class="forgg"><br/>
      </form>
    </div>
<?php
    
        $email = $_POST['reminder_email'];
	//if(!email_exists($email)){
    $password = wp_generate_password();
    $user_id = wp_create_user($email,$password,$email );
    $template = file_get_contents(get_template_directory_uri().'/email_templates/welcome.html');
    $template = str_replace("{{username}}",$email,$template);
    $template = str_replace("{{password}}",$password,$template);
    $headers = array('Content-Type: text/html; charset=UTF-8');
    // if( !is_wp_error($user_id) ) {
    //    $email = new WP_User( $user_id );
    //    $email->set_role( 'subscriber' );
    //     // wp_mail($email, 'Create User',$template,$headers);
    // }
      if (!is_wp_error($user_id) ){
                   wp_mail($email, 'Create User',$template,$headers);
                }  
   //}    
?>
<?php
  //$all_meta_for_user = get_user_meta(270);
  //$all_update_user_meta( $user_id, 'some_meta_key', $all_meta_for_user );
	//if ( get_user_meta($user_id,  'reminder_email', true ) != $new_value ){
		
	
  //print_r( $all_meta_for_user ); 
  //print_r( $all_meta_for_user ); 
  
?>
<?php
    if(isset($_POST['submit'])){
    $reme = $_POST['reminder_me'];
    $remoccan = $_POST['reminder_occan'];
    $remday = $_POST['remember_day'];
    $email = $_POST['reminder_email'];
	//if(!email_exists($email)){
    //$password = wp_generate_password();
    $user_id = wp_create_user($reme,$remoccan,$remday,$email );
	add_user_meta($user_id, 'reminder_email', $meta_value );
	
	
    $template = file_get_contents(get_template_directory_uri().'/email_templates/confirmation.html');
	
    //$template = str_replace("{{username}}",$email,$template);
    //$template = str_replace("{{password}}",$password,$template); 
    $template = str_replace("{{reme}}",$reme,$template);
    $template = str_replace("{{remoccan}}",$remoccan,$template);
    $template = str_replace("{{remday}}",$remday,$template);
    $headers = array('Content-Type: text/html; charset=UTF-8');
    // if( !is_wp_error($user_id) ) {
    //    $email = new WP_User( $user_id );
    //    $email->set_role( 'subscriber' );
    //     // wp_mail($email, 'Create User',$template,$headers);
    // }
		wp_mail($email, 'Your automatic reminder is all set!', $template, $headers);
        /* if (!is_wp_error($user_id) ){
                   wp_mail($email, 'Confirmation Email',$template,$headers);
       }  */ 
	//}
 }	
?>
	

    <!--  <div class="col-lg-6 home-forget">
      <input type="text" name="" value="Your Email Address">
      
      <div class="home-gif">
        <p>

        <img src="<?php //echo site_url();?>/wp-content/uploads/2017/03/videoborder3.png">
        Create your gif</p>
      </div>
    </div> -->


    </div>
</div>
</div>
</div>


<script type="text/javascript">
 jQuery("#sendtocart").click(function (e) {
      var choose_card = jQuery('#choose_card').val();
      var choose_amount = jQuery('#choose_amount').val();
      var choose_gif = jQuery('#choose_gif').val();

      if (choose_card == ''){
         event.preventDefault();
         sweetAlert("Oops...", "Please Select Gift Card!", "error");
      } else if(choose_amount == ''){
         event.preventDefault();
         sweetAlert("Oops...", "Please Add amount!", "error");
      } else if(choose_gif == ''){
         event.preventDefault();
          sweetAlert("Oops...", "Please Attach a Gif!", "error");
      }

   });
 </script>
 
 <script>
 jQuery(".next-step").click(function (e) {
//alert('inside first step');
        var $active = $('.choose-section-inner .bd-example-modal-lg');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
	
	
	function nextTab(elem) {
	$(elem).next().find('div[data-toggle="modal"]').click();
	}
		
 </script>
 
 
 <script>
function init() {
var imgDefer = document.getElementsByTagName('img');
for (var i=0; i<imgDefer.length; i++) {
if(imgDefer[i].getAttribute('data-src')) {
imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>



<script type="text/javascript">
jQuery(document).ready(function(){
// jQuery("#search-box").on("click", function() {
// jQuery("#search-box").on("click", function() {
   jQuery("#search").click(function(){
    
    var $form = jQuery('#search-box');
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
                jQuery('#whole-gif').html(response);
                jQuery('#searchform p small').remove();
                jQuery('#choose_cat').remove();
            }else{
              jQuery('.gif-tabs').html('<p> No Results Found </p>');
            }
        }
        });
       return false;
    });
  jQuery('#searchform').submit(function(){
     if($.trim($('#search').val()) == '')
     {
       alert("No search Keyword");
       return false;
     }
    else 
    {
     alert($('#search').val());
     return true;
    }     
  }) 
});

</script>

<!--- home-content end -->
<?php get_footer();?>