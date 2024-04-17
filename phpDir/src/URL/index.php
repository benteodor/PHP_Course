<?php
// Set your API key
$api_key = "15|cNdgmYKSpK1B4G6j7aoH26POQoRCiDe1T0PM0Xj501d75a0c";

// Function to shorten URL using unelma.io API
function shortenURL($long_url, $api_key) {
    $url = "https://api.unelma.io/v1/url/shorten";

    // Prepare POST data
    $data = array(
        "url" => $long_url,
        "api_key" => $api_key
    );

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Decode JSON response
    $result = json_decode($response, true);

    // Check if response contains short URL
    if (isset($result['short_url'])) {
        return $result['short_url'];
    } else {
        return "Error occurred while shortening URL.";
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the long URL from the form
    $long_url = $_POST["long_url"];

    // Shorten the URL
    $short_url = shortenURL($long_url, $api_key);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
</head>
<body>
    <h1>URL Shortener</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="long_url">Enter Long URL:</label><br>
        <input type="text" id="long_url" name="long_url" required><br><br>
        <input type="submit" value="Shorten">
    </form>
    <?php
    // Display the shortened URL if available
    if (isset($short_url)) {
        echo "<p>Shortened URL: <a href=\"$short_url\" target=\"_blank\">$short_url</a></p>";
    }
    ?>
</body>
</html>
