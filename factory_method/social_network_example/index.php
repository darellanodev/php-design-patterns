<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Social Network Example</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
<pre><?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\FactoryMethod\SocialNetworkExample\FacebookPoster;
use App\FactoryMethod\SocialNetworkExample\LinkedInPoster;
use App\FactoryMethod\SocialNetworkExample\SocialNetworkPoster;

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */
function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));

?></pre>
</body>
</html>
