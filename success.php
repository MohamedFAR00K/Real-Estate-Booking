<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
if(isset($_REQUEST['calc']))
{
	$amount=$_REQUEST['amount'];
	
	
	$totalamount = $amount;
	
}

if ( !isset($_SESSION['name']) || !isset($_SESSION['email']) || !isset($_SESSION['phone']) || !isset($_SESSION['billingdate']) || !isset($_SESSION['duedate']) || !isset($_SESSION['totalamount']) || !isset($_SESSION['status'])) {
    header("Location: index.php"); 
    exit();
}

$name = htmlspecialchars($_SESSION['name']);
$email = htmlspecialchars($_SESSION['email']);
$phone = htmlspecialchars($_SESSION['phone']);
$billingdate = htmlspecialchars($_SESSION['billingdate']);
$duedate = htmlspecialchars($_SESSION['duedate']);
$totalamount = htmlspecialchars($_SESSION['totalamount']);
$status = htmlspecialchars($_SESSION['status']);


unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['billingdate']);
unset($_SESSION['duedate']);
unset($_SESSION['totalamount']);
unset($_SESSION['status']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manjoor - Success</title>

    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    
    <link rel="stylesheet" type="text/css" href="css/style.css">

    
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_PAYPAL_CLIENT_ID"></script>
</head>

<body>

<div id="page-wrapper">
    <div class="row">
      
        <?php include("include/header.php"); ?>

        <div class="full-row bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="success-container">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            
                            
                            <div class="billing-details">
                                <h2>Billing Details</h2>
                                
	               <p><strong>Name:</strong> <?php echo $name; ?></p>
                                <p><strong>Email:</strong> <?php echo $email; ?></p>
                                <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                                <p><strong>Billing Date:</strong> <?php echo $billingdate; ?></p>
                                <p><strong>Due Date:</strong> <?php echo $duedate; ?></p>
                                <p><strong>Total Amount:</strong> <?php echo $totalamount; ?> INR</p>
                                
                            </div>
                            
                            
                            <button id="upiPaymentBtn" class="btn btn-primary">Pay with UPI</button>
                            <div id="paypal-button-container"></div>
                            <button id="mastercardPaymentBtn" class="btn btn-info">Pay with Mastercard</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <?php include("include/footer.php"); ?>

        
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/custom.js"></script>

<script>
    document.getElementById('upiPaymentBtn').addEventListener('click', function() {
        
    });

   
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?php echo $totalamount; ?>'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container');

    document.getElementById('mastercardPaymentBtn').addEventListener('click', function() {
        
        window.location.href = 'YOUR_MASTERCARD_PAYMENT_URL';
    });
</script>

</body>

</html>
