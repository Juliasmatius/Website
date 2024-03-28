<link rel="stylesheet" href="/static/style/pages.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap">
<?php
$url = "https://c00eaa0f-943f-4b6b-b6ee-5b7de51f4b30-00-27nfej08x45xr.kirk.replit.dev/getposts-juli.php"; 
$content = file_get_contents($url);
if ($content !== false) {
    echo $content;
} else {
    echo "Failed to fetch content from the URL.";
}
?>
