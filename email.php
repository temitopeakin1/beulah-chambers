<?php
/**
 * Handles both Contact form and Free Evaluation form submissions.
 * Uses PHP mail() – no PHPMailer required.
 * For SMTP (e.g. Gmail, your domain), install PHPMailer via Composer and switch to it.
 */

$to = 'info@beulahchambers.org';
$sent = false;
$error = null;
$subject = null;
$body = null;
$email = '';
$name = '';

// Free Evaluation form (modal)
if (!empty($_POST['form_type']) && $_POST['form_type'] === 'evaluation') {
    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'])) : '';
    $practice_area = isset($_POST['practice_area']) ? trim(htmlspecialchars($_POST['practice_area'])) : '';
    $matter = isset($_POST['matter_description']) ? trim(htmlspecialchars($_POST['matter_description'])) : '';
    $contact_method = isset($_POST['contact_method']) ? trim(htmlspecialchars($_POST['contact_method'])) : '';

    $subject = 'Free Case Evaluation Request – Beulah Chambers';
    $body = "Free Case Evaluation submitted via website\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Practice area: $practice_area\n";
    $body .= "Preferred contact: $contact_method\n\n";
    $body .= "Description of matter:\n$matter\n";
}
// Contact form (contact page)
elseif (isset($_POST['send']) || isset($_POST['msg'])) {
    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'])) : '';
    $msg = isset($_POST['msg']) ? trim(htmlspecialchars($_POST['msg'])) : '';

    $subject = 'Contact Form – Beulah Chambers';
    $body = "Contact form submitted via website\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$msg\n";
}
else {
    // No recognised form submitted
}

if ($subject !== null && $body !== null && $email !== '') {
    $headers = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/plain; charset=UTF-8';
    $headers[] = 'From: ' . $name . ' <' . $email . '>';
    $headers[] = 'Reply-To: ' . $email;

    $sent = @mail($to, $subject, $body, implode("\r\n", $headers));
    if (!$sent) {
        $error = 'Mail could not be sent. Please check server mail configuration or use the contact details below.';
    }
}

// Redirect or show result
if ($sent) {
    header('Location: response.php');
    exit;
}

// If we get here, either no form was submitted or mail failed
if ($error) {
    header('Location: contact.php?mail=error');
    exit;
}
header('Location: contact.php');
exit;
