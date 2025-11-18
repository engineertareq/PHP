<!-- word boundary -->
<?php
$line="vim is the gretest word processor ever created! oh vim how I love thee!";
if(preg_match("/\bvim\b/i", $line, $match)) print "Match Found!";
print_r($match);
?>
<!-- without boundary -->
<?php
$line="vim is the gretest word processor ever created! oh vim how I love thee!";
if(preg_match("/\vim\b/i", $line, $match)) print "Match Found!";
print_r($match);
?>
<!-- all match -->
<?php
$line="vim is the gretest word processor ever created! oh vim how I love thee! vim";
if(preg_match_all("/\bvim\b/i", $line, $match)) print "Match Found!";
print_r($match);
?>
