<?php
//include_once('Connection.php');
session_start();
include_once('OAuth.php');

//pesapal params
$token = $params = NULL;

/*
Current value for consumer key and consumer secret setup are for the test demo merchant account.
Change this to on live site to appropriate merchant details.
 * Your PesaPal Consumer Key is: ckq45FFydt88gYI6PXO7ZMFuQIXP+PSn
Your PesaPal Consumer Secret is: n2zzpVtlxMXIueaHwCx2Bd3DgBk=
*/
$consumer_key = 'ckq45FFydt88gYI6PXO7ZMFuQIXP+PSn';//demo merchant key
$consumer_secret = 'n2zzpVtlxMXIueaHwCx2Bd3DgBk=';//demo merchant secret
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframelink = 'https://www.pesapal.com/api/PostPesapalDirectOrderV2';

//get form details
$amount = $_POST['amount'];
$amount = number_format($amount, 2);//format amount to 2 decimal places

$desc = $_POST['description'];
$type = $_POST['type']; //default value = MERCHANT
$reference = $_POST['reference'];//unique order id of the transaction, generated by merchant
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $email; //same as email



//update the database
	
	
	//$updateDB = mysql_query("UPDATE `heritagehousingagency`.`room` SET `Vacancy` = '1' WHERE `room`.`R_ID` = '$R_ID';");

$phonenumber = '';//leave blank
$payment_method = '';//leave blank
$code = '';//leave blank

$callback_url = 'http://localhost/pay/home.php'; //redirect url, the page that will handle the response from pesapal.

$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Code=\"".$code."\" Type=\"".$type."\" PaymentMethod=\"".$payment_method."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" UserName=\"".$username."\" xmlns=\"http://www.pesapal.com\" />";
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);

//display pesapal - iframe and pass iframe_src
?>
<iframe src="<?php echo $iframe_src;?>" width="100%" height="620px"  scrolling="no" frameBorder="0">
	<p>Browser unable to load iFrame</p>
</iframe>