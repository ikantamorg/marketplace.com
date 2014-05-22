<?php
function url(){
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['HTTP_HOST'] . '/'
    );
}
?>

    <!DOCTYPE html>
<!--[if lt IE 9]><script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<!--[if IE 8 ]><html class="ie8"><![endif]-->
<html>
<head>
	<title>Etsy clone software affiliate program</title>
	<meta name="google-site-verification" content="yINKC1HicZWAdtt6aEgq7gRXaJO_aF_DMcgYZcn6k4E" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Join our affiliate program today and earn up to 30% commission by selling Etsy marketplace clone script.">
	<meta name="keywords" content="Etsy, marketplace, ASOS, affiliate" />
	<meta name="author" content="Marketplace LLC">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo url(); ?>css/master.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url(); ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url(); ?>css/bootstrap-responsive.css">
	<!-- css -->
	
	<!-- favicon -->
	<link rel="icon" type="image/png" href="/images/favicon.png">
	<!--/ favicon -->
</head>
<body>

<?php include 'includes/header.php'; ?>



<?php include 'includes/modules/affiliate-banner.php'; ?>
<?php include 'includes/modules/affiliate-cols.php'; ?>
<?php // include 'includes/modules/convenience.php'; ?>
<?php // include 'includes/modules/secondary-banner.php'; ?>
<?php // include 'includes/modules/features-bottom.php'; ?>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/overall/footer.php'; ?>