<?php

// Google RSS feed URL
$rssFeedUrl = 'https://news.google.com/rss/articles/CBMiNmh0dHBzOi8vd3d3LnRoZXZlcmdlLmNvbS8yNDEyNjUwMi9odW1hbmUtYWktcGluLXJldmlld9IBAA?oc=5';

// Function to fetch and parse RSS feed
function parseRSSFeed($feedUrl) {
    $rss = simplexml_load_file($feedUrl);

    if (!$rss) {
        echo "Failed to load RSS feed.";
        return [];
    }

    $articles = [];

    foreach ($rss->channel->item as $item) {
        $articleUrl = (string) $item->link;
        $articles[] = $articleUrl;
    }

    return $articles;
}

// Parse the RSS feed and get the article URLs
$articleUrls = parseRSSFeed($rssFeedUrl);

// Output the extracted article URLs
echo "Extracted Article URLs:<br>";
foreach ($articleUrls as $url) {
    echo "<a href='$url' target='_blank'>$url</a><br>";
}

?>
