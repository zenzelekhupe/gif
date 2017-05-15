<?php /* Template Name: Stripe Payment Gateway */ ?>
<?php get_header(); ?>

<style>
span#gif_amount {
    font-size: 50px;
}
</style>
<?php

$var = $wp_session['gift_data']['amount'] * 2.9 /100 + .30;
$cc1 = floatval($var);
$cc = number_format($cc1, 2,'.', ',');
//echo $cc;
 //echo "<pre>; print_r($cc); </pre>";
 ?>
<?php

$nameError ="";
$emailError ="";
$receiverError ="";
$remailError ="";
$chnameError ="";
$cvvError ="";
$cardError ="";

if(isset($_POST['onSubmitDo'])){
if (empty($_POST["urname"])) {
$nameError = "Name is required";
} else {
$name = $_POST["urname"];
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameError = "Only letters and white space allowed";
}
}

if (empty($_POST["uremail"])) {
$emailError = "Email is required";
} else {
$email = $_POST["uremail"];
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailError = "Invalid email format";
}
}

if (empty($_POST["rname"])) {
$receiverError = "Receiver Name is required";
} else {
$rname = $_POST["rname"];
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$receiverError = "Only letters and white space allowed";
}
}
if (empty($_POST["remail"])) {
$remailError = "Email is required";
} else {
$remail = $_POST["remail"];
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$remailError = "Invalid email format";
}
}
if (empty($_POST["cardholder_name"])) {
$chnameError = "Receiver Name is required";
} else {
$chname = $_POST["cardholder_name"];
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$chname)) {
$chnameError = "Only letters and white space allowed";
}
}

if (empty($_POST["cvv_no"])) {
$cvvError = "CVV is required";
} else {
$cvvname = $_POST["cvv_no"];
// check name only contains letters and whitespace

}

if (empty($_POST["card_number"])) {
$cardError = "Card Number is required";
} else {
$cardnumber = $_POST["card_number"];

}
}
?>


<div class="main-inner-page">
<div class="container">
<div class="inner-pages-inner">
<div class="send-to-stripes diff">
<?php $wp_session = WP_Session::get_instance();

if(isset($_POST['choose_gif']))
{

 $wp_session['gift_data']['gif2_img_id'] = $_POST['choose_gif'];
 $wp_session['gift_data']['gif2dataamount'] = 0.99;

}
// if ($_POST) {
//   $wp_session['gift_data'] =  array(
//                   'gif2dataamount' =>$_POST['gif2dataamount'],
//                  );
// }

