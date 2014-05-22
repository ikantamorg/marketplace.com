<?php

    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message'])) {
		$to  	 = 'poul.shumskiy@gmail.com, vellumweb@gmail.com, ikantam.com@gmail.com';
		$subject = 'Message from (marketplacephp.com) - ' . $_POST['fname'] . ' (' .$_POST['email']. ')';
		$message = $_POST['message'];
		$headers = "From: " . $_POST['email'] . "\r\n";
		
		//
		//
 
		$sent = mail($to, $subject, $message, $headers);
		
		if($sent) {
			echo '<h2 class="success">Your message has been sent!</h2>';
		} else {
			echo '<h2 class="error">Oops something goes wrong!</h2>';
		}
	}

  if(isset($_POST['urName']) && isset($_POST['emailA']) && isset($_POST['urMsg'])) {
		$sento  	 = 'poul.shumskiy@gmail.com, vellumweb@gmail.com, ikantam.com@gmail.com';
		$sender = 'Message from (marketplacephp.com) Contact Us Form - ' . $_POST['urName'] . ' (' .$_POST['emailA']. ')';
		$msg = $_POST['urMsg'];
		$title = "From: " . $_POST['emailA'] . "\r\n";
		
		//
		//

		$sending = mail($sento, $sender, $msg, $title);
		
		if($sending) {
			echo '<h2 class="success">Your message has been sent!</h2>';
		} else {
			echo '<h2 class="error">Oops something goes wrong!</h2>';
		}
	}


if (isset($_POST['email']) && !empty($_POST['action']) && $_POST['action'] == 'popup') {

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        print_r( array('result' => false, 'error' => 'Invalid email address. Please input your real email address.'));
        /*echo json_encode(
            array('result' => false, 'error' => 'Invalid email address. Please input your real email address.')
        );*/
        exit;
    }


    /*    // Create a service builder using a configuration file
        $aws = Aws::factory('./ses/config.json');

        // Get the client from the builder by namespace
        $client = $aws->get('Ses');
        //$_POST['email']

        $result = $client->verifyEmailAddress(array('EmailAddress' => $_POST['email']));*/

    require_once('includes/modules/db.php');
    $db = new Db();
    $result = $db->addSubscriber($_POST['email']);

    echo json_encode(array('result' => $result));
    exit;
}
?>

