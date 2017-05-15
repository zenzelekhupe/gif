<?php
 $wp_session = WP_Session::get_instance();
$url = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=anniversary";       //&limit=10
$variable = json_decode(file_get_contents($url));
$url1 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=Baby";       //&limit=10
$variable1 = json_decode(file_get_contents($url1));
$url2 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=Birthday";       //&limit=10
$variable2 = json_decode(file_get_contents($url2));
$url3 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=Congratulations";       //&limit=10
$variable3 = json_decode(file_get_contents($url3));
$url4 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=Friendship";       //&limit=10
$variable4 = json_decode(file_get_contents($url4));
$url5 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=Get-Well";       //&limit=10
$variable5 = json_decode(file_get_contents($url5));
$url6 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=Graduation";       //&limit=10
$variable6 = json_decode(file_get_contents($url6));
$url7 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=Just-Because";       //&limit=10
$variable7 = json_decode(file_get_contents($url7));
$url8 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=thank-you";       //&limit=10
$variable8 = json_decode(file_get_contents($url8));
$url9 = "https://api.tenor.co/v1/search?key=K4UGZIV43D48&tag=wedding";       //&limit=10
$variable9 = json_decode(file_get_contents($url9));
// $search_data ="https://api.tenor.co/v1/search?tag=<query>&key=LIVDSRZULELA";

// foreach ($variable->results as $key => $value) {		
	
// 	foreach ($value->media as $key => $value1) {
	
// 		// echo "<pre>"; print_r($value1->gif->url); echo "</pre>";
	
// 	}
// }
?>


<form method="post" action="<?php echo site_url();?>/checkout">
<section class="gif-tabs card-tabs diff1">
 <!-- <p style="font-size: 12px; font-weight:bold; letter-spacing: 1px; color: #717171; text-align: right;">Powered by GIPHY</p> -->
	<?php $gif_category = get_terms('gif_category'); // get all the gif_category ?>
 	<?php $gifs = get_user_meta(get_current_user_id(), 'gif'); ?>
