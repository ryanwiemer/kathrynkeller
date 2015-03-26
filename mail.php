<?php
    require_once('../../../wp-load.php');
    $to = get_option( 'admin_email' );
    $firstName =  sanitize_text_field( $_POST['firstName'] );
    $lastName =  sanitize_text_field( $_POST['lastName'] );
    $phoneNumber = sanitize_text_field( $_POST['phoneNumber'] );
    $subject = "Message from $firstName $lastName";
    $headers = "From: " . sanitize_email( $_POST["email"] ) . "\r\n";
    $headers .= "Reply-To: ". sanitize_email( $_POST["email"] ) . "\r\n";
    $body = esc_textarea( $_POST["message"] );

    $send = wp_mail($to, $subject, $body, $headers);
?>
