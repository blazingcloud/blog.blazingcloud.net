<?php
/*
Twitter Feed
*/
?>


<?php
function get_status($twitter_id, $hyperlinks = true) {
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, "http://twitter.com/statuses/user_timeline/$twitter_id.xml?count=1");
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $src = curl_exec($c);
    curl_close($c);
    preg_match('/<text>(.*)<\/text>/', $src, $m);
    $status = htmlentities($m[1]);
    if( $hyperlinks ) $status = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a href=\"\\0\">\\0</a>", $status);
    return($status);
}
?>