<div id="whole-gif1">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs">
	
		
		<!-- <li <?php echo $retVal = ($gifs) ? '' : 'class="active"' ;?>>
			<a data-toggle="tab" href="#all_gif">All</a>
		</li> -->
		<?php

			// echo "<pre>";  print_r($gif_category); echo "</pre>";
			$counter = 'active';
		 foreach($gif_category as $gif) { ?>
			<li class=<?php echo $counter; ?>><a href="#<?php echo $gif->slug ?>" data-toggle="tab">
			<?php if (function_exists('ttw_thumbnail_image') && ttw_thumbnail_image($gif->term_id)) { 
				echo ttw_thumbnail_image($gif->term_id , $size);
				}else{ echo $gif->name; } ?>
			</a></li>
		<?php $counter++ ;} ?>
	</ul>
 
	<!-- Tab panes -->
	<div class="tab-content">
 		
		








		<!-- anniversary gif tab     -->
 
			<div class="tab-pane active" id="anniversary">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable->results as $key => $value) {		
	
					foreach ($value->media as $key => $value1) {
					
				// echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $value1->gif->url; ?>" name="choose_gif" id="my-<?php echo $value1->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $value1->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $value1->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!-- anniversary gif tab  ended  -->
       <!--  baby tab     -->
 
			<div class="tab-pane" id="baby">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable1->results as $key => $value1) {		
	
					foreach ($value1->media as $key => $baby) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $baby->gif->url; ?>" name="choose_gif" id="my-<?php echo $baby->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $baby->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $baby->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!--  baby tab  ended  --> 
       <!--  Birthday tab     -->
 
			<div class="tab-pane" id="birthday">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable2->results as $key => $value2) {		
	
					foreach ($value2->media as $key => $birthday) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $birthday->gif->url; ?>" name="choose_gif" id="my-<?php echo $birthday->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $birthday->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $birthday->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!--  birthday tab  ended  -->
         <!--  congratulations tab     -->
 
			<div class="tab-pane" id="congratulations">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable3->results as $key => $value3) {		
	
					foreach ($value3->media as $key => $congratulations) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $congratulations->gif->url; ?>" name="choose_gif" id="my-<?php echo $congratulations->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $congratulations->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $congratulations->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!--  congratulations tab  ended  --> 
       <!--  Friendship tab     -->
 
			<div class="tab-pane" id="friendship">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable4->results as $key => $value4) {		
	
					foreach ($value4->media as $key => $friendship) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $friendship->gif->url; ?>" name="choose_gif" id="my-<?php echo $friendship->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $friendship->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $friendship->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!--  Friendship tab  ended  -->
       <!--  get well tab     -->
 
			<div class="tab-pane" id="get-well">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable5->results as $key => $value5) {		
	
					foreach ($value5->media as $key => $get_well) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $get_well->gif->url; ?>" name="choose_gif" id="my-<?php echo $get_well->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $get_well->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $get_well->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!--  get well tab  ended  -->
	 <!--  Graduation tab     -->
 
			<div class="tab-pane" id="graduation">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable6->results as $key => $value6) {		
	
					foreach ($value6->media as $key => $graduation) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $graduation->gif->url; ?>" name="choose_gif" id="my-<?php echo $graduation->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $graduation->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $graduation->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!--  Graduation tab  ended  --> 
       <!--  just-because tab     -->
 
			<div class="tab-pane" id="just-because">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable7->results as $key => $value7) {		
	
					foreach ($value7->media as $key => $justbecause) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $justbecause->gif->url; ?>" name="choose_gif" id="my-<?php echo $justbecause->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $justbecause->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $justbecause->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!--  just-because tab  ended  --> 
       <!--  Thank you tab     -->
 
			<div class="tab-pane" id="thank-you">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable8->results as $key => $value8) {		
	
					foreach ($value8->media as $key => $thankyou) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $thankyou->gif->url; ?>" name="choose_gif" id="my-<?php echo $thankyou->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $thankyou->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $thankyou->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
 
			</div>

       <!--  thankyou tab  ended  -->
       <!--  wedding tab     -->
 
			<div class="tab-pane" id="wedding">   
			   
				<div class="col-md-12 masonry">
			<?php
				foreach ($variable9->results as $key => $value9) {		
	
					foreach ($value9->media as $key => $wedding) {
					
						 // echo "<pre>"; print_r($value1->gif); echo "</pre>";					
			?>	
					<div class="nopadding">
					<input type="radio" value="<?php echo $wedding->gif->url; ?>" name="choose_gif" id="my-<?php echo $wedding->gif->url; ?>" class="input-hidden choose_gif" />
						<label for="my-<?php echo $wedding->gif->url; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $wedding->gif->url ;?>"></label>
					</div>
			<?php 
					}
				}
			?>
				</div>
				
   
			</div>

       <!--  wedding tab  ended  -->



	</div><!-- tab-content -->
</div>
  <p class="sent-button"><input value="Next" type="button"  data-dismiss="modal" class="prev btn"></p>

<!--  <p class="sent-button"><input type="Submit" id="sendtocart1" name="gift-cart" value="Send"></p>
 -->
</section>
</form>

<!-- film-tabs -->
<!--<script type="text/javascript">
jQuery('.choose_gif').change(function(){
	var sum = <?php echo $wp_session['gift_data']['amount']; ?> + 0.99;
	 jQuery("#gif_amount").html(sum);
	 jQuery('#choose_gif').val(jQuery(this).val());
	 jQuery('#choose_gifamount').val(0.99);
	 //jQuery("#gif_amount").append(addnumbers($(<?php echo $wp_session['gift_data']['amount']; ?>).html(),$(".99").html()));
});

</script>-->

  
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
/* $(document).ready(function(){
    var a = $("#choose_card").val();
    var b = $("#b").val();   
    $("#submit").on("click", function(){
        var sum = a + b;
        alert(sum);         
    })
}) */
/* jQuery('.choose_card').change(function(){
   jQuery('#choose_card').val(jQuery(this).val());
		
}); */
// var a = $("#choose_card").val();
// var b = $("#b").val();
//$('#submit').on('click', slideonlyone()); 
 // jQuery(".sent-button").on("click", second_gif(){
       
 //        alert('hi');         
 //    })

</script>


<script type="text/javascript">
jQuery(document).ready(function(){
// jQuery("#search-box").on("click", function() {
// jQuery("#search-box").on("click", function() {
   jQuery("#search").click(function(){
    
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
                jQuery('#searchform p small').remove();
                jQuery('#choose_cat1').remove();
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

<script type="text/javascript">
jQuery(document).ready(function(){
  jQuery('.choose_gif').change(function() {
   //var gif = jQuery('.choose_gif').val(jQuery(this).val());
  var gif = jQuery("input:radio[name='choose_gif']:checked").val();
  console.log(gif);
  jQuery('#second_gif_img').html('<img src = '+gif+'>');

})
});

</script>

