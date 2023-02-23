<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Define the path to the file in your GitHub repository
$file_path = "path/to/your/file.txt";

// Open the file for writing
$file = fopen($file_path, 'a');

// Write the data to the file
fwrite($file, "Name: " . $name . "\n");
fwrite($file, "Email: " . $email . "\n");
fwrite($file, "Message: " . $message . "\n\n");

// Close the file
fclose($file);

// Return a success message
echo "Data saved successfully!";
?>
