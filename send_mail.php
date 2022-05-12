<?php
require("sendmail/sendgrid-php.php");
//require 'sendmail/vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases
$SENDGRID_API_KEY = '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';

$data = file_get_contents('php://input');
$json = json_decode($data, true);
$phone = $json['phone'];
$name = $json['name'];
$mail = $json['email'];
$item = $json['item'];
$price = $json['price'];
$comments = $json['comments'];

$email = new \SendGrid\Mail\Mail();
$email->setFrom("site@belvebleasing.by", "Сайт БелВЭБлизинг");
$email->setSubject("Заявка с сайта");
$email->addTo("zakaz@belvebleasing.by", "БелВЭБлизинг");
$email->addContent("text/plain", "Имя: ".$name);
$email->addContent(
    "text/html", "
    <strong>Имя: ".$name."</strong><br>
    <strong>Телефон: ".$phone."</strong><br>
    <strong>Email: ".$mail."</strong><br>
    <strong>Предмет: ".$item."</strong<br>
    <strong>Цена: ".$price." BYN</strong><br>
    <strong>Комментарии: ".$comments."</strong>
    "
);
$sendgrid = new \SendGrid($SENDGRID_API_KEY);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
