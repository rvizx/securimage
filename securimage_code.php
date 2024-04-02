<?php
require_once dirname(__FILE__) . '/securimage.php';

$img = new Securimage();
if (!empty($_GET['namespace'])) {
    $img->setNamespace($_GET['namespace']);
}

// Retrieve the code from the CaptchaObject and echo it
$captchaObject = $img->getCode();
$captchaCode = $captchaObject->code;
echo $captchaCode;
