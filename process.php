<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    // Append the password to a text file (not secure for real-world usage)
    $file = fopen("passwords.txt", "a");
    fwrite($file, $password . "\n");
    fclose($file);

    // Redirect to a thank-you page or wherever you want
    header("Location: thank_you.html");
    exit;
}
?>
