<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

if(isset($_REQUEST['calc']))
{
	$amount=$_REQUEST['amount'];
	
	
	$pay = $amount;
    
}


if(isset($_POST['submit']))
{
   
    $name = $_POST['propertyname'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $billingdate = $_POST['billingdate'] ?? '';
    $duedate = $_POST['duedate'] ?? '';
    $totalamount = $_POST['totalamount'] ?? '';
    $status = $_POST['status'] ?? '';
    
    // Setting session variables
    
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['billingdate'] = $billingdate;
    $_SESSION['duedate'] = $duedate;
    $_SESSION['totalamount'] = $totalamount;
    $_SESSION['status'] = $status;


    header("Location: success.php");
    exit();
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Css Link -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <title>Manjoor - Success</title>
</head>

<body>

<div id="page-wrapper">
    <div class="row"> 
        <?php include("include/header.php");?>
        
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center">Amount To Pay</h2>
                    </div>
                </div>
                <center>
                <table class="items-list col-lg-6 table-hover" style="border-collapse:inherit;">
                        <thead>
                             <tr  class="bg-secondary">
                                <th class="text-white font-weight-bolder">Term</th>
                                <th class="text-white font-weight-bolder">Amount</th>
                             </tr>
                        </thead>
                        <tbody>
						
						
                        

							
							<tr class="text-center">
                                <td><b>Total Amount</b></td>
                                <td><b><?php echo ''.$pay ; ?></b></td>
                            </tr>
						
							
                        </tbody>
                    </table> 
                </center>
            </div>
        </div>
        </div>
        <div class="full-row bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-secondary double-down-line text-center">Billing Details</h2>
                <form method="post" action="">
                

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
    <label for="phone">Billing Date:</label>
    <input type="date" class="form-control" id="billingdate" name="billingdate" required min="" max="">
</div>

                    <div class="form-group">
                        <label for="phone">Address:</label>
                        <input type="text" class="form-control" id="duedate" name="duedate" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Total Amount:</label><?php echo ''.$pay ; ?>
                        <input type="text" class="form-control" id="totalamount" name="totalamount" value="<?php echo ''.$pay ; ?>"required>
                    </div>

                    <div class="form-group">
   

                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-secondary" value="Proceed to Pay">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        <div class="full-row bg-light">
            
        
        <?php include("include/footer.php");
        ?>
        
        
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
    </div>
</div>

<!-- Js Link -->
<script src="js/jquery.min.js"></script> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>
