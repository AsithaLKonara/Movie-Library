<?php
header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// Retrieve form data
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$terms = isset($_POST['terms']) ? true : false;

// Validation
$errors = [];
if (empty($firstName)) $errors[] = 'First Name is required.';
if (empty($lastName)) $errors[] = 'Last Name is required.';
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid Email is required.';
if (empty($message)) $errors[] = 'Message is required.';
if (!$terms) $errors[] = 'You must agree to the Terms & Conditions.';

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => 'Validation failed.', 'errors' => $errors]);
    exit;
}

// Prepare data to save
$submission = [
    'date' => date('c'),
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'telephone' => $telephone,
    'message' => $message
];

// Save to Json file
$jsonFile = 'submissions.json';
$currentData = [];
if (file_exists($jsonFile)) {
    $currentData = json_decode(file_get_contents($jsonFile), true);
    if (!is_array($currentData)) $currentData = [];
}
$currentData[] = $submission;
file_put_contents($jsonFile, json_encode($currentData, JSON_PRETTY_PRINT));

// Send Emails
$adminEmails = 'dumidu.kodithuwakku@ebeyonds.com, prabhath.senadheera@ebeyonds.com';
$adminSubject = 'New Form Submission';
$adminMessage = "You have received a new submission:\n\n";
foreach ($submission as $key => $value) {
    $adminMessage .= ucfirst($key) . ": $value\n";
}

$userSubject = 'Thank you for your submission';
$userMessage = "Hi $firstName,\n\nThank you for reaching out! We have received your message and will get back to you shortly.\n\nBest,\nIT Hotels";

$headersAdmin = "From: noreply@ithotels.com";
$headersUser = "From: noreply@ithotels.com";

// Use @ to suppress errors if local mail server isn't configured
@mail($adminEmails, $adminSubject, $adminMessage, $headersAdmin);
@mail($email, $userSubject, $userMessage, $headersUser);

echo json_encode(['success' => true, 'message' => 'Form submitted successfully!']);
?>
