<?php
//require_once './ses/aws/aws-autoloader.php';

//use Aws\Common\Aws;


function to_log($message, $data, $error = false)
{

    $file = 'log.log';

    $line = "---------------------------------------------\n";
    if ($error) {
        $line .= "ERROR: " . serialize($message) . "\n";
    } else {
        $line .= "SUCCESS: " . $message . "\n";
    }
    $line .= "Data: (" . implode('|', $data) . ")\n";

    file_put_contents($file, $line, FILE_APPEND);
}

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message'])) {
    $to = 'poul.shumskiy@gmail.com, vellumweb@gmail.com, qww911@mail.ru';
    $subject = 'Message from (repucaution.com) - ' . $_POST['fname'] . ' (' . $_POST['email'] . ')';
    $message = 'Message: '.$_POST['message']. "\r\n\r\n";
    $message .= 'Email: '. $_POST['email'];
    $headers = "From: " . $_POST['email'] . "\r\n";

    //
    //

    $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        echo '<h2 class="success">Your message has been sent successfully, we\'ll get back to you as soon as we can</h2>';
        to_log('Message sent', $_POST);
    } else {
        echo '<h2 class="error">Oops something goes wrong!</h2>';
        to_log(error_get_last(), $_POST, true);
    }
}

if (isset($_POST['urName']) && isset($_POST['emailAddress']) && isset($_POST['urMsg'])) {
    $sento = 'poul.shumskiy@gmail.com, vellumweb@gmail.com, qww911@mail.ru';
    $title = 'Message from (repucaution.com) Contact Us Form - ' . $_POST['urName'] . ' (' . $_POST['emailAddress'] . ')';
    $msg = $_POST['urMsg'];
    $headers = 'From: ' . $_POST['emailAddress'] . "\r\n" . 'Reply-To:' . $_POST['emailAddress'] . "\r\n" . 'X-Mailer: PHP/' . phpversion(
        );


    $sending = mail($sento, $title, $msg, $headers);

    if ($sending) {
        echo '<h2 class="success">Your message has been sent successfully, we\'ll get back to you as soon as we can</h2>';
        to_log('Message sent', $_POST);
    } else {
        echo '<h2 class="error">Oops something goes wrong!</h2>';
        to_log(error_get_last(), $_POST, true);
    }
}
//check is subscribe
if (isset($_POST['subscribe'])) {
    $storeKey = 'subscribe_popup_shown';

    session_start();

    //if(!isset($_SESSION[$storeKey]) && !isset($_COOKIE[$storeKey])){
    if (!isset($_COOKIE[$storeKey])) {
        $result = true;

        $period = 60 * 60 * 24 * 3; //3 days

        setcookie($storeKey,true, time()+$period);
    } else {
        $result = false;
    }

    $template = file_get_contents('includes/modules/templ_popup.php');

    echo json_encode(array('remind' => $result, 'template' => $template));
    exit;


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

    $redirectUrl = 'http://ec2-23-21-183-240.compute-1.amazonaws.com/gp';
    echo json_encode(array('result' => $result, 'url' => $redirectUrl));
    exit;
}