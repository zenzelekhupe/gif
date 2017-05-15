<?php /* Template Name: Pay Now */ ?>
<style>
.business-header {
    height: 450px;
    background: url('https://images.pexels.com/photos/232/apple-iphone-books-desk.jpg?w=940&h=650&auto=compress&cs=tinysrgb') center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
</style>
<?php get_header(); 
 require_once(get_template_directory().'/stripe/init.php');

$stripe = array(
  "secret_key"      => "sk_test_6fuP0z43LmRolFyQdWPg32zF",
  "publishable_key" => "pk_test_NnsrMmLIyMaicgEAl1jPv4CA"
  //"secret_key"      => "sk_live_eFHOkphEL3oWODpdAElpnubg", //live secret key
  //"publishable_key" => "pk_live_KcnpbnmV1kl9Nxn3MlOQG3Qe"  // live publishable key
);

Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
<?php 
//require_once '../tangocard/src/Models/';
$platformName = 'GifGiftCard_Test'; // RaaS v2 API Platform Name
$platformKey = 'CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR'; // RaaS v2 API Platform Key

$client = new RaaSV2Lib\RaaSV2Client($platformName, $platformKey);
$orders = $client->getOrders();
//$body = new CreateOrderRequestModel();

//$result1 = $orders->createOrder($body[{accountIdentifier : "shaanakshma", amount : "10", customerIdentifier : "shaanakshma",  emailSubject : "Create Order", message: "Testing For Oreder", recipient: {email: "shaanaksh999@gmail",firstName: "shaan", lastName: "sunny"}, sendEmail : "false", sender:{email:"shaanaksh999@gmail.com",firstName: "shaan", lastName: "sunny"},utid : "U157189" }]);
//echo "<pre>"; print_r($result1);
$referenceOrderID = 'RA170508-218-72';
//$referenceOrderID = 'RA170508-218-72';

$result2 = $orders->getOrder($referenceOrderID);

 $referenceOrderID = $result2->referenceOrderID;
 //echo "<pre>"; print_r($orders);
$redemption = $result2->reward->redemptionInstructions;
//$claimcode = $result2->reward->credentials->Claim Code;

?>

<?php

$var = $wp_session['gift_data']['amount'] * 0.029 + .30;
$cc1 = floatval($var);
$cc = number_format($cc1, 2,'.', ',');
//echo $cc;
 //echo "<pre>; print_r($cc); </pre>";
 ?>
<div class="main-inner-page">
<div class="container">
<div class="inner-pages-inner">
<div class="send-to-stripes diff id-success">
<h1><span>Sender Details</span></h1>
<?php $wp_session = WP_Session::get_instance();
 if($_POST['gif2data']){
	$wp_session['gift_data']['gif2_img_id'] = $_POST['gif2data'];  
 }
if(isset($wp_session['gift_data']['gif2_img_id'])){
	$original_amount = $wp_session['gift_data']['amount'] + $wp_session['gift_data']['gif2dataamount'];
	$original_stripe_format = $original_amount  * 100;
    $total_amount =  $original_amount + $cc;
    $total_stripe_format =  $total_amount * 100;
}else{
	 $original_amount =  ($wp_session['gift_data']['amount']);
	 $original_stripe_format =  ($original_amount) * 100;
	 $total_amount =  $original_amount + $cc;
	 $total_stripe_format =  $total_amount * 100;
}

         // define variables and set to empty values
         $nameErr = $emailErr = $cardholder_name = $address = "";
         $name = $email = $cardholder = $address = $rname = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["urname"])) {
               $nameErr = "Name is required";
            }else {
               $name = $_POST["urname"];
            }
            
            if (empty($_POST["uremail"])) {
               $emailErr = "Email is required";
            }else {
               $email = $_POST["uremail"];
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["rname"])) {
               $rname = "Receiver Name is required";
            }
            else {
               $rname = $_POST["rname"];
            }
            
           
            
            if (empty($_POST["cardholder_name"])) {
               $cardholder_name = "Card holder name  is required";
            }else {
               $cardholder = $_POST["cardholder_name"];
            }
         }
 

//echo "<pre>"; print_r($wp_session['gift_data']); echo "</pre>" ; 
if ($wp_session['gift_data']['amount']) { 
$card = $wp_session['gift_data']['gift_card_id'];
$gif = $wp_session['gift_data']['gif_img_id'];
$gif2 = $wp_session['gift_data']['gif2_img_id'];
$card_disclaimer = $wp_session['gift_data']['card_disclaimer'];
$name = 'Gif Gift Card';
$description = "Send Gift to your loved one's";
$label = "Proceed";
$urname = $_POST['urname'];
$rname = $_POST['rname'];
$remail = $_POST['remail'];

$rmessage = $_POST['rmessage'];
  

    
    $token  = $_POST['stripeToken'];
    $email  = $_POST['uremail'];

   // echo "$token and $email";
try {
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'card'  => $token
    ));

    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $total_stripe_format,
        'currency' => 'usd',
        'description' => $description
    ));

} catch(Stripe_CardError $e) {
  $error1 = $e->getMessage();
} catch (Stripe_InvalidRequestError $e) {
  // Invalid parameters were supplied to Stripe's API
  $error2 = $e->getMessage();
} catch (Stripe_AuthenticationError $e) {
  // Authentication with Stripe's API failed
  $error3 = $e->getMessage();
} catch (Stripe_ApiConnectionError $e) {
  // Network communication with Stripe failed
  $error4 = $e->getMessage();
} catch (Stripe_Error $e) {
  // Display a very generic error to the user, and maybe send
  // yourself an email
  $error5 = $e->getMessage();
} catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
  $error6 = $e->getMessage();
}