if ($wp_session['gift_data']['amount'] && $wp_session['gift_data']['gift_card_id'] && $wp_session['gift_data']['gif_img_id']) {
?>
<div class="all-three-choose">
<h1><span>Your Selection</span></h1>

  <div class="col-lg-4"><label>Gift Card</label>

<!--   <img src="<?php //echo $wp_session['gift_data']['gift_card_id'] ;?> "> -->

<img src="<?php echo $wp_session['gift_data']['gift_card_id'];?>">


<?php //$card_disclaimer = $value1->disclaimer; ?>
<!-- <p style="font-size: 12px"><?php echo strip_tags($value1->disclaimer);?></p> -->

  </div>
  <div class="col-lg-4"><label>Amount</label><span id="gif_amount">$<?php if ($wp_session['gift_data']['gif2dataamount']) {
    echo $wp_session['gift_data']['amount'] + $wp_session['gift_data']['gif2dataamount'];
  }
  else {
   echo $wp_session['gift_data']['amount'];
   } 
   ?>
     
   <!-- </span><h6>Processing Fee: $<?php //echo $wp_session['gift_data']['amount'] * 2.9 /100 + .30; ?></h6><h6>Total Amount: $<?php //echo $wp_session['gift_data']['amount'] + $cc; ?></h6></div> -->
   <!-- </span><h6>Total Amount: $<?php //echo $wp_session['gift_data']['amount'] + $cc; ?></h6> -->

   </div>
  <div class="col-lg-4"><label>Gif</label>
  <img src="<?php echo $wp_session['gift_data']['gif_img_id'] ;?>">
  <img src="<?php echo $wp_session['gift_data']['gif2_img_id'] ;?>">
  </div>
</div>

<h1><span><?php the_title();?></span></h1>

 <p><span class = "error"></span></p>
<form action="<?php echo site_url();?>/payment" method="POST" id="payment-form" onsubmit="return onSubmitDo()">

<h3><span>Your Details</span></h3>
<input type="text" value="<?php //echo wp_get_current_user()->user_firstname;?>" name="urname" id="urname" placeholder="Your Name">
<span class="error">*<?php echo $nameError;?></span>
<input type="text" value="<?php echo wp_get_current_user()->user_email;?>" name="uremail" placeholder="Email" id="uremail">
<span class="error">*<?php echo $emailError;?></span>
<h3><span>Who are you sending it to ?</span></h3>
<input type="text" name="rname" placeholder="Receiver Name" id="rname">
<span class="error">* <?php echo $receiverError;?></span>
<?php
  if(isset( $wp_session['gift_data']['gif2_img_id']))
  {
    ?>
        <input type="hidden" name="gif2data" value="<?php echo $wp_session['gift_data']['gif2_img_id'] ;?>">
        <input type="hidden" name="gif2dataamount" value="0.99">
    <?php
  }
?>
<input type="text" name="remail" id="remail" placeholder="Email">
<span class="error">* <?php echo $remailError;?></span>
<!-- <input type="text" size = "3" placeholder="Address" name="raddress" data-stripe="address_state" /> -->
<input type="hidden" value="<?php echo $_POST['rmessage'];?>" name="rmessage" />
<input type="hidden" value="<?php echo $_POST['card_disclaimer'];?>" name="card_disclaimer" />

<div class="creditCardForm">
  <div class="heading"><h1>Confirm Purchase</h1></div>
  <h6><a href="https://stripe.com/us/pricing" target="_blank">CC Processing Fee:</a>  $<?php echo $cc; ?></h6><h6>Total Amount: $ <?php if ($wp_session['gift_data']['gif2dataamount']) {
    echo $wp_session['gift_data']['amount'] + $wp_session['gift_data']['gif2dataamount'] + $cc;
  }
  else {
   echo $wp_session['gift_data']['amount'] + $cc;
   } 
   ?><?php //echo $wp_session['gift_data']['amount'] + $cc; ?></h6>
 
      <div class="payment">
        <div class="form-group owner">
          <input placeholder="Cardholder Name" id="owner" type="text" size="20" name="cardholder_name" data-stripe="name"/>
		  <span class="error">* <?php echo $chnameError;?></span>
        </div>
        <div class="form-group" id="card-number-field">
		
          <input placeholder="Card Number" id="cardNumber" type="text" size="20" name="card_number" data-stripe="number"/>
		  <span class="error">* <?php echo $cardError;?></span>
        </div>
        <div class="form-group" id="expiration-date">
        <select data-stripe="exp-month">
          <option value="01">January</option>
          <option value="02">February </option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
        <select data-stripe="exp-year">
          <option value="16"> 2016</option>
          <option value="17"> 2017</option>
          <option value="18"> 2018</option>
          <option value="19"> 2019</option>
          <option value="20"> 2020</option>
          <option value="21"> 2021</option>
          <option value="22"> 2022</option>
          <option value="23"> 2023</option>
          <option value="24"> 2024</option>
          <option value="25"> 2025</option>
        </select>

   </div>
        <div class="form-group CVV">
          <input placeholder="CVC" type="text" name="cvv_no" id="cvv" data-stripe="cvc"/>
		  <span class="error">* <?php echo $cvvError;?></span>
        </div>
      <div class="form-group" id="pay-now">
          <button type="submit" name = "submit_button" id="submit_button">Pay Now</button>
         
      </div>
         <div id="credit_cards">
        <img src="<?php echo get_template_directory_uri();?>/images/visa.jpg" id="visa">
        <img src="<?php echo get_template_directory_uri();?>/images/mastercard.jpg" id="mastercard">
        <img src="<?php echo get_template_directory_uri();?>/images/amex.jpg" id="amex">
      </div>
	  
	  <?php if($wp_session['gift_data']['card_disclaimers'] != 'B852711'){ ?>	
		<div class="card-disclaimer"><?php echo $wp_session['gift_data']['card_disclaimer'];?></div>
		<?php } else { ?>
	<div class="card-disclaimer"><a href="https://www.apple.com/legal/internet-services/itunes/us/terms.html" target="_blank">iTunes®</a> is  a registered trademark of Apple Inc.  All right reserved.  Apple is not a participant in or sponsor of this promotion.</div>
		<?php } ?>
	  
        <!--<div class="card-disclaimer"><?php //echo $card_disclaimer;?></div>-->
    </div>
  </div>
</form>
<span style='color: red' id='payment-error'></span>
<?php }else{
	echo "<h2>Session Expired</h2>";
	}
 ?>
