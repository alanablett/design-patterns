<?php

require 'vendor/autoload.php';

$widgetFactory = new Pattern\Factory\SocialWidgetFactory;

$facebookWidget = $widgetFactory->build('facebook');
$facebookWidget->render();

$twitterWidget = $widgetFactory->build('twitter');
$twitterWidget->render();