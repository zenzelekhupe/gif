<?php /* Template Name: Test Page */ ?>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

 ?>
<?php get_header();?>

<?php 
//require_once (get_template_directory().'/tangocard/src/Models/CreateOrderRequestModel.php');
//require_once get_template_directory()."/tangocard/vendor/autoload.php";
$platformName = 'GifGiftCard_Test'; // RaaS v2 API Platform Name
$platformKey = 'CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR'; // RaaS v2 API Platform Key


//$platformName = 'QAPlatform2'; // RaaS v2 API Platform Name
//$platformKey = 'apYPfT6HNONpDRUj3CLGWYt7gvIHONpDRUYPfT6Hj'; // RaaS v2 API Platform Key


$client = new RaaSV2Lib\RaaSV2Client($platformName, $platformKey);
$accounts = $client->getAccounts('shaanaksh999');
echo "<pre>";
 //print_r($accounts);

//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//$orderArray = array("accountIdentifier" => "shaanakshma", "amount" => "10", "customerIdentifier" => "shaanakshma",  "emailSubject" => "Create Order", "message" => "Testing For Order", "recipient" => array("email" => "shaanaksh999@gmail","firstName" => "shaan", "lastName" => "sunny"), "sendEmail" => "false", "sender" =>array("email" => "shaanaksh999@gmail.com", "firstName" => "shaan", "lastName" => "sunny"), "utid" => "U157189");

$orders = $client->getOrders();

$body = new RaaSV2Lib\Models\CreateOrderRequestModel('shaanaksh','10','shaanaku','true','U157189','','Account Test','','Order Amount Test','shaanaku@gmail.com','shaanaku@gmail.com','');
/* $body = new RaaSV2Lib\Models\CreateOrderRequestModel(array(
"accountIdentifier" => "shaanaksh999", "amount" => "10", "campaign" => "string", "customerIdentifier" => "shaanaksh999",
 "emailSubject" => "Create Order", "externalRefID" => "string", "message" => "Testing For Order","notes" => "string", 
 "recipient" => array("email" => "shaanaksh999@gmail","firstName" => "sunpreet","lastName" => "shaan"),"sendEmail" => "true",
 "sender" =>array("email" => "shaanaksh999@gmail.com","firstName" => "shaan",  "lastName" => "aku"), "utid" => "U157189")
 );
  */
 //Notice:  Undefined variable: resultorder in /var/www/html/wp-content/themes/gifgift/home-parts/testpage.php on line 59
      /*   $json = array();
        $json['accountIdentifier']  = 'shaanaksh999';
        $json['amount']             = '10';
        $json['customerIdentifier'] = 'shaanaksh999';
        $json['sendEmail']          = 'true';
        $json['utid']               = 'U157189';
        $json['campaign']           = '2';
        $json['emailSubject']       = 'Create Order';
        $json['externalRefID']      = '21';
        $json['message']            = 'Testing Order';
        $json['recipient']          = 'shaanaksh999@gmail.com';
        $json['sender']             = 'shaanaksh999@gmail.com';
        $json['notes']              = 'Again Testing email for order'; */
echo "<pre>"; print_r($body);
$resultorder = $orders->createOrder($body);

 echo "<pre>"; print_r($resultorder);
 //echo "<pre>"; print_r($json.'aaaaaaaaaaaaaa');
 
//Fatal error: require_once(): Failed opening required '../tangocard/src/Models/' (include_path='.:/usr/share/php') in /var/www/html/wp-content/themes/gifgift/home-parts/testpage.php on line 10
 
// Create Account Start------->

//$accounts = $client->getAccounts('sunpreetaksh');
/* 
$customerIdentifier = 'sunpreetaksh';
$body = new CreateAccountRequestModel();

$result6 = $accounts->createAccount($customerIdentifier, $body);

echo "<pre>";
print_r($result6);  */
// Create Account End -------->
 
 
 
 //Get All customer Start
$customers = $client->getCustomers();	
$customerIdentifier = 'shaanaksh999';

//$result1 = $customers->getCustomer($customerIdentifier);
$result1 = $customers->getAllCustomers(); // All Customers
echo "<pre>";
//print_r($result1);
// GET All customer End


// GET ALL Orders Start

$orders = $client->getOrders();
//echo "<pre>"; print_r($orders);
//GET ALL  Orders End



// GET Single Orders Start
$orders = $client->getOrders();
$referenceOrderID = 'RA170508-218-72';

$result2 = $orders->getOrder($referenceOrderID);
//echo "<pre>"; 
//print_r($result2).'<br/>';

print_r($result2->reward->redemptionInstructions);
//GET Single  Orders End


$exchangeRates = $client->getExchangeRates();

//print_r($exchangeRates);


// Account by customer Start
$customerIdentifier = 'shaanaksh999';

//$result = $accounts->getAccountsByCustomer($customerIdentifier); // Get Acccount By Customer
//echo "<pre>";
//print_r($result);
// Account by customer End



/* 
$customerIdentifier = 'shaanaksh999';

$results = $customers->getCustomer($customerIdentifier);
echo "<pre>";
print_r($results);  */

$accountIdentifier = 'shaanaksh999';
$collect['accountIdentifier'] = $accountIdentifier;

$customerIdentifier = 'shaanaksh999';
$collect['customerIdentifier'] = $customerIdentifier;

$externalRefID = 'externalRefID';
$collect['externalRefID'] = $externalRefID;

$startDate = date("D M d, Y G:i");
$collect['startDate'] = $startDate;

$endDate = date("D M d, Y G:i");
$collect['endDate'] = $endDate;

$elementsPerBlock = 134;
$collect['elementsPerBlock'] = $elementsPerBlock;

$page = 134;
$collect['page'] = $page;


$results = $orders->getOrders($collect);
echo "<pre>";
print_r($result4);

// Create Customer Start-------->

$customers = $client->getCustomers();
$customerIdentifier = 'sunpreetaksh';
$customer = $customers->getCustomer($customerIdentifier);
$body = new CreateCustomerRequestModel();

$result5 = $customer->createCustomer($body);
echo "<pre>";
print_r($result5);

// create Customer End----------->


/* $body = new CreateCustomerRequestModel();

$result7 = $customers->createCustomer($body);
echo "<pre>";
print_r($result7); */ 

/* $results = $customers->getAllCustomers();
echo "<pre>";
print_r($results); */


/* $catalog = $client->getCatalog();
$result = $catalog->getCatalog();
print_r($result); */
?>


<?php echo "<pre>"; print_r($result1);  ?>


<?php get_footer(); ?>