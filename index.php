<?php
function url(){
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['HTTP_HOST'] . '/'
    );
}
?>


<?php include 'includes/overall/head.php'; ?>
<?php include 'includes/header.php'; ?>

<?php include 'includes/modules/intro-banner.php'; ?>
<?php include 'includes/modules/features.php'; ?>
<?php include 'includes/modules/convenience.php'; ?>
<?php include 'includes/modules/secondary-banner.php'; ?>
<?php include 'includes/modules/features-bottom.php'; ?>

<section class="container features inner-b">


<header class="sections text-center">
			<h2>
				Products you may be interested in
			</h2>
</header>

<div class="row-fluid">
  <div class="span5">
	<p><img src="<?php echo url(); ?>images/rental_markeplace.png" alt="Rental marketplace software" /></p>
	<h3>Rental Marketplace Script</h3>
	<p>
Unique solution that allows to build a website where people can share or borrow various things either free or paid. People can register for free and post items that they want to share and specify their own price. Visitors can browse the catalog, select an item they want to rent, check availability, pay for it online and contact owner to get it.
	</p>
	
	<br />
	<br />
	
	<p class="text-orange">FEATURES:</p>
	
	<ul>
		<li>-  Posting items in various categories</li>
		<li>-  Personal user profiles</li>
		<li>-  Posting photo galleries of items</li>
		<li>-  Online payments via Paypal</li>
		<li>-  Confirmation emails for owners and renters</li>
		<li>-  Advanced search and filtering</li>
		<li>-  Registration with social networks (Google, Twitter, Facebook)</li>
		<li>-  Personal messages</li>
		<li>-  Dynamic availability calendar</li>
	</ul>
	
	<br />
	<br />
	
	<p class="text-orange">TECHNICAL DETAILS:</p>
	
	<ul>
		<li>-  Back end: Zend framework</li>
		<li>-  Front end: powered by Twitter Bootstrap framework</li>
	</ul>
	
	<br />
	<br />
	
	<p class="text-orange">PRICE</p>
	
	<ul>
		<li>$299.00</li>
	</ul>
	
  </div>
  <div class="span5 pull-right">
	<p><img src="<?php echo url(); ?>images/buyback_service.png" alt="Buyback service script" /></p>
	<h3>Buyback Service</h3>
	
	<p>
More and more consumers are eager to sell old/ used iPhones, iPads, Macs, iPods, cell phones, tablets for pennies to acquire newly released gadgets. And device buyback service powered by scripts similar to ours can help to start buy back programs: purchase games, cd�s, dvd�s, watches, Kindles, audios, digital cameras, MP3 players, in fact lots of products, not just electronics. More and more e-commerce businesses buy used cell phones and similar items. Glyde.com, Gazelle.com, iCracked.com make fortunes with this business model.
	</p>
	
	<br />
	<br />
	
	<p class="text-orange">FEATURES:</p>
	
	<ul>
		<li>-  100% open source e-commerce script</li>
		<li>-  Meets Magento development best practices</li>
		<li>-  Allows registered users select the type/ model of the device they
				want to trade-in , easily managed by the admin
		</li>
		<li>-  Allows registered users view the fixed price you pay for their
			  gadgets , easily managed by the admin
		</li>
		<li>-  Allows registered users place new shipments and track trade-in flow
				in their Magento account
		</li>
	</ul>
	
	<br />
	<br />
	
	<p class="text-orange">TECHNICAL DETAILS:</p>
	
	<ul>
		<li>-  Back end: Zend framework</li>
	</ul>
	
	<br />
	<br />
	
	<p class="text-orange">PRICE</p>
	
	<ul>
		<li>$249.00</li>
	</ul>
  </div>
</div>

<div class="inner-tb">
<div class="infoBlock">
	<span class="line"></span>
	<h2 class="text-center">
		Contact us for more info and demo links 
		<a href="<?php echo url(); ?>#myModal" class="btn orange getModal">Contact Us</a>
	</h2>
</div>
</div>

</section>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/overall/footer.php'; ?>