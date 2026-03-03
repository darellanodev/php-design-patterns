<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notification System Example</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
<p><a href="../../index.php">&larr; Back to main index</a></p>
<pre><?php

require_once __DIR__.'/../../src/FactoryMethod/NotificationSystem/Notification.php';
require_once __DIR__.'/../../src/FactoryMethod/NotificationSystem/EmailNotification.php';
require_once __DIR__.'/../../src/FactoryMethod/NotificationSystem/SMSNotification.php';
require_once __DIR__.'/../../src/FactoryMethod/NotificationSystem/PushNotification.php';
require_once __DIR__.'/../../src/FactoryMethod/NotificationSystem/NotificationCreator.php';
require_once __DIR__.'/../../src/FactoryMethod/NotificationSystem/EmailNotificationCreator.php';
require_once __DIR__.'/../../src/FactoryMethod/NotificationSystem/SMSNotificationCreator.php';
require_once __DIR__.'/../../src/FactoryMethod/NotificationSystem/PushNotificationCreator.php';

use FactoryMethod\NotificationSystem\EmailNotificationCreator;
use FactoryMethod\NotificationSystem\PushNotificationCreator;
use FactoryMethod\NotificationSystem\SMSNotificationCreator;

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
