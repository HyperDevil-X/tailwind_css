<?php
session_start();

// Generate random captcha code
$captcha_code = generateCaptchaCode(6); // Generate captcha code with 6 characters
$_SESSION['captcha_code'] = $captcha_code;

// Set content type header
header('Content-type: image/jpeg');

// Create image
$image = imagecreatetruecolor(120, 40);

// Set background color
$bg_color = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $bg_color);

// Set text color
$text_color = imagecolorallocate($image, 0, 0, 0);

// Add captcha text to image
imagestring($image, 5, 20, 10, $captcha_code, $text_color);

// Output image
imagejpeg($image);

// Destroy image to free up memory
imagedestroy($image);

// Function to generate random captcha code
function generateCaptchaCode($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captchaCode = '';
    for ($i = 0; $i < $length; $i++) {
        $captchaCode .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $captchaCode;
}
?>
