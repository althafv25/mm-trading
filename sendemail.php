<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: contact.php'); exit; }
$name = trim((string)($_POST['name'] ?? ''));
$email = filter_var(trim((string)($_POST['email'] ?? '')), FILTER_VALIDATE_EMAIL);
$phone = trim((string)($_POST['phone'] ?? ''));
$company = trim((string)($_POST['company'] ?? ''));
$interest = trim((string)($_POST['interest'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));
if ($name === '' || !$email || $message === '') { header('Location: contact.php?status=error'); exit; }
$recipient = 'info@mmtrading.example'; // Replace with the official MM Trading enquiry email.
$subject = 'MM Trading enquiry from ' . $name;
$body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nCompany: {$company}\nInterest: {$interest}\n\nMessage:\n{$message}";
$headers = "From: MM Trading website <{$recipient}>\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8\r\n";
if (@mail($recipient, $subject, $body, $headers)) { header('Location: contact.php?status=success'); } else { header('Location: contact.php?status=error'); }
exit;