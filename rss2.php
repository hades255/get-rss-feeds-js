<?php
$url = 'https://wordpress.com/blog/feed/';


// $wp = false;
// $headers = get_headers($originalSiteUrl . '/wp-admin');
// print_r($headers[0]);
// if (strpos($headers[0], '200')) {
//     $wp = true;
// } else if (strpos($headers[0], '301')) {
//     $htmlContent = file_get_contents($originalSiteUrl);
//     if (strpos($htmlContent, '/wp-content/') !== false || strpos($htmlContent, 'WordPress') !== false) {
//         $wp = true;
//     }
// }

$feed_url = $url;

$rss_xml = simplexml_load_file($feed_url);

$xml = $rss_xml;

$xml->registerXPathNamespace('media', 'http://search.yahoo.com/mrss/');

$mediaThumbnail = $xml->xpath('//media:thumbnail/@url');

$i=0;
foreach ($xml->channel->item as$item) {
    echo $key;
    echo (string)$mediaThumbnail[$i];
    $i++;
    // print_r ((string)$item->children('media', true)->thumbnail['url']);
    echo '<br/>';
}
