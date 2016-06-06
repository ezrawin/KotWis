<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
	$email = $_POST['webs'];
    $message = $_POST['message'];
    $from = 'From: YourWebsite.com'; 
    $to = 'youremail@gmail.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Website: $webs\n Message:\n $message";
?>
 
<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Thank you for your email!</p>';
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>