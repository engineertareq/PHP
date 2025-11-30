<?php
$result = dns_get_record("engineertareq.com", DNS_ALL);
echo "<pre>";
print_r($result);
echo "</pre>";
?>