<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretKey = "6Le-ePcqAAAAAL9rVw03dUx1l8AByoj7G5AZEQZl";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

    $response = file_get_contents($url);
    $response = json_decode($response);

    if ($response->success) {
        // CAPTCHA passed, handle form (e.g., save data, send email)
        header("Location: confirmation.html"); // Redirect to confirmation page
        exit();
    } else {
        echo "CAPTCHA verification failed. Please try again.";
    }
}
?>
