<?php

function dump_die($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die(); // ignore every code after this die()
}

function urlIs($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}

function loadEnvVar()
{
    // Path to your .env file
    $envFilePath = '.env';

    // Check if the .env file exists
    if (file_exists($envFilePath)) {
        // Read the .env file line by line
        $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if ($lines !== false) {
            foreach ($lines as $line) {
                $key = '';
                $value = '';
                // Split each line into a key and value using the '=' delimiter
                list($key, $value) = explode('=', $line, 2);

                // Trim any whitespace from the key and value
                $key = trim($key);
                $value = trim($value);

                // Set the environment variable in the $_ENV array
                $_ENV[$key] = $value;

                // You can also set them in $_SERVER if you want
                // $_SERVER[$key] = $value;
            }
        } else {
            // Handle the case where the file couldn't be read
            die('.env file could not be read.');
        }
    } else {
        // Handle the case where the .env file doesn't exist
        die('.env file not found.');
    }
}
