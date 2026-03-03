<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notification System Example</title>
    <link rel="stylesheet" href="../../../css/styles.css">
</head>
<body>
<p><a href="../../../index.php">&larr; Back to main index</a></p>
<pre><?php

require_once __DIR__.'/../../../vendor/autoload.php';

use App\CreationalPatterns\FactoryMethod\NotificationSystem\EmailNotificationCreator;
use App\CreationalPatterns\FactoryMethod\NotificationSystem\PushNotificationCreator;
use App\CreationalPatterns\FactoryMethod\NotificationSystem\SMSNotificationCreator;

function sendNotification($creator)
{
    $creator->notify();
}

echo "Sending Email Notification:\n";
sendNotification(new EmailNotificationCreator());
echo "\n";

echo "Sending SMS Notification:\n";
sendNotification(new SMSNotificationCreator());
echo "\n";

echo "Sending Push Notification:\n";
sendNotification(new PushNotificationCreator());

?>
</pre>
</body>
</html>
