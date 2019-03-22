# Opencart v2.x APCU CACHING
Upload the files on your website root folder (like public_html or httpdocs)

Edit the index.php, find the
`
// Cache
$cache = new Cache('file');
`
and change it to

`
// Cache
$cache = new Cache('apcu');
`