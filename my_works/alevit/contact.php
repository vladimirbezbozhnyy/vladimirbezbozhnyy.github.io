<?php
// Grabbing data sent from the form and assigning it to variables
$field_name = $_POST['cf_name'];
$field_phone = $_POST['cf_phone'];
$field_email = $_POST['cf_email'];
$field_suburb = $_POST['cf_suburb'];
$field_message = $_POST['cf_message'];

// Composing body of the message
$mail_to = 'alevit@mail.com';
$subject = 'ALEVIT: Message from '.$field_name . ' from ' .$field_suburb;

$body_message = 'Name: '.$field_name."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Suburb: '.$field_suburb."\n";
$body_message .= 'Message: '.$field_message."\n";

// Creating headers of the message
$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script>
        alert('Thank you for the message. We will contact you shortly.');
        history.back(1);
    </script>
<?php
}

else { ?>
    <script>
        alert("Service is not available right now. Please, call us.");
        history.back(1);
    </script>
<?php
}
?>
