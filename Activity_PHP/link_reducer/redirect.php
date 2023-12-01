<?php
if (isset($_GET['key'])) {
    $key = $_GET['key'];

    $links = file_get_contents('links.json');
    $links = json_decode($links, true);

    if (array_key_exists($key, $links)) {
        $original_url = $links[$key];
        header("Location: $original_url");
        exit();
    } else {
        echo "Invalid URL key.";
    }
} else {
    echo "Key parameter is missing.";
}
?>
