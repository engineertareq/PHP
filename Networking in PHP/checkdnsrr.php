<?php
$domain = "engineertareq.com";
$recordexists =  checkdnsrr($domain, "ANY");
if ($recordexists) {
    echo "DNS records exist for $domain.";
} else {
    echo "No DNS records found for $domain.";
}
?>