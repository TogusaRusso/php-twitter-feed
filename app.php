<?php
use TwitterApp\Twitter;

require __DIR__ . '/vendor/autoload.php';
$twitter = new Twitter(
    getenv('TWITTER_KEY'),
    getenv('TWITTER_SECRET')
);

$twits = $twitter->fetchTwits('the_moviebob', 10);
var_dump($twits);