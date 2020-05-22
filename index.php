<?php
    echo "file";
    $handle = fopen("example_2.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $line = explode(" ", $line);
    }
    echo "<pre>";
    print_r($line);
    fclose($handle);
}
?>