# Opencart v2.x APCU CACHING  
Upload the files on your website root folder (like public_html or httpdocs)  

version < 2.2.0  
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

version >= 2.2.0  
Edit the /system/config/default.php, find  

`// Cache  
$_['cache_type']           = 'file'; // apc, file or mem  
$_['cache_expire']         = 3600;  
`


change it to


`// Cache  

$_['cache_type']           = 'apcu'; // apc, file or mem  
$_['cache_expire']         = 3600;  
`