</div>
</div>
</div>
</div>




<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script type="text/javascript">
  
    Stripe.setPublishableKey('pk_test_NnsrMmLIyMaicgEAl1jPv4CA');
    
    function onSubmitDo () {
      
      Stripe.card.createToken( document.getElementById('payment-form'), myStripeResponseHandler );
          
      return false;
    };

    function myStripeResponseHandler ( status, response ) {
      
      console.log( status );
      console.log( response );
    
      if ( response.error ) {
		  sweetAlert('Oops...', response.error.message, 'error');
        //document.getElementById('payment-error').innerHTML = response.error.message;
      } else {
        var tokenInput = document.createElement("input");
        tokenInput.type = "hidden";
        tokenInput.name = "stripeToken";
        tokenInput.value = response.id;
        var paymentForm = document.getElementById('payment-form');
        paymentForm.appendChild(tokenInput);

        paymentForm.submit();
      }
      
   };      
 </script>

 
 
  <!--              <script type="text/javascript">
 jQuery("#submit_button").click(function (e) {
  
      var urname = jQuery('#urname').val();
      var uremail = jQuery('#uremail').val();
      var rname = jQuery('#rname').val();
      var remail = jQuery('#remail').val();
      var cardholder_name = jQuery('#cardholder_name').val();
      var card_number = jQuery('#card_number').val();

      if (urname == ''){
         event.preventDefault();
        //alert("Please Enter user name!");
      }
       else if(uremail == ''){
         event.preventDefault();
         sweetAlert("Oops...", "Please enter email", "error");
      } else if(rname == ''){
         event.preventDefault();
          sweetAlert("Oops...", "Please enter reciver name", "error");
      }else if(remail == ''){
         event.preventDefault();
          sweetAlert("Oops...", "Please enter reciver email", "error");
      }else if(cardholder_name == ''){
         event.preventDefault();
          sweetAlert("Oops...", "Please enter Cardholder name", "error");
      }else if(card_number == ''){
         event.preventDefault();
          sweetAlert("Oops...", "Please enter Card number", "error");
      }
   });
 </script> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/js/cc/jquery.payform.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri();?>/js/cc/script.js" type="text/javascript"></script>
<style type="text/css">
  .transparent {
    opacity: 0.2;
}
</style>
<script>
$('#cardNumber').on('keypress change blur', function () {
    $(this).val(function (index, value) {
		return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ');
       // return value.replace(/[^a-z0-9]+/gi, '').replace(/\s/g, '');
    //document.write( str.replace(/\s/g, '') );
    });
});

$('#cardNumber').on('copy cut paste', function () {
    setTimeout(function () {
        $('#cardNumber').trigger("change");
    });
});
</script>
<?php get_footer(); ?>
