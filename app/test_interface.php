<html>
    <head>
        <title>Polygon</title>
</head>
<body>
<pre>

<?php 

if (!extension_loaded('curl')) {
    echo "curl not loaded\n";
    echo phpinfo(8);
    if (!dl('curl')) {
        exit;
    }
}
    $curl_handle=curl_init();
    curl_setopt($curl_handle, CURLOPT_URL,'https://api.polygon.io/v2/aggs/ticker/AAPL/range/1/day/2020-06-01/2020-06-17?apiKey=24J0bzesKqKDyFVWgOd1MhIPDb8pQTg_');
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'TrustScore');
    $query =curl_exec($curl_handle);
    
    curl_close($curl_handle);
    echo print_r(json_decode($query));
    //echo $query;
    //echo json_encode($query, JSON_PRETTY_PRINT);
?>
</pre>
</body>