if ($error1 || $error2 || $error3 || $error4 || $error5 || $error6)
{
	if($error1)
	    echo "<h2>" .$error1 . "</h2>";
	if($error2)
	    echo "<h2>" .$error2 . "</h2>";
	if($error3)
	    echo "<h2>" .$error3 . "</h2>";
	if($error4)
	    echo "<h2>" .$error4 . "</h2>";
	if($error5)
	    echo "<h2>" .$error5 . "</h2>";
	if($error6)
	    echo "<h2>" .$error6 . "</h2>";

    //header('Location: checkout.php');
    //wp_redirect('/');
    //exit();
}else{
    $postarr = array('post_title' => $token, 'post_content' => $email, 'post_type' => 'gif_orders');
if(!email_exists($email)){
    $password = wp_generate_password();
    $user_id = wp_create_user($email, $password, $email);
    $user_id = ($user_id) ? $user_id : '0' ;
  		$template = file_get_contents(get_template_directory_uri().'/email_templates/welcome.html');
		$template = str_replace("{{username}}",$email,$template);
		$template = str_replace("{{password}}",$password,$template);
		$headers = array('Content-Type: text/html; charset=UTF-8');
    	wp_mail($email, 'Welcome to GifGiftCard!', $template, $headers);
    }

      global $wpdb;
      $order_data = array('order_id' => $token,
                          'user_id' => $user_id,
                          'name' => $urname,
                          'email' => $email,
                          'receiver_email' => $remail,
                          'message' => $rmessage,
                          'amount' => $original_amount,
                          'receiver_name' => $rname,
                          'status' => 1,
                          'card' => $card,
                          'gif1' => $gif,
                          'gif2' => $gif2
                     );
     $wpdb->insert( 'gif_orders', $order_data );
  $template = file_get_contents(get_template_directory_uri().'/email_templates/reciver_email.html');
  $template = str_replace("{{rname}}",$rname,$template);
  $template = str_replace("{{remail}}",$remail,$template);
  $template = str_replace("{{card}}",$card,$template);
  $template = str_replace("{{gif1}}",$gif,$template);
  $template = str_replace("{{gif2}}",$gif2,$template);
  $template = str_replace("{{amount}}",$wp_session['gift_data']['amount'],$template);
  $template = str_replace("{{rmessage}}",$rmessage,$template);
  $template = str_replace("{{redemption}}",$redemption,$template);
  //$template = str_replace("{{claimcode}}",$claimcode,$template);
  $template = str_replace("{{card_disclaimer}}",$card_disclaimer,$template);
    $headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($remail, $urname .' just bought you a GifGiftCard', $template, $headers);

  $template = file_get_contents(get_template_directory_uri().'/email_templates/gift_email.html');
  $template = str_replace("{{urname}}",$urname,$template);
  $template = str_replace("{{token}}",$token,$template);
  $template = str_replace("{{reward_name}}",$wp_session['gift_data']['reward_name'],$template);
  $template = str_replace("{{remail}}",$remail,$template);
  $template = str_replace("{{card}}",$card,$template);
  $template = str_replace("{{gif1}}",$gif,$template);
  $template = str_replace("{{gif2}}",$gif2,$template);
  $template = str_replace("{{total_amount}}",$total_amount,$template);
  $template = str_replace("{{original_amount}}",$wp_session['gift_data']['amount'],$template);
  $template = str_replace("{{rmessage}}",$rmessage,$template);
  $template = str_replace("{{rname}}",$rname,$template);
  //$template = str_replace("{{rmessage}}",$rmessage,$template);
  //echo "<pre>"; print_r($template); die;
  $headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($email, 'GifGiftCard sent', $template, $headers);
    ?>

    <p>Successfully charged $<?php echo $total_amount;?></p>
	<header class="business-header">
        <div class="container">
            <div class="row">
             <img src="http://www.gifgiftcard.com/wp-content/uploads/gif/tenor.gif">
			 <div class="col-lg-12  text-center">
                    <h4>You just sent a GifGiftCard!</h4>
                    <h4>The happiest way to send a gift card</h4>
                    
                </div>
        </div>
    </header>
    <h1 class="id-success">Your Order is successfull, your order id is : <?php echo $token;?></h1>
     <?php  unset($wp_session['gift_data']); 
}
         ?>


<?php }else{
  echo "<h2>Session Expired<h2>";
  }
   unset($wp_session['gift_data']);
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
	
        document.getElementById('payment-error').innerHTML = response.error.message;
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




<?php get_footer(); ?>