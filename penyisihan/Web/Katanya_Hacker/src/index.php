<?php
if (!isset($_GET['query'])) {
    echo "No query provided!";
    exit;
}

$query = $_GET['query'];
$filtered_query = str_replace(' ', '', $query);
if (strpos($filtered_query, 'cat') !== false) {
    die("Malicious activity detected!");
}

$output = shell_exec($filtered_query);
echo "<pre>$output</pre>";
